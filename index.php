<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="./img/YH.ico">
  <link rel="apple-touch-icon" href="./img/YH.png">
  <meta name="description" content="滋賀県の高島市でWebエンジニアとして活動している日野優人のポートフォリオサイトです。Web制作のお仕事を承っております。デザイン以降のコーディングからWordPress可まで対応可能です。ホームページ制作、コーディング作業などにお悩みであればぜひご相談ください。">
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
  
  <!-- メール送信完了の判定 -->
  <input type="hidden" class="mailComp" value="<?php echo $_SESSION['mail-comp']; ?>">
  <!-- 1度だけ表示 -->
  <?php $_SESSION['mail-comp'] = 0; ?>

  <!-- メール送信完了時のモーダル -->
  <div class="modal-screen">
    <p>送信が完了しました！</p>
    <p>24時間以内に返信いたしますので、<span class="text-inline">
    今しばらくお待ちください。</span></p>
    <button class="close-btn btn">閉じる</button>
  </div><!-- /.modal-screen -->
  
  <!-- ==================== ヘッダー ==================== -->
  <?php require_once('./header.php'); ?>

  <main role="main">
    <article>

      <!-- ==================== #mv ==================== -->
      <section id="mv">
        <div class="mv-box">          
          <h2>Hello World!</h2>
        </div><!-- /.mv-box -->
      </section>
      <!-- ==================== /#mv ==================== -->

      <!-- ==================== #work ==================== -->
      <section id="work">
        <div class="container">
          <div class="inner">

            <div class="heading">
              <i class="fas fa-briefcase"></i>
              <div class="heading-text">
                <h2 class="heading-font">仕事内容</h2>
                <p>Work</p>
              </div><!-- /.heding-text -->
            </div><!-- /.heading -->

            <div class="work-contents">
              <div class="work-item">
                <div class="work-icon">
                  <i class="fas fa-laptop-code"></i>
                </div><!-- /.work-icon -->
                <h3>コーディング</h3>
                <p>お客様のご希望に合わせてコーディングを行います。簡単なカスタマイズからLP・コーポレートサイトまで対応いたします。</p>
              </div><!-- /.work-item -->

              <div class="work-item">
                <div class="work-icon">
                  <i class="fas fa-mobile-alt"></i>
                </div><!-- /.work-icon -->
                <h3>レスポンシブ化</h3>
                <p>スマートフォンでもきれいに表示されるようにします。スマホ対応にすることでスマホユーザーの閲覧機会を増やすことができます。</p>
              </div><!-- /.work-item -->

              <div class="work-item">
                <div class="work-icon">
                <i class="fab fa-wordpress"></i>
                </div><!-- /.work-icon -->
                <h3>WordPress</h3>
                <p>WordPressサイト制作を行います。<br class="br-sp">既存のサイトのWordPress化、カスタマイズにも対応します。</p>
              </div><!-- /.work-item -->
            </div><!-- /.work-contents -->

            <h3 class="work-skill">スキル</h3>
            <p>Skills</p>
            <div class="skills">
              <div class="skill-item">
                <p>HTML&CSS</p>
                <i class="fas fa-code"></i>
                <div class="skill-parameter"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div><!-- /.skill-parameter -->
              </div><!-- /.skill-item -->

              <div class="skill-item">
                <p>JavaScript</p>
                <i class="fab fa-js-square"></i>
                <div class="skill-parameter"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div><!-- /.skill-parameter -->
              </div><!-- /.skill-item -->

              <div class="skill-item">
                <p>PHP</p>
                <i class="fab fa-php"></i>
                <div class="skill-parameter"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div><!-- /.skill-parameter -->
              </div><!-- /.skill-item -->

              <div class="skill-item">
                <p>WordPress</p>
                <i class="fab fa-wordpress"></i>
                <div class="skill-parameter"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div><!-- /.skill-parameter -->
              </div><!-- /.skill-item -->

              <div class="skill-item">
                <p>Sass</p>
                <i class="fab fa-sass"></i>
                <div class="skill-parameter"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div><!-- /.skill-parameter -->
              </div><!-- /.skill-item -->

              <div class="skill-item">
                <p>XD</p>
                <i class="fab fa-adobe"></i>
                <div class="skill-parameter"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div><!-- /.skill-parameter -->
              </div><!-- /.skill-item -->
            </div><!-- /.skills -->

          </div><!-- /.inner -->
        </div><!-- /.container -->
      </section>
      <!-- ==================== /#work ==================== -->
      
      <!-- ==================== #message ==================== -->
      <section id="message">
        <div class="container">
          <div class="inner">
            
            <div class="heading">
              <i class="far fa-comment"></i>
              <div class="heading-text">
                <h2 class="heading-font">お客様へ</h2>
                <p>Message</p>
              </div><!-- /.heding-text -->
            </div><!-- /.heading -->

            <div class="message-body">
              <p>デザイン以降の、コーディングからWordPress化まで対応可能です。</p>
              <p>コーディング作業にお悩みであればぜひご相談ください。</p>
            </div><!-- /.message-body -->
            
          </div><!-- /.inner -->
        </div><!-- /.container -->
      </section>
      <!-- ==================== /#message ==================== -->
      
      <!-- ==================== #portfolio ==================== -->
      <section id="portfolio">
        <div class="container">
          <div class="inner">

            <div class="heading">
              <i class="far fa-window-maximize"></i>
              <div class="heading-text">
                <h2 class="heading-font">制作例</h2>
                <p>Portfolio</p>
              </div><!-- /.heding-text -->
            </div><!-- /.heading -->

            <p class="portfolio-supple">↓クリックすると<span class="text-inline">スライドで表示します。</span></p>

            <div class="portfolio-contents">
              
              <div class="portfolio-item">
                <a href="./images/【練習】Flexbox1（PC）.jpg" data-lightbox="flexbox" data-title="Flexbox">
                <div class="img-wrap">
                  <img src="./images/【練習】Flexbox1（PC）.jpg" alt="【練習】Flexbox1（PC）.jpg">
                </div><!-- /.img-wrap -->
                </a>
                <p>Flexboxを用いたレスポンシブ対応のWebサイトです。</p>
                <p>こちらは教材の模写で作成しました。</p>

                <a href="./images/【練習】Flexbox1（スマホ）.jpg" data-lightbox="flexbox" data-title="Flexbox"></a>
                <a href="./images/【練習】Flexbox2（PC）.jpg" data-lightbox="flexbox" data-title="Flexbox"></a>
                <a href="./images/【練習】Flexbox3（PC）.jpg" data-lightbox="flexbox" data-title="Flexbox"></a>
                <a href="./images/【練習】Flexbox4（PC）.jpg" data-lightbox="flexbox" data-title="Flexbox"></a>
              </div><!-- /.portfolio-item -->
              
              <div class="portfolio-item">
                <a href="./images/プレーンにっき1（PC）.jpg" data-lightbox="plane-nikki" data-title="プレーンにっき">
                <div class="img-wrap">
                  <img src="./images/プレーンにっき2（PC）.jpg" alt="プレーンにっき2（PC）.jpg">
                </div><!-- /.img-wrap -->
                </a>
                <p>PHPとMySQLを用いて作成した、シンプルな日記アプリです。</p>
                <p>お試しに「テスター」で機能に触れてみることができます。</p>
                <a class="link" href="https://yuto-hino.sakura.ne.jp/plain_nikki/" target="_blank" rel="noopener">プレーンにっき</a>

                <a href="./images/プレーンにっき1（スマホ）.jpg" data-lightbox="plane-nikki" data-title="プレーンにっき"></a>
                <a href="./images/プレーンにっき2（PC）.jpg" data-lightbox="plane-nikki" data-title="プレーンにっき"></a>
                <a href="./images/プレーンにっき2（スマホ）.jpg" data-lightbox="plane-nikki" data-title="プレーンにっき"></a>
                <a href="./images/プレーンにっき3（PC）.jpg" data-lightbox="plane-nikki" data-title="プレーンにっき"></a>
                <a href="./images/プレーンにっき4（PC）.jpg" data-lightbox="plane-nikki" data-title="プレーンにっき"></a>
              </div><!-- /.portfolio-item -->
              
              <div class="portfolio-item">
                <a href="./images/preparing.png" data-lightbox="wordpress">
                <div class="img-wrap">
                  <img src="./images/プレーンにっき4（PC）.jpg" alt="プレーンにっき4（PC）.jpg">
                </div><!-- /.img-wrap -->
                </a>
                <p>（※未完成）WordPressの自作テーマ</p>
                <p>完成したら載せる。</p>
              </div><!-- /.portfolio-item -->
              
            </div><!-- /.portfolio-contents -->

            <a class="btn" href="https://drive.google.com/drive/folders/19qJGMHArd8gwsldjw17YSzhdmxDVtBVU" target="_blank" rel="noopener">その他の制作物</a>
            
          </div><!-- /.inner -->
        </div><!-- /.container -->
      </section>
      <!-- ==================== /#portfolio ==================== -->

      <!-- ==================== #price ==================== -->
      <section id="price">
        <div class="container">
          <div class="inner">

            <div class="heading">
              <i class="fas fa-yen-sign"></i>
              <div class="heading-text">
                <h2 class="heading-font">料金表</h2>
                <p>Price</p>
              </div><!-- /.heding-text -->
            </div><!-- /.heading -->

            <table class="price-table">
              <thead>
                <tr>
                  <th>内容</th><th>目安価格</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>コーディング<span class="text-inline">（TOP）</span></td><td>12000円/1P</td>
                </tr>
                <tr>
                  <td>コーディング<span class="text-inline">（下層）</span></td><td>7000円/1P</td>
                </tr>
                <tr>
                  <td>コーディング<span class="text-inline">（LP）</span></td><td>20000円/1P</td>
                </tr>
                <tr>
                  <td>レスポンシブ化</td><td>7000円</td>
                </tr>
                <tr>
                  <td>WordPress化</td><td>50000円</td>
                </tr>
              </tbody>
            </table>

            <p class="price-supple">※かけだしのため、現在は料金表の<span class="emphasis">半額</span>でお仕事をさせて頂きます。</p>

          </div><!-- /.inner -->
        </div><!-- /.container -->
      </section>
      <!-- ==================== /#price ==================== -->

      <!-- ==================== #profile ==================== -->
      <section id="profile">
        <div class="container">
          <div class="inner">

            <div class="profile-card">
              <div class="heading">
                <i class="far fa-address-card"></i>
                <div class="heading-text">
                  <h2 class="heading-font">自己紹介</h2>
                  <p>Profile</p>
                </div><!-- /.heding-text -->
              </div><!-- /.heading -->

              <div class="card-flex">                
                <div class="profile-nameimg">
                  <img src="./img/profile.jpg" alt="profile.jpg">
                  <h3>Yuto Hino/日野 優人</h3>
                  <ul class="social">
                    <li><a href="https://twitter.com/hinonoir64" target="_blank" rel="noopener"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://github.com/hinonoir" target="_blank" rel="noopener"><i class="fab fa-github"></i></a></li>
                    <li><a href="#contact"><i class="far fa-envelope"></i></a></li>
                  </ul><!-- /.social -->
                </div><!-- /.profile-nameimg -->
                
                <div class="profile-detail">
                  <p>1996年生まれの大学生<span class="text-inline">（休学中）</span></p>
                  <p>Webエンジニア</p>
                  <p>出身/所在地：滋賀県高島市</p>
                  <p>趣味：投資、登山、ゲーム</p>
                  <p>このサイトはデザインも含め<br class="br-tab">自身で作成しました。</p>
                  <a href="https://github.com/hinonoir/portfolio" target="_blank" rel="noopener">本ページのソースコードはこちら</a>
                </div><!-- /.profile-detail -->
              </div><!-- /.card-flex -->
            </div><!-- /.profile-card -->

          </div><!-- /.inner -->
        </div><!-- /.container -->
      </section>
      <!-- ==================== /#profile ==================== -->

      <!-- ==================== #contact ==================== -->
      <section id="contact">
        <div class="container">
          <div class="inner">

            <div class="heading">
              <i class="far fa-envelope"></i>
              <div class="heading-text">
                <h2 class="heading-font">お問い合わせ</h2>
                <p>Contact</p>
              </div><!-- /.heding-text -->
            </div><!-- /.heading -->

            <p>お気軽にお問い合わせください。<br>24時間以内に返信いたします。</p>

            <form action="./confirm.php" method="POST">
              <p><label>お名前<br>
              <input type="text" id="name" name="name" required placeholder=" 例）山田太郎"></label></p>

              <p><label>メールアドレス<br>
              <input type="email" id="email" name="email" required placeholder=" you@example.com"></label></p>

              <p><label>メッセージ本文<br>
              <textarea id="message" name="message" required></textarea></label></p>

              <input type="submit" class="btn" value="  確  認  ">
            </form>

          </div><!-- /.inner -->
        </div><!-- /.container -->
      </section>
      <!-- ==================== /#contact ==================== -->
      
    </article>
  </main>

  <!-- ==================== フッター ==================== -->
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
