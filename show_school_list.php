<?php
echo '<table border="1"> 
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
        <td>Date</td>
        
        
        
    </tr>';
$con = mysql_connect("sql210.byethost22.com", "b22_11314078", "fun123");
$db = mysql_select_db("b22_11314078_iesl", $con);
//$today = date("Y-m-d");

$sql = "select * from std_reg";
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
        <td>'. $row[school].'</td>
        <td>'. $row[principal].'</td>
        <td>'. $row[teacher].'</td>
        <td>'. $row[teacherno].'</td>
        <td>'. $row[mem1name].'</td>
        <td>'. $row[mem1grade].'</td>
        <td>'. $row[mem1email].'</td>
        <td>'. $row[mem1no].'</td>
        
        <td>'. $row[mem2name].'</td>
        <td>'. $row[mem2grade].'</td>
        <td>'. $row[mem2email].'</td>
        <td>'. $row[mem2no].'</td>
        
        <td>'. $row[mem3name].'</td>
        <td>'. $row[mem3grade].'</td>
        <td>'. $row[mem3email].'</td>
        <td>'. $row[mem3no].'</td>
        
        <td>'. $row[mem4name].'</td>
        <td>'. $row[mem4grade].'</td>
        <td>'. $row[mem4email].'</td>
        <td>'. $row[mem4no].'</td>
        
        <td>'. $row[mem5name].'</td>
        <td>'. $row[mem5grade].'</td>
        <td>'. $row[mem5email].'</td>
        <td>'. $row[mem5no].'</td>
        <td>'. $row[applied_date].'</td>';
        
        
        
   echo '</tr>';
  
  }
echo '</table>'


?>
