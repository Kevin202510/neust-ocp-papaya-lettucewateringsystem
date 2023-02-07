$(document).ready(function(){
  table();
  showHumidityChart();

  setInterval(function(){
    table();
    }, 10000);
    
});

$("#searchData").keyup(function(){
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("searchData");
  filter = input.value.toUpperCase();
  table = document.getElementById("table-main");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
      } else {
          tr[i].style.display = "none";
      }
      }
  }
});

var humidityLabel = [];
var humidityData = [];
var myHumidityChart;

$("#generateReport").click(function(){

  $.ajax({
    type: "GET",
    url: "export-humidity",
    dataType: "json",
    encode: true,
    success: function(data)
    {
      swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Your work has been saved",
                    showConfirmButton: false,
                    timer: 1500,
                    footer: "<a href>InnovaTech</a>",
                });
    }
  });
  //   let daterange = {
  //     daterange: $("#daterange").val(),
  //   }

  //   $.ajax({
  //     type: "POST",
  //     url: "export-temperature",
  //     data: daterange, // serializes the form's elements.
  //     dataType: "json",
  //     encode: true,
  //     success: function(data)
  //     {
  //         swal.fire({
  //             position: "top-end",
  //             icon: "success",
  //             title: "Your work has been saved",
  //             showConfirmButton: false,
  //             timer: 1500,
  //             footer: "<a href>InnovaTech</a>",
  //         });
  //     }
  // });
});

function table(){
    $.ajax({
      url: 'api/humidities/getNewVal',
      type: 'GET',
      dataType: 'json',
      success: function (data){
        if(data.length>1){
          var html = '';
          var state='';
          $.each (data, function (bb) {
                  if(data[bb].status==0){
                      state = "badge-danger";
                  }else if(data[bb].status==1){
                    state = "badge-success";
                  }else if(data[bb].status==2){
                    state = "badge-warning";
                  }
                  html += '<tr><td class="text-break">' + data[bb].humidity + ' %</td><td class="text-break"><div class="badge '+state+'">' + data[bb].statusName + '</div></td><td class="text-break">' + data[bb].date + '</td><td class="text-break">' + data[bb].time + '</td></tr>'
              });
              $('#table-main').html(html);
            }else{
              $('#table-main').html('<tr><td colspan="5"><center>NO AVAILABLE DATA<center></td></tr>');
            }
      }
    });

    $.ajax({
      type: "GET",
      url: "api/sensorsconfigurations",
      dataType: "json",
      encode: true,
      success: function(data)
      {

          // console.log(datas[0].temperatureSensorMinVal);
          $("#success").text(data[0].humiditylimitval + " % above is Good Humidity");
          $("#warning").text(data[0].humiditylimitval + " % below is Low Humidity");
          $("#danger").text(data[0].humiditymaxval + " % above is High Humidity");

          if(data[0].humiditystatusval==0){
            // myTemperatureChart.destroy();
            // showTemperatureChart();
            myHumidityChart.reset();
            myHumidityChart.data.labels.pop();
            myHumidityChart.data.datasets[0].data = [];
            myHumidityChart.update();
            $("#humiditystat").html('<div class="badge badge-secondary">Sensor is OFF</div>');
          }else{
            fetchHumidity();
          }

      }
  });

}

function fetchHumidity(){
  $.ajax({
    url: 'api/humidities/getNewVal',
    type: 'GET',
    dataType: 'json',
    success: function (data){
      humidityLabel = [];
      humidityData = [];
      
      var newdata = data.reverse();
        $.each (newdata, function (bb) {
          humidityLabel.push(newdata[bb].humidity + " %");
          humidityData.push(newdata[bb].humidity);
          if(data.length-1==bb){
            if(data[bb].status == 0){
              $("#humiditystat").html('<div class="badge badge-danger">'+data[bb].statusName+'</div>');
            }else if(data[bb].status == 1){
              $("#humiditystat").html('<div class="badge badge-success">'+data[bb].statusName+'</div>');
            }else{
              $("#humiditystat").html('<div class="badge badge-warning">'+data[bb].statusName+'</div>');
            }
          }
          });    
        showHumidityChart();
    }
  })
}

"use strict";

function showHumidityChart(){
  var ctx = document.getElementById("humidityChart").getContext('2d');
  myHumidityChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: humidityLabel,
      datasets: [{
        label: 'Humidity',
        data: humidityData,
        borderWidth: 2,
        backgroundColor: '#f27e1f',
        borderColor: '#bd833c',
        borderWidth: 2.5,
        pointBackgroundColor: '#ffffff',
        pointRadius: 4
      }]
    },
    options: {
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          gridLines: {
            drawBorder: false,
            color: '#f2f2f2',
          },
          ticks: {
            beginAtZero: true,
          }
        }],
        xAxes: [{
          ticks: {
            display: false
          },
          gridLines: {
            display: false
          }
        }]
      },
    }
  });
  }