<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>
  <link rel="stylesheet" href="../views/login/Stylelogin/style.css" >
  <meta charset="utf-8">
  <title>Login</title>

</head>


<body>
<div class="container" id="container"> 
<div class="form-container sign-up-container" >
<h1 align="center">Crie sua conta</h1>
<form action="./UsuarioController.php?action=create" method="POST">
        <input type="text" name="username" placeholder="User Name" required />
        <input type="email" name="email" placeholder="Email" required/>
        <input type="password" name="senha" placeholder="Senha" required />
        <br>
        <button type="reset" value="Limpar">limpar</button>
        <br>
        <button type="submit" value="Cadastrar">Cadastrar</button>

      </form>
    </div>
      <div class="form-container sign-in-container">
      <form action="./UsuarioController.php?action=login" method="POST">
                <h1>Faça Login</h1>
        <input type="text" name="username" placeholder="User name" required />
        <input type="password" name="senha" placeholder="Senha" required />
        <button type="submit" value="login">Entrar</button>
        <input value="1" name="login" type="hidden">
      </form>
    </div>
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1>Bem-vindo de volta!</h1>
          <p>Para se manter conectado, faça login com seus dados pessoais</p>
          <button class="ghost" id="signIn">Entrar</button>
        </div>
        <div class="overlay-panel overlay-right">
          <h1>Olá!</h1>
          <p>Insira seus dados pessoais para criar uma conta</p>
          <button class="ghost" id="signUp">Cadastre-se</button>
        </div>
      </div>
    </div>
  </div>
    
  <script src="../views/login/Stylelogin/login.js"  charset="utf-8"></script>

</body>


</html>