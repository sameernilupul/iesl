<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


////////////////////////////
$robot = $_POST['robot'];
$university = $_POST['university'];

$mem1name = $_POST['mem1name'];
$mem1index = $_POST['mem1index'];
$mem1dept = $_POST['mem1dept'];
$mem1sem = $_POST['mem1sem'];
$mem1email = $_POST['mem1email'];
$mem1no = $_POST['mem1no'];

$mem2name = $_POST['mem2name'];
$mem2index = $_POST['mem2index'];
$mem2dept = $_POST['mem2dept'];
$mem2sem = $_POST['mem2sem'];
$mem2email = $_POST['mem2email'];
$mem2no = $_POST['mem2no'];

$mem3name = $_POST['mem3name'];
$mem3index = $_POST['mem3index'];
$mem3dept = $_POST['mem3dept'];
$mem3sem = $_POST['mem3sem'];
$mem3email = $_POST['mem3email'];
$mem3no = $_POST['mem3no'];

$mem4name = $_POST['mem4name'];
$mem4index = $_POST['mem4index'];
$mem4dept = $_POST['mem4dept'];
$mem4sem = $_POST['mem4sem'];
$mem4email = $_POST['mem4email'];
$mem4no = $_POST['mem4no'];

$mem5name = $_POST['mem5name'];
$mem5index = $_POST['mem5index'];
$mem5dept = $_POST['mem5dept'];
$mem5sem = $_POST['mem5sem'];
$mem5email = $_POST['mem5email'];
$mem5no = $_POST['mem5no'];
////////////////////////////
//'" . $robot . "','" . $university . "','" . $mem1name . "','" . $mem1index . "','" . $mem1dept . "','" . $mem1sem . "','" . $mem1email . "','" . $mem1no . "','" . $mem2name . "','" . $mem2index . "','" . $mem2dept . "','" . $mem2sem . "','" . $mem2email . "','" . $mem2no . "','" . $mem3name . "','" . $mem3index . "','" . $mem3dept . "','" . $mem3sem . "','" . $mem3email . "','" . $mem3no . "','" . $mem4name . "','" . $mem4index . "','" . $mem4dept . "','" . $mem4sem . "','" . $mem4email . "','" . $mem4no . "','" . $mem5name . "','" . $mem5index . "','" . $mem5dept . "','" . $mem5sem . "','" . $mem5email . "','" . $mem5no
////////////////,,///////
$con = mysql_connect("sql210.byethost22.com", "b22_11314078", "fun123");
$db = mysql_select_db("b22_11314078_iesl", $con);
$today = date("Y-m-d");

$sql = "INSERT INTO und_reg (robot,university,mem1name,mem1index,mem1dept,mem1sem,mem1email,mem1no,mem2name,mem2index,mem2dept,mem2sem,mem2email,mem2no,mem3name,mem3index,mem3dept,mem3sem,mem3email,mem3no,mem4name,mem4index,mem4dept,mem4sem,mem4email,mem4no,mem5name,mem5index,mem5dept,mem5sem,mem5email,mem5no,applied_date) values('" . $robot . "','" . $university . "','" . $mem1name . "','" . $mem1index . "','" . $mem1dept . "','" . $mem1sem . "','" . $mem1email . "','" . $mem1no . "','" . $mem2name . "','" . $mem2index . "','" . $mem2dept . "','" . $mem2sem . "','" . $mem2email . "','" . $mem2no . "','" . $mem3name . "','" . $mem3index . "','" . $mem3dept . "','" . $mem3sem . "','" . $mem3email . "','" . $mem3no . "','" . $mem4name . "','" . $mem4index . "','" . $mem4dept . "','" . $mem4sem . "','" . $mem4email . "','" . $mem4no . "','" . $mem5name . "','" . $mem5index . "','" . $mem5dept . "','" . $mem5sem . "','" . $mem5email . "','" . $mem5no . "','" . $today . "')";
//mysql_query($con, $sql);
if (!mysql_query($sql, $con)) {
    die('Error: ' . mysql_error());
}
//$row = mysql_fetch_array($result);
//echo $today;
echo "success";
?>
