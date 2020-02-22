<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Topページ</title>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <h1>トップページ</h1>
    </div>
  </div>
  <div class="container">
    <div class="row justify-content-center">
      <h1>料理レシピ投稿＆レビューサイト</h1>
    </div>
    <div class="row justify-content-center my-4">
      <h3 class="col-10 text-center">一人暮らしを始めて自炊を行ったところ料理にハマってしまう…。
      </h3>
      <h3 class="col-10 text-center">その料理の奥深さと楽しさを共有するため</h3>
      <h3 class="col-10 text-center">同じ駆け出し料理人たちとレシピを共有できるサービスを作りました。</h3>
    </div>
    <div class="row justify-content-center">
      <a href="{{ route('login') }}">ログイン画面へ</a>
    </div>
    <div class="row justify-content-center">
      <a href="{{ route('register') }}">アカウント作成</a>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
