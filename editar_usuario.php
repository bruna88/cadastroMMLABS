<?php require_once('Connections/conn.php'); require_once('verificalogin.php');

$id = $_SESSION['MM_Username'];
$sql = mysqli_query($conexao,"SELECT * FROM usuario WHERE email = '".$id."'")or die ("".mysqli_error());
while ($row = mysqli_fetch_array($sql)){
  $id_usuario = $row['id_usuario'];
  $nomeusuario = $row['email']; 
}

if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  //$theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;}
}
 
 $msg ="";
 
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE usuario SET nm_usuario=%s, email=%s, senha=%s WHERE id_usuario=%s",
                       GetSQLValueString($_POST['nm_usuario'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['senha'], "int"),
                       GetSQLValueString($_POST['id_usuario'], "int"));
               


if($Result1 = mysqli_query($conexao,$updateSQL) or die (mysqli_error())){
  $msg = '<font size="5" color="green">Alterado com Sucesso!</font>'; } else {
  $msg = "ERRO AO CADASTRAR.";  
  }
}   
if(mysqli_error($conexao)) {// o único erro que eu sei que pode dar por enquanto é o 1602 (Duplicate do UNIQUE)
  $msg = '<font size="5" color="red">ERRO - ATENÇÃO: Email já cadastrado!</font>'; 
        } else {        
                
        } 
 
$colname_editar_usuario = "-1";
if (isset($_GET['id_usuario'])) {
  $colname_editar_usuario = $_GET['id_usuario'];
}
//mysql_select_db($database_amtt, $amtt);
$query_editar_usuario = sprintf("SELECT * FROM usuario WHERE id_usuario = %s", GetSQLValueString($colname_editar_usuario, "int"));
$editar_usuario = mysqli_query($conexao,$query_editar_usuario) or die(mysqli_error());
$row_editar_usuario = mysqli_fetch_assoc($editar_usuario);
$totalRows_editar_usuario = mysqli_num_rows($editar_usuario);
?>
<?php include 'header.php';?> 
                        <br /><br />
                        <div class="container" style="padding-left:465px;">
                                <img src="imagem/edita.png" width="45" height="45" />
                                <label class="control-label"><h3>Editar Usuários</h3></label>
                              </div><br />
      <div class="container" style="padding-left:200px;">
       <form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1" class="form-horizontal">
        <div class="form-group">
          <label class="col-md-4 control-label" for="nm_usuario">Nome Completo: </label>
          <div class="col-md-3">
           <input type="text" class="form-control input-md" name="nm_usuario" id="nm_usuario"  value="<?php echo htmlentities($row_editar_usuario['nm_usuario'], ENT_COMPAT, 'utf-8'); ?>" placeholder="Nome e Sobrenome" />
         </div>
       </div>

       <div class="form-group">
        <label class="col-md-4 control-label" for="email">Email: </label>
        <div class="col-md-3">
          <input type="email" class="form-control input-md" name="email" id="email" value="<?php echo htmlentities($row_editar_usuario['email'], ENT_COMPAT, 'utf-8'); ?>"   placeholder="Login de Acesso" />
       </div>
     </div>

     <div class="form-group">
      <label class="col-md-4 control-label" for="senha">Senha: </label> 
      <div class="col-md-3">
       <input type="text" class="form-control input-md" minlength="4"
       maxlength="8" size="8" name="senha" id="senha" onkeyup="somenteNumeros(this);"value="<?php echo htmlentities($row_editar_usuario['senha'], ENT_COMPAT, 'utf-8'); ?>" placeholder="Senha de Acesso" />
     </div>
   </div>
 

   <div class="form-group form-inline">
    <div class="col-md-offset-3 col-md-4" style="padding-left:80px;">
      <br /><input type="submit" value="Atualizar" class="btn btn-success btn-md" />
      <a href="gerencia_usuario.php" class="btn btn-md btn-danger">Voltar<a/>
    </div>
  </div>
 <input type="hidden" name="MM_update" value="form1" />
<input type="hidden" name="id_usuario" value="<?php echo $row_editar_usuario['id_usuario']; ?>" />
</form>
</div><br />
<center><b><?php echo $msg;  ?></b></font></center>
<script>
  function somenteNumeros(num) {
      var er = /[^0-9.]/;
      er.lastIndex = 0;
      var senha = num;
      if (er.test(senha.value)) {
        senha.value = "";
        alert("Somente 8 números. Outros caracteres serão apagados!");
      }
  }
  </script>
<?php include 'footer.php';?> 
<?php
mysqli_free_result($editar_usuario);
?>
