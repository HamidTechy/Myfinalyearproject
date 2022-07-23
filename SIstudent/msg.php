  <?php
  echo "hello";
  include('conection.php');

  if((isset($_POST['Submit'])))
{
  //fetching and storing the form data in variables
$Name = $con->real_escape_string($_POST['name']);
$Email = $con->real_escape_string($_POST['email']);
$Subject = $con->real_escape_string($_POST['subject']);
$Contact = $con->real_escape_string($_POST['contactno']);
$Message = $con->real_escape_string($_POST['message']);
$sql="INSERT INTO contact (name, emailid,contactno, subject, message) VALUES ('".$Name."','".$Email."','".$Contact."', '".$Subject."', '".$Message."')";
if(!$result = $con->query($sql)){
die('Error occured [' . $conn->error . ']');
}
else
   echo "Thank you! We will get in touch with you soon!!!------ <a href='home.php'>Back Home</a>";
}

 
	  ?>