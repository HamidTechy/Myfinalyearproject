<?php
include("validation.php");
include("conection.php");

if(isset($_POST["button"]))
{
$sql="INSERT INTO timetable ( coursename,submane,semester,time,days)
VALUES
('$_POST[coursename]','$_POST[subname]','$_POST[semester]','$_POST[starttime]','$_POST[days]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysql_error());
  }
  else
  {
	  echo "Record inserted Successfully...";
  }
}



$result = mysqli_query($con,"SELECT * FROM subject");
$result1 = mysqli_query($con,"SELECT * FROM course");



?> <center>
<form name="form1" method="post" action="" id="formID">
<h2>Add Class Timetable</h2>
<table width="501" border="2">
<tr>
    </select>
  </p></td></tr>
  <tr><td> <p>
    <label for="textfield7">Subject :</label></p></td>
    <td><p><select name="subname" value="<?php echo $subname; ?>">
     
     <?php
	  while($row1 = mysqli_fetch_array($result))
  {
	  if($subname  == $row1[subname])
	  {
		  $selvar = "selected";
	  }
  echo "<option value='$row1[subname]' ". $selvar . ">$row1[subname]</option>";
  $selvar ="";
  }
  ?>
  
  
  </select>
</p></td></tr>
  <tr><td><p>
    <label for="textfield2">Day :</label></p></td>
    <td><p><input type="text" name="days" id="textfield2"  >
  
 </p></td></tr>
  <tr><td><p>
    <label for="textfield2">Cource :</label></p></td>
     <td><p><select name="coursename" value="<?php echo $coursekey; ?>">
     
     <?php
	  while($row1 = mysqli_fetch_array($result1))
  {
	  if($courseid  == $row1[courseid])
	  {
		  $selvar = "selected";
	  }
  echo "<option value='$row1[coursekey]' ". $selvar . ">$row1[coursekey]</option>";
  $selvar ="";
  }
  ?>
  
  
  </select>
</p></td></tr>
  
  <tr><td><p>
    <label for="textfield2">Semester :</label></p></td>
    <td><p><input type="text" name="semester" id="textfield2"  >
  </p></td></tr>
   
   <tr><td><p>
    <label for="textfield2">Lecture Start:</label></p></td>
    <td><p><input type="text" name="starttime" id="textfield2"  >
  </p></td></tr>
  
   <td><p>
    <input type="submit" name="button" id="button" value="Submit">
    <input type="submit" name="button2" id="button2" value="Reset">  <form id="myform">
  <input type="button" value="Close" name="B1" onClick="parent.emailwindow.hide()" /></p></td></tr>
</form>
  </p>
</form></table>
<a href='lectureaccount.php'><< Back </a></center>