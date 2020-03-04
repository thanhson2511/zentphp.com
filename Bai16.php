<?php
	ini_set('display_errors',0); 
	function check($n){
		if ($n % 2 == 0){
        	return true;
    	}
    	else {
        	return false;
        }
	}

	if($_POST['button']){
		$num1 = isset($_POST['a']) ? $_POST['a'] : '';

		$num2 = isset($_POST['b']) ? $_POST['b'] : '';

		$tong = 0;

		$tich = 1;

		$tongChan = 0;

		$tongLe = 0;

		if(!$num1 && !$num2){
			$message = "Mời bạn nhập đủ thông tin!";
		}else{
			$message = "Khoảng từ " .$num1. " đến " .$num2;
			for ($i=$num1; $i <= $num2 ; $i++) { 
				$tong += $i;
				$tich *= $i;
				if(check($i)){
					$tongChan += $i;
				}else{
					$tongLe += $i;
				}
			}

		}

	}
?>
<form action="" method="POST" name="form" style=" margin: 100px 0 0 400px;">
	<table width="500" border="1">
		<tr>
			<td colspan="2" height="50" align="center" bgcolor="yellow"><em>TÍNH TOÁN TRÊN DÃY SỐ</em></td>
		</tr>
		<tr>
			<td colspan="1" width="120" height="40" bgcolor="D9AC53"><div align="left">Giới hạn của dãy số:</div></td>
			<td colspan=""  width="220" bgcolor="#fff">
				<div align="center">
					<label for="a">Số bắt đầu:</label>
					<input type="text" name="a" value="" style="width: 50px;" />
					<label for="b">Số kết thúc:</label>
					<input type="text" name="b" value="" style="width: 50px;"/>
				</div>
			</td>
		</tr>
		<tr>
			<td style="color: red;">Kết quả</td>
			<td style="text-align: center;"><?php echo $message ?></td>
		</tr>
		<tr>
			<td colspan="1" width="120" height="40" bgcolor="D9AC53"><div align="left">Tổng các số:</div></td>
			<td colspan=""  width="220" bgcolor="#fff"><div align="center">
			<?php echo '<input type="text" value="'.$tong.'" readonly />' ?>
			</div></td>
		</tr>
		<tr>
			<td colspan="1" width="120" height="40" bgcolor="D9AC53"><div align="left">Tích các số:</div></td>
			<td colspan=""  width="220" bgcolor="#fff"><div align="center">
			<?php echo '<input type="text" value="'.$tich.'" readonly />' ?>
			</div></td>
		</tr>
		<tr>
			<td colspan="1" width="120" height="40" bgcolor="D9AC53"><div align="left">Tổng số chẵn:</div></td>
			<td colspan=""  width="220" bgcolor="#fff"><div align="center">
			<?php echo '<input type="text" value="'.$tongChan.'" readonly />' ?>
			</div></td>
		</tr>
		<tr>
			<td colspan="1" width="120" height="40" bgcolor="D9AC53"><div align="left">Tổng số lẻ:</div></td>
			<td colspan=""  width="220" bgcolor="#fff"><div align="center">
			<?php echo '<input type="text" value="'.$tongLe.'" readonly />' ?>
			</div></td>
		</tr>
		<tr>
			<td colspan="2" width="120" height="40" bgcolor="D9AC53"><div align="center">
			<input type="submit" name="button" id="button" value="Tính toán"/></div></td>
		</tr>		
	</table>
</form>