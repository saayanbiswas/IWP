<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IWP project</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" type="text/css" href="../home/home.css" />
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
        
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../roadmap/r.php">Roadmaps</a>
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

    <div class="topHPart">
      <div class="topLeftPart">
        <div class="titleText">IWP Project</div>
        <hr />
        <div class="paragraph">
          <div class="topPara">
            One stop destination to unmantle your doubts and help you prepare
            for your future !
            <br />
            A wholesome hub to provide you a plethora of options for a
            successful technology-driven career.
            <br />
          </div>
          <div class="lowPara">
            <ul>
              <li class="listItem">
                Don't know how to proceed? We'll provide you roadmaps to help
                take informed decisions for your preferred domain.
              </li>
              <li class="listItem">
                Low Self-Esteem? Not sure about Interviews? Head over to our
                practice interviews site and assess your soft skills.
              </li>
              <li class="listItem">
                No single platform to notify you for your job/internship
                opportunities? Never miss an update about any career opportunity
                in our job updates site for top-notch companies.
              </li>
            </ul>
          </div>
          <button class="learnMore">Learn More</button>
        </div>
      </div>

      <div class="topRightPart">
        <img src="../images/hp.jpg" alt="" srcset="">
      </div>
    </div>

    <!--Services-->

    <div class="servTitle">Our Services</div>
    <div class="servContainer">
      <!-- <hr style={{ height: "4px", width: "80vw" }} /> -->

      <div class="mainCard">
        <div class="cardBody">
          <div class="cardTitleIcon">
            <i class="fontIcon fas fa-users"></i>
          </div>
          <div class="card-body">
            <h5 class="card-title">Practice Interview</h5>
            <p class="card-text">
              To help you provide a platform to improve your speaking and
              analyse your clarity and specificity for top interview questions.
            </p>
          </div>
        </div>
      </div>

      <div class="mainCard">
        <div class="cardBody">
          <div class="cardTitleIcon">
            <i class="fontIcon fas fa-users"></i>
          </div>
          <div class="card-body">
            <h5 class="card-title">Roadmaps</h5>
            <p class="card-text">
              To help you create a useful strategic framework so that you can effectively
              organize and prioritize your ideas i.e roadmaps for top domains in IT.
            </p>
          </div>
        </div>
      </div>

      <div class="mainCard">
        <div class="cardBody">
          <div class="cardTitleIcon">
            <i class="fontIcon fas fa-users"></i>
          </div>
          <div class="card-body">
            <h5 class="card-title">Job/Interview updates</h5>
            <p class="card-text">
              To provide you top company's at one place. No need to browse hundreds of sites.
              This would list all that you need.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!--SERVICES OVER-->
    <!-- OUR CONTENT -->

    <div class="containerCont">
      <div class="contTitle">Our Content</div>

      <div class="contentBoxContainer">
        <div class="Tilt">
          <div class="iconContainer">
            <i class="iconFA fas fa-atom"></i>
            <div class="iconText">Career Path</div>
          </div>
          <div class="Tile-inner">
            <!-- bg image here -->
          </div>
        </div>

        <div class="Tilt">
          <div class="icon2">
            <i class="iconFA fas fa-edit"></i>
            <div class="iconText">Interview Questions</div>
          </div>
          <div class="Tile-inner">
            <!-- bg image here -->
          </div>
        </div>

        <div class="Tilt">
          <div class="icon3">
            <i class="iconFA far fa-building"></i>
            <div class="iconText">Company's Updates</div>
          </div>
          <div class="Tile-inner">
            <!-- bg image here -->
          </div>
        </div>
      </div>
    </div>


    <!-- FAQ -->
    <div class="fragment">
    <div class="faqTitle" id="faq">
      FAQ
    </div>
    <section>
      <div class="container">
        <div class="accordion">
          <div class="accordion-item" id="question1">
            <a class="accordion-link" href="#question1">
              Are all the services on the website free?
              <i class="icon fas fa-arrow-down"></i>
              <i class="icon fas fa-arrow-up"></i>
            </a>
            <div class="answer">
              <p>
                Yes! All the services are free as of now.
              </p>
            </div>
          </div>
        </div>
        <div class="accordion">
          <div class="accordion-item" id="question2">
            <a class="accordion-link" href="#question2">
              What are the upcoming features?
              <i class="icon fas fa-arrow-down"></i>
              <i class="icon fas fa-arrow-up"></i>
            </a>
            <div class="answer">
              <p>
                Upcoming features include one on one video sessions with your mentors on this website.
              </p>
            </div>
          </div>
        </div>
        <div class="accordion">
          <div class="accordion-item" id="question3">
            <a class="accordion-link" href="#question3">
              How to start practicing for interviews?
              <i class="icon fas fa-arrow-down"></i>
              <i class="icon fas fa-arrow-up"></i>
            </a>
            <div class="answer">
              <p>
                We have provided a proper path of how to start with the interview preperation. 
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


    <!-- <script src="https://use.fontawesome.com/83961254cc.js"></script> -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
