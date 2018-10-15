<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

        <link rel="stylesheet" href="css/icon-font.css">
        <link rel="stylesheet" href="css/main.css">
        <!-- <link rel="shortcut icon" type="image/png" href="img/favicon.png"> -->

        <title>SKIT Programs</title>
    </head>
    <body>


        <div class="navigation">
            <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

            <label for="navi-toggle" class="navigation__button">
                <span class="navigation__icon">&nbsp;</span>
            </label>

            <div class="navigation__background">&nbsp;</div>

            <nav class="navigation__nav">
                <ul class="navigation__list">
                    <li class="navigation__item">
                        <a href="index.php#top" class="navigation__link" onclick="uncheck();">Top of Page</a>
                    </li>
                    <li class="navigation__item">
                        <a href="index.php#programs" class="navigation__link" onclick="uncheck();">Programs</a>
                    </li>
                    <li class="navigation__item">
                        <a href="index.php#about" class="navigation__link" onclick="uncheck();">About</a>
                    </li>
                    <li class="navigation__item">
                        <a href="index.php#news" class="navigation__link" onclick="uncheck();">In the news</a>
                    </li>
                    <li class="navigation__item">
                        <a href="index.php#testimonies" class="navigation__link" onclick="uncheck();">testimonies</a>
                    </li>
                    <li class="navigation__item">
                        <a href="index.php#contact" class="navigation__link" onclick="uncheck();">Contact</a>
                    </li>
                    <li class="navigation__item">
                        <a href="announcement.php" class="navigation__link" onclick="uncheck();">Announcement</a>
                    </li>
                </ul>
            </nav>

            <script>
              function uncheck()
                {
                  document.getElementById("navi-toggle").checked = false;
                }
            </script>
        </div>
        <header class="announce u-margin-bottom-big" id="top">
            <!-- <div class='announce__logo-box'>
                <img src="img/logo-white.png" alt="Logo" class="announce__logo" >
            </div> -->
            <div class="announce__text-box">
                <h1 class="heading-primary">
                    <span class="heading-primary--main">SKIT</span>
                    <span class="heading-primary--sub">Special Kind of Improvisational Theater</span>
                </h1>

                <!-- <a href="#section-tours" class="btn btn--white btn--animated">Discover our tours</a> -->
            </div>
            <div class="announce__sub-text">
              <span >
                Fostering strong Communication, Collaboration, Listening, Innovation, and Social Skills for people on the Autism Spectrum, with Asperger’s Syndrome, and other Special Needs.
              </span>
            </div>

        </header>

        <main>

        <section class="section-stories u-margin-bottom-big" id="about">

            <div class="u-center-text u-margin-bottom-small">
                <h2 class="heading-secondary">
                    Announcement
                </h2>
            </div>
            <div class="row">
                <div class="story">
                    <div class="story__text">
                        <p>
                          <b>Attention Improv Artists, Actors, and Instructors with personal or professional experience with people with developmental disabilities! </b><br/></br/>
SKIT™(Special Kind of Improvisational Theater) is now offering a Free Training the Trainers program. (Interview Required)<br/></br/>
Sunday afternoons, October 7, 14 and 21 from 1-5 pm (Location TBD)<br/></br/>
The SKIT™ program is an Improvisational Theater Techniques – based series of workshops to help teens and adults with developmental
disabilities learn to communicate more effectively and develop improved communication and social skills. Our goal is to assist those in Local Communities with Special Needs to gain the skills and experience who are in the Special Needs Community to have a more productive life more productive life with meaningful friendships, better relationships, and productive careers.<br/></br/>
The programs run in 12 week sessions for 90 minutes each. Every week we build, grow, and improve skills as we review what we learned the previous week. add a little bit more as we review what we learned the previous week and extend to new and more challenging exercises.  We will then escalate the levels to ensure optimum learning and development.<br/></br/>
Our program’s goals are more therapeutic in nature focusing on the individual’s growth based rather than aiming to be performance-based for an audience. Anyone with any theater background or with Special Needs Education Credentials or has worked in the disabilities community and has a passion for helping people thrive is a good fit to become a coach.<br/></br/>

In exchange for the free training, if successful, you will become an independent contractor working for SKIT™ at a generous hourly rate and coach your own class. In addition we will provide subsequent mentoring for coaches and periodic updates to our programs.<br/></br/>
You must be able to commit to 18 hours of conducting a SKIT™ workshop at minimum for 12 weeks (or shorter summer sessions) at a location near you within the first year.<br/></br/>
If these dates and times do not work for you please contact us at 609-240-7080 or at <a href="jwood@skitprograms.com">jwood@skitprograms.com</a> to discuss.  Please provide us with  your e mail address, phone number, and zip code.<br/></br/>
Subject to Background Check (paid for by SKIT) and successful completion of the training.

                        </p>
                    </div>
                </div>
            </div>
        </section>



        </main>

        <footer class="footer">

            <div class="row">
                <div class="col-1-of-2">
                    <div class="footer__navigation">
                        <ul class="footer_list">
                            <li class="footer__item">
                                <a href="index.php#top" class="footer__link">Home</a>
                            </li>
                            <li class="footer__item">
                                <a href="index.php#contact" class="footer__link">Contact</a>
                            </li>
                            <li class="footer__item">
                                <a href="index.php#programs" class="footer__link">Programs</a>
                            </li>
                            <li class="footer__item">
                                <a href="index.php#about" class="footer__link">About</a>
                            </li>
                            <li class="footer__item">
                                <a href="index.php#news" class="footer__link">In the news</a>
                            </li>
                            <li class="footer__item">
                                <a href="announcement.php" class="navigation__link" onclick="uncheck();">Announcement</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-1-of-2">
                    <p class="footer__copyright">
                        &copy; <? echo date('Y'); ?>, SKIT Programs
                    </p>
                </div>
            </div>
        </footer>


    </body>
</html>
