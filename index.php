<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Christopher (Chris) Sciavolino is an aspiring software engineer, web developer, and Cornell University student. He has developed in various sectors of the computer science field, from Swift iOS development to LAMP stack webb development. He is currently seeking a full-time internship for the summer of 2018.">
        <title>Chris Sciavolino</title>
        
        <!-- Font Imports -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
        
        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="styles/all.css" type="text/css">
        
        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        
        <!-- Bootstrap JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <script src="scripts/main.js"></script>
    </head>
    <body>
        <!--------------------- Banner Section -------------------------->
        <section id='preloading-banner-wrapper'>
            <div id='sphere-1' class='sphere'></div>
            <div id='sphere-2' class='sphere'></div>
            <div id='sphere-3' class='sphere'></div>
            <div id='sphere-4' class='sphere'></div>
            <div id='sphere-5' class='sphere'></div>
            <div id="banner-title-wrapper">
                <h1 id="banner-title">Welcome.</h1>
                <div id='banner-buttons'>
                    <a class='ext-button' target="_blank" href='assets/ChrisSciavolinoResume.pdf'>Resume</a>
                    <a class='ext-button' href='mailto:cds253@cornell.edu?Subject=[Web Inquiry]'>Contact Me</a>
                </div>
            </div>
        </section>        
        
        <div class="container">
            <!--------------------- Overview Section ------------------------>
            <section id="overview-wrapper">
                <div class="section-title-wrapper hideme">
                    <h1 class="section-title">Overview</h1>
                </div>

                <div class="row work-section-wrapper hideme">
                    <div class="col-xs-offset-3 col-xs-6 col-md-offset-0 col-md-4">
<!--
                        <div class="row">
                            <div id='overview-collage-wrapper'>
                                <img src="images/overview/sciavolino.jpg" id="overview-image-1" class="col-md-3 overview-image" alt="Chris Headshot">
                                <img src="images/overview/group_pic.jpg" id="overview-image-2" class="col-md-offset-2 col-md-3 overview-image" alt="Chris Headshot">
                                <img src="images/overview/prof_pic.jpg" id="overview-image-3" class="col-md-3 overview-image" alt="Chris Headshot">
                            </div>
                        </div>
-->
                        <div class='headshot-wrapper'>
                            <img src='images/overview/prof_pic.jpg' id='overview-headshot' alt='Chris Sciavolino Headshot'>
                        </div>
                    </div>
                    
                    <div id='overview-text-wrapper' class='col-xs-12 col-md-offset-1 col-md-7'>
                        <p class='text-block'>
                            I am Chris Sciavolino, a junior at Cornell University majoring in Computer Science with a minor in business. I’ve been programming since my sophomore year of high school, loving it ever since. Over the past five years, I’ve explored various sectors of computer science from iOS app development to full-stack web development to interactive voice response systems for taxi dispatching.
                        </p>
                        <p class='text-block'>
                            I am currently seeking full-time internship opportunities for the summer of 2018.
                        </p>
                        <div class='centered'>
                            <a class='ext-button' target="_blank" href='assets/ChrisSciavolinoResume.pdf'>Resume</a>
                        </div>
                    </div>
                </div> <!-- end overview row -->
            </section> <!-- end overview-wrapper -->
            
            <!------------------ Work Experience Section -------------------->
            <section id='work-exp-wrapper'>
                <div class="section-title-wrapper hideme">
                    <h1 class="section-title">Prior Work Experience</h1>
                </div>
                
                <div class="row work-section-wrapper hideme">
                    <div class='col-xs-offset-3 col-xs-6 col-md-offset-0 col-md-4'>
                        <div id="redroute-icon-wrapper">
                            <img class='work-exp-image' src='images/work/redroute-icon.png' alt="RedRoute Inc. Icon">
                        </div>
                    </div>
                    <div class='col-xs-12 col-md-offset-1 col-md-7'>
                        <div class='subsection-title-wrapper right-align'>
                            <h3 class='subsection-title'>Software Development Intern</h1>
                            <h3 class='subsection-title'>RedRoute Inc.</h1>
<!--                            <div class='subsection-title-divider right-divider'></div>-->
                        </div>
                        <div class='subsection-text-wrapper'>
                            <p class='text-block right-align'>
                                Over the summer of 2017, I worked with a development team on a call taking service for taxi dispatchers. The goal is to replace human call taking with an interactive voice response (IVR) system capable of understanding customer speech and converting calls into actionable requests dispatchers can satisfy. Two of the largest strides the company made during the summer was improved UX design (keeping interactions succinct) and accuracy (processing correct locations). 
                            </p>
                        </div>
                    </div>
                </div> <!-- end redroute-section-wrapper -->
                
                <div class='row work-section-wrapper hideme'>
                    
                    <div class='col-xs-offset-3 col-xs-6 col-md-push-7 col-md-offset-1 col-md-4'>
                        <div id='cornell-logo-wrapper'>
                            <img class='work-exp-image' src='images/work/cornell-logo.svg' alt="Cornell University Logo">
                        </div>
                    </div>

                    <div class='col-xs-12 col-md-pull-5 col-md-7'>
                        <div class="subsection-title-wrapper left-align">
                            <h3 class='subsection-title'>Computer Science Teaching Assistant</h3>
                            <h3 class='subsection-title'>Cornell University</h3>
<!--                            <div class='subsection-title-divider'></div>-->
                        </div>
                        
                        <div class='subsection-text-wrapper'>
                            <p class='text-block left-align'>
                                Ever since spring of 2017, I’ve served on course staff for the Computing and Information Science Department at Cornell University. I love sparking interest in the field and teaching peers the ins and outs of computer science, as prior teaching assistants and professors have done for me. I’ve served on course staff for: 
                            </p>
                            <div id='ta-experience-wrapper'>
                                <h1 class='ta-experience-header'>CS 2110: Object-Oriented Programming and Data Structures</h1>
                                <h1 class='ta-experience-subheader'>Spring 2017, Summer 2017, Fall 2017</h1>
                                <h1 class='ta-experience-header'>INFO 1300: Introductory Design and Programming for the Web</h1>
                                <h1 class='ta-experience-subheader'>Fall 2017</h1>
                            </div>
                        </div>
                    </div>
                
                </div> <!-- end cornell cis section wrapper -->
            </section><!-- end work-exp-wrapper-->
            
            <!-------------------- Web Development Section ------------------->
            <section id='web-dev-wrapper'>
                <div class='section-title-wrapper hideme'>
                    <h1 class='section-title'>Web Development</h1>
                </div>
                
                <div class='row work-section-wrapper'>
                    <div class='col-xs-offset-1 col-xs-10 col-md-offset-0 col-md-6 hideme'>
                        <figure>
                            <a class='web-dev-thumb-wrapper' href="http://drsciavolinoday.com" target="_blank">
                                <img class='web-dev-thumb' src='images/web-dev/drsciavolinoday.jpg' alt='drsciavolinoday.com homepage'>
                                <div class='web-dev-thumb-overlay'>
                                    <h3 class='thumb-overlay-text'>View Website&nearr;</h3>
                                </div>
                            </a>
                            <figcaption class='thumb-caption'>Dr. Cristina Sciavolino Day, MD, LLC</figcaption>
                        </figure>
                    </div>
                    
                    <div class='col-xs-offset-1 col-xs-10 col-md-offset-0 col-md-6 hideme'>
                        <figure>
                            <a class='web-dev-thumb-wrapper'>
                                <img class='web-dev-thumb' src='images/web-dev/sciavotech.jpg' alt='sciavotech.com homepage'>
                                <div class='web-dev-thumb-overlay'>
                                    <h3 class='thumb-overlay-text'>Coming Soon</h3>
                                </div>
                            </a>
                            <figcaption class='thumb-caption'>SciavoTECH Research and Consultancy Services Inc.</figcaption>
                        </figure>
                    </div>
                    
                    <div class='col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6 hideme'>
                        <figure>
                            <a class='web-dev-thumb-wrapper'>
                                <img class='web-dev-thumb' src='images/web-dev/llenroc.jpg' alt='llenroc.org homepage'>
                                <div class='web-dev-thumb-overlay'>
                                    <h3 class='thumb-overlay-text'>Coming Soon</h3>
                                </div>
                            </a>
                            <figcaption class='thumb-caption'>Cornell Delta Phi</figcaption>
                        </figure>
                    </div>
                </div>
            </section> <!-- end web-dev-wrapper -->
            
            <!------------------ Projects Section ------------------------->
            <section id='projects-wrapper'>
                <div class='section-title-wrapper hideme'>
                    <h1 class='section-title'>Projects of Interest</h1>
                </div>
                
                <div class='row work-section-wrapper hideme'>
                    <div class='col-xs-offset-3 col-xs-6 col-md-offset-0 col-md-4'>
                        <img class='work-exp-image' src='images/projects/stratego-gameplay.jpg' alt='Stratego gameplay'>
                    </div>

                    <div class='col-xs-12 col-md-offset-1 col-md-7'>
                        <div class='subsection-title-wrapper right-align'>
                            <h1 class='subsection-title'>Terminal-based Stratego</h1>
<!--                            <div class='subsection-title-divider single-title-divider right-divider'></div>-->
                        </div>
                        <div class='subsection-text-wrapper'>
                            <p class='text-block right-align'>
                                As a final project for my functional programming class, I worked with 3 other teammates to create a Terminal-based version of the game Stratego. In a timeframe of 9 days, we fully developed the logic behind the game, an ASCII visualization of the board to be displayed to the user, and a x-y coordinate movement scheme for the user to move pieces. We also included a simple bot using a minimax algorithm and probabilistic modeling to pick its moves for the user to play against.
                            </p>
                            <div class='centered'>
                                <a class='ext-button' target="_blank" href='https://github.com/cdsciavolino/Stratego'>View Github</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end stratego section -->
                
                <div class='row work-section-wrapper hideme'>
                    <div class='col-xs-offset-3 col-xs-6 col-md-push-7 col-md-offset-1 col-md-4'>
                        <div id='sun-img-wrapper'>
                            <img id='sun-img' src="images/projects/news.jpg" alt='Cornell Daily Sun News App'>
                        </div>
<!--
                        <div class='row'>
                            <div id='daily-sun-image-wrapper'>
                                <div class='col-md-6'>
                                    <img id='sun-image-1' class='daily-sun-image' src="images/projects/settings.jpg" alt='Daily Sun App Settings Screen'>
                                </div>
                                <div class='col-md-6'>
                                    <img id='sun-image-2' class='daily-sun-image' src="images/projects/bookmarks.jpg" alt='Daily Sun App Bookmark Screen'>
                                </div>
                                <div class='col-md-offset-2 col-md-8'>
                                    <img id='sun-image-3' class='col-md-offset-1 col-md-4 daily-sun-image' src="images/projects/news.jpg" alt='Daily Sun App News feed Screen'>
                                </div>
                            </div>  end daily sun image wrapper 
                        </div>
-->
                    </div>
                    <div id='sun-text-wrapper' class='col-xs-12 col-md-pull-5 col-md-7'>
                        <div class='subsection-title-wrapper left-align'>
                            <h1 class='subsection-title'>Cornell Daily Sun iOS App</h1>
<!--                            <div class='subsection-title-divider single-title-divider left-divider'></div>-->
                        </div>
                        
                        <div class='subsection-text-wrapper'>
                            <p class='text-block left-align'>
                                The spring of my sophomore year, a group of developers and designers had a vision to make Cornell’s newspaper, the Cornell Daily Sun, available on an iOS app. For the past six months, we’ve been hard at work exploring design fidelities, possible features, and necessary frameworks for building this app. Our app interfaces with a Wordpress backend to retrieve articles from the Cornell Daily Sun’s website and subsequently populates a collection view. 
                            </p>
                            <div class='centered'>
                                <a class='ext-button' target="_blank" href='https://github.com/cornell-sun/sun-ios'>View Github</a>
                            </div>
                        </div>
                    </div>
                    
                </div> <!-- end cornell daily sun section-->
                
                <div class='row hideme'>
                    <div class='col-xs-offset-3 col-xs-6 col-md-offset-0 col-md-4'>
                        <img id="coffee-note-icon" class='work-exp-image' src='images/projects/coffeenote.svg' alt='Coffee Note app icon'>
                    </div>
                    
                    <div class='col-xs-12 col-md-offset-1 col-md-7'>
                        <div class='subsection-title-wrapper right-align'>
                            <h1 class='subsection-title'>Coffee Note (Noted)</h1>
<!--                            <div class='subsection-title-divider single-title-divider right-divider'></div>-->
                        </div>
                        
                        <div class='subsection-text-wrapper'>
                            <p class='text-block right-align'>
                                My freshman year, I took an introduction to iOS development course hosted by a local project team. For my final project, I aspired to create a new type of calendar app where each day would hold a simple text note rather than adding events. After the end of the class, I continued developing the app idea, incorporating Core Data and a couple color schemes. I ended up making an MVP that I used as my personal calendar app for organizing my homework and meeting schedules every day. 
                            </p>
                            
                            <div class='centered'>
                                <a class='ext-button' target="_blank" href='https://github.com/cdsciavolino/CoffeeNote'>View Github</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end Coffee Note App section -->
            </section> <!-- end projects-wrapper -->
            
<!--
            <section id='contact-wrapper'>
                <div class='section-title-wrapper'>
                    <h1 class='section-title'>Contact Me</h1>
                </div>
                
                <div class='row work-section-wrapper'>
                    <form method='post' id='contact-form'>
                        <input class='col-xs-12 col-md-offset-1 col-md-4 text-input' type='text' name='name' placeholder='Name *' value required>
                        <input class='col-xs-12 col-md-offset-1 col-md-5 text-input' type='email' name='email' placeholder='Email *' value required>
                        <input class='col-xs-12 col-md-offset-1 col-md-4 text-input' type="tel" name='phone' placeholder='Phone' value>
                        <input class='col-xs-12 col-md-offset-1 col-md-5 text-input' type="text" name='subject' placeholder="Subject *" value required>
                        <textarea class='col-xs-12 col-md-offset-1 col-md-10 message-input' name='message' placeholder="Write your message here...*" required></textarea>                            
                        <input class='col-xs-12 col-md-offset-4 col-md-4 submit-input' type='submit' name='submit' value='Send Message'>
                    </form>
                </div>
            </section>
-->
            
        </div> <!-- end container -->
        
        <footer class='hideme'>
            <div class='container'>
                <div class='row'>
                    <div class='col-md-6'>
                        <div id='social-row'>
                            <a class='social-icon' target='_blank' href='https://www.linkedin.com/in/chris-sciavolino'>
                                <img class='social-icon-img' src='images/icons/linkedin.svg' alt='Linkedin' data-toggle='tooltip' data-placement="top" title="Linkedin">
                            </a>
                            <a class='social-icon' target='_blank' href='https://github.com/cdsciavolino'>
                                <img class='social-icon-img' src='images/icons/github.svg' alt='Github' data-toggle='tooltip' data-placement="top" title="Github">
                            </a>
                            <a class='social-icon' target='_blank' href='assets/ChrisSciavolinoResume.pdf'>
                                <img class='social-icon-img' src='images/icons/resume.svg' alt='Resume' data-toggle='tooltip' data-placement="top" title="Resume">
                            </a>
                            <a class='social-icon' href='mailto:cds253@cornell.edu?Subject=[Web Inquiry]'>
                                <img class='social-icon-img' src='images/icons/email.svg' alt='Email' data-toggle='tooltip' data-placement="top" title="Email">
                            </a>
                        </div>
                    </div>
                    
                    <div class='col-md-6'>
                        <div id='contact-row'>
                            <h4 class='contact-header'>Email Address</h4>
                            <a class='mail-link' href="mailto:cds253@cornell.edu?Subject=[Web Inquiry]">cds253@cornell.edu</a>
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class="col-md-offset-1 col-md-10">
                        <p id='copyright'>Copyright &copy; Chris Sciavolino &bull; All Rights Reserved</p>
                    </div>
                </div>
            </div> <!-- end container -->
        </footer>
    </body>
</html>