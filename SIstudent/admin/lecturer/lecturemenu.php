
<section id="sidebar">
<?php
//if(isset($_SESSION["userid"]))
{
?>
<h2>Lecturer Profile</h2>
<ul>
	<li>Lecture ID : <?php echo $_SESSION["userid"] ; ?></li>
    <li>Name : <?php echo $_SESSION["lecname"]; ?></li>

</ul>
<h2>Lecturer Menu</h2>
<ul>
	<li><a href="course.php">Course</a></li>
    <li><a href="subject1.php">Subject</a></li>
    <li><a href="lecturevieww.php">Lecture Profile</a></li>
	<li><a href="timetable.php">Class Timetable</a></li>
    <li><a href="student0.php">Student</a></li>
    <li><a href="sattandance.php">Attendance</a></li>
    <li><a href="exam1.php">Examination</a></li>

</ul>
<h2>Reports</h2>
<ul>
    <li><a href="adda.php">Attendance Report</a></li>
	<li><a href="addtimetable.php">Add Timetable</a></li>
    <li><a href="addexam.php">Examination Report</a></li>

</ul>

<h2><a href="logout.php">Logout</a></h2>
<?php
}
?>
</section>
<div class="clear"></div>

<div class="clear"></div>
</section>
</div>