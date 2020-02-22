<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>メインページ</title>
</head>
<body>
  <div class="container-fluid p-0">
    <div class="row">
      <header class="row col-12 bg-dark text-light no-gutter">
        <h1 class="col-3">cooky</h1>
        <ul class="col-9 row">
          <li>
            <h2 class="col-4">user_name</h2>
          </li>
          <li class="col-4">
            <a href="#">新規作成</a>
          </li>
          <li class="col-4">
            <a href="#">ログアウト</a>
          </li>
        </ul>

      </header>
      <main class="col-12 text-light bg-black">
        <div class="container">
          <div class="row justify-content-center">
            <h1>新規作成</h1>
          </div>
        </div>
        @if (count($errors) > 0)
            <ul>
                @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
        @endif
        <div class="container">
          <div class="row justify-content-center">
            <form action="{{ action('UserController@create') }}" class="form-area col-11" method="POST" enctype="multipart/form-data">
              <div class="row">
                タイトル：
                <input type="text" name="title" class="col-12 form-control">
              </div>
              <div class="row">
                用意する具材：
                <textarea type="text" name="materials" class="col-12 form-control" rows="8"></textarea>
              </div>
              <div class="row">
                調理手順：
                <textarea  type="text" name="method" class="col-12 form-control" rows="8"></textarea>
              </div>
              <div class="row">
                完成品写真：
                <input class="col-12 form-control-file" name="image" type="file">
              </div>
              {{ csrf_field() }}
              <div class="row justify-content-end">
                <input class="btn btn-primary" value="更新" type="submit">
              </div>

            </form>
          </div>

        </div>
      </main>
      <footer class="bg-dark text-light col-12">
        <p>テキストテキストテキストテキスト</p>
      </footer>
    </div>




  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
