<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nefeso</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="main.js"></script>


<a><img src="img/logo.PNG" style="height:50px;width:50px;margin-top:20px;float:left;"></a>
<a><img src="img/unknown.JPG" style="height:50px;width:50px;margin:auto;float:right;"></a>
<a><img src="img/facebook.PNG" style="height:50px;width:50px;margin:auto;float:right;"></a>
<a><img src="img/twitter.PNG" style="height:50px;width:50px;margin:auto;float:right;"> </a>



</head>
<br>
<br>
<br>
<br>

<style>
div.scrollmenu {
    background-color: #333;
    overflow: auto;
    white-space: nowrap;
    float:right;
}

div.scrollmenu a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px;
    text-decoration: none;
}

div.scrollmenu a:hover {
    background-color: #777;
}

* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
    height: 100%;
    margin: 0;
    font-family: Arial;
}

/* Style tab links */
.tablink {
    background-color: #555;
    color: white;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    width: 16.66%;
}

.tablink:hover {
    background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
    color: white;
    display: none;
    padding: 100px 20px;
    height: 100%;
}
.footer {
   
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #333;
  
}
   .column {
    float: left;
    width: 50%;
}

* {
    box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
    float: left;
    width: 33.33%;
    padding: 10px;
    height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
 
    content: "";
    display: table;
    clear: both;
}


</style>

<body>

    <div class="tablink" onclick="openPage('Home', this, 'green')" id="defaultOpen">Home</div>
    <div class="tablink" onclick="openPage('About', this, 'green')" >About Us</div>
    <div class="tablink" onclick="openPage('Contact', this, 'green')">Products/Services</div>
    <div class="tablink" onclick="openPage('loans', this, 'green')">Loans</div>
    <div class="tablink" onclick="openPage('Member', this, 'green')">Member</div>   
    <div class="tablink" onclick="openPage('News', this, 'green')">Newsletter</div>    

<div id="Home" class="tabcontent">
  <h3 style="color:#333">Home</h3>
  <p>Home is where the heart is..</p>
</div>

<div id="About" class="tabcontent">
  <h3 style="color:#333">About Us</h3>
  <p>Some news this fine day!</p> 
</div>

<div id="Contact" class="tabcontent">
  <h3 style="color:#333">Products/Services</h3>
  <p>Get in touch, or swing by for a cup of coffee.</p>
</div>

<div id="loans" class="tabcontent">
  <h3 style="color:#333">Loans</h3>
  <p>Get in touch, or swing by for a cup of coffee.</p>
</div>

<div id="Member" class="tabcontent">
  <h3 style="color:#333">Member</h3>
  <p>Get in touch, or swing by for a cup of coffee.</p>
</div>

<div id="News" class="tabcontent">
  <h3 style="color:#333">Newsletter</h3>
  <p>Get in touch, or swing by for a cup of coffee.</p>
</div>


<div class="footer">

                    <div class="row" style="margin-left:100px;">
                        <div class="column" >
                            <h2 style="color:#fff;">Contact Us</h2>
                            <a style="color:#fff;">Email</a><br>
                            <a style="color:#fff;">Phone</a><br>
                            
                        </div>

                        <div class="column" >
                            <h2 style="color:#fff;">Address</h2>
                            <a style="color:#fff;">Some text..</a><br>
                            <a style="color:#fff;">Some text..</a>
                        </div>

                        <div class="column" >
                            <h2 style="color:#fff;">Upcoming Events</h2>
                            <a style="color:#fff;">Some text..</a><br>
                            <a style="color:#fff;">Some text..</a>
                        </div>

<p style="color:#fff;margin-bottom:50px;">Copyright © 2018 Nefeso Sacco Limited. All Rights Reserved. Powered by Technicurly </p>

                    </div>
</div>



<script>
function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     


</body>
</html>