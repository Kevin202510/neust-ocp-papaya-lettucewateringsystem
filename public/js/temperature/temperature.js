$(document).ready(function(){
  showTemperatureChart();
    table();

    setInterval(function(){
      table();
      }, 10000);

    datePickerId.max = new Date().toISOString().split("T")[0];
});

$("body").on("click", ".btn-generate", async (e) =>
    $("#generateReport").modal("show")
);

$("#datePickerId").focusout(function(){
  
  console.log($("#datePickerId").val());
  datePickerId2.min = new Date($("#datePickerId").val()).toISOString().split("T")[0];

});

$("#generateReportss").click(function(){

  var formData = {
    datef: $("#datePickerId").val(),
    datet: $("#datePickerId2").val(),
  };

  $.ajax({
    type: "POST",
    url: "api/exporttemperature/generatereport",
    data: formData, // serializes the form's elements.
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

$(function() {
  $('input[name="daterange"]').daterangepicker({
    maxDate: $.now(),
    opens: 'left'
  }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  });
});

var temperatureLabel = [];
var temperatureData = [];
var myTemperatureChart; 

function table(){
    $.ajax({
      url: 'api/temperatures/getNewVal',
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
                html += '<tr><td class="text-break">' + data[bb].temperature + ' °C</td><td class="text-break"><div class="badge '+state+'">' + data[bb].statusName + '</div></td><td class="text-break">' + data[bb].date + '</td><td class="text-break">' + data[bb].time + '</td></tr>'
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
      success: function(datas)
      {
        // console.log(datas[0].temperatureSensorMinVal);
          $("#success").text(datas[0].temperatureSensorMinVal + " °C above is Good Temperature");
          $("#warning").text(datas[0].temperatureSensorMinVal + " °C below is Low Temperature");
          $("#danger").text(datas[0].temperatureSensorMaxVal + " °C above is High Temperature");

          if(datas[0].temperaturestatusval==0){
            // myTemperatureChart.destroy();
            // showTemperatureChart();
            myTemperatureChart.reset();
            myTemperatureChart.data.labels.pop();
            myTemperatureChart.data.datasets[0].data = [];
            myTemperatureChart.update();
            $("#tempstat").html('<div class="badge badge-secondary">Sensor is OFF</div>');
          }else{
            fetchTemperature();
          }
      }
    });

}

function fetchTemperature(){
  $.ajax({
    url: 'api/temperatures/getNewVal',
    type: 'GET',
    dataType: 'json',
    success: function (data){
      temperatureLabel = [];
      temperatureData = [];
      
      var newdata = data.reverse();
        $.each (newdata, function (bb) {
              temperatureLabel.push(newdata[bb].temperature + "°C");
              temperatureData.push(newdata[bb].temperature);
              if(data.length-1==bb){
                showTemperatureChart();
                if(data[bb].status == 0){
                  $("#tempstat").html('<div class="badge badge-danger">'+data[bb].statusName+'</div>');
                }else if(data[bb].status == 1){
                  $("#tempstat").html('<div class="badge badge-success">'+data[bb].statusName+'</div>');
                }else{
                  $("#tempstat").html('<div class="badge badge-warning">'+data[bb].statusName+'</div>');
                }
              }
              
          });   
    }
  });
}



"use strict";

function showTemperatureChart(){
  var ctx = document.getElementById("temperatureChart").getContext('2d');
  myTemperatureChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: temperatureLabel,
      datasets: [{
        label: 'Temperature',
        data: temperatureData,
        borderWidth: 2,
        backgroundColor: '#f5f184',
        borderColor: '#aba50c',
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