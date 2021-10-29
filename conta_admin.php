<?php require_once('Connections/conn.php');
if (!isset($_SESSION)) {
session_start();
$nomeusuario = $_SESSION["MM_Username"];
$sql2 = mysqli_query($conexao,"SELECT * FROM usuario WHERE email = '$nomeusuario'"); 
}

$MM_authorizedUsers = "2";
$MM_donotCheckaccess = "false";


function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  
  $isValid = False; 

  if (!empty($UserName)) { 
  
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && false) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "conta_usuario.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($_SERVER['QUERY_STRING']) && strlen($_SERVER['QUERY_STRING']) > 0) 
  $MM_referrer .= "?" . $_SERVER['QUERY_STRING'];
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="estilo.css">
<title>:: Usuários a serem cadastrados ::</title>
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" type="text/css"/>
<script src="assets/js/jquery-3.1.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<script type="text/javascript">// <![CDATA[
/*var imageCount = 0;
var currentImage = 0;
var images = new Array();
 
images[0] = 'imagem/fundo1.jpg';
images[1] = 'imagem/fundo2.jpg';
images[2] = 'imagem/fundo3.jpg';

 
var preLoadImages = new Array();
for (var i = 0; i < images.length; i++)
{
   if (images[i] == "")
      break;
 
   preLoadImages[i] = new Image();
   preLoadImages[i].src = images[i];
   imageCount++;
}
 */
/*function startSlideShow()
{
   if (document.body && imageCount > 0)
   {
      document.body.style.backgroundImage = "url("+images[currentImage]+")";    
      document.body.style.backgroundAttachment = "fixed";
      document.body.style.backgroundRepeat = "repeat";
      document.body.style.backgroundPosition = "left top";
 
      currentImage = currentImage + 1;
      if (currentImage > (imageCount-1))
      { 
         currentImage = 0;
      }
      setTimeout('startSlideShow()', 4500);
   }
}
//startSlideShow();*/
// ]]></script>
<div class="navbar navbar-custom" style="margin-bottom: 0;" role="navigation">

        <div class="col-md-4">
            <div class="navbar-header pull-left">
                <a class="navbar-brand" href="#">
                   
                </a>
            </div>
        </div>
        <div class="col-md-5">
            <div class="navbar-header" style="padding-top: 15px; padding-bottom: 20px; padding-left:13px; text-align: center;">
                <div class="navbar-brand" style="text-align: center;">
                    <div style="color: white; font-size: 25px">Usuários a serem cadastrados</div>
                </div>
            </div>
        </div>

        <div class="navbar-header pull-right navbar-brand">
                         <label class="cima_adm_texto_login2" ><font color="#FFFFFF" face="Arial" size="3">Usuário:</font><br><center><?php print $nomeusuario; ?></center> </label> &nbsp;
                         <a href="logout.php"><img src="imagem/6055_32x32.png" border="0" style="padding-top: -40px;"></a>
                       <br>
                        </div>
</div>



    
 <div class="navbar navbar-default ">
            <div class="container-fluid container" style="padding-left:360px;">
                <div class="navbar-header">

                 <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="conta_admin.php">Início</a>
                    </li>

                </ul>
                
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuários
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li> <a href="cadastro_usuario.php">Cadastrar</a></li>
                                <li><a href="gerencia_usuario.php">Exibir Usuários</a></li>

                            </ul>
                        </li>

                    </ul>

                  

                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                
                                </li>

                            </ul>
                        </div>
                    </div>
        </div>

<footer class="navbar navbar-fixed-bottom pull-down text-center">
      <p>Copyright &copy; <?php echo date("Y");?></p>
  </footer>
</div>
</body>
</html>