<?php
  //ADICIONA O HEADER HTML
 include_once 'includes/header.html';
?>
  <div class="row">
      <div class="col s12 m6 push-m3 ">
      <h3 class="light">Novo Cliente</h3>
           <form action="php-action/create.php" method="POST">
               <div class="input-field col s12">
                   <input type="text" name="nome" id="nome">
                   <label for="nome">Nome</label>
               </div>
               <div class="input-field col s12">
                   <input type="text" name="sobrenome" id="sobrenome">
                   <label for="sobrenome">Sobrenome</label>
               </div>
               <div class="input-field col s12">
                   <input type="text" name="email" id="email">
                   <label for="email">Email</label>
               </div>
               <div class="input-field col s12">
                   <input type="text" name="idade" id="idade">
                   <label for="idade">Idade</label>
               </div>

               <button class="btn" name="btn-cadastrar" type="submit">Cadastrar</button>
               <a href="index.php" class="btn green" type="submit">Lista de Cliente</a>
           </form>
      </div>
  </div>

<?php
 //ADICIONA O FOOTER HTML
 include_once 'includes/footer.html';
?>
