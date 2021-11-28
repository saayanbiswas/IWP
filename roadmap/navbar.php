<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../r.css">
</head>
<body>
  
    <nav class="navbar navbar-dark bg-primary navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">IWP project</a>
          
          <?php if(isset($_SESSION['login']) && $_SESSION['login']==True){?>
          <p id="LoginSignupBtn"><a  href="#"><?php echo $_SESSION['user_id']?></a> | <a href="../login/logout.php">LogOut</a></p>
        <?php }else{?>  
          <p id="LoginSignupBtn"><a  href="../login/login.html">Login</a> | <a href="../login/login.html">SignUp</a></p>
        <?php }?>
        

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="../../home/home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="../r.php">Roadmaps</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../cp/cp.php">Career Portals</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../ip/ip.php">Interview prep</a>
              </li>
        
            
            </ul>
           
          </div>
        </div>
      </nav>