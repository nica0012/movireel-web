<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoviReel</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png" />

<!--    <link rel="stylesheet" href="styles.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <!-- Add the new slick-theme.css if you want the default styling-->
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />

    <link rel="stylesheet" href="styles.css">

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>

</head>

<body>
    <!--HEADER-->
    <div id="contentContain">
        <header>

            <!--Navigation-->

            <div id="nav">
                <div id="navCBS">
                    <a href="index.php">
                        <ul class="navMiddle">
                            <li class="CBS" id="jumper">
                                <a class="jumper" id="contactLi" href="#openModal">Contact</a>
                            </li>
                            <!--
                            <li class="CBS" id="abyondLink">
                                <a href="abyond.html">Abyond Trip</a>
                            </li>
-->
                            <!--
                            <li class="CBS">
                                <a href="business.html">Business
</a>
                            </li>
-->

                        </ul>

                    </a>
                </div>
                <a href="index.php">

                    <!--                    <span id="moviReel"><span class="light">Movi</span>Reel</span>-->
                    <img src="img/reel.svg" alt="Logo" id="navLogo">
                </a>
                <ul class="navMobile">
                    <li class="mobileLi">
                        <a href="#openModal">Contact</a>

                    </li>
                </ul>

                <div id="navSocial">

                    <ul class="socialMedia">

                        <li class="twitterIcon"> <a href="https://twitter.com/movireelapp"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="facebookIcon"><a href="https://www.facebook.com/MoviReel-833116013477090/"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="instagramIcon"> <a href="https://www.instagram.com/movireel/"><i class="fa fa-instagram"></i>
</a>
                        </li>

                    </ul>

                </div>


            </div>

            <div class="headContent">

                <div id="animated-example" class="animated fadeInUp">
                    <img class="headerAppLogo" title="Proceed" src="img/website-logo-header.svg" alt="Logo">
                </div>
                <h1>Long Live The Good Times</h1>

                <div id="animated-example" class="animated rollIn">


                </div>

                <img class="soonAppStore" title="Coming Soon!" src="img/soon-app-store.svg" alt="Logo">
                <div class="panel">
                    <h3><?php include "secure_email_code.php"?></h3>
                </div>


            </div>

            <div class="downIndex" id="bounce">
<!--                <i class="fa fa-angle-down"></i>-->
       <i class="fa fa-caret-up fa-rotate-180"></i>

            </div>



            <div id="openModal" class="modalDialog">
                <div>
                    <a href="#close" id="closeModal" title="Close" class="close"><i class="fa fa-times"></i>
</a>
                    <script>
                        //Time of day message script- by javascriptkit.com
                        //Visit JavaScript Kit (http://javascriptkit.com) for script
                        //Credit must stay intact for use

                        var Digital = new Date()
                        var hours = Digital.getHours()

                        //Configure message below to your own.
                        if (hours >= 5 && hours <= 11) //MESSAGE FOR MORNING
                            document.write('<h2>Good morning</h2>')
                        else if (hours == 12) //MESSAGE FOR NOON
                            document.write('<h2>Good morning</h2>')
                        else if (hours >= 13 && hours <= 17) //MESSAGE FOR AFTERNOON
                            document.write('<h2>Good afternoon</h2>')
                        else if (hours >= 18 && hours <= 20) //MESSAGE FOR EVENING (6pm-8pm)
                            document.write('<h2>Good evening</h2>')
                        else if (hours >= 21 && hours <= 11) //MESSAGE FOR NIGHT (9pm-11pm)
                            document.write('<h2>Good evening</h2>')
                        else //MESSAGE FOR LATE NIGHT, EARLY MORNING (12pm-4am)
                            document.write('<h2>Good evening</h2>')
                    </script>
                    <h3>How can we help you?<h3>
<!--
            <form action="index.php" method="POST">
                <div class="inputStyle">
                <p class="myname">

                    <input type="text" name="name" id="myname" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name">
                </p>

                <p class="email">

                    <input type="text" name="email" id="email" class="validate[required,custom[email]] feedback-input" placeholder="Email">
                </p>

                <br />
                    </div>
                <div class="submit">
                    <input type="submit" value="Send" id="submit">
                    <input type="reset" value="Clear">
                    <div class="ease"></div>
                </div>

                
            </form>
-->
                        
<form action="#" method="post" name="form">
   
    <div class="inputStyle">

    <p class="myname">

        <input type="text" name="vname" id="myname" class="feedback-input"  placeholder="Name">
        </p>

        <p class="email">

                <input type="text" name="vemail" id="email" class="feedback-input" placeholder="Email">
        </p>
                                                
            <textarea name="msg" placeholder="Message" class="inputWidth"></textarea>

                                                
    </div>

</br>

<div class="submit">
<input name="submit" type="submit" value="Send" id="submit">

<div class="ease"></div>
</div>
            
                </div>
            </form>
        </div>

		
</div>        
        </header>
    </div>

    <!--MAIN-->


    
    <main>
            <img src="img/reel-site-bg.svg" class="reelBg">

        <h2>Current Events </h2>

<section class="Theatre">
      
        <div class="reelFeatured">
	<img src="img/reel-slider-bg.svg" id="reelSliderBg" class="rotating">
			<!-- MAIN SLIDES -->
			<div class="slider">
				<figure>
                      <figcaption class="reelTitle">Tims</a>
					</figcaption>
<!--					<img src="img/thumb/index-01.png" alt="One">-->
                      <video poster="" width="320" controls loop id="video">
                            <source src="reels/IMG_2793.mov" type="video/mp4">
                      </video>
					<figcaption><p>Caption for image one.</p> <a href="https://twitter.com/movireelapp">@movireelapp</a>
					</figcaption>
				</figure>
				<figure>
<!--					<img src="img/thumb/index-02.png" alt="One">-->
                    <figcaption class="reelTitle">Two Chicks</a>
					</figcaption>
                     <video poster="" width="320" controls loop id="video">
                            <source src="reels/IMG_3065.mov" type="video/mp4">
                      </video>
					<figcaption><p>Caption for image two.</p> <a href="#two">Read more</a>
					</figcaption>
				</figure>
				<figure>
<!--
                      <figcaption class="reelTitle">Pilot</a>
					</figcaption>
-->
<!--					<img src="img/thumb/index-03.png" alt="One">-->
                     <video poster="" width="320" controls loop id="video">
                            <source src="reels/pilot.mov" type="video/mp4">
                      </video>
					<figcaption>
                        <p>Caption for image two.</p>
                         <a href="#three"> <i class="fa fa-twitter" id="twitter"></i></a>
                         <a href="#three"> <i class="fa fa-facebook" id="facebook"></i></a>                                  <a href="#three"> <i class="fa fa-globe" id="web"></i> </a>              
					</figcaption>
				</figure>
				<figure>
                      <figcaption class="reelTitle">Two Chicks</a>
					</figcaption>
<!--					<img src="img/thumb/index-04.png" alt="One">-->
                     <video poster="" width="320" controls loop id="video">
                            <source src="reels/IMG_3065.mov" type="video/mp4">
                      </video>
					<figcaption><p>Caption for image four.</p> <a href="#four">Read more</a>
					</figcaption>
				</figure>
				<figure>
                      <figcaption class="reelTitle">Two Chicks</a>
					</figcaption>
<!--					<img src="img/thumb/index-05.png" alt="One">-->
                     <video poster="" width="320" controls loop id="video">
                            <source src="reels/IMG_2793.mov" type="video/mp4">
                      </video>
					<figcaption><p>Caption for image five.</p> <a href="#five">Read more</a>
					</figcaption>
				</figure>
			</div>
			</div>


    
    <!-- THUMBNAILS -->
    <div class="thumbs">
        <div class="reelThumbnails">
			<div class="slider-nav-thumbnails">
				<div><img class="blueBack" src="img/thumb/reel-thumb-pics-01.png" alt="One">
				</div>
                <div><img class="blueBack" src="img/thumb/reel-thumb-pics-02.png" alt="Two">
				</div>
				<div><img class="blueBack" src="img/thumb/reel-thumb-pics-03.png" alt="Three">
				</div>
				<div><img class="blueBack" src="img/thumb/index-04.png" alt="Four">
				</div>
				<div><img class="blueBack" src="img/thumb/index-01.png" alt="Five">
				</div>
                
			</div>
        </div>
    </div>


	</div>
</div>
  
</section>
    
        
        

</main>









    <!------------FOOTER-------------->
    


<!--
    <footer id="socialmedia">
        <a class="scrollup"><i class="fa fa-fast-backward"></i>
Rewind
</a> 
-->
        <footer id="socialmedia">
        <a class="scrollup"><i class="fa fa-caret-up"></i>
</a>

        <ul class="social-buttons">
            <li class="twitterIconFoot"> <a href="https://twitter.com/movireelapp"><i class="fa fa-twitter"></i></a>
            </li>
            <li class="facebookIconFoot"><a href="https://www.facebook.com/MoviReel-833116013477090/"><i class="fa fa-facebook"></i></a>
            </li>
            <li class="instagramIconFoot"> <a href="https://www.instagram.com/movireel/"><i class="fa fa-instagram"></i>
</a>
            </li>

        </ul>
        <p class="footp">&copy; MoviReel 2015</p>



    </footer>


    <script src="js/main.js"></script>
</body>

</html>