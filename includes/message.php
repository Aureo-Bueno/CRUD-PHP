<?php
//SESSAO
  session_start();
  if (isset($_SESSION['mensagem'])) :?>
     <script>
        window.onload = function(){
            //MENSAGEM 
             M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'})
        };
     </script>
  <?php
  endif;
  session_unset();

?>