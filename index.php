<?php
  $owner_name = "Ivanna Kolisnyk";
  $site_title = "Insa";
  $site_desc = "Insa is to push all thoughts from inside";
?>

<!DOCTYPE html>


<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Ivanna Kolisnyk – Curriculum Vitae">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="stylesheet" type="text/css" href="styles/main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        <script src="script.js"></script>
        <title><?php echo $owner_name; ?> | CV</title>
    <!--[if gte IE 9]>
      <style type="text/css">
        .gradient {
           filter: none;
        }
      </style>
    <![endif]-->
    </head>

  <body class="gradient">
    <div id="viewport" class="viewport">
    <div class="container">
      <aside id="aside" class="left">
        <?php include_once('navigation.php');  ?>
      </aside>
      
      <main id="main" class="main">
        <section class="info-section visible" id="home">
            <h2 class="title">Hola!</h2>
          <div class="section-content">
            <p>
              My name is Ivanna and I visualize things in Web.
            </p>
            <p>
              Usually I do my magic with client side of the Web but occasionally I also create CMS-driven goodies and tame back-end beasts.
            </p>
            <p class="minor">
              Web development is something that can make me excited, sad or even angry, but it's never going to stand outside my interests.
            </p>
          </div>
        </section>

          <section class="info-section" id="personal">
              <h2 class="title">Personal</h2>
              <div class="section-content">
                  <p>
                      <span class="icon icon-mail"></span>
                      <a href="mailto:itkolisnyk@gmail.com">itkolisnyk@gmail.com</a>
                      <a href="https://ua.linkedin.com/in/ivanna-kolisnyk-7a905587" target="_blank">LinkedIn</a>
                  </p>

                  <p>+38 (063) 604 15 08</p>
                  <p><span class="icon icon-location"></span>Kyiv, Ukraine</p>

                  <h3 class="title">Languages</h3>
                  <p>Native speaker of Ukrainian / Russian<br />
                    Upper Intermediate in English<br />
                    Beginner German</p>

                  <h3 class="title">About Me</h3>
                  <p>
                      I love to make things done, to search for elegant realization of ideas and pay great attention to details.
                  </p>
                  <p>
                      I'm excited about music and math, reading and travelling<br />
                      And always seek opportunity to learn something new.
                  </p>
                  <p>Outside my job I like playing piano improvisations and teaching math to school children.
                  </p>
              </div>
          </section>

          <section class="info-section" id="education">
              <h2 class="title">Education</h2>
              <div class="section-content">
                  <p>Taras Shevchenko National University of Kyiv,<br />
                    Radiophysics Faculty,<br />
                    Quantum Radiophysics Department</p>

                  <h3 class="title">Degrees</h3>
                  <ul class="typo extended">
                   <li>Master of Science in Radiophysics &amp; Electronics (2012 – 2014, with distinction)</li>
                   <li>Bachelor of Science in Applied Physics (2008 – 2012)</li>
                  </ul>

                  <h3 class="title">Scientific / Graduation Work</h3>
                  <p>The result of my scientific research is my graduation work "Investigation of <abbr title="Silver">Ag</abbr> Nano-particles Formation with Dynamic Light Scattering" and a few theses:</p>

                  <ul class="typo extended">
                      <li>
                          <a href="http://www.smart2014.unideb.hu/uploads/file/abstract_book.pdf" target="_blank">Atomic clusters of CdSe, ZnO, SiI, GeI: preparation, characterization, modelling</a>
                      </li>
                      <li>
                          <a href="http://rex.knu.ua/docs/confs/01.pdf" target="_blank">
                              Comparison of Ag nanoparticles size from optical absorption and dynamic light scattering measurements
                          </a>
                      </li>
                      <li>
                          <a href="http://enu.kz/repository/repository2013/ICOM2012BookOfAbstracts.pdf" target="_blank">
                              Formation of metallic and semiconductor nanoparticles by laser ablation in different media with situ spectroscopic diagnostics
                          </a>
                      </li>
                  </ul>

                  <p>Scientific experiments were conducted on the base of Institute&nbsp;of&nbsp;Physics, National&nbsp;Academy&nbsp;of&nbsp;Science&nbsp;of&nbsp;Ukraine<br /> Department of Phonon Processes</p>
              </div>
          </section>

        <section class="info-section" id="skills">
          <h2 class="title">Skills &amp; Activities</h2>
          <div class="section-content">

            <h3 class="title">Development</h3>
            <ul>
              <li>HTML, Bootstrap, responsive / fluid markup, cross-browser compatibility</li>
              <li>CSS, SASS and Less pre-processors, SMACSS and BEM methodologies</li>
              <li>JavaScript, jQuery (Masonry, Modernizr), Angular</li>
              <li>Version control: Git, TFVC</li>
              <li>PHP (WordPress, Drupal and Joomla)<br />
                  <span class="comments">// CMS customization, including themes &amp; plugins development</span>
              </li>
              <li>Basic knowledge of C#, understanding of OOP principles and MVC approach</li>
            </ul>

            <h3 class="title">UX / UI</h3>
            <ul>
              <li>UX scenarios for different content strategies and user personas</li>
              <li>Interface sketching for different viewports: desktop, mobiles and tablets</li>
              <li>Interactive prototypes in Balsamiq and Axure based on functioanl use cases</li>
              <li>Functional requirements for UI components</li>
              <li>UI design approach based on usability principles, accessibility, color theory, human behavioral concepts, corporate vision and identity</li>
            </ul>

            <h3 class="title">Graphics</h3>
            <p>Experienced user of GIMP, Adobe Photoshop, Adobe InDesign and Inkscape vector editor</p>

            <h3 class="title">Mail Marketing</h3>
            <ul>
              <li>Developing HTML responsive and mobile friendly mail templates</li>
              <li>Creating interactive mail templates for MailChimp users</li>
              <li>Setting triggered mails and mail automation scenarios, handling subscribers list structure and segmentation</li>
            </ul>

            <h3 class="title">Other</h3>
            <ul class="extended">
                <li>Agile / Scrum adapted</li>
                <li>Project management in TFS, OTRS, Trello, MS Planner</li>
                <li>Skilled in Google Analytics filtered views and campaigns tracking</li>
                <li>Skilled in creating advanced integration flows with Zapier tool</li>
                <li>Advanced user of MS Excel and MS Power Point<br />
                  <span class="comments">// neverending Excel formulae…</span>
                </li>
                <li>Typography, Lettering, Calligraphy<br />
                    <span class="comments">// Middle Ages &amp; Renaissance scripts</span>
                </li>
                <li>Audio/Video editing (Pinnacle, Camtasia, SoundForge)</li>
            </ul>
          </div>
        </section>

        <section class="info-section" id="courses">
          <h2 class="title">Training courses</h2>
          <div class="section-content">

            <h3 class="title case-normal">
                A Better CSS: LESS and SASS
                <p class="minor">Feb 2014</p>
            </h3>
            <p><a href="http://www.pluralsight.com/courses/better-css" target="_blank">pluralsight.com course</a></p>

            <h3 class="title case-normal">
                Cryptography I
                <p class="minor">Jun – Aug 2013</p>
            </h3>
            <p>coursera.org, <a href="https://www.coursera.org/course/crypto" target="_blank">Stanford University course</a></p>

            <h3 class="title case-normal">
                IT Structure and Application in Business
                <p class="minor">Jan – Jun 2013</p>
            </h3>
            <p>Microsoft Student Camp, graduate project – Microsoft Dynamics AX<br />
            <span class="minor">The main purpose of the final project was to analyze all advantages of Microsoft&nbsp;Dynamics&nbsp;AX, find possible alternatives and consider potential risks of implementation in real business workflow.</span>
            </p>

            <h3 class="title case-normal">
                Working with HTML &amp; CSS
                <p class="minor">Sep 2009</p>
            </h3>
            <p>The National Open University "INTUIT"</p>

          </div>
        </section>

        <section class="info-section" id="experience">
          <h2 class="title">Experience</h2>
          <div class="section-content">
            <h3 class="title case-normal">
              Senior Web Master <span class="divider">|</span> Materialise
              <p class="minor">Mar 2016 – present day</p>
            </h3>

            <p>
              This role combines my technical background and development skills as well as functional analyses abilities. I am responsible for technical strategy of corporate websites, implementation processes and functional requirements.
            </p>

            <h3 class="title case-normal">
              Front-end developer <span class="divider">|</span> Materialise
              <p class="minor">Jul 2015 – Mar 2016</p>
            </h3>

            <p>
              Worked on <a href="https://i.materialise.com/" target="_blank">i.materialise</a> team and was responsible for the front-end part of the website re-design and also for the technical support of the current website.

              <ul class="typo">
                  <li>Responsive and fluid website markup</li>
                  <li>CSS architecture with <abbr title="Scalable and Modular Architecture for CSS">SMACSS</abbr></li>
                  <li>Dynamically generated pages and navigation interface</li>
                  <li>Agile project workflow</li>
              </ul>
            </p>


            <h3 class="title case-normal">
                Webmaster <span class="divider">|</span> Materialise
                <p class="minor">Jun 2014 – Jul 2015</p>
            </h3>

            <ul class="typo">
              <li>Style updates and functionality development for Drupal and Wordpress-powered websites:
                <ul>
                  <li><a href="http://www.materialise.com/" target="_blank">materialise.com</a> and BU/office websites</li>
                  <li><a href="http://www.materialise.com/blog/" target="_blank">Materialise Blog</a></li>
                  <li><a href="http://a-difference-in-making.com/" target="_blank">A Difference in Making</a></li>
                </ul>
              </li>

              <li>Manual testing and bug fixing for Materialise websites</li>
              <li>Technical backup of content management in Drupal and Wordpress</li>
              <li>MailChimp, Facebook, Twitter API</li>
            </ul>

            <h3 class="title case-normal">
                Mailing engineer <span class="divider">|</span> Materialise
                <p class="minor">Sep 2013 – Jun 2014</p>
            </h3>
            <ul class="typo">
              <li>Mass mailing service for all Materialise offices</li>
              <li>Developing interactive HTML templates for MailChimp</li>
              <li>Preparing detailed reports and analyzing efficiency of mailing campaigns</li>
            </ul>

            <h3 class="title case-normal">
                Software Developer Intern <span class="divider">|</span> Innoware
                <p class="minor">Aug 2013</p>
            </h3>
            <p>
              Developing X++ of structural modules based on Microsoft&nbsp;Dynamics&nbsp;AX core
            </p>

            <h3 class="title case-normal">
                Analyst <span class="divider">|</span> PrJSC “UkrAnalyt”
                <p class="minor">Jun – Aug 2012</p>
            </h3>
            <p>
              Technological and structural market analysis for company specialized in manufacturing gas analyzers<br />
              + concept of website <span class="comments">(wasn't released)</span>
            </p>
          </div>
      </section>
      </main>

      <span class="icon"><a id="scrollTop" href="#" class="icon-arrow-up" title="Top"></a></div>
    </div>
    </div>
  </body>
</html>