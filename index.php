<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="style.css">

    <title>Cadastro de Clientes</title>
</head>

<body>
    <h1>Cadastro de Clientes</h1>

    <div class="container">
        <p>Login: <input type="email" name="login" id="login-id"></p>
        <p>Password: <input type="password" name="password" id="password-id" onmouseover="mouseoverPass();" onmouseout="mouseoutPass();"></p>
        <p><input type="button" value="Entrar"></p>

    </div>
    <!-- Script area -->
    <script src="jquery.js"></script>
    <script src="view-password.js"></script>

</body>

</html>