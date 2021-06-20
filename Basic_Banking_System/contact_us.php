<html>
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <title>Basic Banking System</title>
  <style>
body{background-image: url("img/original.jpg");

  width: 100%;
  height: 100vh;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;}
.form{width:340px;
      height:440px;
      background:rgba(230, 230, 230,0.7);
      border-radius:8px;
      box-shadow:0 0 40px -10px #000;
      margin:calc(50vh - 220px) auto;
      padding:20px 30px;
      max-width:calc(100vw - 40px);
      box-sizing:border-box;
      font-family:'Montserrat',sans-serif;
      position:relative}

h4{margin:10px 0;
   padding-bottom:10px;
   width:180px;
   color:#78788c;
   border-bottom:3px solid #78788c}




p:before{content:attr(type);
         display:block;
         margin:28px 0 0;
         font-size:14px;
         color:#5a5a5a}





div{content:'Hi';
    position:absolute;
    bottom:-15px;
    right:-20px;
    background:#50505a;
    color:#78788c;
    width:320px;
    padding:16px 4px 16px 0;
    border-radius:6px;
    font-size:13px;
     box-shadow:10px 10px 40px -14px #000}

span{margin:0 5px 0 15px}


</style>
</head>
<body>

 <?php
  include 'navbar.php';
  ?>

 <div class="form">
  <!--a href="home.html">Back</a-->
 <h4><b>Contact Us</b></h4>
 <p type="Name:"><h6><b>Prerana Raykar</b></h6></p>
 <p type="Email:"><h6><b>preranaraykar21@gmail.com</b></h6></p>
 <p type="Address:"><h6><b>Shrigonda,Maharashtra</b></h6></p>
  <div>
    <span class="fa fa-phone"></span>001 1023 567
    <span class="fa fa-envelope-o"></span>indianbank@co.in
  </div>
</div>


</body>
</html>