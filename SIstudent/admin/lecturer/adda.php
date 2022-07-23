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
$sql="INSERT INTO attendance (studid, subid, totalclasses,attendedclasses,percentage, comment )
VALUES
('$_POST[studid]','$_POST[subject]','$_POST[totalclasses]','$_POST[attendedclasses]','$_POST[percentage]','$_POST[comment]')";

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
$reslec = mysqli_query($con,"SELECT * FROM studentdetails");



?> <center>
<form name="form1" method="post" action="" id="formID">
<h2>Add Student Attendence Here!!!!!</h2>
<table width="501" border="2">
<tr>
<td>
   <p>Student Id: </p></td>
   <td><p> <select name="studid" id="semester2" value="<?php echo $studid; ?>">
      <?php
 while($row1 = mysqli_fetch_array($reslec))
  {
  echo "<option value='$row1[studid]'>$row1[studid]</option>";
  }
  ?>
    </select>
  </p></td></tr>
  <tr><td> <p>
    <label for="textfield7">Subject :</label></p></td>
    <td><p><select name="subject" value="<?php echo $subid; ?>">
     <option value="">Subject Id</option>
     <?php
	  while($row1 = mysqli_fetch_array($result))
  {
	  if($subid  == $row1[subid])
	  {
		  $selvar = "selected";
	  }
  echo "<option value='$row1[subid]' ". $selvar . ">$row1[subid]</option>";
  $selvar ="";
  }
  ?>
    </select>
</p></td></tr>
  <tr><td><p>
    <label for="textfield2">Total Classes :</label></p></td>
    <td><p><input type="text" name="totalclasses" id="textfield2"  >
  </p></td></tr>
   <tr><td><p>
    <label for="textfield2">Attended Classes :</label></p></td>
    <td><p><input type="text" name="attendedclasses" id="textfield2"  >
  </p></td></tr>
  <tr><td><p>
    <label for="textfield2">Percentage :</label></p></td>
    <td><p><input type="text" name="percentage" id="textfield2"  >
  </p></td></tr>
  <tr><td><p>
    <label for="textarea">Comment :</label></p></td>
    <td><p><textarea name="comment" id="textarea" class="validate[required]" cols="25" rows="5"></textarea>
  </p></td></tr>

    
<tr><td></td>
  <td><p>
    <input type="submit" name="button" id="button" value="Submit">
    <input type="submit" name="button2" id="button2" value="Reset">  <form id="myform">
  <input type="button" value="Close" name="B1" onClick="parent.emailwindow.hide()" /></p></td></tr>
</form>
  </p>
</form></table>
<a href='lectureaccount.php'><< Back </a></center>