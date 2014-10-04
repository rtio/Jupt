<!DOCTYPE html>

<html lang="pt-br">

    <head>

    <!-- Meta, title, CSS, favicons, etc. -->

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Transforme uma URL, grande e feia para uma curtinha, fácil de utilizar">

    <meta name="keywords" content="Encurtar, URL, Link, shortem, Jupiter, Tecnologia">

    <meta name="author" content="Rafael S. Meneses">



<title>

  

    Encurtador de URL's

  

</title>


<!-- Favicons -->

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">

<link rel="shortcut icon" href="img/favicon.ico">



  </head>

<body>

    <div class="container">

      <div class="header">
        <ul class="nav nav-pills pull-right">
          <!--<li class="active"><a href="#">Home</a></li>
          <li><a href="#">Sobre</a></li> -->
          <li><a id="grafPorMes" href="#" data-toggle="modal" data-target=".bs-example-modal-lg">Gráfico</a></li>
        </ul>
        <h3 class="text-muted">jupt.tk</h3>

      </div>

      <form>
	  
      <!--Btn copy-->
      <p><button id="copy-button" data-clipboard-target="longURL" title="Clique para copiar a URL" class="btn btn-xs pull-right">Copiar</button></p>
      <!--End Btn copy-->

      <div class="jumbotron">

        <h1>Encurtador de links</h1>

        <p><input type="text" id="longURL" class="form-control" placeholder="www.url-grande-e-feia.com.br" required autofocus></p>

        <p><a class="btn btn-lg btn-success" id="ajaxShorten" href="#" role="button">Encurtar</a></p>

        <img src="img/ajax-loader.gif" id="load" style="display: none;" alt=""/>

      </div>

    </form>

    <div style="display: none;position:relative;margin:0 auto; background-color:#cc0000;color:white;padding:10px;width:500px;font-size:18px;" id="error"></div>
    <!-- ADS -->
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- jupt.tk -->
    <ins class="adsbygoogle"
         style="display:inline-block;width:728px;height:90px"
         data-ad-client="ca-pub-3099142462911133"
         data-ad-slot="2167172439"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    <!-- END ADS -->
      <div class="footer">

        <p>&copy; Júpiter Tec - Serviços em Informática 2014</p>
        <p>A internet é livre, seja também. Domínios grátis <a href="http://my.dot.tk/cgi-bin/amb/landing.dottk?nr=826904::16326262::1" target="_new" style="text-decoration: none">
		    <span style="color:#00f;"><u><b>Dot.tk</b></u></span></a></p>

      </div>

    </div> <!-- /container -->
<!-- Bootstrap core CSS -->

<link href="css/bootstrap.min.css" rel="stylesheet">



<!-- Documentation extras -->

<link href="css/docs.min.css" rel="stylesheet">



<link href="css/jumbotron-narrow.css" rel="stylesheet">

<!--[if lt IE 9]><script src="../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->



<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

<!--[if lt IE 9]>

  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

<![endif]-->

  <script src="js/jquery/1.11.0/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/docs.min.js"></script>
  <script type="text/javascript">

    $(function()

    {

      $("#ajaxShorten").click(function() {

        

        $(this).hide();

        $("#load").show();

        $("#error").hide();

        

        $.post('ajax.php', {url : $("#longURL").val()}, function(data)

        {

          if(data.indexOf("http") == -1)

          {

            $("#error").show();

            $("#error").html(data);

          }else{

            $("#longURL").val(data);

          }

          $("#load").hide();

          $("#ajaxShorten").show();

        });

      });

    });

  </script>
  
  <script src="js/ZeroClipboard.js"></script>
  <script src="js/main.js"></script>

  <!--Gráfico-->
  <?php include_once 'grafPorMes.html';?>
  <!--End Gráfico-->
  
</body>

</html>