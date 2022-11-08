<?php
   if(isset($_SESSION['menssage'])) :
?>
   <div class="alert alert-warning alert-dismissible fade show" role="alert">
       <strong>Ei!</strong> <?= $_SESSION['menssage']; ?>
       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>
<?php
   unset($_SESSION['menssage']);
   endif;
?>
