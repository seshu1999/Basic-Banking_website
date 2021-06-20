<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Transactions</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
</head>

<body style="background-color : black;">


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Seshu Bank </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="users.php">Our Users</a>
        </li>

        
</div>


      </ul>
      
    </div>
  </div>
</nav>



	<div class="container">
        <h2 class="text-center pt-4" style="color : white;">Transfer History</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead style="color : white;">
            <tr>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color : white;">
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
        
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<div style="color: transparent;"> .</div>
    <div style="color: transparent;"> .</div>
    <div style="color: transparent;"> .</div>
    <div style="color: transparent;"> .</div>
    <div style="color: transparent;"> .</div>
    <div style="color: transparent;"> .</div>
    <div style="color: transparent;"> .</div>
    <div style="color: transparent;"> .</div>
    <div style="color: transparent;"> .</div>
    <div style="color: transparent;"> . </div>
    <div style="color: transparent;"> .</div>
    <div style="color: transparent;"> .</div>
<footer class="text-center mt-5 " style="color: whitesmoke;">
            <p>&copy 2021 <b>Seshadri Sarma</b> <br> CEO,S-Bank</p>
</footer>

</body>
</html>