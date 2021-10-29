<?php require_once('Connections/conn.php'); require_once('verificalogin.php');

mysqli_set_charset($conexao,"utf8");
$defaultTimeZone='UTC';
date_default_timezone_set('America/Sao_Paulo');
$id = $_SESSION['MM_Username'];
$sql = mysqli_query($conexao,"SELECT * FROM usuario  WHERE email = '".$id."'")or die ("".mysqli_error());
while ($row = mysqli_fetch_array($sql)){
  $id_usuario = $row['id_usuario'];
  $nomeusuario = $row['nm_usuario']; 
}


if (!function_exists("GetSQLValueString")) {
  function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
  {
    if (PHP_VERSION < 6) {
      $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
    }

    $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

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

$maxRows_usuario = 10;
$pageNum_usuario = 0;
if (isset($_GET['pageNum_usuario'])) {
  $pageNum_usuario = $_GET['pageNum_usuario'];
}
$startRow_usuario = $pageNum_usuario * $maxRows_usuario;

//<?php
$maxRows_usuario = 5;
$pageNum_usuario = 0;
if (isset($_GET['pageNum_usuario'])) {
  $pageNum_usuario_amtt = $_GET['pageNum_usuario'];
}
$startRow_usuario = $pageNum_usuario * $maxRows_usuario;

//<?php
$maxRows_usuario = 5;
$pageNum_usuario = 0;
if (isset($_GET['pageNum_usuario'])) {
  $pageNum_usuario= $_GET['pageNum_usuario'];
}
$startRow_usuario = $pageNum_usuario * $maxRows_usuario;

//mysql_select_db($database_amtt, $amtt);
$query_usuario = "SELECT id_usuario, nm_usuario, email, senha FROM usuario ORDER BY id_usuario ASC";
$query_limit_usuario = sprintf("%s LIMIT %d, %d", $query_usuario, $startRow_usuario, $maxRows_usuario);
$usuario = mysqli_query($conexao,$query_limit_usuario) or die(mysqli_error());
$row_usuario = mysqli_fetch_assoc($usuario);

if (isset($_GET['totalRows_usuario'])) {
  $totalRows_usuario = $_GET['totalRows_usuario'];
} else {
  $all_usuario = mysqli_query($conexao,$query_usuario);
  $totalRows_usuario = mysqli_num_rows($all_usuario);
}
$totalPages_usuario = ceil($totalRows_usuario/$maxRows_usuario)-1;

$currentPage = $_SERVER["PHP_SELF"];

$queryString_usuario_amtt = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_usuario") == false && 
        stristr($param, "totalRows_usuario") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_usuario = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_usuarioo = sprintf("&totalRows_usuario=%d%s", $totalRows_usuario, $queryString_usuario);
?>
<?php include 'header.php';?> 

<form class="form-horizontal">

             <div class="form-group form-inline">
              <label class="col-md-4 control-label"></label>
              <div class="col-md-6" style="padding-left:80px;">

                <img src="imagem/gerenciar.png" width="45" height="45" />
                <label class="control-label"><h3>Usuários Cadastrados</h3></label><br />
              </div>

            </div>
          </form>

        
    <div class="cointainer col-md-8 col-md-offset-2 col-md-8 col-sm-offset-2" >
            <table class="table table-striped table-bordered text-center" >
              <tr>
                <td><b>ID</b></td>
                <td><b>Nome Completo</b></td>
                <td><b>Email</b></td>
                <td><b>Senha</b></td>
                <td><b>Gerenciar</b></td>
              </tr>


              <?php do { ?>
              <tr>
                <td><?php echo $row_usuario['id_usuario']; ?></td>
                <td ><p><?php echo $row_usuario['nm_usuario']; ?></p></td>
                <td ><?php echo $row_usuario['email']; ?></td>
                <td ><?php echo $row_usuario['senha']; ?></td>
                <td ><a href="editar_usuario.php?id_usuario=<?php echo $row_usuario['id_usuario']; ?>"><img src="imagem/editar.png" /></a>
                &nbsp;&nbsp;&nbsp;&nbsp;

                    <a href="excluir_usuario.php?id_usuario=<?php echo $row_usuario['id_usuario']; ?>"><img src="imagem/excluir.png" /></a>
                  </td>
   
                  </tr>

                  <?php } while ($row_usuario = mysqli_fetch_assoc($usuario)); ?>
                </table>
              </div><center><div class="container"><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    <table border="0" align="center">
      <tr>
        <td width="62" align="center"><?php if ($pageNum_usuario > 0) { // Show if not first page ?>
            Primeira<br /><a href="<?php printf("%s?pageNum_usuario=%d%s", $currentPage, 0, $queryString_usuario); ?>"><img src="First.gif" /></a>
            <?php } // Show if not first page ?></td>
      <td width="71" align="center"><?php if ($pageNum_usuario > 0) { // Show if not first page ?>
            Anterior<br /><a href="<?php printf("%s?pageNum_usuario=%d%s", $currentPage, max(0, $pageNum_usuario - 1), $queryString_usuario); ?>"><img src="Previous.gif" /></a>
            <?php } // Show if not first page ?></td>
      <td width="60" align="center"><?php if ($pageNum_usuario< $totalPages_usuario) { // Show if not last page ?>
            Próxima<br /><a href="<?php printf("%s?pageNum_usuario=%d%s", $currentPage, min($totalPages_usuario_amtt, $pageNum_usuario + 1), $queryString_usuario); ?>"><img src="Next.gif" /></a>
            <?php } // Show if not last page ?></td>
      <td width="82" align="center"><?php if ($pageNum_usuario< $totalPages_usuario) { // Show if not last page ?>
           Última<br /><a href="<?php printf("%s?pageNum_usuario=%d%s", $currentPage, $totalPages_usuario, $queryString_usuario_amtt); ?>"><img src="Last.gif" /></a>
            <?php } // Show if not last page ?></td>
      </tr>
    </table></div></center>
<?php include 'footer.php';?> 
<?php
mysqli_free_result($usuario);
 ?>
