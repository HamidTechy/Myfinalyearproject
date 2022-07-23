<?php
include("validation.php");
include("conection.php");

$totcourse = mysqli_query($con,"SELECT * FROM subject");
$totid = mysqli_num_rows($totcourse);
 while($row1 = mysqli_fetch_array($totcourse))
  {
$totid = $row1[0]+1;
  }
if(isset($_POST["button"]))
{
$sql="INSERT INTO subject (subid, subname, comment, courseid ,subtype, semester)
VALUES
('$_POST[subid]','$_POST[subname]','$_POST[comment]','$_POST[course]','$_POST[subtype]','$_POST[semester]')";

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
$reslec = mysqli_query($con,"SELECT * FROM lectures");



?> 
<form name="form1" method="post" action="" id="formID">
  <p>
    <label for="textfield">Subject ID</label>
    <input type="text" name="subid" id="textfield" class="validate[required] text-input" value="<?php echo $totid; ?>" readonly>
  </p>
  <p>
    <label for="textfield2">Sub Name</label>
    <input type="text" name="subname" id="textfield2" class="validate[required,custom[onlyLetterSp]] text-input" >
  </p>
  <p>
    <label for="textarea">Comment</label>
    <textarea name="comment" id="textarea" class="validate[required]" cols="25" rows="5"></textarea>
  </p>
 <p>
    <label for="textfield7">Course </label>
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
    <label for="select">Subject Type</label>
    <select name="subtype" id="select" value="<?php echo $subtype; ?>">
      <option value="Language">Language</option>
      <option value="Theory">Theory</option>
      <option value="Lab">Lab</option>
    </select>
  </p>
  <p>
    <label for="select2">Semester</label>
    <select name="semester" id="semester" value="<?php echo $semester; ?>">
      <option value="1">First Semester</option>
      <option value="2">Second Semester</option>
      <option value="3">Third Semester</option>
      <option value="4">Fourth Semester</option>
      <option value="5">Fifth Semester</option>
      <option value="6">Sixth Semester</option>
    </select>
  </p>
  <p>Lecture 
    <select name="semester2" id="semester2" value="<?php echo $lecid; ?>">
      <?php
 while($row1 = mysqli_fetch_array($reslec))
  {
  echo "<option value='$row1[lecid]'>$row1[lecname]</option>";
  }
  ?>
    </select>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Submit">
    <input type="submit" name="button2" id="button2" value="Reset">  <form id="myform">
  <input type="button" value="Close" name="B1" onClick="parent.emailwindow.hide()" /></p>
</form>
  </p>
</form>
<a href='subject.php'><< Back </a>