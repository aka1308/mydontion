<?php 
if(isset($_GET['name'])){
	$name=$_GET['name'];
}else{
	$name = "Name not defined";
}
if(isset($_GET['email'])){
	$email=$_GET['email'];
}else{
	$email = "email not defined";
}
if(isset($_GET['donation_amount'])){
	$da=$_GET['donation_amount'];
}else{
	$da = "amt not defined";
}
if(isset($_GET['dropdown'])){
	$py=$_GET['dropdown'];
}else{
	$py = "type not defined";
}

//check input fields 

if (empty($name) || empty($email) || empty($da) || empty($py))
{
	echo "please fill all the necessary fields" ; 
}
else
{
	mail($email,"THANK YOU $name FOR YOUR HELP","PAYMENT AMOUNT - $da AND PAYMENT TYPE - $py");
	echo "<script type='text/javascript'>alert('A PAYMENT RECEIPT HAS BEEN SENT TO YOUR EMAIL');
            window.history.log(-1); 
			</script>";
}
?>