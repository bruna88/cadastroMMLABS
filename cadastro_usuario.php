<?php require_once('Connections/conn.php'); require_once('verificalogin.php');

$msg = "";

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
  return $theValue;
}
}
$msg="";
mysqli_select_db($conexao, $db);
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}
if(isset($_POST['email'])){ 

  #Recebe o Email Postado
  $emailPostado = $_POST['email'];

  #Conecta banco de dados 
  $con = mysqli_connect("localhost", "root", "", "contas");
  $sql = mysqli_query($con, "SELECT * FROM usuario WHERE email = '{$emailPostado}'") or print mysql_error($con);

  #Se o retorno for maior do que zero, diz que já existe um.
  if(mysqli_num_rows($sql)>0)
 
  $msg = "<b><font color=red size=3px>ATENÇÃO: <br>Email já cadastrado, verifique e tente novamente!!</font></b>";
  else 
  
     // echo json_encode(array('email' => 'Usuário valido.' )); 


if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO usuario (nm_usuario, email, senha) VALUES (%s, %s, %s)",
                       GetSQLValueString($_POST['nm_usuario'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['senha'], "int")
                       );
                       mysqli_select_db($conexao,"contas");
  if($Result1 = mysqli_query($conexao,$insertSQL) or die (mysqli_error($conexao))){
   $msg = "<b><font color=green size=5px>Usuário cadastrado com Sucesso!!</font></b>";
  }else{
    $msg="Erro";
  }
}


//if (mysqli_error($conexao)){
  // $msg = "<b><font color=red size=3px>ATENÇÃO: <br>Email já cadastrado, verifique e tente novamente!!</font></b>";
  }


  
 ?>
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

  <?php include 'header.php';?>
<div class="container" style="padding-left:440px;">
                                <img src="imagem/add.png" width="45" height="45" />
                                <label class="control-label"><h3>Cadastro de Usuários</h3></label>
                              </div>
<div class="container" style="padding-left:185px;">
                          <form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1" class="form-horizontal">
                            <div class="form-group form-inline">
                              <label class="col-md-4 control-label"></label>
                            </div>
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="nm_usuario">Nome Completo: </label>
                              <div class="col-md-3">
                               <input type="text" class="form-control input-md" name="nm_usuario"  placeholder="Nome e Sobrenome" />
                             </div>
                           </div>
                           <div class="form-group">
                            <label class="col-md-4 control-label"  for="email">Email: </label>
                            <div class="col-md-3">
                             <input class="form-control input-md" type="email" name="email" placeholder="Login de Acesso" />
                           </div>
                         </div>
                         <div class="form-group">
                          <label class="col-md-4 control-label" for="senha" >Senha(8 números): </label>
                          <span class="lnr lnr-eye"></span>
                          <div class="col-md-3">
                           <input type="password" class="form-control input-md" onkeyup="somenteNumeros(this);" minlength="4"
       maxlength="8" size="8" name="senha" id="senha"  placeholder="Senha de Acesso" />
                         </div>
                       </div>
                       <div class="form-group">
                        <label class="col-md-4 control-label" for="senha" >Confirmar Senha: </label>
                        <div class="col-md-3">
                           <label for="senha"></label>
                           <span id="sprypassword1">
                         <input type="password" class="form-control input-md" inputmode="numeric" minlength="4"
       maxlength="8" size="8" name="senha" id="confirm_senha"  placeholder="Digite novamente sua Senha" />
                          <span class="passwordRequiredMsg"></span></span>
                       </div>
                     </div>
                     <div class="form-group">
                      <div class="col-md-offset-4 col-md-6" style="padding-left:30px;">
                        <button type="submit" class="btn btn-success btn-lg" >Cadastrar</button>
                        <input type="hidden" name="MM_insert" value="form1" />
                      </div>
                    </div>
                  </form>
</div>
<div class="container" style="padding-left:390px;"><?php echo $msg; ?></div>

<script type="text/javascript">
var senha = document.getElementById("senha")
  , confirm_senha = document.getElementById("confirm_senha");

function validateSenha(){
  if(senha.value != confirm_senha.value) {
    confirm_senha.setCustomValidity("Senhas diferentes!");
  } else {
    confirm_senha.setCustomValidity('');
  }

}
senha.onchange = validateSenha;
confirm_senha.onkeyup = validateSenha;
//var sprypassword1 = new Spry.Widget.ValidationPassword("senha",{minChars: 6, minAlphaChars: 1, validateOn:["change"]});

</script>

<?php include 'footer.php';?>
