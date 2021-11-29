<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="r.css">
</head>
<body>
  
    <nav class="navbar navbar-dark bg-primary navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">IWP project</a>
          
          <?php if(isset($_SESSION['login']) && $_SESSION['login']==True){?>
          <p id="LoginSignupBtn"><a  href="./domain/Favourites.php"><?php echo $_SESSION['user_id']?></a> | <a href="../login/logout.php">LogOut</a></p>
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
                <a class="nav-link active" href="r.php">Roadmaps</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../cp/cp.php">Career Portals</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../ip/ip.php">Interview prep</a>
              </li>
        
            
            </ul>
           
          </div>
        </div>
      </nav>
      <div class="container head">
        <div class="row">
            <div class="col-lg-6">
               <br><br>
                <h1 class="heading">Roadmap to build your career</h1><br><br>
                <p class="rpara para"> To help you create a useful strategic framework so that you can effectively organize and prioritize your ideas i.e roadmaps for top domains in IT industry.</p>  </div>
            <div class="col-lg-6 image">
                <img class="img" src="images/roadmap.jpeg" alt=""></div>
        </div>
    </div>
    <div class="container-fluid section">
      <div class="row domainwrapper">
          <div class="col-xs-6 col-sm-6 col-md-5 col-lg-3 domain " id="front">
              <h2>Front-end development</h2>
              <p>If you would like to get started as a front-end web developer, you are going to LOVE this road-map! Work on amazing projects ranging from a simple HTML page to a complete JavaScript based Google Chrome extension. </p>
         <a href="domain/domain-index.php?domain=Front-End-Development" target="_blank" class="know-more">Click here to know more</a>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-5 col-lg-3 domain " id="back">
              <h2>Back-end development</h2>
              <p>This road-map will tell you about server, an application, and a database. Will give you a detailed view of what happens at the server side of a website, Databases and fetching API's.</p>
              <a href="domain/domain-index.php?domain=Back-End-Development" target="_blank" class="know-more">Click here to know more</a>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-5 col-lg-3 domain " id="app">
              <h2>App development</h2>
              <p>. Whether you are a complete beginner or are coming from another language or platform, this road-map will go from setting up and installing Android Studio to building real apps that are useful and look great. </p>
              <a href="domain/domain-index.php?domain=App-Development" target="_blank" class="know-more">Click here to know more</a>
          </div>
      </div>

      <div class="row domainwrapper">
          <div class="col-xs-6 col-sm-6 col-md-5 col-lg-3 domain " id="competitive">
              <h2>Competitive programming</h2>
              <p>No less than a mental sport. One that asks to Learn about the creative approach to tech world and efficient use of coding tools</p>
         <a href="domain/domain-index.php?domain=Competitive-Programming" target="_blank" class="know-more">Click here to know more</a>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-5 col-lg-3 domain " id="cyber">
              <h2>Cyber Security</h2>
              <p>This road-map covers the fundamental building blocks of your required skill set - You will understand the threat and vulnerability landscape through threat modeling and risk assessments.</p>
              <a href="domain/domain-index.php?domain=Cyber-Security" target="_blank" class="know-more">Click here to know more</a>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-5 col-lg-3 domain " id="cloud">
              <h2>Cloud computing</h2>
              <p>Get your hands dirty using these concepts of cloud. Evolution leading to Revolution – traditional IT already uses a variety of virtualization technologies to better utilize their physical IT resources.</p>
              <a href="domain/domain-index.php?domain=Cloud-Computing" target="_blank" class="know-more">Click here to know more</a>
          </div>
      </div>

      <div class="row domainwrapper">
          <div class="col-xs-6 col-sm-6 col-md-5 col-lg-3 domain " id="aiml">
              <h2>AI/ML</h2>
              <p>If you have no experience in ML development, it’s okay: this road-map includes both introductory and advanced level materials. </p>
         <a href="domain/domain/domain-index.php?domain=AI-ML" target="_blank" class="know-more">Click here to know more</a>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-5 col-lg-3 domain " id="blockchain">
              <h2>Blockchain</h2>
              <p>Learn key Blockchain concepts, intuition and practical training to get you quickly up to speed with all things Crypto and Blockchain related. </p>
              <a href="domain/domain-index.php?domain=Blockchain" target="_blank" class="know-more">Click here to know more</a>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-5 col-lg-3 domain " id="arvr">
              <h2>AR/VR</h2>
              <p>“When we get to this [AR] world, a lot of the things we think about today as physical objects, like a TV, will be $1 apps in an AR app store” — Mark Zukerberg</p>
              <a href="domain/domain-index.php?domain=AR-VR" target="_blank" class="know-more">Click here to know more</a>
          </div>
      </div>

      <div class="row domainwrapper">
          <div class="col-xs-6 col-sm-6 col-md-5 col-lg-3 domain " id="iot">
              <h2>Internet of Things (IoT)</h2>
              <p>“As the Internet of things advances, the very notion of a clear dividing line between reality and virtual reality becomes blurred, sometimes in creative ways.”                </p>
         <a href="domain/iot.html" target="_blank" class="know-more">Click here to know more</a>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-5 col-lg-3 domain " id="devops">
              <h2>DevOps</h2>
              <p>“Currently, DevOps is more like a philosophical movement, not yet a precise collection of practices, descriptive or prescriptive.”</p>
              <a href="domain/devops.html" target="_blank" class="know-more">Click here to know more</a>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-5 col-lg-3 domain " id="datascience">
              <h2>Data Science</h2>
              <p>Data science is a new programming paradigm, a new way of communicating our wishes to a computer. It allows you to automate the ineffable.</p>
              <a href="domain/datascirnce.html" target="_blank" class="know-more">Click here to know more</a>
          </div>
      </div>
  </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>