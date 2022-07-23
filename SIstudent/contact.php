<?php
include("validation.php");
include("header.php"); 
?>
<section id="page">
<header id="pageheader" class="normalheader">
<h2 class="sitedescription">
  </h2>
</header>

<section id="contents">

<article class="post">
  <header class="postheader">
  <h2>Contact us</h2>
  </header>
  <section class="entry">

  
<form  method="POST" action="msg.php"id="formID" name="form1" >
   <p class="textfield">
       <input name="name" id="name" value="" size="22" tabindex="1" type="text" >
          <label for="author">
             <small>Name (required)</small>
          </label>
   </p>
   <p class="textfield">
       <input name="email" id="email" value="" size="22" tabindex="2" type="text" >
          <label for="email">
              <small>Student Class. (will not be published) required)</small>
          </label>
   </p>
   <p class="textfield">
       <input name="contactno" id="contact" value="" size="22" tabindex="3" type="text" >
          <label for="url1">
             <small>Student RollNo.</small>
          </label>
   </p>
     <p>
    <label for="textfield8">Selected Day</label>
    <label for="select"></label>
    <select name="subject" id="select"">
      <option value="Monday 09:00 to 11:00"> Monday 09:00 to 11:00</option>
      <option value="Tueday 09:00 to 11:00">Tueday 09:00 to 11:00</option>
      <option value="Wednesday 09:00 to 11:00">Wednesday 09:00 to 11:00</option>
      <option value="Thursday 09:00 to 11:00">Thursday 09:00 to 11:00</option>
      <option value="Firday 08:30 to 10:00">Firday 08:30 to 10:00</option>
    </select>
  </p>
   <p>
       <small><strong>Meeting Perpose</strong></small>
   :</p>
   <p class="text-area">
       <textarea name="message" id="message" class="validate[required]"  cols="50" rows="10" tabindex="4"></textarea>
   </p>
   <p>
       <input name="Submit" value="Submit" id="submit" tabindex="5" type="submit" class="login100-form-btn">

   </p>
</form>

<div class="clear"></div>
</section>
</article>


</section>
<section id="sidebar">
<h2>Contact Us</h2>
<ul>
	<li>Please enter Name, Stuent Rollno., Sudent Class, Time, Meeting Perpose.</li>

</ul>
<h2>&nbsp;</h2>
</section>
<div class="clear"></div>

<div class="clear"></div>
</section>
</div>
<?php include("footer.php"); ?>