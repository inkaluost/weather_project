

var drawHumidityChart = function() {
var jsonData = $.ajax({
   url: "http://home.tamk.fi/~e6iluost/vrk_lampotila_arvot.php",
   dataType: "json",
   async: false
   }).responseText;
      
var data = new google.visualization.DataTable(jsonData);
var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
var options = {
  width: 1400, 
  height: 600,
  title: 'Lämpötila',
  curveType: 'function'
};
chart.draw(data, options);
};
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawHumidityChart);