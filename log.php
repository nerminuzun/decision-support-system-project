<!DOCTYPE html>
<html lang="tr">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lezzet Şöleni</title>
    <link rel="stylesheet" href="log.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script>
    $(document).ready(function(){
        $("#submit").click(function(){
 
            if ($("#username").val()==""   ||  $("#password").val()==""){
                alert ("Lütfen bilgileri giriniz");
            }else{
 
            $.post("kontrol.php",
            {
                eposta:$("#username").val(),
                sifre:$("#password").val()
            },
            function(data,status){
                if(data==1){
                    $(location).attr("href","anasayfa.php");
                }else{
                    alert("Kullanici adınız veya şifreniz yanlış");
                }
            }
        );
        }
    });
});
</script>
<style>
.button {
   background-color: #F6220C;
   border: none;
   color: white;
   padding: 20px 34px;
   text-align: center;
   text-decoration: none;
   display: inline-block;
   font-size: 20px;
   margin: 4px 2px 4px 80px;
   cursor: pointer;
  }
</style>
</head>
<body>
   <div class="wrapper">
       <div class="title"><span>Giriş</span></div>
       <form action="#" method="POST">
           <div class="row">
               <i class="fas fa-user"></i>
               <input type="text" name="username" placeholder="Kullanıcı Adı">
           </div>
           <div class="row">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Sifre">
            </div>
            <a href="admin.php" class="button">Giriş Yap</a>
       </form>
   </div>
</body>
</html>
