<?php

$robot = $_POST['robot'];
$school = $_POST['school'];
$address = $_POST['address'];
$principal = $_POST['principal'];
$teacher = $_POST['teacher'];
$teacherno = $_POST['teacherno'];

$mem1name = $_POST['mem1name'];
$mem1grade = $_POST['mem1grade'];
$mem1email = $_POST['mem1email'];
$mem1no = $_POST['mem1no'];

$mem2name = $_POST['mem2name'];
$mem2grade = $_POST['mem2grade'];
$mem2email = $_POST['mem2email'];
$mem2no = $_POST['mem2no'];

$mem3name = $_POST['mem3name'];
$mem3grade = $_POST['mem3grade'];
$mem3email = $_POST['mem3email'];
$mem3no = $_POST['mem3no'];

$mem4name = $_POST['mem4name'];
$mem4grade = $_POST['mem4grade'];
$mem4email = $_POST['mem4email'];
$mem4no = $_POST['mem4no'];

$mem5name = $_POST['mem5name'];
$mem5grade = $_POST['mem5grade'];
$mem5email = $_POST['mem5email'];
$mem5no = $_POST['mem5no'];





//"'.$robot."','".$school."','".$address."','".$principal."','".$teacher."','".$teacherno."','".$mem1name."','".$mem1grade."','".$mem1email."','".$mem1no."','".$mem2name."','".$mem2grade."','".$mem2email."','".$mem2no."','".$mem3name."','".$mem3grade."','".$mem3email."','".$mem3no."','".$mem4name."','".$mem4grade."','".$mem4email."','".$mem4no."','".$mem5name."','".$mem5grade."','".$mem5email."','".$mem5no.




$con = mysql_connect("192.248.8.3", "idea", "suneth");
$db = mysql_select_db("idea_challenge", $con);
$today = date("Y-m-d");

$sql = "INSERT INTO std_reg (robot,school,address,principal,teacher,teacherno,mem1name,mem1grade,mem1email,mem1no,mem2name,mem2grade,mem2email,mem2no,mem3name,mem3grade,mem3email,mem3no,mem4name,mem4grade,mem4email,mem4no,mem5name,mem5grade,mem5email,mem5no,applied_date) values('" . $robot . "','" . $school . "','" . $address . "','" . $principal . "','" . $teacher . "','" . $teacherno . "','" . $mem1name . "','" . $mem1grade . "','" . $mem1email . "','" . $mem1no . "','" . $mem2name . "','" . $mem2grade . "','" . $mem2email . "','" . $mem2no . "','" . $mem3name . "','" . $mem3grade . "','" . $mem3email . "','" . $mem3no . "','" . $mem4name . "','" . $mem4grade . "','" . $mem4email . "','" . $mem4no . "','" . $mem5name . "','" . $mem5grade . "','" . $mem5email . "','" . $mem5no . "','".$today."')";
//mysql_query($con, $sql);
if (!mysql_query($sql,$con)) {
  die('Error: ' . mysql_error());
}
//$row = mysql_fetch_array($result);
//echo $today;
echo "success";
?>