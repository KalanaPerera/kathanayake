<body>
<?php
$this->load->view('template/staffnav');
?>
 <div class="container">
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>-->
<div id="userEngagement" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<div id="PostBoostings" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
  <script type="text/javascript">
$(function () {
    $.getJSON('http://www.highcharts.com/samples/data/jsonp.php?filename=usdeur.json&callback=?', function (data) {

        $('#userEngagement').highcharts({
            chart: {
                zoomType: 'x'
            },
            title: {
                text: 'User Engagement'
            },
            subtitle: {
                text: document.ontouchstart === undefined ?
                        'Click and drag in the plot area to zoom in' : 'Pinch the chart to zoom in'
            },
            xAxis: {
                type: 'datetime'
            },
            yAxis: {
                title: {
                    text: 'Number of Users'
                }
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                area: {
                    fillColor: {
                        linearGradient: {
                            x1: 0,
                            y1: 0,
                            x2: 0,
                            y2: 1
                        },
                        stops: [
                            [0, Highcharts.getOptions().colors[0]],
                            [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                        ]
                    },
                    marker: {
                        radius: 2
                    },
                    lineWidth: 1,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    threshold: null
                }
            },

            series: [{
                type: 'area',
                name: 'Number of Users',
                data: data
            }]
        });
    });
});
$(function () {
    $('#PostBoostings').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Monthly Post Boosts vs Normal Posts'
        },
        subtitle: {
            text: 'Source: Internal Server Data'
        },
        xAxis: {
            categories: [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'May',
                'Jun',
                'Jul',
                'Aug',
                'Sep',
                'Oct',
                'Nov',
                'Dec'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Boost Numbers'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Boost Posts',
            data: [10000, 7100, 10600, 12900, 14400, 17600, 13500, 14800, 21600, 19400, 9500, 5400]

        },{
            name: 'Normal Posts',
            data: [12000, 6100, 12600, 15900, 12400, 18600, 15500, 11800, 28600, 12400, 10500, 6542]

        }]
    });
});
</script>
 </div>
