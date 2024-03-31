<?php

// $message = 'エンジニア目指します。' . date('l');

$n = mt_rand(1,3);

if ($n === 1) {
  $message = 'エンジニア目指します。' . date('l');
} elseif ($n === 2) {
  $message = 'プログラミング楽しい！' . date('l');
} else {
  $message = '毎日コーディング！' . date('l');
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>晃大のポートフォリオサイト</title>
  <link rel="icon" href="favicon.ico">
  <meta name="description" content="太郎のポートフォリオサイトです。">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header>
    <div class="container">
      <div class="icon">
        <img src="img/taro.png" width="120" height="120" alt="太郎のアイコンです">
      </div>
      <div class="info">
        <h1>平田晃大</h1>
        <p><?= htmlspecialchars($message ,ENT_QUOTES, 'UTF-8') ?></p>
        <ul>
          <li>
            <a href="https://dotinstall.com" target="_blank">
              <img src="img/blog.png" width="20" height="20" alt="ブログサイトへのリンク画像です">
            </a>
          </li>
          <li>
            <a href="https://dotinstall.com" target="_blank">
              <img src="img/photos.png" width="20" height="20" alt="写真サイトへのリンク画像です">
            </a>
          </li>
        </ul>
      </div>
    </div>
  </header>

  <section class="works">
    <h2>WORKS</h2>
    <section>
      <img src="img/work1.png" width="400" height="260" alt="勇者ゲームの紹介画像">
      <h3>勇者ゲーム</h3>
      <p>楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。</p>
      <a href="hero.php">もっと見る</a>
    </section>
  
    <section>
      <img src="img/work2.png" width="400" height="260" alt="宝探しゲームの紹介画像">
      <h3>宝探しゲーム</h3>
      <p>楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。</p>
      <a href="treasure.php">もっと見る</a>
    </section>
  
    <section>
      <img src="img/work3.png" width="400" height="260" alt="神経衰弱の紹介画像">
      <h3>神経衰弱</h3>
      <p>楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。</p>
      <a href="memory.php">もっと見る</a>
    </section>

  </section>

  <footer>
    <p>(c) dotinstall.com</p>
  </footer>
</body>
</html>
  