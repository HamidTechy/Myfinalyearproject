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
  <h2>All Students Details Here!!!!!</h2>
  </header>
  <section class="entry">

  
<form  method="POST" action="sresult.php" id="formID" name="form1" >

<table width="501" border="2">
  <tr>
    <th>Student ID </th>
    <th>Name </th>
    <th>Father Name</th>
	 <th>Gender</th>
	 <th>Address</th>
    <th>Contact No</th>
	 <th>Cource ID</th>
	 <th>Semester</th>
	 <th>DOB</th>
    <th>Email</th>
	
  </tr>
<?php
$ret=mysqli_query($con,"select * from studentdetails");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

<tr>

  <td><?php  echo $row['studid'];?></td>
   <td><?php echo $row['studfname'].''.$row['studlname'];?></td>
    <td><?php echo $row['fathername'];?></td>
  <td><?php echo $row['gender'];?></td>
  <td><?php echo $row['address'];?></td>
  <td><?php echo $row['contactno'];?></td>
    <td><?php echo $row['courseid'];?></td>
  <td><?php echo $row['semester'];?></td>
  <td><?php echo $row['dob'];?></td>
  <td><?php echo $row['email'];?></td>
  

  
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
include("lecturemenu.php");
include("footer.php"); 

?>