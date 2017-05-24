<!doctype html>
<html lang="en">
  <head>
    <title>Gabriel Espinosa - Gallery</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,width=device-width" />
    <meta name="keywords" content="Gabriel, Espinosa, Hendrik, Meurkens, composer, bass, vocals, yucatan, rio, samba, little, Brazilian, jazz, latin, zoho, From Yucatan to Rio, Celebrando, Samba Little Samba, new">
    <link href='css/styles.min.css' rel='stylesheet' type='text/css'>
    <link href="/js/lightbox/css/lightbox.min.css" rel="stylesheet">
    <?php if($_SERVER['HTTP_HOST'] == '192.168.56.111'){ ?>
        <script src="//localhost:35729/livereload.js" type="text/javascript"></script>
    <?php } ?>
    <?php include('templates/analytics.php');?>
  </head>
  <body>
    <?php include('templates/primaryNav.php');?>
    <section class="container">
      <h1>Gallery</h1>
    </section>
    <section class="container">
      <div class="six columns posterHighlight">
        <img src="/images/gallery/large/001.jpg" alt="Gabriel Espinosa Poster">
      </div>
      <div class="six columns posterHighlight">
        <img src="/images/gallery/large/002.jpg" alt="Gabriel Espinosa Poster">
      </div>
      <div class="clearBoth"></div>
    </section>
    <section class="container">
      <div class="twelve columns gallery">
        <?php
          $dir = 'images/gallery/small';
          $files = scandir($dir);
          $files = array_diff($files, array('..','.'));

          foreach($files as $filename){
            echo "<a href='/images/gallery/large/" . $filename . "' data-lightbox='gallery'><img src='/images/gallery/small/" . $filename . "' alt='Gallery Photo'></a>";
          }
        ?>
      </div>
    </section>
    <script src="/js/lightbox/js/lightbox-plus-jquery.js"></script>
</body>
</html>
