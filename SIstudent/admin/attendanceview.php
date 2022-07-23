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
  <h2>All Students Attendance</h2>
  </header>
  <section class="entry">

  
<form  method="POST" action="sresult.php" id="formID" name="form1" >

<table width="501" border="2">
  <tr>
    <th>Attendance ID </th>
    <th>Student ID </th>
    <th>Subject ID</th>
	 <th>Total Classes</th>
	 <th>Attended Classes</th>
    <th>Percentage</th>
	 <th>Comment</th>
	 
  </tr>
<?php
$ret=mysqli_query($con,"select * from attendance");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

<tr>

  <td><?php  echo $row['attid'];?></td>
   <td><?php echo $row['studid'];?></td>
    <td><?php echo $row['subid'];?></td>
  <td><?php echo $row['totalclasses'];?></td>
  <td><?php echo $row['attendedclasses'];?></td>
  <td><?php echo $row['percentage'];?></td>
    <td><?php echo $row['comment'];?></td>
  

  
</tr>
<?php 

}?>
</table>
   <br>
 
</form>

<div class="clear"></div>
</section>
</article>


</section>



<?php
include("adminmenu.php");
include("footer.php"); 

?>