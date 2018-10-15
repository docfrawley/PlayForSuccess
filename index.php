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

    <?
        $contact_sent = false;
        if (isset($_POST)){
        switch ($_POST['task']) {
            case 'contact':
                $subject = "Contact Form, SKIT Programs";
                $to = "jwood@jwactorstudio.com";
                $from = $_POST['email'];
                $message = "Name: ".$_POST['name'].". ".$_POST['what_else'];
                $headers = 'From: '.$from . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
                mail($to, $subject, $message, $headers);
                $contact_sent = false;
                break;
            case 'fall':
                $subject = "Summer Program, SKIT Programs";
                $to = "jwood@jwactorstudio.com";
                $from = $_POST['email'];
                if ($_POST['class']=='adults'){
                    $message = "Name: ".$_POST['name'].'. I would like to sign up for the ages 15 to adults fall program.';
                } else {
                    $message = "Name: ".$_POST['name'].'. I would like to sign up for the ages 9 to 14 fall program.';
                }
                $headers = 'From: '.$from . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
                mail($to, $subject, $message, $headers);
                $contact_sent = false;
            break;
            case 'signupRegular':
                $subject = "Official Program, SKIT Programs";
                $to = "jwood@jwactorstudio.com";
                $from = $_POST['email'];
                if ($_POST['class']=='Ages 10 - 14'){
                    $message = "Name: ".$_POST['name'].'. I would like to sign up for the Ages 10-14 Fridays 4-5:30pm beginning June 22';
                } else {
                    $message = "Name: ".$_POST['name'].'. I would like to sign up for the Ages 15 through adults Saturdays 4-5:30pm beginning June 23.';
                }
                $headers = 'From: '.$from . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
                mail($to, $subject, $message, $headers);
                $contact_sent = false;
            break;
            default:
                # code...
                break;
            }
        } ?>

        <div class="navigation">
            <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

            <label for="navi-toggle" class="navigation__button">
                <span class="navigation__icon">&nbsp;</span>
            </label>

            <div class="navigation__background">&nbsp;</div>

            <nav class="navigation__nav">
                <ul class="navigation__list">
                    <li class="navigation__item">
                        <a href="#top" class="navigation__link" onclick="uncheck();">Top of Page</a>
                    </li>
                    <li class="navigation__item">
                        <a href="#programs" class="navigation__link" onclick="uncheck();">Programs</a>
                    </li>
                    <li class="navigation__item">
                        <a href="#about" class="navigation__link" onclick="uncheck();">About</a>
                    </li>
                    <li class="navigation__item">
                        <a href="#news" class="navigation__link" onclick="uncheck();">In the news</a>
                    </li>
                    <li class="navigation__item">
                        <a href="#testimonies" class="navigation__link" onclick="uncheck();">Testimonies</a>
                    </li>

                    <li class="navigation__item">
                        <a href="#contact" class="navigation__link" onclick="uncheck();">Contact</a>
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
        <header class="header u-margin-bottom-big" id="top">
            <!-- <div class='header__logo-box'>
                <img src="img/logo-white.png" alt="Logo" class="header__logo" >
            </div> -->
            <div class="header__text-box">
                <h1 class="heading-primary">
                    <span class="heading-primary--main">SKIT</span>
                    <span class="heading-primary--sub">Special Kind of Improvisational Theater</span>
                </h1>

                <!-- <a href="#section-tours" class="btn btn--white btn--animated">Discover our tours</a> -->
            </div>
            <div class="header__video">
              <video width="320" height="240" controls>
                  <source src="video/SKITvid.mp4" type="video/mp4">
                  <!-- <source src="movie.ogg" type="video/ogg"> -->
                  Your browser does not support the video tag.
              </video>
            </div>
            <div class="header__sub-text">
              <span >
                Fostering strong Communication, Collaboration, Listening, Innovation, and Social Skills for people on the Autism Spectrum, with Asperger’s Syndrome, and other Special Needs.
              </span>
            </div>

        </header>

        <main>
          <section id="programs">
            <div class="u-center-text u-margin-bottom-medium">
                <h2 class="heading-secondary">
                    Programs
                </h2>
            </div>

            <div class="row u-margin-bottom-big">

                <div class="col-1-of-2">
                    <div class="card">
                        <div class="card__side card__side--front">
                          <div class="card__picture card__picture--1">
                            &nbsp;
                          </div>
                          <h4 class="card__heading">
                            <span class="card__heading-span card__heading-span--1">Fall 2018</span>
                          </h4>
                          <div class="card__details">
                             <ul>
                                 <li>NJ DDD Qualified Provider ID# PONJD 011305</li>
                                 <li>Ages 9-14 Saturdays 11:30-1:00pm beginning September 15</li>
                                 <li>
                                   Twelve Week Program
                                 </li>
                                 <li>Theater at The Princeton Montessori School</li>
                                 <li>487 Cherry Valley Rd., Princeton</li>
                             </ul>
                          </div>
                        </div>
                        <div class="card__side card__side--back card__side--back-1">
                         <div class="card__cta">
                           <div class="card__price-box">
                               <p class="card__price-only">The tuition for the 12 week program is $495.00.<br />
                                 We offer a fun, safe environment and wokshop based on proven Improvisational Theater skills
                                 training that will help everyone develop stronger Communication and Social Skills, (and to
                                 perhaps find their inner actor!) and practice them in front of a group.</p><br />
                               <a href="#popup2" class="btn btn--white">Register Here</a>
                           </div>
                         </div>
                        </div>
                    </div>
                </div>
                <div class="col-1-of-2">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--2">
                                &nbsp;
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--2">Fall 2018</span>
                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>NJ DDD Qualified Provider ID# PONJD 011305</li>
                                    <li>Ages 15-adults Saturdays 4-5:30pm beginning September 15</li><li>
                                      Twelve Week Program
                                    </li>
                                    <li>Theater at The Princeton Montessori School</li>
                                    <li>487 Cherry Valley Rd., Princeton</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card__side card__side--back card__side--back-2">
                            <div class="card__cta">
                                <div class="card__price-box">
                                    <p class="card__price-only">The tuition for the 12 week program is $495.00.<br />
                                      We offer a fun, safe environment and wokshop based on proven Improvisational Theater skills
                                      training that will help everyone develop stronger Communication and Social Skills, (and to
                                      perhaps find their inner actor!) and practice them in front of a group.
                                      </p><br />
                                    <a href="#popup1" class="btn btn--white">Register Here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- <div class="col-1-of-3">
                <div class="card">
                    <div class="card__side card__side--front">
                      <div class="card__picture card__picture--3">
                        &nbsp;
                      </div>
                      <h4 class="card__heading">
                        <span class="card__heading-span card__heading-span--3">Ages 16-Adult</span>
                      </h4>
                      <div class="card__details">
                         <ul>
                             <li>Begins Saturday, 3/3</li>
                             <li>4:00 - 5:30pm</li>
                             <li>Theater at The Princeton Montessori School</li>
                             <li>487 Cherry Valley Rd., Princeton</li>
                         </ul>
                      </div>
                    </div>
                    <div class="card__side card__side--back card__side--back-3">
                     <div class="card__cta">
                       <div class="card__price-box">
                           <p class="card__price-only">Each program runs for 12 sessions. We are charging $39.00 per session.
                             Anyone paying per session must provide credit card
                             information and anyone who wishes to pay up front for all 12 sessions will save 10% or $45.00.</p>
                           <a href="#popup2" class="btn btn--white">Sign Up</a>
                       </div>
                     </div>
                    </div>
                </div>
            </div>
          </div> -->



        </section>

        <section class="section-stories u-margin-bottom-big" id="about">

            <div class="u-center-text u-margin-bottom-small">
                <h2 class="heading-secondary">
                    About SKIT
                </h2>
            </div>
            <div class="row">
                <div class="story">
                    <div class="story__text">
                        <p>
                          JW actors studio has developed SKIT™, a new program for people with Special Needs. Inspired by a father of a current student in the Spring of 2017, founder Jody Wood began researching
                          best practices for developing programs for students not only with ASD but also Asperger’s Syndrome as well as many other Special Needs students.<br /><br />

We developed an initial program in late Winter/early Spring of 2017 and were able to conduct it at the Galloway Middle School’s FUN (Friends United Now) after school program in Galloway Township, NJ. The results were amazing. The students loved it and more importantly, were very engaged! The professionals who participated or were observing were very impressed with the results. They said that they had never seen such a connection among the group. They were impressed by the fact that the students were able to quickly let their guard down and feel safe enough to participate. That is a tribute to the atmosphere we created but also to the improv exercises themselves, which are designed to allow students to let go, let loose, and Communicate, Listen, Innovate, and Collaborate!
<br /><br />
We were especially struck by the fact that most young adults with ASD or Asperger’s Syndrome have a very high unemployment rate and an extremely high “under employment” rate mostly because they lack critical listening and social skills. Our program’s goal is to stop that right in its tracks. While we will be working with all ages through adulthood in our programs, we aim to nip these issues in the bud as we work with the younger students.
<br /><br />
Our programs are specifically designed to establish a safe, creative atmosphere where students can just be themselves. Where “mistakes” don’t matter. In Improvisation many “Happy Mistakes” lead to wonderful results!
<br /><br />
Our True Social Skills Training program focuses on:
<br />
Focused Listening<br />
Building on Ideas<br />
Improving Communication and Social Skills<br />
Creating Meaningful Conversation<br />
Relieving the Stress of “How to Respond”<br />
Comfort with Being the “Center of Attention”<br />
Learning Patience<br />
Developing and Holding Onto Meaningful Relationships<br />
Mastering the Process of Listen, See, Understand, and then Respond<br />
And Much More!<br /><br />
If you are a parent of a person with ASD, Asperger’s Syndrome, or other Special Needs please contact us and we’ll be happy to discuss how our workshops will make a huge difference in your child or young adult’s life.
<br /><br />
If you are a non profit organization please contact us to see how we can work together to to add an outstanding program that already has proven results as a part of your services to the Special Needs Community.
<br /><br />
If you are an educator or run a Special Needs PTO Contact Us to implement a program in your school or to add an awesome addition to your after school programs.
<br /><br />
Ask us about about our weekly classes at various locations throughout the state and beyond!
<br /><br />
Contact us at: 609-240-7080 today!
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section  id="news">
          <div class="u-center-text u-margin-bottom-medium">
              <h2 class="heading-secondary">
                  In the News
              </h2>
          </div>
          <div class="row news">
              <div class="col-1-of-2">
                  <h3 class="heading-tertiary u-margin-bottom-small news__title">skit founder, Jody Wood, Gives Tedx Talk</h3>
                  <p class="paragraph">We were honored to be selected from hundreds of applicants  to give a TEDx Talk on Saturday,
                    April 28th 2018 to help spread the word about SKIT and our Improv Therapy.</p>
                    <p class="paragraph">
                      Photos by Joe del Tufo Moonloop Photography
                    </p>



                  <a href="https://youtu.be/kqSEHT1IHi0" class="btn btn--green" target="_blank">Watch Video &rarr;</a>
              </div>
              <div class="col-1-of-2">
                  <div class="composition">
                     <img srcset="img/TEDx1-small.jpg 300w, img/TEDx1.jpg 1000w"
                          sizes="(max-width: 56.25) 20vw, (max-width: 37.5em) 30vw, 300px"
                          alt="Photo 1" class="composition__photo composition__photo--p1"
                           src="img/TEDx1-small.jpg" >

                      <img srcset="img/TEDx2-small.jpg 300w, img/TEDx2.jpg 1000w" sizes="(max-width: 56.25) 20vw, (max-width: 37.5em) 30vw, 300px"
                      alt="Photo 2" class="composition__photo composition__photo--p2" src="img/TEDx2-small.jpg">

                      <img srcset="img/TEDx3-small.jpg 300w, img/TEDx3.jpg 1000w" sizes="(max-width: 56.25) 20vw, (max-width: 37.5em) 30vw, 300px"
                          alt="Photo 3" class="composition__photo composition__photo--p3" src="img/TEDx3-small.jpg">


                  </div>
              </div>
          </div><br/>

        </br/>
        </section>
        <section  id="testimonies">
          <div class="u-center-text u-margin-bottom-medium">
              <h2 class="heading-secondary">
                  testimonies
              </h2>
          </div>
          <div class="row news">
              <div class="col-1-of-3">
                <p class="testimonies__first">
                  Our son definitely has fun in the program and is motivated to ensure we get there on time!  He will
often chuckle during the week about how fun the workshop is. Best of all, though already verbal and
social, he is gaining additional valuable skill interacting and thinking quickly on his feet. We can see the
clear skills improvement after only the first few sessions. The atmosphere at SKIT is always positive. The
instructors have a talent for drawing out participation from diverse personalities and abilities. We are
impressed also that the program sparks creativity beyond the minimum: one participant has written
scripts for use in the program and our son’s previously written draft screenplay might be adapted and
used. An added benefit is that he and we are meeting more friends with so much in common.
                <br/>

            <br/>
                John and Keith Ann Brennick (Parents of Student)
              </p>
              </div>
              <div class="col-1-of-3">
                <p class="testimonies__second">
                  The instructors at SKIT believe in the capabilities of everyone including students who have disabilities. They are very encouraging and respectful. Having autism being in a social group is hard. The class never seemed hard though it just felt like fun. Learning improv helped me to learn how to deal with changes and unpredictability and pushed me to speak up more in groups.
                  <br/>

                </br/>
                    Elizabeth Dicker (Student)
                </p>
              </div>
              <div class="col-1-of-3">
                <p class="testimonies__third">
                  My school had the honor and pleasure of working with Jody Wood and his Skit team. It was amazing to see students who usually do not like to emote feelings, to share stories, or to show their vulnerability be so open to his acting coaching and come alive while working with him. I believe the form of expression Jody endorses is vital for our students. They hold so much in, and to find such a positive way to release what they have inside is a true gift. I highly recommended using Jody Wood’s SKIT program in your school setting, especially if you want to give your students an opportunity to productively express themselves and discover talents they never even knew they had.
                  <br /><br />

                    Mike Kaufman<br />
  Director<br />
  High Point School of Bergen County <br />
                </p>


              </div>
          </div>
        </section>


        <section class="section-contact" id="contact">
          <div class="u-center-text u-margin-bottom-medium">
              <h2 class="heading-secondary">
                  Contact
              </h2>
          </div>
            <div class="row">
                <div class="contact">
                    <div class="contact__form">

                        <form action="index.php" method="POST" class="form">
                            <? if ($contact_sent){ ?>
                                <p>CONTACT INFO AND MESSAGE HAVE BEEN SENT</p>
                            <? } else { ?>
                                <p>Please complete form below or call us at <strong>609-240-7080</strong></p>
                            <? } ?>

                            <div class="form__group">
                                <input type="text" class="form__input" name="name"
                                placeholder="Full Name" id="name" required>
                                <label for="name" class="form__label">Full name</label>
                            </div>

                            <div class="form__group">
                                <input type="email" class="form__input" name="email"
                                placeholder="Email address" id="email" required>
                                <label for="email" class="form__label">Email address</label>
                            </div>

                            <div class="form__group">
                                <textarea class="form__textarea" placeholder="Message"
                                            name="what_else" id="what_else"></textarea>
                                <label for="what_else" class="form__label">Message</label>
                            </div>
                            <div class="form__group u-margin-bottom-medium">
                                <input type="hidden" name="task" value="contact">
                                <input type="submit" value="Send Message &rarr;" class="btn btn--green">
                            </div>
                        </form>
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
                                <a href="#" class="footer__link">Home</a>
                            </li>
                            <li class="footer__item">
                                <a href="#contact" class="footer__link">Contact</a>
                            </li>
                            <li class="footer__item">
                                <a href="#programs" class="footer__link">Programs</a>
                            </li>
                            <li class="footer__item">
                                <a href="#about" class="footer__link">About</a>
                            </li>
                            <li class="footer__item">
                                <a href="#news" class="footer__link">In the news</a>
                            </li>
                            <li class="footer__item">
                                <a href="#testimonies" class="footer__link">Testimonies</a>
                            </li>
                            <li class="footer__item">
                                <a href="announcement.php" class="footer__link" onclick="uncheck();">Announcement</a>
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

        <div class="popup" id="popup1">
            <div class="popup__content">
                <div class="popup__left">
                    <img src="img/second.jpg" alt="Tour photo" class="popup__img">
                </div>
                <div class="popup__right">
                    <a href="#section_tours" class="popup__close">&times;</a>
                    <h2 class="heading-tertiary u-margin-bottom-small">Reservation for 2018 fall Program</h2>
                    <form action="index.php" method="POST" class="form">
                            <? if ($contact_sent){ ?>
                                <p>CONTACT INFO AND MESSAGE HAVE BEEN SENT</p>
                            <? } else { ?>
                                <p>Please complete form below or call us at <strong>609-240-7080</strong></p>
                            <? } ?>

                            <div class="form__group">
                                <input type="text" class="form__input" name="name"
                                placeholder="Full Name" id="name" required>
                                <label for="name" class="form__label">Full name</label>
                            </div>

                            <div class="form__group">
                                <input type="email" class="form__input" name="email"
                                placeholder="Email address" id="email" required>
                                <label for="email" class="form__label">Email address</label>
                            </div>
                            <p> Select a Class</p>
                            <div class="form__group u-margin-bottom-medium">
                                <div class="form__radio-group">
                                    <input type="radio" class="form__radio-input" id="small" name="class" value="twelve">
                                    <label for="small" class="form__radio-label">
                                        <span class="form__radio-button"></span>
                                        Ages 9 - 14, 11:30am - 1:00pm</label>
                                </div>

                                <div class="form__radio-group">
                                    <input type="radio" class="form__radio-input" id="large" name="class" value="adults">
                                    <label for="large" class="form__radio-label">
                                        <span class="form__radio-button"></span>
                                        Ages 15 - Adults, 4:00pm - 5:30pm</label>
                                </div>
                            </div>
                            <div class="form__group u-margin-bottom-medium">
                                <input type="hidden" name="task" value="fall">
                                <input type="submit" value="Sign Up &rarr;" class="btn btn--green">
                            </div>
                            <div class="u-margin-bottom-medium">
                                    <a class="btn btn--orange" href="pdfs/payform.pdf" target="_blank">Payment Form</a>
                                </div>
                        </form>
                </div>
            </div>
        </div>


        <div class="popup" id="popup2">
            <div class="popup__content">
                <div class="popup__left">
                    <img src="img/second.jpg" alt="Tour photo" class="popup__img">
                </div>
                <div class="popup__right">
                    <a href="#section_tours" class="popup__close">&times;</a>
                    <h2 class="heading-tertiary u-margin-bottom-small">Reservation for official program</h2>
                    <form action="index.php" method="POST" class="form">
                            <? if ($contact_sent){ ?>
                                <p>CONTACT INFO AND MESSAGE HAVE BEEN SENT</p>
                            <? } else { ?>
                                <p>Please complete form below or call us at <strong>609-240-7080</strong></p>
                            <? } ?>

                            <div class="form__group">
                                <input type="text" class="form__input" name="name"
                                placeholder="Full Name" id="name" required>
                                <label for="name" class="form__label">Full name</label>
                            </div>

                            <div class="form__group">
                                <input type="email" class="form__input" name="email"
                                placeholder="Email address" id="email" required>
                                <label for="email" class="form__label">Email address</label>
                            </div>
                                <p> Select a Class</p>
                            <div class="form__group u-margin-bottom-medium">
                                <div class="form__radio-group">
                                    <input type="radio" class="form__radio-input" id="eight" name="class" value="Ages 10 - 14">
                                    <label for="eight" class="form__radio-label">
                                        <span class="form__radio-button"></span>
                                        Ages 10 - 14 Fridays 4-5:30pm beginning June 22</label>
                                </div>

                                <div class="form__radio-group">
                                    <input type="radio" class="form__radio-input" id="twelve" name="class" value="Ages 15 - adults">
                                    <label for="twelve" class="form__radio-label">
                                        <span class="form__radio-button"></span>
                                        Ages 15 - Adults Saturdays 4-5:30pm beginning June 23</label>
                                </div>
                                <!-- <div class="form__radio-group">
                                    <input type="radio" class="form__radio-input" id="adult" name="class" value="Ages 16-Adult">
                                    <label for="adult" class="form__radio-label">
                                        <span class="form__radio-button"></span>
                                        Ages 16-Adult begins Saturday, March 3rd 4:00-5:30pm</label>
                                </div> -->
                            </div>
                            <div class="form__group u-margin-bottom-small">
                                <input type="hidden" name="task" value="signupRegular">
                                <input type="submit" value="Sign Up &rarr;" class="btn btn--green">
                            </div>

                        </form>
                        <div class="u-margin-bottom-medium">
                                <a class="btn btn--orange" href="pdfs/payform.pdf" target="_blank">Payment Form</a>
                            </div>
                </div>
            </div>
        </div>

        <!-- <section class="grid-test">
            <div class="row">
                <div class="col-1-of-2">
                    Col 1 of 2
                </div>
                <div class="col-1-of-2">
                    Col 1 of 2
                </div>
            </div>

            <div class="row">
                <div class="col-1-of-3">
                    Col 1 of 3
                </div>
                <div class="col-1-of-3">
                    Col 1 of 3
                </div>
                <div class="col-1-of-3">
                    Col 1 of 3
                </div>
            </div>

            <div class="row">
                <div class="col-1-of-3">
                    Col 1 of 3
                </div>
                <div class="col-2-of-3">
                    Col 2 of 3
                </div>
            </div>

            <div class="row">
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
            </div>

            <div class="row">
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-2-of-4">
                    Col 2 of 4
                </div>
            </div>

            <div class="row">
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-3-of-4">
                    Col 3 of 4
                </div>
            </div>
        </section> -->

    </body>
</html>
