<?php
require_once('Connections/conn.php');
require_once('verificalogin.php');
$defaultTimeZone='UTC';
date_default_timezone_set('America/Sao_Paulo');
$id = $_SESSION['MM_Username'];
$sql = mysqli_query($conexao,"SELECT * FROM usuario WHERE email = '".$id."'") or die("".mysqli_error());
while ($row = mysqli_fetch_array($sql)) {
    $id_usuario = $row['id_usuario'];
    $nomeusuario = $row['email'];
    $nivel = $row['nivel_usuario'];
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" type="text/css"/>
    <title>::Usuários::</title>
    <script src="assets/js/jquery-3.1.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="jquery.maskedinput-1.3.min.js"></script>
    <script type="text/javascript" src="selection.js"></script>
</head>
<body class="footer-padding">
    <div class="navbar navbar-custom" style="margin-bottom: 0;" role="navigation">

        <div class="col-md-4">
            <div class="navbar-header pull-left">
                <a class="navbar-brand" href="#">
                </a>
            </div>
        </div>
        <div class="col-md-5">
            <div class="navbar-header" style="padding-top: 15px; padding-bottom: 20px; padding-left:13px; text-align: center;">
              
                    <div style="color: white; font-size: 25px"></div>
                </div>
            </div>Usuários 
        </div>

        <div class="navbar-header pull-right navbar-brand">
            <label class="cima_adm_texto_login2" ><font color="#FFFFFF" face="Arial" size="3">Usuário:</font><br><center><?php print $nomeusuario; ?></center></label> &nbsp;
            <a href="logout.php"><img src="imagem/6055_32x32.png" border="0" style="padding-top: -20px;"></a>
        </div>

    </div>



    <div class="navbar navbar-default ">
        <?php if ($nivel == 0) { ?>
            <div class="container-fluid container" style="padding-left:420px;">
                <div class="navbar-header">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="conta_usuario.php">Início</a>
                        </li>
                    </ul>
        <?php } elseif ($nivel == 2) { ?>
            <div class="container-fluid container" style="padding-left:360px;">
                <div class="navbar-header">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="conta_admin.php">Início</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuários<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="cadastro_usuario.php">Cadastrar</a>
                                </li>
                                <li>
                                    <a href="gerencia_usuario.php">Exibir Usuários</a>
                                </li>
                            </ul>
                        </li>
                     </ul>
                </div>
            </div>
        <?php }   ?>
        
        
    </div>
