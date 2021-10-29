<?php require_once('Connections/conn.php');?>
                                  
<?php $mensagemerro = "";

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
?> 
<?php 
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['email'])) {
  $loginUsername=$_POST['email'];
  $password=$_POST['senha'];
  $MM_fldUserAuthorization = "nivel_usuario";
  $MM_redirectLoginSuccess = "conta_admin.php";
  $MM_redirectLoginFailed = "#";
  $MM_redirecttoReferrer = false;
  mysqli_select_db($conexao, $db);
  	
  $LoginRS__query=sprintf("SELECT id_usuario, email, senha, nivel_usuario FROM usuario WHERE email=%s AND senha=%s",
  GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysqli_query($conexao,$LoginRS__query) or die(mysqli_error());
  $loginFoundUser = mysqli_num_rows($LoginRS);
  if ($loginFoundUser) {
    function mysqli_result($res, $row, $field=0) { 
      $res->data_seek($row);
      $datarow = $res->fetch_array();
      return $datarow[$field];
  }
    $loginStrGroup  = mysqli_result($LoginRS,0,'nivel_usuario');
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
	  $mensagemerro = "<font color=red><b>ATENÇÃO!</b><br>Por favor, verifique seu Email e Senha!</font>";
  }
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="estilo.css">
<link rel="stylesheet" href="bootstrap-3.3.6/css/bootstrap.min.css">

<marquee><title>:: MMLABS ::</title></marquee>
<style type="text/css">
  .navbar-default {
    background-color: #132b58;
    border-color: #132b58;
    height: 120px;
    margin-bottom: 0;
      border-radius: 0;
  }

  footer {
      background-color: #132b58;
      color: white;
      padding: 15px;
      height: 60px;
    }
	
  .botao_acesso {
    background-color: #132b58;
    border-color: #132b58;
  }
  </style>
</head>
<body><div class="navbar navbar-default" style="margin-bottom: 0;" role="navigation">

            <div class="col-md-4">
                <div class="navbar-header pull-left">
                    <a class="navbar-brand" href="#">
                       
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="navbar-header" style="padding-top: 32px; padding-left:-30px; text-align: center;">
                    <div class="navbar-brand" style="text-align: center;">
                        <div style="color: white; font-size: 28px">MMLABS</div>
                    </div>
                </div>
            </div>
            
        </div>

    
              

              <div class="container text-center">  
               <div><br><br><br><?php echo $mensagemerro; ?><br></div>
                <div id="loginbox" style="margin-top:35px;" class="mainbox col-md-4 col-md-offset-4 col-sm-9 col-sm-offset-2">                    
                  <div class="panel panel-info" >
                    <div class="panel-heading">
                      <div class="panel-title">Acesso ao Sistema</div>

                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                      <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                      <form ACTION="<?php echo $loginFormAction; ?>" METHOD="POST" name="form_login"> 

                        <div style="margin-bottom: 25px" class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                          <input id="email" type="text" class="form-control" name="email" value="" placeholder="Email">                                        
                        </div>

                        <div style="margin-bottom: 25px" class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                          <input id="senha" type="password" class="form-control" name="senha" placeholder="Senha">
                        </div>


                       <div style="margin-top:10px" class="form-group">
                          <!-- Button -->

                          <div class="col-md-12 controls">
                         <input name="button" type="submit" class="btn btn-success botao_acesso" id="button" value=" Acessar o Sistema ">

                          </div>
                        </div>


                      </form>     

                    </div>                     
                  </div>  
                </div>


              </div> 




              <footer class="navbar navbar-fixed-bottom pull-down text-center">
 
</footer>
</body>
</html>