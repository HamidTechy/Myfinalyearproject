<?php
include("validation.php");

include("conection.php");

$totcourse = mysqli_query($con,"SELECT * FROM lectures");
$result1 = mysqli_query($con,"SELECT * FROM course");
$totid = mysqli_num_rows($totcourse)+1;

if(isset($_POST['button']))
{
	$pwde = md5($_POST['password']);
$sql="INSERT INTO lectures (lecid, password,lecemail, courseid, lecname, address ,contactno)
VALUES
('$_POST[lecid]','$pwde','$_POST[lecemail]', '$_POST[course]',  '$_POST[lecname]', '$_POST[address]','$_POST[contactno]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysql_error());
  }
  else
  {
	  echo "Record inserted Successfully...";
  }
}



?> 
<form name="form1" method="post" action="" id="formID">
  <p>&nbsp;</p>
  <p>
    <label for="lecid">Lecturer ID&nbsp;&nbsp;&nbsp;</label>
    <input type="text" name="lecid" id="lecid"  readonly value="<?php echo $totid; ?>">
  </p>
  <p>
  <label for="lecname">Lecturer Name</label>
    <input type="text" name="lecname" id="lecname">
  </p>
  
  <p>
  <label for="lecemail">Lecturer Email</label>
    <input type="text" name="lecemail" id="lecemail" >
  </p>
  
  
  <p>
    <label for="password">Password</label>
    <input type="password" name="password" id="password"  >
  </p>
 
  <p>
    <label for="textfield2">Course </label>
    <select name="course" value="<?php echo $courseid; ?>">
      <option value="">Course Details</option>
      <?php
	  while($row1 = mysqli_fetch_array($result1))
  {
	  if($courseid  == $row1[courseid])
	  {
		  $selvar = "selected";
	  }
  echo "<option value='$row1[courseid]' ". $selvar . ">$row1[coursekey]</option>";
  $selvar ="";
  }
  ?>
  </select>
  </p>
  
 <p>
    <label for="textarea">Address</label>
    <textarea name="address" id="textarea" cols="45" rows="5"></textarea>
  </p>
  <p>
    <label for="contactno">Contact No</label>
    <input type="text" name="contactno" id="contactno">
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Submit"> 
      
    <input type="submit" name="button2" id="button2" value="Reset">
<form id="myform">
  <input type="button" value="Close" name="B1" onClick="parent.emailwindow.hide()" /></p>
</form>
  </p>
  <p>&nbsp;</p>
</form>
<a href='lectureview.php'><< Back </a>