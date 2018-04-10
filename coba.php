<?php


    require('config/config.php');


    /* Getting demo_viewer table data */
    $sql = "SELECT SUM(mobil) as count FROM kendaraan GROUP BY ID";
    $viewer = mysqli_query($mysqli,$sql);
    $viewer = mysqli_fetch_all($viewer,MYSQLI_ASSOC);
    $viewer = json_encode(array_column($viewer, 'count'),JSON_NUMERIC_CHECK);


    /* Getting demo_click table data */
    $sql = "SELECT SUM(motor) as count FROM kendaraan GROUP BY ID";
    $click = mysqli_query($mysqli,$sql);
    $click = mysqli_fetch_all($click,MYSQLI_ASSOC);
    $click = json_encode(array_column($click, 'count'),JSON_NUMERIC_CHECK);



     $sql = "SELECT SUM(jalan) as count FROM kendaraan GROUP BY ID";
    $jalan = mysqli_query($mysqli,$sql);
    $jalan = mysqli_fetch_all($jalan,MYSQLI_ASSOC);
    $jalan = json_encode(array_column($jalan, 'count'),JSON_NUMERIC_CHECK);






?>


<!DOCTYPE html>
<html>
<head>
    <title>HighChart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
</head>
<body>


<script type="text/javascript">


$(function () {


    var data_click = <?php echo $click; ?>;
    var data_viewer = <?php echo $viewer; ?>;
    var data_jalan = <?php echo $jalan; ?>;
    


    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'grafik kunjungan kendaraan di Teknologi Informasi'
        },
        xAxis: {
            categories: ['senin','selasa','rabu','kamis','jumat','sabtu','minggu']
        },
        yAxis: {
            title: {
                text: 'Jumlah Kendaraan'
            }
        },
          tooltip: {
    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
      '<td style="padding:0"><b>{point.y:.2f} kendaraan</b></td></tr>',
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
            name: 'Mobil',
            data: data_click
        },
        {name: 'Motor',
            data: data_viewer}
            ,{
            name: 'jalan',
            data: data_jalan
        }]
    });
});


</script>


<div class="container">
    <br/>
    <h2 class="text-center">Highcharts php mysql json example</h2>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <div id="container"></div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>