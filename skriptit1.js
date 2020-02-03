var drawWindSpeedGauge = function() {
	var jsonData = $.ajax({
    url: "http://home.tamk.fi/~e6iluost/back7.php",
    dataType: "json",
    async: false
}).responseText;


var data = new google.visualization.DataTable(jsonData);

var options = {
  width: 800, 
  height: 400,
  redFrom: 30, 
  redTo: 4
  yellowFrom:20, 
  yellowTo: 30,
  minorTicks: 10,
  min: 0,
  max: 40
}
var chart = new google.visualization.Gauge(document.getElementById('chart_div'));
chart.draw(data, options);
    setInterval(function() 
        { 
            var jsonData = $.ajax({
            url: "http://home.tamk.fi/~e6iluost/back7.php",
            dataType: "json",
            async: false
            }).responseText;

            var data = new google.visualization.DataTable(jsonData);

            chart.draw(data, options);
        }, 3000);
};
google.charts.load('current', {'packages':['gauge']});
google.charts.setOnLoadCallback(drawWindSpeedGauge);

