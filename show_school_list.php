<?php
echo '<table> 
    <tr>
        <td>robot</td>
        <td>school</td>
        <td>principal</td>
        <td>teacher</td>
        <td>teacherno</td>
        <td>mem1name</td>
        <td>mem1grade</td>
        <td>mem1email</td>
        <td>mem1no</td>
        
        <td>mem2name</td>
        <td>mem2grade</td>
        <td>mem2email</td>
        <td>mem2no</td>
        
        <td>mem3name</td>
        <td>mem3grade</td>
        <td>mem3email</td>
        <td>mem3no</td>
        
        <td>mem4name</td>
        <td>mem4grade</td>
        <td>mem4email</td>
        <td>mem4no</td>
        
        <td>mem5name</td>
        <td>mem5grade</td>
        <td>mem5email</td>
        <td>mem5no</td>
        
        
        
    </tr>';
$con = mysql_connect("localhost", "idea_challenge", "Xhallenge0099-123Zx");
$db = mysql_select_db("idea_challenge", $con);
$today = date("Y-m-d");

$sql = "INSERT INTO und_reg (robot,university,mem1name,mem1index,mem1dept,mem1sem,mem1email,mem1no,mem2name,mem2index,mem2dept,mem2sem,mem2email,mem2no,mem3name,mem3index,mem3dept,mem3sem,mem3email,mem3no,mem4name,mem4index,mem4dept,mem4sem,mem4email,mem4no,mem5name,mem5index,mem5dept,mem5sem,mem5email,mem5no,applied_date) values('" . $robot . "','" . $university . "','" . $mem1name . "','" . $mem1index . "','" . $mem1dept . "','" . $mem1sem . "','" . $mem1email . "','" . $mem1no . "','" . $mem2name . "','" . $mem2index . "','" . $mem2dept . "','" . $mem2sem . "','" . $mem2email . "','" . $mem2no . "','" . $mem3name . "','" . $mem3index . "','" . $mem3dept . "','" . $mem3sem . "','" . $mem3email . "','" . $mem3no . "','" . $mem4name . "','" . $mem4index . "','" . $mem4dept . "','" . $mem4sem . "','" . $mem4email . "','" . $mem4no . "','" . $mem5name . "','" . $mem5index . "','" . $mem5dept . "','" . $mem5sem . "','" . $mem5email . "','" . $mem5no . "','" . $today . "')";
//mysql_query($con, $sql);
$result=mysql_query($sql, $con);
if (!$result) {
    die('Error: ' . mysql_error());
}
while($row = mysql_fetch_array($result))
  {
  
  echo '
    <tr>
        <td>'. $row[robot].'</td>
        <td>'. $row[school.'</td>
        <td>'. $row[principal.'</td>
        <td>'. $row[teacher.'</td>
        <td>'. $row[teacherno.'</td>
        <td>'. $row[mem1name.'</td>
        <td>'. $row[mem1grade.'</td>
        <td>'. $row[mem1email.'</td>
        <td>'. $row[mem1no.'</td>
        
        <td>'. $row[mem2name.'</td>
        <td>'. $row[mem2grade.'</td>
        <td>'. $row[mem2email.'</td>
        <td>'. $row[mem2no.'</td>
        
        <td>'. $row[mem3name.'</td>
        <td>'. $row[mem3grade.'</td>
        <td>'. $row[mem3email.'</td>
        <td>'. $row[mem3no.'</td>
        
        <td>'. $row[mem4name.'</td>
        <td>'. $row[mem4grade.'</td>
        <td>'. $row[mem4email.'</td>
        <td>'. $row[mem4no.'</td>
        
        <td>'. $row[mem5name.'</td>
        <td>'. $row[mem5grade.'</td>
        <td>'. $row[mem5email.'</td>
        <td>'. $row[mem5no.'</td>';
        
        
        
   echo </tr>';
  
  }
echo '</table>'


?>
