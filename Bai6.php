<?php
	ini_set('display_errors',0); 
	if($_POST['button']){
		$value = isset($_POST['a']) ? $_POST['a'] : '';

		$message = '';

		if($value < 11){
			$message = "Chào buổi sáng";
		}else if($value >= 11 && $value <= 13){
			$message = "Chào buổi trưa";
		}else if ($value > 13 && $value <= 5) {
			$message = "Chào buổi chiều";
		}else $message = "Chào buổi tối";

	}
?>
<form id="form" name="form" method="POST" action="">
  <div align="center">
    <table width="500" border="1">
      <tr>
        <td colspan="2" bgcolor="#6495E9"><div align="center">
          <h1><strong>Chào Theo Giờ</strong></h1>
        </div></td>
      </tr>
      <tr>
        <td width="200" bgcolor="#ACC9FA"><div align="center">Nhập giờ :</div></td>
        <td width="350" bgcolor="#ACC9FA"><label for="a"></label>
          <div align="center">
            <input name="a" type="text" id="a" value="" size="50" />
        </div></td>
      </tr>
      <tr>
        <td height="" colspan="2" bgcolor="#ACC9FA"><div align="center">
			<?php echo $message ?>
        </div></td>
      </tr>
      <tr>
        <td height="40" colspan="2" bgcolor="#6495E9"><div align="center">
          <input type="submit" name="button" id="button" value="Chào" />
        </div></td>
      </tr>
    </table>
  </div>
</form>
