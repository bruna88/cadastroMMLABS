<?php
require_once('Connections/conn.php');

session_start();

include 'header.php'; ?>

<form  method="post" class="horizontal text-center" >
<p><h4>Tem certeza que deseja deletar o usuario <b><?php echo $fetched_row['nm_usuario']; ?></b> ?</h4></p>
<br>
<div class="text-center">
<button type="submit" class="btn btn-md btn-primary" id="btn-delete" name="btn-delete">Sim</button>  &nbsp; 
<a href="mostrar_usuario.php" class="btn btn-md btn-danger">Não</a>

</div>
</form>


<?php include 'footer.php';?>