<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="cp.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-primary navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">IWP project</a>
          
          <?php if(isset($_SESSION['login']) && $_SESSION['login']==True){?>
          <p id="LoginSignupBtn"><a  href="../roadmap/domain/Favourites.php"><?php echo $_SESSION['user_id']?></a> | <a href="../login/logout.php">LogOut</a></p>
        <?php }else{?>  
          <p id="LoginSignupBtn"><a  href="../login/login.html">Login</a> | <a href="../login/login.html">SignUp</a></p>
        <?php }?>
        

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="../home/home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="../roadmap/r.php">Roadmaps</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="cp.php">Career Portals</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../ip/ip.php">Interview prep</a>
              </li>
        
            
            </ul>
           
          </div>
        </div>
      </nav>
      <main class="page-content">
        <div class="card">
          <div class="content">
            <h2 class="title">Amazon</h2>
            <p class="copy">Check out all of these gorgeous mountain trips with beautiful views of, you guessed it, the mountains</p>
            <a href="https://www.amazon.jobs/en/"><button class="btn">View </button></a>
          </div>
        </div>
        <div class="card">
          <div class="content">
            <h2 class="title">Google</h2>
            <p class="copy">Plan your next beach trip with these fabulous destinations</p>
            <a href="https://careers.google.com/"><button class="btn">View </button></a>
          </div>
        </div>
        <div class="card">
          <div class="content">
            <h2 class="title">Wipro</h2>
            <p class="copy">It's the desert you've always dreamed of</p>
            <a href="https://careers.wipro.com/careers-home/"><button class="btn">View </button></a>
          </div>
        </div>
        <div class="card">
          <div class="content">
            <h2 class="title">Netflix</h2>
            <p class="copy">Seriously, straight up, just blast off into outer space today</p>
            <a href="https://jobs.netflix.com/"><button class="btn">View </button></a>
          </div>
        </div>
        <div class="card">
          <div class="content">
            <h2 class="title">Facebook</h2>
            <p class="copy">Check out all of these gorgeous mountain trips with beautiful views of, you guessed it, the mountains</p>
            <a href="https://www.facebook.com/careers/"><button class="btn">View </button></a>
          </div>
        </div>
        <div class="card">
          <div class="content">
            <h2 class="title">Apple</h2>
            <p class="copy">Plan your next beach trip with these fabulous destinations</p>
            <a href="https://www.apple.com/careers/us/"><button class="btn">View </button></a>
          </div>
        </div>
        <div class="card">
          <div class="content">
            <h2 class="title">Microsoft</h2>
            <p class="copy">It's the desert you've always dreamed of</p>
            <a href="https://careers.microsoft.com/us/en"><button class="btn">View </button></a>
          </div>
        </div>
        <div class="card">
          <div class="content">
            <h2 class="title">IBM</h2>
            <p class="copy">Seriously, straight up, just blast off into outer space today</p>
            <a href="https://www.ibm.com/in-en/employment/"><button class="btn">View </button></a>
          </div>
        </div>
        <div class="card">
          <div class="content">
            <h2 class="title">Infosys</h2>
            <p class="copy">Check out all of these gorgeous mountain trips with beautiful views of, you guessed it, the mountains</p>
            <a href="https://www.infosys.com/careers/apply.html"><button class="btn">View </button></a>
          </div>
        </div>
        <div class="card">
          <div class="content">
            <h2 class="title">Mindtree</h2>
            <p class="copy">Plan your next beach trip with these fabulous destinations</p>
           <a href="https://www.mindtree.com/careers"><button class="btn">View </button></a>
          </div>
        </div>
        <div class="card">
          <div class="content">
            <h2 class="title">Goldman Sachs</h2>
            <p class="copy">It's the desert you've always dreamed of</p>
            <a href="https://www.goldmansachs.com/careers/"><button class="btn">View </button></a>
          </div>
        </div>
        <div class="card">
          <div class="content">
            <h2 class="title">TCS</h2>
            <p class="copy">Seriously, straight up, just blast off into outer space today</p>
            <a href="https://www.tcs.com/careers#type=overlay&amp;page=/corporate-tcs/careers/overlays/tcs-worldwide-overlay"><button class="btn">View </button></a>
          </div>
        </div>
      
      </main>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>