<?php
  //CONEXAO COM O BANCO
  include_once 'php-action/db_connect.php';
  //ADICIONA O HEADER HTML
 include_once 'includes/header.html';

  if (isset($_GET['id'])) :
      $id = mysqli_escape_string($connect, $_GET['id']);

      $sql = "SELECT * FROM cliente WHERE id = '$id'";
      $result = mysqli_query($connect, $sql);

      $dados = mysqli_fetch_array($result);
  endif;
?>
  <div class="row">
      <div class="col s12 m6 push-m3 ">
      <h3 class="light">Editar Cliente</h3>
           <form action="php-action/update.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $dados['id'] ?>">
               <div class="input-field col s12">
                   <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
                   <label for="nome">Nome</label>
               </div>
               <div class="input-field col s12">
                   <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome']; ?>">
                   <label for="sobrenome">Sobrenome</label>
               </div>
               <div class="input-field col s12">
                   <input type="text" name="email" id="email" value="<?php echo $dados['email']; ?>">
                   <label for="email">Email</label>
               </div>
               <div class="input-field col s12">
                   <input type="text" name="idade" id="idade" value="<?php echo $dados['idade']; ?>">
                   <label for="idade">Idade</label>
               </div>

               <button class="btn" name="btn-editar" type="submit">Atualizar</button>
               <a href="index.php" class="btn green" type="submit">Lista de Cliente</a>
           </form>
      </div>
  </div>

<?php
 //ADICIONA O FOOTER HTML
 include_once 'includes/footer.html';
?>
