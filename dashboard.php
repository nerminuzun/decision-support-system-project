<?php
include("db.php");
 
$sorgu1=mysqli_query($conn,"select * from tedarikci");
$sorgu2=mysqli_query($conn,"SELECT kategoriler.ktgr_ad AS kategori,COUNT(malzemeler.malz_id)AS urun_sayisi
FROM kategoriler,malzemeler
WHERE kategoriler.ktgr_id=malzemeler.ktgr_id
GROUP BY kategoriler.ktgr_id");
$sorgu3=mysqli_query($conn,"SELECT yemekler.yemek_ad as yemekler ,yemekler.goruntulenme_sayi as goruntulenme
FROM yemekler
ORDER BY yemekler.goruntulenme_sayi DESC LIMIT 5");
$sorgu4=mysqli_query($conn,"SELECT tedarikci.ted_ad as tedarikci, Count(siparis.malz_id)AS sattigi_malzeme_sayisi
FROM tedarikci,siparis
WHERE tedarikci.ted_id=siparis.ted_id
GROUP BY tedarikci.ted_ad");
?>
<!DOCTYPE html>
<html lang="tr">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lezzet Şöleni</title>
    <link rel="stylesheet" href="tablo.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="http://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
 
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['tedarikci','kalite','hizmet','teslimat_sure'],
          <?php
          while($row = mysqli_fetch_array($sorgu1))  
          {  
               echo "['".$row["ted_ad"]."', ".$row["kalite"].",".$row["hizmet"].",".$row["teslimat_sure"]."],";  
          }  
          ?>
        ]);
 
        var options = {
          chart: {
            title: 'Tedarikçiler',
            subtitle: 'Tedarikçi Bilgisi',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };
 
        var chart = new google.charts.Bar(document.getElementById('bar'));
 
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
 
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['kategori','urun_sayisi'],
          <?php
          while($row = mysqli_fetch_array($sorgu2))  
          {  
               echo "['".$row["kategori"]."', ".$row["urun_sayisi"]."],";  
          }  
          ?>
        ]);
 
        var options = {
          chart: {
            title: 'Kategoriler',
            subtitle: 'Kategori ve ürün sayıları',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };
 
        var chart = new google.charts.Bar(document.getElementById('chart'));
 
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load('current', {packages: ['corechart', 'bar']});
    google.charts.setOnLoadCallback(drawMultSeries);
 
    function drawMultSeries() {
    var data = google.visualization.arrayToDataTable([
    ['yemekler','sayi'],
        <?php
          while($row = mysqli_fetch_array($sorgu3))  
          {  
               echo "['".$row["yemekler"]."', ".$row["goruntulenme"]."],";  
          }  
          ?>
      ]);
 
      var options = {
        title: 'Yemeklerin Görüntülenme Sayısı',
        chartArea: {width: '50%'},
        hAxis: {
          title: 'Görüntülenme Sayısı',
          minValue: 0
        },
        vAxis: {
          title: 'Yemekler'
        }
      };
 
      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
    </script>
</head>
<body>
  
    <section id="menu">
        <div class="logo">
            <img src="./logoo.png" alt="">
        </div>
 
        <div class="items">
            <li><i class="fas fa-home"></i><a href="admin.php">Anasayfa</a></li>
            <li><i class="fas fa-chart-pie"></i><a href="dashboard1.php">Dashboard</a></li>
            <li><i class="fas fa-chart-pie"></i><a href="dashboard.php">Dashboard</a></li>
            <li><i class="fas fa-cog"></i><a href="#">Ayarlar</a></li>
            <li><i class="fas fa-sign-out-alt"></i><a href="log.php">Çıkış Yap</a></li>
 
        </div>
    </section>
    <div class="grafikler">
      <div id="bar" style="display:flex;width: 900px; height: 300px;"></div>
      <div id="chart" style="display:flex;margin-top:20px;width: 900px; height: 300px;"></div>
      <div id= "chart_div" style="display:flex;margin-top:20px;width: 900px; height: 300px;"></div>
      </div>
   </div>
    <script>
        $('#menu-btn').click(function(){
            $('#menu').toggleClass("active");
        })
        
    </script>
</body>
</html>
