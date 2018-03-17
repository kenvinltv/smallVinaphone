<?php
	require_once "checklogin.php";
	if (isset($_POST['btnSitemap'])==true){		
		require_once "sett_seo_ajax.php";
		header("location:main.php?p=sett_seo");
	}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
	<table border="1" align="center" cellpadding="4" cellspacing="0">
		<tr><td colspan="2" align="center">SEO</td></tr>
		<tr>
			<td width="100">Sitemap</td>
			<td><input type="submit" name="btnSitemap" id="btnOK" value="Tạo"></td>
		</tr>
	</table>
</form>
