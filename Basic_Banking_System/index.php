 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index_button.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <title>Basic Banking System</title>
    <style>
       button{
		background-color:#8cbed6;
	}
	body
	{
		text-align:center;
	}
		body{
		background-image:url("img/11.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
   </style>
  </head>

  <body>
 
 <?php
  include 'navbar.php';
  ?>
               
     <div id="header">
       <br>
       <h1 style=" font-family:Agency FB; font-size: 70px; color:#00ff00;text-shadow: 2px 2px black;"> Sparks Foundation Internship Project </h1>
       <h2 style=" font-family:Agency FB; font-size: 55px;color:#ee10ee;text-shadow: 2px 2px black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Basic Banking System </h2>
    </div>
        <div id="section">
            <table>
                <tr>
		   <br>
				<a href="createuser.php">
               <button class="primary_btn" id="button "type="button" href="viewuser.php"><b>View users</b></button>
                </a> 
		    </tr>
                <tr><br><br><br>
				<a href="viewuser.php">
               <button class="primary_btn" id="button "type="button" href="viewuser.php"><b>View users</b></button>
                </a>

               
                </tr>

                <tr>        
               <br> <br> <br>
			   <a href="transfermoney.php">
			   <button class="primary_btn" id="button" type="button"><b>Credit Transfer</b></button>
               </a>
               
               </tr>
			   
			    <tr>        
               <br> <br> <br>
			   <a href="transactionhistory.php">
			   <button class="primary_btn" id="button" type="button"><b>All Transaction</b></button>
               </a>

            </table>
    </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>Prerana Raykar</b><br> For the Project of  <b>The Sparks Foundation</b></p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</div> 
</body>
</html>
