<?php
echo '<table border="1"> 
    <tr>
        <td>robot</td>
        <td>university</td>
        
        
        <td>mem1name</td>
        <td>mem1index</td>
        <td>mem1dept</td>
        <td>mem1sem</td>
        <td>mem1email</td>
        <td>mem1no</td>
        
        <td>mem2name</td>
        <td>mem2index</td>
        <td>mem2dept</td>
        <td>mem2sem</td>
        <td>mem2email</td>
        <td>mem2no</td>
        
        <td>mem3name</td>
        <td>mem3index</td>
        <td>mem3dept</td>
        <td>mem3sem</td>
        <td>mem3email</td>
        <td>mem3no</td>
        
        <td>mem4name</td>
        <td>mem4index</td>
        <td>mem4dept</td>
        <td>mem4sem</td>
        <td>mem4email</td>
        <td>mem4no</td>
        
        <td>mem5name</td>
        <td>mem5index</td>
        <td>mem5dept</td>
        <td>mem5sem</td>
        <td>mem5email</td>
        <td>mem5no</td>
        
        <td>Date</td>       
    </tr>';
$con = mysql_connect("sql210.byethost22.com", "b22_11314078", "fun123");
$db = mysql_select_db("b22_11314078_iesl", $con);
//$today = date("Y-m-d");

$sql = "select * from und_reg";
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
        <td>'. $row[university].'</td>
        
        <td>'. $row[mem1name].'</td>
        <td>'. $row[mem1index].'</td>
        <td>'. $row[mem1dept].'</td>
        <td>'. $row[mem1sem].'</td>
        <td>'. $row[mem1email].'</td>
        <td>'. $row[mem1no].'</td>
        
        <td>'. $row[mem2name].'</td>
        <td>'. $row[mem2index].'</td>
        <td>'. $row[mem2dept].'</td>
        <td>'. $row[mem2sem].'</td>
        <td>'. $row[mem2email].'</td>
        <td>'. $row[mem2no].'</td>
        
        <td>'. $row[mem3name].'</td>
        <td>'. $row[mem3index].'</td>
        <td>'. $row[mem3dept].'</td>
        <td>'. $row[mem3sem].'</td>
        <td>'. $row[mem3email].'</td>
        <td>'. $row[mem3no].'</td>
        
        <td>'. $row[mem4name].'</td>
        <td>'. $row[mem4index].'</td>
        <td>'. $row[mem4dept].'</td>
        <td>'. $row[mem4sem].'</td>
        <td>'. $row[mem4email].'</td>
        <td>'. $row[mem4no].'</td>
        
        <td>'. $row[mem5name].'</td>
        <td>'. $row[mem5index].'</td>
        <td>'. $row[mem5dept].'</td>
        <td>'. $row[mem5sem].'</td>
        <td>'. $row[mem5email].'</td>
        <td>'. $row[mem5no].'</td>
        
        <td>'. $row[applied_date].'</td>';
        
        
        
   echo '</tr>';
  
  }
echo '</table>'


?>
