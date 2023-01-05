<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <h1 class="text-3xl font-bold underline">
    Pagina de Cadastro
    <form action="/singup">
        @csrf
        <div>
            <label for="Seu nome:"></label>
            <input type="text" placeholder="Insira seu nome aqui" >
        </div>
        <div>
            <label for="Email:"></label>
            <input type="text" placeholder="Insira seu email aqui" >
        </div>
        <div>
            <label for="Password:"></label>
            <input type="text" placeholder="Insira sua senha aqui" >
        </div>
        <div>
            <label for="Birthday"></label>
            <input type="text" placeholder="" >
        </div>
        <div>
            <label for="Company name:"></label>
            <input type="text" placeholder="Insert your company here" >
        </div>
        <div>
            <label for="CPF"></label>
            <input type="text" placeholder="Insert your CPF here" >
        </div>
        <div>
            <label for="Profissao"></label>
            <input type="text" placeholder="" >
        </div>
    </form>
  </h1>
</body>
</html>
