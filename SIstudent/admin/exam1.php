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
  <h2>Examination Details</h2>
  </header>
  <section class="entry">

  
<form  method="POST" action="sresult.php" id="formID" name="form1" >

<table width="501" border="2">
  <tr>
    <th>Exam ID </th>
    <th>Student ID </th>
    <th>Subject ID</th>
	 <th>Cource ID</th>
	 <th>Internal Type</th>
    <th>Maximum Marks</th>
	 <th>Scored</th>
	 <th>Percentage</th>
    <th>Result</th>
	 <th>Comment</th>
	 <th>Action</th>
	 
  </tr>
<?php
$ret=mysqli_query($con,"select * from examination");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

<tr>

  <td><?php  echo $row['examid'];?></td>
   <td><?php echo $row['studid'];?></td>
    <td><?php echo $row['subid'];?></td>
  <td><?php echo $row['courseid'];?></td>
  <td><?php echo $row['internaltype'];?></td>
  <td><?php echo $row['maxmarks'];?></td>
    <td><?php echo $row['scored'];?></td>
	<td><?php echo $row['percentage'];?></td>
  <td><?php echo $row['result'];?></td>
    <td><?php echo $row['comment'];?></td>
  <td> <a href='exam1.php?slid=<?php echo $row["examid"]; ?>&view=delete'><img src='images/delete.png' width='32' height='32'  onclick="return confirm('Are you sure??')"/></a></td>

  
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