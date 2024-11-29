<!DOCTYPE html>
<html lang="en">

<?php
require_once('includes/connect.php');

$query = 'SELECT * FROM project_pages WHERE id = '.$_GET['id'];

$results = mysqli_query($connect,$query);

$row = mysqli_fetch_assoc($results);

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projects-page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/grid.css">
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
                      <a href="home.php">HOME</a> 
                      <a href="projects.php">PROJECTS</a>
                      <a href="aboutme.php">ABOUT ME</a>
                      <a href="contact.php">CONTACT</a>
                      
                    </div>
                </nav>


                </section>

        </div>
    </header>

    <main>

        <section id="couple-resort" class="grid-con">

            <div class="col-span-full m-col-start-3 m-col-end-11">
            <h2 class="line-separator"><?php echo $row['name']; ?></h2>
            </div>

            <div class="container col-span-full m-col-start-3 m-col-end-11"></div>


        </section>

        <section id="couple-resort-info" class="grid-con">


                <h3 class="col-start-1 col-end-3 m-col-start-3 m-col-end-5">CATEGORY</h3>
                <P class="col-start-3 col-end-5 m-col-start-6 m-col-end-11"><?php echo $row['category']; ?></P>


                <h3 class="col-start-1 col-end-3 m-col-start-3 m-col-end-5">YEAR</h3>
                <P class="col-start-3 col-end-5 m-col-start-6 m-col-end-11"><?php echo $row['year']; ?></P>


          
                <h3 class="col-start-1 col-end-3 m-col-start-3 m-col-end-5">SOFTWARE</h3>
                <P class="col-start-3 col-end-5 m-col-start-6 m-col-end-11"><?php echo $row['software']; ?></P>

            
            <div class="col-span-full m-col-start-3 m-col-end-11">
            <p><?php echo $row['description']; ?></p>
            </div>
       

        </section>

        <section class="grid-con work ">
            <h2 class="hidden">work images</h2>

            <div class="line-separator col-span-full m-col-start-3 m-col-end-11">

            <?php

            while($row = mysqli_fetch_array($results)){

            echo'
            
            <div class="container col-span-full m-col-start-3 m-col-end-11"></div>

            ';

            }?>

            </div>

        </section>


    <a href="projects.php">
        <section class="grid-con">
            
            <div class="col-span-full m-col-start-3 m-col-end-11 next-project">
      
            <p>NEXT <br> PROJECT</p>

            <img src="images/next-project.svg" alt="next-project button">

            </div>

        
        </section>
    </a>


    </main>

    <footer id="footer">

        <section class="grid-con">

        <div id="quicklinks" class="col-start-1 col-end-3 m-col-start-2 m-col-end-7">
            <h3>QUICKLINKS</h3>
            <a href="index.php">HOME</a>
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
    
</body>
</html>