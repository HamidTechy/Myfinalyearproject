<?php
include("validation.php");
include("conection.php");
	

if(isset($_POST["button"]))
{
$sql="INSERT INTO studentdetails (studid, studfname, studlname, email, password, dob, fathername, gender, address, contactno ,courseid, semester)
VALUES
('$_POST[studid]', '$_POST[studfname]','$_POST[studlname]','$_POST[email]','$_POST[password]','$_POST[dob]','$_POST[fname]','$_POST[gender]','$_POST[address]','$_POST[contact]','$_POST[course]','$_POST[semester]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysql_error());
  }
  else
  {
	  echo "Record inserted Successfully...";
  }
}





$result1 = mysqli_query($con,"SELECT * FROM course");



?> 
<form name="form1" method="post" action="" id="formID">
  <p>
    <label for="textfield">Student ID</label>
    <input type="text" name="studid" id="textid">
  </p>
  <p>
    <label for="textfield2">First Name</label>
    <input type="text" name="studfname" id="textfname">
  </p>
  <p>
    <label for="textfield3">Last Name</label>
    <input type="text" name="studlname" id="textlname">
  </p>
  
  <p>
    <label for="textfield3">Email</label>
    <input type="text" name="email" id="textemail">
  </p>
  
  <p>
    <label for="textfield3">Password</label>
    <input type="text" name="password" id="textlpassword">
  </p>
  
  <p>
    <label for="textfield4">Date of Birth</label>
        <script src="datetimepicker_css.js"></script>
              <input type="Text" name="dob" id="textdob" maxlength="25" size="25">
        <img src="images2/cal.gif" onclick="javascript:NewCssCal('textdob')" style="cursor:pointer"/>
  </p>
  <p>
    <label for="textfield5">Father's Name</label>
    <input type="text" name="fname" id="textfield5" >
  </p>
  <p>Gender
        <input type="text" name="gender" id="textfield5">
   
  </p>
  <p>
    <label for="textarea">Address</label>
    <textarea name="address" id="textarea" cols="45" rows="5"></textarea>
  </p>
  <p>
    <label for="textfield6">Contact No. </label>
    <input type="text" name="contact" id="textfield6" ">
  </p>
  <p>
    <label for="textfield7">Course </label>
    <select name="course" value="">
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
    <label for="textfield8">Semester</label>
    <label for="select"></label>
    <select name="semester" id="select" value="<?php echo $semester; ?>">
      <option value="1">First Semester</option>
      <option value="2">Second Semester</option>
      <option value="3">Third Semester</option>
      <option value="4">Fourth Semester</option>
      <option value="5">Fifth Semester</option>
      <option value="6">Sixth Semester</option>
    </select>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Submit">
    <input type="submit" name="button2" id="button2" value="Reset">
    <form id="myform">
  <input type="button" value="Close" name="B1" onClick="parent.emailwindow.hide()" /></p>
</form>
  </p>
</form>
<p>&nbsp;</p>
<a href='student.php'><< Back </a>