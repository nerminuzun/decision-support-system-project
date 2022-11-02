!DOCTYPE html>
<html lang="tr">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lezzet Şöleni</title>
    <link rel="stylesheet" href="admin.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="http://code.jquery.com/jquery-3.6.0.min.js"></script>
    
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
    <section id="interface">
        <div class="navigation">
            <div class="n1">
                <div>
                    <i id="menu-btn" class="fas fa-bars"></i>
                </div>
                <div class="search">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Arama">
                </div>
            </div>
        </div>
        <h3 class="i-name">
            Anasayfa
        </h3>
        
        <div class="values">
            <div class="val-box">
                <i class="fas fa-user"></i>  
                <div>
                    <h3>8,267</h3>
                    <span>Görüntülenme Sayısı</span>
                </div>
            </div>
            <div class="val-box">
                <i class="fas fa-folder-open"></i> 
                <div>
                    <h3>11</h3>
                    <span>Malzeme Kategorisi</span>
                </div>
            </div>
            <div class="val-box">
                <i class="fas fa-utensils"></i> 
                <div>
                    <h3>77</h3>
                    <span>Malzeme Sayısı</span>
                </div>
            </div>
            <div class="val-box">
                <i class="fas fa-shopping-cart"></i>
                <div>
                    <h3>3,110</h3>
                    <span>Satın Alınan Malzeme</span>
                </div>
            </div>
            <div class="val-box">
                <i class="fas fa-store"></i>  
                <div>
                    <h3>10</h3>
                    <span>Anlaşmalı Tedarikçiler</span>
                </div>
            </div>
            <div class="val-box">
                <i class="fas fa-user"></i>  
                <div>
                    <h3>81</h3>
                    <span>il Sayısı</span>
                </div>
            </div>
            <div class="val-box">
                <i class="fas fa-cloud-meatball"></i> 
                <div>
                    <h3>36</h3>
                    <span>Üretimde Olan Yemekler</span>
                </div>
            </div>
            <div class="val-box">
                <i class="fas fa-money-check-alt"></i> 
                <div>
                    <h3>49,549</h3>
                    <span>Toplam Maliyet Tutarı</span>
                </div>
            </div>
            <div class="val-box">
                <i class="fas fa-store-alt"></i>  
                <div>
                    <h3>25</h3>
                    <span>Büyükşehir Belediyesi</span>
                </div>
            </div>
        </div>
    </section>
 
    <script>
        $('#menu-btn').click(function(){
            $('#menu').toggleClass("active");
        })
        
    </script>
</body>
</html>
