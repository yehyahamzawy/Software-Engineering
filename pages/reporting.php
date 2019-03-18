<!DOCTYPE html>
<html>
<head>
	<title>Reports</title>
</head>
<body>
<h3>User Type Stats</h3>
<?php
include '../class/reportClass.php';
$report = new Report();

$output =  $report->reportUserType();
?>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
 <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
 <script type="text/javascript">
 	window.onload = function ()
{
    var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    exportEnabled: true,
    title:{
        text: "Types Of Users Stats"
    },
    
    data: [{
        type: "pie",
        showInLegend: "true",
        legendText: "{label}",
        indexLabelFontSize: 16,
        indexLabel: "{label} - #percent% ",
        
        dataPoints: <?php echo json_encode($output, JSON_NUMERIC_CHECK); ?>
    }]
});
chart.render();
 
}
 </script>
</body>
</html>