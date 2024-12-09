<!DOCTYPE html>
<html lang="en">

<?php

require_once('includes/connect.php');

// query to run in SQL
$query = 'SELECT * FROM `home` WHERE id=1';

//query to get back the content
$results = mysqli_query($connect,$query);

$row = mysqli_fetch_assoc($results);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akamjot Singh</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/grid.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
</head>
<body>
    <header>
        <div class="sticky-nav-con">
            <section id="main-header"> 
                <h2 class="hidden">hel
                </h2>
                
                <nav>
                    <img src="images/logo.svg" alt="logo for mobile" id="mobile-logo">
                    
                    <input type="checkbox" id="sidebar-active">
                    <label for="sidebar-active" class="open-sidebar-button">
                      <img src="images/burger.svg" alt="hamburger">
                    </label>
                    <label id="overlay" for="sidebar-active"></label>
                    <div class="links-container">
                      <label for="sidebar-active" class="close-sidebar-button">
                        <i class="fa fa-times"></i>
                      </label>
                

                      <a class="home-link" href="index.php"><img src="images/logo.svg" alt="logo" id="logo"></a> 
                      <a href="index.php">HOME</a> 
                      <a href="projects.php">PROJECTS</a>
                      <a href="aboutme.php">ABOUT ME</a>
                      <a href="contact.php">CONTACT</a>
                      
                    </div>
                </nav>


                </section>

        </div>
    </header> 

    <main>

        <section class="grid-con intro">
            <div class="col-start-1 col-end-5 m-col-start-3 m-col-end-11">
            <h2>Welcome to my portfolio.</h2>
            <h1>Hi my name is <span>Akamjot Singh</span> but you can call me <span>AJ</span>.
            </h1>
            <p>I am a <span>UI/UX Designer, Graphic Designer, Frontend </span>and <span> Backend Developer</span></p>
            </div>
        </section>

        <section id="demo-reel" class="grid-con">
            <h2 class="hidden">demo reel</h2>
            <div id="player-container" class=" col-start-1 col-end-5 m-col-start-3 m-col-end-11 l-col-start-3 l-col-end-11">

                <video controls preload="metadata" poster="images/placeholder.jpg">
                    <source src="videos/<?php echo $row['video']; ?>" type="video/mp4">
                <p>Your browser does not support the video tag.</p>
                </video>
                <div class="video-controls hidden" id="video-controls">
                    <button id="play-button"><i class="fa fa-play-circle-o"></i></button>
                    <button id="pause-button"><i class="fa fa-pause-circle-o"></i></button>
                    <button id="stop-button"><i class="fa fa-stop-circle-o"></i></button>
                    <i class="fa fa-volume-up"></i>
                    <input type="range" id="change-vol" step="0.05" min="0" max="1" value="1">
                    <button id="full-screen"><i class="fa fa-arrows-alt"></i></button>
                </div>

            </div>

        </section>

        <section id="bottom-links" class="grid-con">
            <h2 class="hidden">links</h2>

            <div class="col-start-1 col-end-5 m-col-start-3 m-col-end-11 links">
            <a href="projects.php">MY PROJECTS</a>
            <a href="contact.php">CONTACT</a>
            </div>
            
        </section>



    </main>

    <footer id="footer">

        <section class="grid-con">

        <div id="quicklinks" class="col-start-1 col-end-3 m-col-start-2 m-col-end-7">
            <h3>QUICKLINKS</h3>
            <a href="home.php">HOME</a>
            <a href="projects.php">PROJECTS</a>
            <a href="aboutme.php">ABOUT ME</a>
            <a href="contact.php">CONTACT</a>
        </div>

        <div id="contact-info" class="col-start-3 col-end-5 m-col-start-7 m-col-end-12">
            <h3>CONTACT INFO</h3>
            <p>Email - sainiparam947@gmail.com</p>
            <p>Phone - 1234567890</p>
        </div>

        <div class="col-start-1 col-end-5 m-col-start-2 m-col-end-12 line-separator"></div>
        </div>

    </section>

    <section class="grid-con">
        <h2 class="hidden">lower footer</h2>

        <div id="lower-footer" class="col-start-1 col-end-5 m-col-start-2 m-col-end-12">
        <div id="icons" >
        
                <a href="www.google.com"><li class="fa fa-facebook"></li></a>
                <a href=""><li class="fa fa-linkedin"></li></a>
                <a href=""><li class="fa fa-github"></li></a>
                <a href=""><li class="fa fa-instagram"></li></a>
        
        </div>

        <div id="rights">
            <p>© 2023 akamjot singh. All right reserved.</p>
        </div>

    </div>
    </section>

    </footer>
    
    <script src="js/main.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/ScrollTrigger.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>

</body>
</html>