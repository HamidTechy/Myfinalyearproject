<?php 
session_start();

include("header.php"); 
include("conection.php");

?>
<script language="Javascript">
function val()
{
	
if(confirm('Format the hard disk?'))
{
alert('You are very brave!');
}
else 
{
alert('A wise decision!')
}
      if(document.emp.txt1.value=="")
	{
		alert("Please enter userid");
		document.emp.txt1.focus();
		document.emp.txt1.select();
		return false;
	}
	else
	{
		return true;
	}	

}
</SCRIPT>
<section id="page">
<header id="pageheader" class="normalheader">
<h2 class="sitedescription">
  </h2>
</header>

<section id="contents">

<article class="post">
  <header class="postheader">
  <h2>All Subjects Details Here!!!!!</h2>
  </header>
  <section class="entry">

  
<form  method="POST" action="sresult.php" id="formID" name="form1" >

<table width="501" border="2">
  <tr>
  <th>Sr.</th>
    <th>Course ID </th>
    <th>Name </th>
    <th>Course ID</th>
	 <th>Lecturer ID</th>
	 <th>Subject Type </th>
    <th>Semester</th>
	 <th>Comment</th>
  </tr>
<?php
$ret=mysqli_query($con,"select * from subject");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

<tr>
  <td><?php echo $cnt;?></td>
  <td><?php  echo $row['subid'];?></td>
   <td><?php echo $row['subname'];?></td>
    <td><?php echo $row['courseid'];?></td>
  <td><?php echo $row['lecid'];?></td>
  <td><?php echo $row['subtype'];?></td>
    <td><?php echo $row['semester'];?></td>
  <td><?php echo $row['comment'];?></td>

  
</tr>
<?php 
$cnt=$cnt+1;
}?>
</table>
   <br>
 
</form>

<div class="clear"></div>
</section>
</article>


</section>



<?php
include("lecturemenu.php");
include("footer.php"); 

?>