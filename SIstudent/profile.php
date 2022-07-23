<?php
include('conection.php');
include("validation.php");
include("sheader.php"); 
session_start();
if(!isset($_SESSION['std']))
{
	header("Location: index.php");
}
$id=$_SESSION['std'];
$res=mysqli_query($con,"SELECT * FROM studentdetails WHERE studid=$id;");
$Row=mysqli_fetch_array($res);
?>
<section id="page">
<header id="pageheader" class="normalheader">
<h2 class="sitedescription">
  </h2>
</header>

<section id="contents">

<article class="post">
  <header class="postheader">
  <h2>Your Account Details Here!!!!!</h2>
  </header>
  <section class="entry">

  
<form  method="POST" action="sresult.php" id="formID" name="form1" >
   <table width="400" border="2">
   <tr>
   <td>Student Id:</td>
   <td><?php echo $Row['studid']; ?></td>
    </tr>
	 <tr>
   <td> Name:</td>
   <td><?php echo $Row["studfname"]. " ". $Row["studlname"];?></td>
    </tr>
    <tr>
   <td>Father Name:</td>
   <td><?php echo $Row['fathername']; ?></td>
    </tr>
	 <tr>
   <td> Gender:</td>
   <td><?php echo $Row['gender']; ?></td>
    </tr>
	 <tr>
   <td>Address :</td>
   <td><?php echo $Row['address']; ?></td>
    </tr>
	 <tr>
   <td>Course Id:</td>
   <td><?php echo $Row['courseid']; ?></td>
    </tr>
	 <tr>
   <td>Semester :</td>
   <td><?php echo $Row['semester']; ?></td>
    </tr>
	 <tr>
   <td>Email :</td>
   <td><?php echo $Row['email']; ?></td>
    </tr>
	 <tr>
   <td> Date of Birth:</td>
   <td><?php echo $Row['dob']; ?></td>
    </tr>
   </table>
   <br>
   <p>
       <input name="Submit" value="View Study Details" id="submit" tabindex="3" type="submit" class="login100-form-btn">

   </p>
</form>

<div class="clear"></div>
</section>
</article>


</section>
<section id="sidebar">
<h2>Contact Us</h2>
<ul>
	<li>Please enter Name, Mail Id, contact Number, Subject, Message.</li>

</ul>
<h2>&nbsp;</h2>
</section>
<div class="clear"></div>

<div class="clear"></div>
</section>
</div>
<?php include("footer.php"); ?>