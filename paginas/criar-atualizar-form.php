<?php

//Mostra os dados se tiver logado
if( isset($_SESSION) && $_SESSION['usuario'] ){    

include_once 'layout/head.php';
?>
      <form role="alert" method="POST" action="criar-atualizar.php" style="text-align: center;">


          <input name="action" type="hidden" value="UPDATE">


        <div class="form-group ls-login-user">
          <label for="email">Usuário</label>
          <input name="email" readonly="readonly" value="<?php echo $_SESSION['usuario']['email']; ?>">
        </div>

        <div class="form-group ls-login-user">
          <label for="senha">Senha</label>
          <input name="senha" placeholder="Senha" type="password" required="required" 
              value="<?php echo $_SESSION['usuario']['senha']; ?>">
        </div>

        <div class="form-group ls-login-user">
          <label for="nome">Nome</label>
          <input name="nome" type="text" required="required" placeholder="Nome" 
              value="<?php echo $_SESSION['usuario']['nome']; ?>">
        </div>

        <div class="form-group ls-login-user">
          <label for="idade">Idade</label>
          <input name="idade" type="number" required="required" placeholder="Idade" 
              value="<?php echo $_SESSION['usuario']['idade']; ?>">
        </div>

        <div class="form-group ls-login-user">
          <label for="nomePais">Nome Mãe/Pai</label>
          <input name="nomePais" type="text" required="required" placeholder="Nome Mãe/Pai" 
              value="<?php echo $_SESSION['usuario']['nomePais']; ?>">
        </div>

        <div class="form-group ls-login-user">
          <label for="ultimaVisualizacao">Ultima vez visto em</label>
          <input name="ultimaVisualizacao" required="required" type="text" placeholder="Ultima vez visto em" 
              value="<?php echo $_SESSION['usuario']['ultimaVisualizacao']; ?>">
        </div>

        <div class="form-group ls-login-user">
          <label for="telefone">Telefone</label>
          <input name="telefone" type="text" required="required" placeholder="Telefone" 
              value="<?php echo $_SESSION['usuario']['telefone']; ?>">
        </div>

        <button type="submit">Atualizar Meus Dados</button>

        <br>

        <a href="deletar.php?email=<?php echo $_SESSION['usuario']['email']; ?>">Deletar Meu perfil</a>

      </form>

<?php


include_once 'layout/footer.php';


}else{
?>

      <form role="alert" method="POST" action="../criar-atualizar.php" style="text-align: center;">


          <input name="action" type="hidden" value="CREATE">


        <div class="form-group ls-login-user">
          <label for="email">Usuário</label>
          <input name="email" type="email" required="required">
        </div>

        <div class="form-group ls-login-user">
          <label for="senha">Senha</label>
          <input name="senha" placeholder="Senha" type="password" required="required">
        </div>

        <div class="form-group ls-login-user">
          <label for="nome">Nome</label>
          <input name="nome" type="text" required="required" placeholder="Nome">
        </div>

        <div class="form-group ls-login-user">
          <label for="idade">Idade</label>
          <input name="idade" type="number" required="required" placeholder="Idade">
        </div>

        <div class="form-group ls-login-user">
          <label for="nomePais">Nome Mãe/Pai</label>
          <input name="nomePais" type="text" required="required" placeholder="Nome Mãe/Pai">
        </div>

        <div class="form-group ls-login-user">
          <label for="ultimaVisualizacao">Ultima vez visto em</label>
          <input name="ultimaVisualizacao" required="required" type="text" placeholder="Ultima vez visto em">
        </div>

        <div class="form-group ls-login-user">
          <label for="telefone">Telefone</label>
          <input name="telefone" type="text" required="required" placeholder="Telefone">
        </div>

        <button type="submit">Cadastrar</button>

      </form>

<?php
}
?>
