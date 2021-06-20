<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Customer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <style type="text/css">
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }
      .bg-img {
  /* The image used */
  background-image: url("img/original.jpg");

  width: 100%;
  height: 100vh;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
    </style>
</head>

<body >
<div align="center" class="bg-img">
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<?php
  include 'navbar.php';
?>

<div class="container">
        <h2 class="text-center pt-4" style="color : black;">View Customer</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:black;  background-color:rgba(255,255,255,0.3);">
                        <thead style="color : black;">
                            <tr>
                            <th scope="col" class="text-center py-2"><b>Id</b></th>
                            <th scope="col" class="text-center py-2"><b>Name</b></th>
                            <th scope="col" class="text-center py-2"><b>E-Mail</b></th>
                            <th scope="col" class="text-center py-2"><b>Balance</b></th>
                            <th scope="col" class="text-center py-2"><b>Operation</b></th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black;">
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="view.php ?id= <?php echo $rows['id'] ;?>"> <button type="button"  class="btn" style="background-color : #A569BD;">View</button></a></td>
			</td>
                    </tr>
                
                    <?php
                }
            ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
              
            </div> 
           
         </div>



<footer class="text-center mt-5 py-2">
            <p>&copy 2021. Made by <b>PRERANA RAYKAR</b><br> For the Project of  <b>The Sparks Foundation</b></p>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>      
</div>
</body>
</html>