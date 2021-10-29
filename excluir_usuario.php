<?php require_once('Connections/conn.php'); require_once('verificalogin.php');

$iduserpass = $_GET['id_usuario'];
$iduserpass2 = mysqli_query($conexao,"SELECT * FROM usuario WHERE id_usuario = '".$iduserpass."'")or die ("".mysql_error());
while ($row2 = mysqli_fetch_array($iduserpass2)){
  $id_usuario2 = $row2['id_usuario'];
  $nomeusuario2 = $row2['email']; 
}


mysqli_set_charset($conexao,"utf8");
$defaultTimeZone='UTC';
date_default_timezone_set('America/Sao_Paulo');

$msg = "";

$id = $_SESSION['MM_Username'];
$sql = mysqli_query($conexao,"SELECT * FROM usuario WHERE email = '".$id."'")or die ("".mysql_error());
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

 // $theValue = function_exists("mysql_real_escape_string") ? mysqli_real_escape_string($theValue) : mysqli_escape_string($theValue);

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
  return $theValue;
}
}

if ((isset($_POST['id_usuario'])) && ($_POST['id_usuario'] != "") && (isset($_GET['id_usuario']))) {
  $deleteSQL = sprintf("DELETE FROM usuario WHERE id_usuario=%s",
                       GetSQLValueString($_POST['id_usuario'], "int"));

//  mysql_select_db($database_amtt, $amtt);
  
  if($Result1 = mysqli_query($conexao,$deleteSQL) or mysql_error()) {//NO MEU CASO, o único erro que eu sei que pode dar por enquanto é o 1602 (Duplicate do UNIQUE)
  echo "<br><script language='javascript'> history.go(-2); alert('USUÁRIO DELETADO COM SUCESSO!');</script>";//Alerta que já existe e retorna para o form sem enviar os dados
                exit;
        };        
          
  $deleteGoTo = "#";
               
        
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}

$colname_excluirusuario = "-1";
if (isset($_GET['id_usuario'])) {
  $colname_excluirusuario = $_GET['id_usuario'];
}
//mysql_select_db($database_amtt, $conexao);
$query_excluirusuario = sprintf("SELECT * FROM usuario WHERE id_usuario = %s", GetSQLValueString($colname_excluirusuario, "int"));
$excluirusuario = mysqli_query($conexao,$query_excluirusuario) or die(mysql_error());
$row_excluirusuario = mysqli_fetch_assoc($excluirusuario);
$totalRows_excluirusuario = mysqli_num_rows($excluirusuario);
?>
<?php include 'header.php';?> 

 <div class="container" style="padding-left:290px;"><br /><br /><br /><br /><br />
  <form class="form-horizontal" role="form" id="form1" name="form1" method="post" action="">
    <div class="form-group">
      <label class="control-label col-md-8"><h3>Tem certeza que deseja excluir o usuário <b><i><?php echo $nomeusuario2;?></i></b> ?</h3></label>
    </div>
    <div class="form-group form-inline">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-4" style="padding-left:20px;">
               <input type="submit" name="button" id="button" class="btn btn-md btn-success" value="Excluir" />&nbsp;<a href="gerencia_usuario.php" class="btn btn-md btn-danger">Voltar<a/>
            </div>
          </div>
<input type="hidden" name="id_usuario"  id="id_usuario" value="<?php echo $_GET['id_usuario'];?>"/>   
     
  </form>
</div>
<?php include 'footer.php';?> 

<?php
mysqli_free_result($excluirusuario);
?>

