$(document).ready(function () {
    table();
    showWaterqualityChart();

    setInterval(function () {
        table();
    }, 10000);
});

var waterqualityLabel = [];
var waterqualityData = [];
var waterqualityChart;

function table() {
    $.ajax({
        url: "api/waterqualities/getNewVal",
        type: "GET",
        dataType: "json",
        success: function (data) {
            if (data.length > 1) {
                var html = "";
                var state = "";
                $.each(data, function (bb) {
                    if (data[bb].status == 0) {
                        state = "badge-danger";
                    } else if (data[bb].status == 1) {
                        state = "badge-success";
                    } else if (data[bb].status == 2) {
                        state = "badge-warning";
                    }
                    html +=
                        '<tr><td class="text-break">' +
                        data[bb].phvalue +
                        ' ppm</td><td class="text-break"><div class="badge ' +
                        state +
                        '">' +
                        data[bb].statusName +
                        '</div></td><td class="text-break">' +
                        data[bb].date +
                        '</td><td class="text-break">' +
                        data[bb].time +
                        "</td></tr>";
                });
                $("#table-main").html(html);
            } else {
                $("#table-main").html(
                    '<tr><td colspan="5"><center>NO AVAILABLE DATA<center></td></tr>'
                );
            }
        },
    });

    $.ajax({
        type: "GET",
        url: "api/sensorsconfigurations",
        dataType: "json",
        encode: true,
        success: function (data) {
            $("#success").text(
                data[0].co2limitval + " ppm above Good Co2 Concentration"
            );
            $("#warning").text(
                data[0].co2limitval + " ppm below is Fair Co2 Concentration"
            );
            $("#danger").text(
                data[0].co2maxval + " ppm above is High Co2 Concentration"
            );

            if (data[0].co2statusval == 0) {
                waterqualityChart.reset();
                waterqualityChart.data.labels.pop();
                waterqualityChart.data.datasets[0].data = [];
                waterqualityChart.update();
                $("#waterqualitystat").html(
                    '<div class="badge badge-secondary">Sensor is OFF</div>'
                );
            } else {
                fetchWaterQuality();
            }
        },
    });
}

$("#searchData").keyup(function () {
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

$("#generateReport").click(function () {
    $.ajax({
        type: "GET",
        url: "export-carbondioxide",
        dataType: "json",
        encode: true,
        success: function (data) {
            swal.fire({
                position: "top-end",
                icon: "success",
                title: "Your work has been saved",
                showConfirmButton: false,
                timer: 1500,
                footer: "<a href>InnovaTech</a>",
            });
        },
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

function fetchWaterQuality() {
    $.ajax({
        url: "api/waterqualities/getNewVal",
        type: "GET",
        dataType: "json",
        success: function (data) {
            waterqualityLabel = [];
            waterqualityData = [];

            var newdata = data.reverse();
            $.each(newdata, function (bb) {
                waterqualityLabel.push(newdata[bb].phvalue + " ppm");
                waterqualityData.push(newdata[bb].phvalue);

                if (data.length - 1 == bb) {
                    if (data[bb].status == 0) {
                        $("#waterqualitystat").html(
                            '<div class="badge badge-danger">' +
                                data[bb].statusName +
                                "</div>"
                        );
                    } else if (data[bb].status == 1) {
                        $("#waterqualitystat").html(
                            '<div class="badge badge-success">' +
                                data[bb].statusName +
                                "</div>"
                        );
                    } else {
                        $("#waterqualitystat").html(
                            '<div class="badge badge-warning">' +
                                data[bb].statusName +
                                "</div>"
                        );
                    }
                }
            });
            showWaterqualityChart();
        },
    });
}

("use strict");

function showWaterqualityChart() {
    var ctx = document.getElementById("waterqualityChart").getContext("2d");
    waterqualityChart = new Chart(ctx, {
        type: "line",
        data: {
            labels: waterqualityLabel,
            datasets: [
                {
                    label: "PH Value",
                    data: waterqualityData,
                    borderWidth: 2,
                    backgroundColor: "#38fcae",
                    borderColor: "#0c945d",
                    borderWidth: 2.5,
                    pointBackgroundColor: "#ffffff",
                    pointRadius: 4,
                },
            ],
        },
        options: {
            legend: {
                display: false,
            },
            scales: {
                yAxes: [
                    {
                        gridLines: {
                            drawBorder: false,
                            color: "#f2f2f2",
                        },
                        ticks: {
                            beginAtZero: true,
                        },
                    },
                ],
                xAxes: [
                    {
                        ticks: {
                            display: false,
                        },
                        gridLines: {
                            display: false,
                        },
                    },
                ],
            },
        },
    });
}
