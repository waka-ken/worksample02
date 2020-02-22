<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/style.css">

  <title>メインページ</title>
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
    <div class="container">

      <a class="navbar-brand" href="{{ route('index') }}">
        <h1>cooky</h1>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbar-content">
        <ul class="navbar-nav mr-auto">
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              info
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">aaa</a>
              <a class="dropdown-item" href="#">bbb</a>
            </div>
          </li> -->


          <li class="nav-item active">
            <a class="nav-link" href="{{ route('index') }}">top</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register')}}">アカウント作成</a>
          </li>
          <li class="nav-item">
            @guest
                <a class="nav-link" href="{{ route('login') }}">ログイン</a>

            @else
         　   　 <a class="nav-link" href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    ログアウト
        　　     </a>
            　   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                　   @csrf
               　</form>
            @endguest
          </li>
        </ul>
      </div>
    </div>
  </nav>



  <main class="col-12 no-gutter text-light bg-black">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 text-center">
          <h1>投稿一覧</h1>
        </div>
        <card class="col-11 text-light bg-light my-2">
          <a href="#">
            <h1 class="text-dark">title</h1>
            <hr>
            <p class="text-dark">てキズとテキストテキスト</p>
          </a>
        </card>
      </div>
    </div>
  </main>
  <footer class="bg-dark text-light">
    <div class="container text-center">
      <p class="m-0 py-4"><small>Copyright &copy;2020 cooky,All Rights Reserved.</small></p>
    </div>
  </footer>
  </div>




  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
