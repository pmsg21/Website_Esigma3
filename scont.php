<?
session_start();

$name=trim($_POST['nombre']);
$email=trim($_POST['correo']);
$message=trim($_POST['mensaje']);
$time=time();

// Validar
if ($name==''){
	echo '<script type="text/javascript">alert("El campo nombre es obligatorio!");window.history.back();</script>';
}
else if ($email==''){
	echo '<script type="text/javascript">alert("El campo e-mail es obligatorio!");window.history.back();</script>';
}
else if ($message==''){
	echo '<script type="text/javascript">alert("El campo mensaje es obligatorio!");window.history.back();</script>';
}

else{

    
    
	

	$messagethk = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Untitled Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<style>
	a:link {
	  color: #FFF;
	  text-decoration: none;
	  text-align:center;
	}
	a:visited {
	  text-decoration: none;
	  color: #FFF;
	  text-align:center;
	}
	a:hover {
	  text-decoration: none;
	  color: #FFF;
	  text-align:center;
	}
	a:active {
	  text-decoration: none;
	  color: #FFF;
	  text-align:center;
	}

	</style>
	</head>

	<body>
	<table width="100%" border="0" cellspacing="3" cellpadding="0">
	  <tr>
		<td width="20%"><img src="http://www.esigma3.com/ElectronicaSigma3.png" width="270" height="105" /></td>
		<td width="80%" align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-family: Verdana, Geneva, sans-serif; font-size: 18px; color: #000">Contacto Electrónica SIGMA 3 C.A.</span></td>
	  </tr>
	  <tr>
		<td colspan="2">&nbsp;</td>
	  </tr>
	  <tr>
		<td colspan="2" style="font-size:15px; font-family:Verdana, Geneva, sans-serif; color: #666;">Estimado/a '.$name.':</td>
	  </tr>
	  <tr>
		<td colspan="2" style="font-size:15px; font-family:Verdana, Geneva, sans-serif; color: #666;"><p>Nos complace mucho su interes en los servicios y/o productos de Electrónica SIGMA 3 C.A. :</p>
		  <p>Hemos recibido su consulta y en un corto tiempo un agente de servicio se contactara con usted para brindarle toda la información.      </p>
		  <p>Electrónica SIGMA 3 C.A. <br />
		(58+ 412 986 20 86) & (58+ 412 997 96 97)</p>
		<p><a href="mailto:'.$emailsigma.'" style="font-family: Verdana, Geneva, sans-serif; color: #666">'.$emailsigma.'</a></p></td>
	  </tr>
	  <tr>
		<td colspan="2" >
		  <hr>
		</td>
	  </tr>
	  <tr>
		<td colspan="2" align="center" style="font-size:11px; font-family:Verdana, Geneva, sans-serif; color: #666;">Electrónica SIGMA 3 C.A.</td>
	  </tr>
	</table>
	<p>&nbsp;</p>
	</body>
	</html>

	';

	$message = '
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Untitled Document</title>
	</head>
	<body>
	<p>Mensaje recibido:</p>
	<p>Nombre: '.$name.'</p>
	<p>Email: '.$email.'</p>
	<p>Mensaje: </p>
	<p>'.$message.'</p>
	</body>
	</html>

	';

	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

	// Additional headers
	$headers .= 'From: info@esigma3.com' . "\r\n";

	$subjecthk="Información de contacto recibida | Electrónica SIGMA 3 C.A.";

	$subjec="Contacto de usuario recibido | Electrónica SIGMA 3 C.A.";

	mail($email, $subjecthk, $messagethk, $headers);
	//mail($emailadmin, $subjec, $message, $headers);
	//mail($emailto, $subjec, $message, $headers);
    
    // Config. del Site
    $emailsigma = "pmsg21@gmail.com";
	mail($emailsigma, $subjec, $message, $headers);
	header ("Location: index.html");
}
?>