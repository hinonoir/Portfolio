<?php
  session_start();

  // トークン生成
  require_once('function-php/_token.php');
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="./img/YH.ico">
  <link rel="apple-touch-icon" href="./img/YH.png">
  <title>Hino Porfolio</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Kosugi+Maru|Montserrat:700|Nunito:900i" rel="stylesheet">
  <!-- lightbox.css -->
  <link rel="stylesheet" href="css/lightbox.min.css">
  <link rel="stylesheet" href="./css/style.min.css">
</head>
<body>

<?php require_once('./header.php'); ?>

<main role="main">
  <article>

    <!-- ==================== #confirm ==================== -->
    <section id="confirm">
      <div class="container">
        <div class="inner">

          <h1 class="heading-font">メッセージ送信確認</h1>
          
          <form action="function-php/_send-mail.php" method="POST" class="send-form">
            <!-- トークン認証 -->
            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token?>">
            
            <p><label>お名前<br>
            <input type="text" id="name" name="name" required readonly value="<?php echo $_POST['name']?>"></label></p>
      
            <p><label>メールアドレス<br>
            <input type="email" id="email" name="email" required readonly value="<?php echo $_POST['email']?>"></label></p>
      
            <p><label>メッセージ本文<br>
            <textarea id="message" name="message" required readonly><?php echo $_POST['message']?></textarea></label></p>
      
            <input type="submit" class="btn" value="  送  信  ">
          </form>

        </div><!-- /.inner -->
      </div><!-- /.container -->
    </section>
    <!-- ==================== /#confirm ==================== -->
  
  </article>
  </main>

  <?php require_once('./footer.php'); ?>

  <!-- ==================== JavaScript ==================== -->
  <!-- jQuery -->
  <script
  src="https://code.jquery.com/jquery-3.4.0.min.js"
  integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
  crossorigin="anonymous"></script>

  <script src="js/lightbox.min.js"></script>
  <script src="./js/main.min.js"></script>
</body>
</html>
