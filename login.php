<?php include_once 'layout/head.php'; ?>

<div class="box-parent-login" style="text-align: center;">
    <div class="well bg-white box-login">
      <h3 class="ls-login-logo">Login</h3>
      <form role="alert" method="POST" action="index.php">
        <div class="form-group ls-login-user">
          <label for="#">Usuário</label>
          <input name="email" type="email" placeholder="E-mail">
        </div>

        <div class="form-group ls-login-user">
          <label for="userPassword">Senha</label>
          <input name="senha" type="password" placeholder="Senha">
        </div>

        <button type="submit" formaction="index.php">Entrar</button>
        <a href="paginas/criar-atualizar-form.php">Cadastrar-me</a>

      </form>
    </div>
  </div>

  <?php include_once 'layout/footer.php'; ?>