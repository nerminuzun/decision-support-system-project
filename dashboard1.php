<?php
include("db.php");
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
    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['tedarikci', 'sattigi_malzeme_sayisi'],
          <?php
          while($row = mysqli_fetch_array($sorgu4))  
          {  
               echo "['".$row["tedarikci"]."', ".$row["sattigi_malzeme_sayisi"]."],";  
          }  
          ?>
        ]);
 
        var options = {
          title: 'Tedarikci ve Satılan Ürünler',
          pieHole: 0.4,
        };
 
        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
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
      <div id= "donutchart" style="display:flex;margin-top:20px;width: 700px; height: 500px;"></div>
      </div>
   </div>
    <script>
        $('#menu-btn').click(function(){
            $('#menu').toggleClass("active");
        })
        
    </script>
</body>
</html>
