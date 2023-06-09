<?php require_once('Connections/conexion.php'); ?>
<?php
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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO contacto (`NOMBRE Y APELLIDO`, DIRECCION, EMAIL, COMENTARIO) VALUES (%s, %s, %s, %s)",
                       GetSQLValueString($_POST['NOMBRE_Y_APELLIDO'], "text"),
                       GetSQLValueString($_POST['DIRECCION'], "text"),
                       GetSQLValueString($_POST['EMAIL'], "text"),
                       GetSQLValueString($_POST['COMENTARIO'], "text"));

  mysql_select_db($database_conexion, $conexion);
  $Result1 = mysql_query($insertSQL, $conexion) or die(mysql_error());
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>

<body>
<p><img src="imagenes}/FONDO.png" width="753" height="274" /></p>
<table width="1163" border="1">
  <tr>
    <td width="1153"><ul id="MenuBar1" class="MenuBarHorizontal">
      <li><a href="Index-1.html" class="MenuBarItemSubmenu">Inicio</a>
        <ul>
          <li><a href="Inicial.html">Informacion</a></li>
          <li><a href="QUIENES.html">Quienes somos</a></li>
          </ul>
        </li>
      <li><a class="MenuBarItemSubmenu" href="#">Ofrecemos</a>
        <ul>
          <li><a class="MenuBarItemSubmenu" href="PRODUCTOS.html">Productos</a>
            <ul>
              <li><a href="#">Elemento 3.1.1</a></li>
              <li><a href="#">Elemento 3.1.2</a></li>
              </ul>
            </li>
          </ul>
        </li>
      <li><a href="#" class="MenuBarItemSubmenu">Contacto</a>
        <ul>
          <li><a href="frm1.php">Formulario</a></li>
          <li><a href="contac.php">Contacto</a></li>
          </ul>
        </li>
    </ul></td>
</tr>
  <tr> </tr>
  <tr> </tr>
</table>
<p><img src="imagenes}/contacto.png" width="748" height="182" /></p>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table align="center">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">NOMBRE Y APELLIDO:</td>
      <td><input type="text" name="NOMBRE_Y_APELLIDO" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">DIRECCION:</td>
      <td><input type="text" name="DIRECCION" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">EMAIL:</td>
      <td><input type="text" name="EMAIL" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">COMENTARIO:</td>
      <td><textarea name="COMENTARIO" cols="32" rows="5"></textarea></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Insertar registro" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1" />
</form>
<p>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1992.4103814827492!2d-78.96176188155654!3d-2.8680406822503244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91cd1741f46653ad%3A0xf59ff2e8f031160a!2sPoliclinico%20Dr%20Jimmy%20Mej%C3%ADa%20Mu%C3%B1oz!5e0!3m2!1ses!2sec!4v1677601673541!5m2!1ses!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</p>
<table width="1166" border="1">
  <tr>
    <td width="967" bgcolor="#CCCCCC"><blockquote>
      <blockquote>
        <blockquote>
          <blockquote>
            <blockquote>
              <blockquote>
                <blockquote>
                  <blockquote>
                    <blockquote>
                      <blockquote>
                        <blockquote>
                          <p><em><strong>Tienda de accesorios-Dog World . </strong></em></p>
                        </blockquote>
                        <p align="center"><strong><em>Te ofrecemos gran variedad de productos.</em></strong></p>
                        <blockquote>
                          <p><strong><em> dogworld@gmail.com </em></strong></p>
                        </blockquote>
                      </blockquote>
                    </blockquote>
                  </blockquote>
                </blockquote>
              </blockquote>
            </blockquote>
          </blockquote>
        </blockquote>
      </blockquote>
    </blockquote></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp; </p>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>