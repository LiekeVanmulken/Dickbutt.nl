<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
    xmlns:fb="http://ogp.me/ns/fb#">
<head>
	<meta property="og:image" content="dickbutt.jpg" />    

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-78361957-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-78361957-1');
</script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--=========================================== bootstrap  =================================================-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!--=========================================== bootstrap end ==============================================-->

<script>
function cheeckyCunt(){
  alert("Not that one you cheecky bastard.");
}
</script>

    <style>
      ul.nav li.dropdown:hover > ul.dropdown-menu {
        display: block;
      }
    </style>
</head>

<body class="container" style="background-color:rgb(197,225,236);">

  <header >
    <br>
 <?php
 $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 'game.html';
 if($page == 'game.html'){
 ?>

    <span onclick="cheeckyCunt()">
      <img style="display:block; margin:auto; " width="25%"src="http://dickbutt.nl/dickbutt.png" />
  </span>
<?php
}else{
?>
<a style="color:black; text-decoration:none" href="?">
  <img style="display:block; margin:auto; " width="25%"src="http://dickbutt.nl/dickbutt.png" />
</a>
<?php
}
?>


    <br>
      <a href="?" title="Home">Home / Game</a> |
      <a href="?page=hypnotic.html" title="Hypnotic dickbutt">Hypnotic dickbutt</a> |
      <a href="?page=largedickbutt.html" title="ASCII dickbutt">ASCII dickbutt</a> 
      
      <!-- |<a href="?page=random.html" title="Random dickbutt">Random dickbutt</a>       -->
    </nav>
  </header>
  <br>

    <?php
    $page = 'content/' . $page;
    if (file_exists($page)) {
        include $page;
    } else {
        echo "404 : Page not found";
    }

    ?>

</div>




</body>
</html>
