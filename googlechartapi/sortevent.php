<!--
  Copyright (c) 2008 Google Inc.

  You are free to copy and use this sample.
  License can be found here: http://code.google.com/apis/ajaxsearch/faq/#license
-->

<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>
      Google Visualization API Sample
    </title>
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1', {packages: ['barchart', 'table']});
    </script>
    <script type="text/javascript">
    var visualization;

    var sortData = new google.visualization.DataTable();
    sortData.addColumn('string', 'name');
    sortData.addColumn('number', 'age');
    sortData.addRows(3);
    sortData.setCell(0, 0, 'Hzano');
    sortData.setCell(1, 0, 'Hiro');
    sortData.setCell(2, 0, 'Hatorri');
    sortData.setCell(0, 1, 3);
    sortData.setCell(1, 1, 8);
    sortData.setCell(2, 1, 5);

    function drawVisualization() {
      var table = new google.visualization.Table(document.getElementById('table'));
      table.draw(sortData, null);
      
      var chart = new google.visualization.BarChart(document.getElementById('chart'));
      chart.draw(sortData, null);
    
      google.visualization.events.addListener(table, 'sort',
          function(event) {
            sortData.sort([{column: event.column, desc: !event.ascending}]);
            chart.draw(sortData, null);
          });
    }
    

    google.setOnLoadCallback(drawVisualization);
    </script>
  </head>
  <body style="font-family: Arial;border: 0 none;">
    <div>
      Click on the table headers, to see the table and the chart getting sorted.
    </div>
    <br />
    <div id="table"></div>
    <div id="chart" style="height: 300px; width: 300px;"></div>
  </body>
</html>
