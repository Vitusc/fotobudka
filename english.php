	<!DOCTYPE html>
	<html lang="en">

<?php
/*
 *  plik <head>
 */
?>	
    <head>
	<!-- użyte Kodowanie z Polskimi znakami -->
	<meta charset="utf-8">
	<!-- responsywność Bootstrapa -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Podstawowe informacje -->
    <meta name="description" content="Oscar Film - Piotrków Trybunalski">
	<!-- Tytuł strony -->
    <title>Oscar Film</title>

    <!-- Użyte czcionki -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Arkusz styli .css (własny) i bootstrapowy-->
    <link href="css/agency.min.css" rel="stylesheet">
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/arkusz.css" rel="stylesheet">


		<!-- favicon fotobudka -->
		<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
		<link rel="manifest" href="/favicon/site.webmanifest">
		<link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff">
    </head>
	

	


<!-- funkcje naglowek -->

    <body id="page-top">
	
	<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="favicon/favicon-32x32.png">Oscar Film</img></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Offer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Movies</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About Us</a>
            </li>
			

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
			            <li class="nav-item">
              <a class="nav-link" href="faq-eng.php">FAQ</a>
            </li>

			<li class="flaga2">
			<img src="img/pl.png" width="30px" height="30px"><a href="index.php" style="text-decoration:none;"><font color="black">&nbsp;&nbsp;&nbsp;Polski</a></font></img>
			</li>
			
          </ul>
        </div>
      </div>
    </nav>
       
	   
	   <!-- english funkcje tresc -->
<!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Oscar Film</div>
          <div class="intro-heading text-uppercase">Nice to see You</div>
          <a class="btn btn-warning js-scroll-trigger" href="#services"><font color="white">Tell me more</font></a>
        </div>
      </div>
    </header>

    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Offer</h2>
            <h3 class="section-subheading text-muted">The OSCAR company will provide Photography, Filming, Photobooth and Photomirror.</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-warning"></i>
              <i class="fa fa-camera fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Video</h4>
            <p class="text-muted">We can take on any order in the field of documentary, promotional - advertising, instructional, and mainly films from wedding ceremonies, Communion (I have a special course organized by the Curia, which entitles you to film and photograph during church ceremonies). <br> <br> The plan according to which the film will be made is created in cooperation with the ordering parties.</p><br>
			
			
			<!-- jak chcemy zeby wyswietlil sie modal, a nie zjezdal do video musimy usunac komentarz i dodatkowo te linijke: -->
			<!--
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  
                </div>
              </div>
			  <-->
			  <a class="nav-link js-scroll-trigger" href="#portfolio">
              <button type="button" class="btn btn-warning"><font color="white">Check Offer</font></button>
            </a>
			
			
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-warning"></i>
              <i class="fa fa-building fa-stack-1x fa-inverse fa-rotate-180"></i>
            </span>
            <h4 class="service-heading">Photo</h4>
            <p class="text-muted">We have a large DSLR matrix size and use interchangeable photographic lenses. The quality of the picture is sensational, thanks to it, SLRs are used for TV productions, commercials, interviews, etc. <br> <br> <br> The plan according to which the photography offer will be created is made with the cooperation of the ordering parties.</p><br>
						
						
						
						<a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  
                </div>
              </div>
						<button type="button" class="btn btn-warning"><font color="white">Check Offer</font></button>
						</a>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-warning"></i>
              <i class="fa fa-bookmark fa-stack-1x fa-inverse "></i>
            </span>
            <h4 class="service-heading">Photobooth & Photomirror</h4>
            <p class="text-muted">A video booth, ie a newer version of a photo booth, the device can also record messages, opinions or wishes. <br><br><br><br>Fotolustro is a device with a 50 "inch touch screen, which has colorful animations and voice tips inviting guests to play with an interactive photo mirror.</p><br>
			
			
			
			<a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  
                </div>
              </div>
						<button type="button" class="btn btn-warning"><font color="white">Check Offer</font></button>
						</a>
          </div>
        </div>
      </div>
    </section>

	
	
	
	<!-- Parallax -->
<style>
	.parallax { 
    /* The image used */
    background-image: url("img/parallax.jpg");

    /* Set a specific height */
    height: 500px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
	}
</style>

	<div class="parallax"></div>
	
    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase"><!-- Nagłówek --></h2>
            <h3 class="section-subheading text-muted"><!-- Opis do nagłówka --></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
		  <!-- test -->
            
			
			
              <!-- USTAWIANIE YT MINIATUR -->
			

			
               <div class="container2">
                <div class="portfolio-hover">
				<div class="embed-responsive embed-responsive-4by3 bg-dark">
				<iframe src="https://player.vimeo.com/video/271555899?autoplay=0&color=ff9933&byline=0&portrait=0" width="560" height="315" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				<div id="test">
				<img class="embed-responsive-item yt-miniatura" src="img/1.png" alt="Trailer of Sylwia and Michał">
				<div class="middle">
				<i class="fa fa-youtube-play" style="font-size:3em; color:Tomato"></i>
		</div>
</div>
</div>
</div>
</div>
            <div class="portfolio-caption">
              <p class="text-muted">Trailer of Sylwia and Michał</p>
            </div>
          </div>
		  <!-- KONIEC YT MINIATUR -->
		  
		  <!-- YT MINIATURA 2 -->
          <div class="col-md-4 col-sm-6 portfolio-item container2">
              <div class="portfolio-hover">
			  <div class="embed-responsive embed-responsive-4by3 bg-dark">
			  <iframe src="https://player.vimeo.com/video/236659152?autoplay=0&color=ff9933&byline=0&portrait=0" width="560" height="315" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			  <div id="test2">
              <img class="embed-responsive-item yt-miniatura" src="img/2.png" alt="Beata & Kamil">
            <div class="middle">
				<i class="fa fa-youtube-play" style="font-size:3em; color:Tomato"></i>
				</div>
				</div>
				</div>
				</div>
            <div class="portfolio-caption">
              <p class="text-muted">Beata & Kamil</p>
            </div>
          </div>
		  
		  
		  <!-- KONIEC YT MINIATUR 2 -->
 <div class="col-md-4 col-sm-6 portfolio-item container2">
              <div class="portfolio-hover">
			  <div class="embed-responsive embed-responsive-4by3 bg-dark">
			  <iframe src="https://player.vimeo.com/video/238494029?autoplay=0&color=ff9933&byline=0&portrait=0" width="560" height="315" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			  <div id="test3">
              <img class="embed-responsive-item yt-miniatura" src="img/3.png" alt="Rozalia & Radosław">
            <div class="middle">
				<i class="fa fa-youtube-play" style="font-size:3em; color:Tomato"></i>
				</div>
				</div>
				</div>
				</div>
            <div class="portfolio-caption">
              <p class="text-muted">Rozalia & Radosław</p>
            </div>
          </div>

		  
		  <!-- KONIEC YT MINIATUR 3 -->
         <div class="col-md-4 col-sm-6 portfolio-item container2">
              <div class="portfolio-hover">
			  <div class="embed-responsive embed-responsive-4by3 bg-dark">
			  <iframe src="https://player.vimeo.com/video/233040369?autoplay=0&color=ff9933&byline=0&portrait=0" width="560" height="315" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			  <div id="test4">
              <img class="embed-responsive-item yt-miniatura" src="img/4.png" alt="Patrick's 18th birthday">
            <div class="middle">
				<i class="fa fa-youtube-play" style="font-size:3em; color:Tomato"></i>
				</div>
				</div>
				</div>
				</div>
            <div class="portfolio-caption">
              <p class="text-muted">Patrick's 18th birthday</p>
            </div>
          </div>

		  
         <div class="col-md-4 col-sm-6 portfolio-item container2">
              <div class="portfolio-hover">
			  <div class="embed-responsive embed-responsive-4by3 bg-dark">
			  <iframe src="https://player.vimeo.com/video/231346487?autoplay=0&color=ff9933&byline=0&portrait=0" width="560" height="315" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			  <div id="test5">
              <img class="embed-responsive-item yt-miniatura" src="img/5.png" alt="Grażyna & Steve">
            <div class="middle">
				<i class="fa fa-youtube-play" style="font-size:3em; color:Tomato"></i>
				</div>
				</div>
				</div>
				</div>
            <div class="portfolio-caption">
              <p class="text-muted">Grażyna & Steve</p>
            </div>
          </div>

		  
          <div class="col-md-4 col-sm-6 portfolio-item container2">
              <div class="portfolio-hover">
			  <div class="embed-responsive embed-responsive-4by3 bg-dark">
			  <iframe src="https://player.vimeo.com/video/240924380?autoplay=0&color=ff9933&byline=0&portrait=0" width="560" height="315" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			  <div id="test6">
              <img class="embed-responsive-item yt-miniatura" src="img/6.png" alt="Green Fit Halloween">
            <div class="middle">
				<i class="fa fa-youtube-play" style="font-size:3em; color:Tomato"></i>
				</div>
				</div>
				</div>
				</div>
            <div class="portfolio-caption">
              <p class="text-muted">Green Fit Halloween</p>
            </div>
          </div>
    </section>
	
    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">about us</h2>
            <h3 class="section-subheading text-muted">Find out what others think about us.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/1.png" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>09.06.2018</h4>
                    <h4 class="subheading">Name Surname / Company</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/2.png" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>09.06.2018</h4>
                    <h4 class="subheading">Name Surname / Company</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/3.png" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>09.06.2018</h4>
                    <h4 class="subheading">Name Surname / Company</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/4.png" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>09.06.2018</h4>
                    <h4 class="subheading">Name Surname / Company</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Team -->
	 <!-- sekcja "pliki" niedostepna. Jak chcesz odblokowac, usun najpierw komentarz w funkcje/naglowek.php
    <section class="bg-light" id="team">

        <div class="row">
          <div class="col-lg-12 text-center">
		  
		  <div id="pliki">
            <h2 class="section-heading text-uppercase">PLIKI</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
		<!-- pierwszy 

          <div class="row">
			<a href="tresc/galeria1.php"><img src="img/team/plik1.png" width="100" height="100" class="plik1" href="galeria1.php" alt=""></a>
              
           
          
		  <!-- drugi 
         
            <a href="tresc/galeria1.php"><img src="img/team/plik1.png" width="100" height="100" class="plik2" alt=""></a>
          
		  <!-- trzeci 
         
            <a href="tresc/galeria1.php"><img src="img/team/plik1.png" width="100" height="100" class="plik3" alt=""></a>
         </div>
</div>
    </section>
	-->

    <!-- Clients -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/helios.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/strefa.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/epiotrkow.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/logo-mercure.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contact</h2>
            <h3 class="section-subheading text-muted"><font color="khaki">Contact with Us</font></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Name *" required="required" data-validation-required-message="Please enter your Name">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Email *" required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Phone Number *" required="required" data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-warning btn-xl text-uppercase" type="submit"><font color="white">Send Message</font></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; <a href="http://kacper-trzcinski.pl/">Kacper Trzciński 2018</a></span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://vimeo.com/user9873638">
                  <i class="fa fa-vimeo"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Rules 1</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Rules 2</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Video</h2>
					<p class="item-intro text-muted">Movies</p>
                  <iframe width="300" height="200" src="https://www.youtube.com/embed/SW_8OEBWWD0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  <iframe width="300" height="200" src="https://www.youtube.com/embed/qD8_k7-CsTI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe><br><br><br>
                  <iframe width="300" height="200" src="https://www.youtube.com/embed/j-wi6eySRP8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  <iframe width="300" height="200" src="https://www.youtube.com/embed/94bCNyeZADg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe><br><br><br>
                  <iframe width="300" height="200" src="https://www.youtube.com/embed/N2Gh6PgdqU4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  <iframe width="300" height="200" src="https://www.youtube.com/embed/srqYMUo-GkA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe><br><br><br>
                  <iframe width="300" height="200" src="https://www.youtube.com/embed/vjjw2IKMlPg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  <iframe width="300" height="200" src="https://www.youtube.com/embed/yOBYx4znZtA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                 <br><button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                 <h2 class="text-uppercase">Photo</h2>
                  <p class="item-intro text-muted">Communion</p>
				  <img src="http://foto-video-budka.pl/wp-content/gallery/Komunia/thumbs/thumbs_1.jpg" alt="">
				  <img src="http://foto-video-budka.pl/wp-content/gallery/Komunia/thumbs/thumbs_2.jpg" alt="">
				  <img src="http://foto-video-budka.pl/wp-content/gallery/Komunia/thumbs/thumbs_3.jpg" alt="">
				  <img src="http://foto-video-budka.pl/wp-content/gallery/Komunia/thumbs/thumbs_4.jpg" alt="">
                  <p class="item-intro text-muted">Baptism</p>
				  <img src="http://foto-video-budka.pl/wp-content/gallery/chrzest/thumbs/thumbs_1.jpg" alt="">
				  <img src="http://foto-video-budka.pl/wp-content/gallery/chrzest/thumbs/thumbs_1a.jpg" alt="">
				  <img src="http://foto-video-budka.pl/wp-content/gallery/chrzest/thumbs/thumbs_2.jpg" alt="">
				  <img src="http://foto-video-budka.pl/wp-content/gallery/chrzest/thumbs/thumbs_4.jpg" alt="">
                  <p class="item-intro text-muted">Wedding</p>
				  <img src="http://foto-video-budka.pl/wp-content/gallery/%C5%9Alub/thumbs/thumbs_DSC_0479.jpg" alt="">
				  <img src="http://foto-video-budka.pl/wp-content/gallery/%C5%9Alub/thumbs/thumbs_DSC_0486.jpg" alt="">
				  <img src="http://foto-video-budka.pl/wp-content/gallery/%C5%9Alub/thumbs/thumbs_DSC_0488.jpg" alt="">
				  <img src="http://foto-video-budka.pl/wp-content/gallery/%C5%9Alub/thumbs/thumbs_DSC_0534.jpg" alt="">
				  <br><button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Photo Booth & Photo Mirror</h2>
                  <p class="item-intro text-muted">Photo Booth</p><br>
				  Sample photos of photobooths in format 5cm x 15cm:
                  <img src="http://foto-video-budka.pl/wp-content/uploads/2016/04/160416_221346-337x1024.jpg" alt="">
				  <img src="http://foto-video-budka.pl/wp-content/uploads/2016/04/160528_201801-338x1024.jpg" alt="">
                  <p>Sample photos of photobooths in format 10cm x 15cm: </p>
                  <img src="http://foto-video-budka.pl/wp-content/gallery/Formaty-/thumbs/thumbs_150410_220926.jpg">
				  <img src="http://foto-video-budka.pl/wp-content/gallery/Formaty-/thumbs/thumbs_160214_190154.jpg">

				  <p class="item-intro text-muted">Photo Mirror:</p>
				  <img src="http://foto-video-budka.pl/wp-content/uploads/2017/07/x-1-8-300x200.jpg">
				  <img src="http://foto-video-budka.pl/wp-content/uploads/2017/07/x-1-7-228x300.jpg"><br><br>
				  <video width="300" height="200" controls>
				  <source src="http://foto-video-budka.pl/wp-content/uploads/2017/07/20170708_224513.mp4" type="video/mp4"></video>
				  <video width="300" height="200" controls>
				  <source src="http://foto-video-budka.pl/wp-content/uploads/2017/07/20170708_224951.mp4" type="video/mp4"></video>
                  <br><button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

	
	<!-- Wyłączone
    <!-- Modal 4 
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Lines</li>
                    <li>Category: Branding</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Southwest</li>
                    <li>Category: Website Design</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div> 
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here 
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Window</li>
                    <li>Category: Photography</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
		  -->
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>
	
	<!-- do Miniatur youtube -->
	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css'>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
	<script  src="js/index.js"></script>
	
	

  </body>

</html>
