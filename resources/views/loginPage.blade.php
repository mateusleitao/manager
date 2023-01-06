<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    <form method="POST" action="/login">
        @csrf
        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="password">Senha:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Entrar">
      </form>
  </h1>
</body>
</html>
