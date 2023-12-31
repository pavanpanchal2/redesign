<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>
      Simle Data View Chart
    </title>
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1', {packages: ['table']});
    </script>
    <script type="text/javascript">
      var visualization;

      var dataTable = new google.visualization.DataTable();
      dataTable.addColumn('string', 'Name');
      dataTable.addColumn('string', 'Age');
      dataTable.addColumn('string', 'Instrument');
      dataTable.addColumn('string', 'Color');
      dataTable.addRows(4);
      dataTable.setCell(0, 0, 'John');
      dataTable.setCell(1, 0, 'Paul');
      dataTable.setCell(2, 0, 'George');
      dataTable.setCell(3, 0, 'Ringo');
      dataTable.setCell(0, 1, '24');
      dataTable.setCell(1, 1, '52');
      dataTable.setCell(2, 1, '16');
      dataTable.setCell(3, 1, '72');
      dataTable.setCell(0, 2, 'Guitar');
      dataTable.setCell(1, 2, 'Sitar');
      dataTable.setCell(2, 2, 'Huitar');
      dataTable.setCell(3, 2, 'Beitar');
      dataTable.setCell(0, 3, 'Blue');
      dataTable.setCell(1, 3, 'Red');
      dataTable.setCell(2, 3, 'Green');
      dataTable.setCell(3, 3, 'White');

      function drawVisualization() {
        var table1 = new google.visualization.Table(document.getElementById('table'));
        table1.draw(dataTable, null);
      
        var dataView1 = new google.visualization.DataView(dataTable);
        dataView1.setColumns([0, 2]);
      
        var table2 = new google.visualization.Table(document.getElementById('table2'));
        table2.draw(dataView1, null);
      
        var dataView2 = new google.visualization.DataView(dataTable);
        dataView2.setColumns([0, 1, 3]);
      
        var table3 = new google.visualization.Table(document.getElementById('table3'));
        table3.draw(dataView2, null);
      }
      

      google.setOnLoadCallback(drawVisualization);
    </script>
  </head>
  <body style="font-family: Arial;border: 0 none;">
    <div>Original Data Table</div>
    <div id="table"></div>
    <br />
    <div>A Data View</div>
    <div id="table2"></div>
    <br />
    <div>Another Data View</div>
    <div id="table3"></div>
  </body>
</html>