<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <form action="insert.php" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Введите цену</label>
              <input name="price" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Введите описание</label>
              <input name="dec" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <p></p>
            <button type="submit" class="btn btn-primary">Отправить</button>
          </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>