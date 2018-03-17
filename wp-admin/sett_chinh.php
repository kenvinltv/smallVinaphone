<?php
  require_once "checklogin.php";
  require_once "class_quantri.php";
  $qt =  new quantri;
  $sanpham = $qt->DetailSetting();
  $row_sanpham = mysql_fetch_assoc($sanpham);
  if (isset($_POST['btnOK'])==true){
    $qt ->SuaSetting();
    header("location:main.php?p=sett_chinh");
  }
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
<table border="1" align="center" cellpadding="4" cellspacing="0">
<tr> <td colspan="2" align="center">SETTING PAGE</td> </tr>
<tr><td width="100">Phone</td>
     <td><input type="text" name="Phone" id="Phone" value="<?php echo $row_sanpham['Phone'] ?>"></td>
</tr>
<tr><td width="100">Facebook</td>
     <td><input type="text" name="UrlFace" id="UrlFace" value="<?php echo $row_sanpham['UrlFace'] ?>"></td>
</tr>
<tr><td width="100">Google +</td>
     <td><input type="text" name="UrlGlus" id="UrlGlus" value="<?php echo $row_sanpham['UrlGlus'] ?>"></td>
</tr>
<tr><td width="100">Twitter</td>
     <td><input type="text" name="UrlTwis" id="UrlTwis" value="<?php echo $row_sanpham['UrlTwis'] ?>"></td>
</tr>
<tr><td colspan="2" align="center"><input type="submit" name="btnOK" id="btnOK" value="Sửa">

</tr>
</table>
</form>
