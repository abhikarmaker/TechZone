<?php 
include("./include/header.php");
?>
<?php 
$reg = @$_POST['reg'];
$fn = "";
$ln = "";
$un = "";
$em = "";
$em2 = "";
$pw = "";
$pw2 = "";
$u_check = "";
$fn = strip_tags(@$_POST['fname']);
$ln = strip_tags(@$_POST['lname']);
$un = strip_tags(@$_POST['uname']);
$em = strip_tags(@$_POST['email']);
$em2 = strip_tags(@$_POST['cemail']);
$pw = strip_tags(@$_POST['pass']);
$pw2 = strip_tags(@$_POST['cpass']);

if(isset($reg)){
	if($em==$em2){
		$u_check = mysqli_query($con,"Select uname from form where uname = '$un'");
		$row = mysqli_num_rows($u_check);
		if($row == 0){
			if($fn&&$ln&&$un&&$em&&$em2&&$pw&&$pw2){
				if($pw==$pw2){
					if(strlen($un)>25 || strlen($fn)>25 || strlen($ln)>25){
						echo "The maximum limit for username/firstname/lastname is 25 character";
					}
					else
					{
						if(strlen($pw)>30 || strlen($pw)<5){
							echo "Your password must be between 5 and 30 character long.";
						}
						else{
							//$pw = md5($pw);
							//$pw2 = md5($pw2);
							$query= mysqli_query($con,"insert into form values('','$fn','$ln','$un','$em','$em2','$pw','$pw2')");
							echo "<h2>Welcome to social networking.</h2> Login to your account to get started ...";
						}
					}
				}
				else {
					echo "Your password doesnot match";
				}
			}
			else{
				echo "Please fill in all the fields";
			}
		}
		else{
			echo "Username already taken ...";
		}
	}else{
	echo "Your email dont match!";
	}
}
?>
  <body>
  <center><h1><u style="color:red">DATABASE AND RESPONSIVE</u></h1></center>
  		<div style="width:800px;margin:0px auto 0px auto;">
		<table>
			<tr>
				<td width="40%" valign="top">
					<h2 style="color:red">Sign Up Below!</h2>
					<form action="" method="POST">
						<input type="text" name="fname" size="25" placeholder="Firstname" /><br /><br />
						<input type="text" name="lname" size="25" placeholder="Lastname"/><br /><br />
						<input type="text" name="uname" size="25" placeholder="Username"/><br /><br />
						<input type="text" name="email" size="25" placeholder="Email"/><br /><br />
						<input type="text" name="cemail" size="25" placeholder="Confirm Email"/><br /><br />
						<input type="text" name="pass" size="25" placeholder="Password"/><br /><br />
						<input type="text" name="cpass" size="25" placeholder="Confirm Password"/><br /><br />
						<input type="submit" name="reg" value="Sign Up" style="color:red"/>
					</form>
				</td>
			</tr>
		</table>
		</div>
		
			<!-- Bootstrap core JavaScript   -> 
	<-- ================================================== -->   
<!-- Placed at the end of the document so the pages load faster -->

	<script src="assets/js/classie.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/smoothscroll.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>