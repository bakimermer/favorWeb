<?php 
  if($_POST){
      include("baglanti.php");

      $username = $_POST["username"];
      $password = $_POST["password"];
      if ($username != '') {
        $check = $baglanti->query('select * from users where username="'.$username.'"')->fetch(); 

        if($check[2]==$password){
                setcookie("users", $username, time() + (60*60*24));
                header ("Location:list.php"); 
        }
        else{
            echo("Tekrar Deneyiniz");
        }
      }


  }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Giriş</title>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
<link href="collapsible.css" rel="stylesheet" type="text/css">
<style>
body { font-family:'Open Sans'; background-color:#fafafa;}
h2 { margin:30px auto;}
.container { margin-top:150px;}
</style>
</head>

<body><div id="jquery-script-menu">
<div class="jquery-script-center">

<div class="jquery-script-ads"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<div class="jquery-script-clear"></div>
</div>
</div>
<div class="container">
  <form action="" method="post" style="text-align:center">
    <label for="pass">Kullanıcı Adı : </label> <br><input name="username" type="text"><br><br>
    <label for="pass">Şifre : </label> <br><input name="password" type="text"><br><br>
    <input type="submit" value="Giriş">
  </form>
</div>
<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script> 
<script src="jquery.collapsible.js"></script> 
<script>
$('#accordion-menu').collapsible({
  contentOpen: 1,
  accordion: true,
});
$('#collapse-menu').collapsible({
  contentOpen: 0
});
</script><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
