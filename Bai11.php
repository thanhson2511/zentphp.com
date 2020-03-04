<?php
	ini_set('display_errors',0); 
	if($_POST['button']){
		$a = isset($_POST['a']) ? $_POST['a'] : '';

		$b = isset($_POST['b']) ? $_POST['b'] : '';

		$c = isset($_POST['c']) ? $_POST['c'] : '';

		$message = '';
		
		if(!$a && !$b && !$c){
			$message = 'Mời bạn nhập đủ số cạnh';
		}else if( $a<$b+$c && $b<$a+$c && $c<$a+$b ){
	        if( $a*$a==$b*$b+$c*$c || $b*$b==$a*$a+$c*$c || $c*$c == $a*$a+$b*$b)
	            $message = "Tam giác vuông";
	        else if($a==$b && $b==$c)
	           $message = "Tam giác đều";
	        else if($a==$b || $a==$c || $b==$c)
	        	$message = "Tam giác đều";
	        else if($a*$a > $b*$b+$c*$c || $b*$b > $a*$a+$c*$c || $c*$c > $a*$a+$b*$b)    
	        	$message = "Tam giác tù";
	        else
	        	$message = "Tam giác nhọn";
    	}else $message = "3 cạnh a,b,c không thuộc 1 tam giác";
	}
?>
<form action="" method="POST" name="form" style=" margin: 100px 0 0 400px;">
	<table width="500" border="1">
		<tr>
			<td colspan="2" height="50" align="center" bgcolor="yellow"><em>NHẬN DẠNG TAM GIÁC</em></td>
		</tr>
		<tr>
			<td colspan="1" width="120" height="40" bgcolor="D9AC53"><div align="left">Cạnh 1:</div></td>
			<td colspan=""  width="220" bgcolor="#fff"><div align="center">
			<label for="txta"></label>
			<input type="text" name="a" id="txta" value=""/>
			</div></td>
		</tr>
		<tr>
			<td colspan="1" width="120" height="40" bgcolor="D9AC53"><div align="left">Cạnh 2:</div></td>
			<td colspan=""  width="220" bgcolor="#fff"><div align="center">
			<input type="text" name="b" id="txta" value=""/>
			</div></td>
		</tr>
		<tr>
			<td colspan="1" width="120" height="40" bgcolor="D9AC53"><div align="left">Cạnh 3:</div></td>
			<td colspan=""  width="220" bgcolor="#fff"><div align="center">
			<input type="text" name="c" id="txta" value=""/>
			</div></td>
		</tr>
		<tr>
			<td colspan="1" width="120" height="40" bgcolor="D9AC53"><div align="left">Loại tam giác:</div></td>
			<td colspan=""  width="220" bgcolor="#FFF"><div align="center">
			<?php echo $message ?>
			</div></td>
		</tr>
		<tr>
			<td colspan="2" width="120" height="40" bgcolor="D9AC53"><div align="center">
			<input type="submit" name="button" id="button" value="Nhận dạng"/></div></td>
		</tr>
		
	</table>
</form>