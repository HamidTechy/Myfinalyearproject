
<?php
$course=$_REQUEST['course'];
include("conection.php");
$result = mysqli_query($con,"SELECT * FROM subject");

?>
<select name="subject">
<option>Select Subject</option>
<?  while($rows = mysqli_fetch_array($result))
   { ?>
<option value='<?=$rows['subid']?>'><?php echo $rows['subname']?></option>
<? } ?>
</select>
