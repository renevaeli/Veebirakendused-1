<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
  <title>My first styled page</title>
  <link rel="stylesheet" href="CSS1.css">

<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>

</head>





<body onload="startTime()">

<!-- Site navigation menu -->
<ul class="navbar">
  <li><a href="index.html">Home page</a>
  <li><a href="musings.html">Musings</a>
  <li><a href="town.html">My town</a>
  <li><a href="links.html">Links</a>
</ul>

<!-- Main content -->
<h1>My first styled page</h1>

<p>Welcome to my styled page!

<p>It lacks images, but at least it has style.
And it has links, even if they don't go
anywhere&hellip;

<p>There should be more here, but I don't know
what yet.

<!-- Sign and date the page, it's only polite! -->
<address>2016<br>
  by Rene.</address>

<h2>Kass</h2>
<img src="kitten.jpg" alt="Kass" style="width:304px;height:228px;">

</body>

<?php
echo 'Current PHP version: ' . phpversion();
echo phpversion('tidy');
?>

<div id="txt"></div>

</html>