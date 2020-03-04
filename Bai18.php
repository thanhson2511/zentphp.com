<form action="" method="POST" name="form" style=" margin: 100px 0 0 400px;">
	<table width="500" border="1">
		<tr>
			<td colspan="2" height="50" align="center" bgcolor="yellow"><em>IN BẢNG CỬU CHƯƠNG</em></td>
		</tr>
		<tr>
			<td colspan="1" width="120" height="40" bgcolor="D9AC53"><div align="left">Bắt đầu từ:</div></td>
			<td colspan=""  width="220" bgcolor="#fff"><div align="center">
			<label for="txta"></label>
			<input type="text" name="a" id="txta" value=""/>
			</div></td>
		</tr>
		<tr>
			<td colspan="1" width="120" height="40" bgcolor="D9AC53"><div align="left">Kết thúc tại:</div></td>
			<td colspan=""  width="220" bgcolor="#fff"><div align="center">
			<input type="text" name="b" id="txta" value=""/>
			</div></td>
		</tr>
		<tr>
			<td colspan="2" width="120" height="40" bgcolor="D9AC53"><div align="center">
			<input type="submit" name="button" id="button" value="In bảng cửu chương"/></div></td>
		</tr>
		
	</table>
</form>





<table border="1px" style=" margin: 10px 0 0 400px;">
<tr>
<?php
	error_reporting(0);
	if($_POST['button']){
		$num1 = isset($_POST['a']) ? $_POST['a'] : '';

		$num2 = isset($_POST['b']) ? $_POST['b'] : '';

		if($num1 > 0 && $num1 <= 10){
			if($num1 > 0 && $num1 <= 10){
				for($i = $num1; $i <= $num2; $i ++) {
					echo "<td>";
					for($j = 1; $j <= 10; $j ++) {
						echo "$i x $j = " . ($i * $j);
						echo "<br>";
					}
					echo "</td>";
				}
			}
		}
		else echo "Mời nhập trong khoảng 0 - 10";
	}
?>
</tr>
</table>
