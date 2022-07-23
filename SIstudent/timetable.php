<?php include("Sheader.php");
 include('conection.php');?>
<section id="page"><font color="#FFFFFF"></font>
<header id="pageheader" class="homeheader">
<h1 class="sitedescription"><h2>&nbsp;</h2></h1>
</header>


<article class="post">
<header class="postheader">
<h1><a href="#">Student Information System</a></h1><h3>&nbsp;</h3>
<h3><i>Time Table for All Classes.</i></h3>

<table width="501" border="2">
  <tr>
  <th width="136"><strong>Sr.</strong></th>
    <th width="136"><strong>Course</strong> </th>
    <th width="136"><strong>Semester</strong></th>
	<th width="136"><strong>Suject</strong> </th>
    <th width="136" ><strong>Time</strong></th>
	<th width="136"><strong>Days</strong></th>
    
	
  </tr>
<?php
$ret=mysqli_query($con,"select * from timetable");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

<tr>
  <td><?php echo $cnt;?></td>

   <td><?php echo $row['coursename'];?></td>
    <td><?php echo $row['semester'];?></td>
  <td><?php echo $row['submane'];?></td>
  <td><?php echo $row['time'];?></td>
    <td><?php echo $row['days'];?></td>

  </center>
</tr>

<?php 
$cnt=$cnt+1;
}?>
</table>

</header>


</article>

<div class="clear"></div>

<div class="clear"></div>
</section>
</div>
<?php include("footer.php"); ?>