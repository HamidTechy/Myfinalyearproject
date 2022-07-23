
<!doctype html>

<html lang="en-US">
<head>
<meta charset="UTF-8" />
<title>Student Information System</title>

<link href="style.css" rel="stylesheet" type="text/css">
<link href="styles/print/main.css" rel="stylesheet" type="text/css" media="print">
<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--[if IE 6]>
<script src="js/belatedPNG.js"></script>
<script>
	DD_belatedPNG.fix('*');
</script>
<![endif]-->

<script type="text/javascript">

function Openeditcourse(a)
{
	var links = "courseinsert.php?slid=" + a + "&view=course";
  var ReturnedValue = showModalDialog(links,"Passed String","dialogWidth:450px; dialogHeight:400px; status:no; center:yes");
	//alert("Modal Dialog returned '" + ReturnValued + "'");
}

</script>
</head>

<body>
<div id="wrap">

<section id="top">
<nav id="mainnav">
<h1 id="sitename" class="logotext">
<a href="lectureaccount.php">SI Systems</a>
</h1>

</nav>
</section>
