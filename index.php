<!doctype html>
<html lang="en">
  <head>
    <title>Gabriel Espinosa</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,width=device-width" />
    <meta name="keywords" content="Gabriel, Espinosa, Hendrik, Meurkens, composer, bass, vocals, yucatan, rio, samba, little, Brazilian, jazz, latin, zoho, From Yucatan to Rio, Celebrando, Samba Little Samba, new">
    <link href='css/styles.min.css' rel='stylesheet' type='text/css'>
    <?php if($_SERVER['HTTP_HOST'] == '192.168.56.111'){ ?>
        <script src="//localhost:35729/livereload.js" type="text/javascript"></script>
    <?php } ?>
    <?php include('templates/analytics.php');?>
  </head>
  <body>
    <div class="overlay">
      <div class="overlayContent">
        <img src="/images/src/songsOfBacharachLarge.jpg">
        <p class="dismiss"><img src="/images/src/next.png" alt="Next"></p>
      </div>
    </div>
    <?php include('templates/primaryNav.php');?>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('.overlay').fadeIn();
        $('.dismiss').click(function(){
          $('.overlay').fadeOut();
          window.location.href = "listen.php";
        })
        $('.overlayContent').click(function(){
          $('.overlay').fadeOut();
          window.location.href = "listen.php";
        })
      });
    </script>
  </body>
</html>
