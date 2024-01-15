<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Creador de cookies</title>
</head>
<body>
    <h1>Introduzca datos para crear una cookie</h1>
<form>
  <div class="form-group">
    <div class="col-3">
        <label for="exampleInputEmail1">Cookie name</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
  </div>
  <div class="form-group">
    <div class="col-3">
        <label for="exampleInputPassword1">Cookie value</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
  </div>
  <div class="form-group">
    <div class="col-3">
        <label for="exampleInputPassword1">Cookie expiration seconds</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Añadir cookie</button>
</form>
</body>
</html>