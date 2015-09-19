<body>
    
    
    <?php
    
    $this->load->view('template/politicianNav');
    
    
    ?>
<div class="container">
<div class="row">
	<div class="col-md-4">
		<div id="rankGraph1" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
	</div>
	<div class="col-md-4">
		<div id="rankGraph2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
	</div>
	<div class="col-md-4">
		<div id="rankGraph3" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
	</div>
</div>

 <script type="text/javascript">
$(function () {
    $('#rankGraph1').highcharts({
        title: {
            text: 'Rank progress',
            x: -20 //center
        },
        subtitle: {
            text: 'Source: Internal Data',
            x: -20
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Position'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: ''
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [ {
            name: 'Position',
            data: [22, 18, 22, 17, 19, 15, 10, 6, 13, 10, 6, 4]
        }]
    });
});
$(function () {
    $('#rankGraph2').highcharts({
        title: {
            text: 'Questions',
            x: -20 //center
        },
        subtitle: {
            text: 'Source: Internal Data',
            x: -20
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Quesitions Assigned'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: ''
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [ {
            name: 'Questions',
            data: [4, 5, 7, 2, 3, 6, 10, 6, 13, 10, 6, 4]
        },{
            name: 'Answered  ',
            data: [2, 3, 7, 0, 1, 3, 2, 5, 10, 8, 3, 1]
        }]
    });
});
$(function () {
    $('#rankGraph3').highcharts({
        title: {
            text: 'User Visits',
            x: -20 //center
        },
        subtitle: {
            text: 'Source: Internal Data',
            x: -20
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'User Visits'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: ''
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [ {
            name: 'User Visits',
            data: [120, 180, 220, 170, 190, 150, 100, 60, 103, 100, 60, 40]
        },{
            name: 'User Visits by Boost',
            data: [110, 160, 200, 150, 190, 120, 70, 40, 93, 88, 55, 32]
        }]
    });
});
</script>
</div>
    