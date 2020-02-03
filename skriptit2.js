var drawHumidityChart = function() {
    var jsonData = $.ajax({
    url: "http://home.tamk.fi/~e6iluost/ilmanpaineen_arvot.php",
    dataType: "json",
    async: false
    }).responseText;

    var data = new google.visualization.DataTable(jsonData);

   

    var options = {
    width: 1150, 
    height: 600,
    hAxis: 
    {
        //title: 'Time',
        logScale: true
    },
    vAxis: 
    {
        title: 'Ilmanpaine hPa',
        logScale: false
    },
    colors: ['#a52714', '#097138'],
    //title: 'Ilmanpaine',
    curveType: 'function'
    };
	 var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

    chart.draw(data, options);

    // Kuvaajan auto päivitys
    setInterval(function() 
        { 
            var jsonData = $.ajax({
            url: "http://home.tamk.fi/~e6iluost/ilmanpaineen_arvot.php",
            dataType: "json",
            async: false
            }).responseText;

            var data = new google.visualization.DataTable(jsonData);

            chart.draw(data, options);
        }, 3000);

};

google.charts.load('current', {'packages':['corechart', 'line']});

google.charts.setOnLoadCallback(drawHumidityChart);