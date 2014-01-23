
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>商品一覧</title>

    <link href="../../webpro2exam/css/bootstrap.css" rel="stylesheet">
    <link href="../../webpro2exam/css/main.css" rel="stylesheet">  
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="../Products/index">商品一覧</a></li>
            <li><a href="../Sales/index">売上一覧</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container">

      <h1>商品一覧</h1>

      <p>購入したい商品を選択してください。</p>

      <p class="lead">
        <ul class="products">
         <?php foreach ($products as $product) { ?>
  <li>  <?php 
  echo "<a href=../Sales/new?id=".$product['id']."> ".$product['name']."</a></br>";

   ?>


 </li>   <?php } ?> 
 
        </ul>
      </p>

    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../../webpro2exam/js/bootstrap.min.js"></script>
  </body>
</html>
