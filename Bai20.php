<?php 
  // ini_set('display_errors',0); 
  error_reporting(0);
  $array = array();
  $n = isset($_POST['n']) ? $_POST['n'] : '';
  $a = isset($_POST['a']) ? $_POST['a'] : '';
  $b = isset($_POST['b']) ? $_POST['b'] : '';
  $message - '';
  for ($i=1; $i < $n ; $i++) { 
    if($i%$a==0 && $i%$b==0) array_push($array, $i);
  }
  if(empty($array))
  	$message = "Không có số nào";
  else{
  	foreach($array as $i){
  		$message = $message.' '.$i;
  	} 
  }
?>


<form id="form" name="form" method="POST" action="">
  <div align="center">
    <table width="500" border="1">
      <tr>
        <td colspan="2" bgcolor="#6495E9"><div align="center">
          <h3><em>SỐ CHIA HẾT CHO A VÀ B</em></h3>
        </div></td>
      </tr>
      <tr>
        <td width="200" bgcolor="#ACC9FA"><div align="center">Nhập N :</div></td>
        <td width="350" bgcolor="#ACC9FA"><label for="a"></label>
          <div align="center">
            <input name="n" type="text" id="a" value="" size="50" />
        </div></td>
      </tr>
     <tr>
        <td width="200" bgcolor="#ACC9FA"><div align="center">Nhập A :</div></td>
        <td width="350" bgcolor="#ACC9FA"><label for="a"></label>
          <div align="center">
            <input name="a" type="text" id="a" value="" size="50" />
        </div></td>
      </tr>
      <tr>
        <td width="200" bgcolor="#ACC9FA"><div align="center">Nhập B :</div></td>
        <td width="350" bgcolor="#ACC9FA"><label for="a"></label>
          <div align="center">
            <input name="b" type="text" id="a" value="" size="50" />
        </div></td>
      </tr>
      <tr>
        <td height="40" colspan="2" bgcolor="#6495E9"><div align="center">
          <input type="submit" name="button" id="button" value="Các số <= N chia hết cho A và cho B" />
        </div></td>
      </tr>
      <tr>
        <td colspan="2" width="350" bgcolor="#ACC9FA"><label for="a"></label>
          <div align="center">
            <?php
            	$message
            ?>
        </div></td>
      </tr>
    </table>
  </div>
</form>

