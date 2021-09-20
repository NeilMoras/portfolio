<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Neil's Portfolio</title>
  <meta charset="UTF-8" />
   <meta name="referrer" content="origin">
   <meta name="description" content="Main Portfolio page">
   <meta name="author" content="Neil Moras">
   <meta http-equiv="x-ua-compatible" content="IE=edge">
  <link rel="icon" type="image/png" href="image/temp-logo.png">
  <meta name="viewport" content="width=device-width">
  <script src="https://kit.fontawesome.com/0b4300e3e5.js" crossorigin="anonymous"></script>
  <script src="js/index.js"></script>
  <link rel="stylesheet" href="css/styles.min.css">
</head>
<body>
  <header id="header">
    <div class="text-wrapper">
      <div class="nav-flex">
        <div class="logo">
          <a href="#main"><img id="web-logo" src="image/temp-logo.png" alt="Logo of the website" /></a>
        </div>
        <nav id="menu">
          <h2 class="hidden">Header Navigation Menu</h2>
          <i id="mob-exit" class="far fa-times-circle"></i>
          <ul>
            <li><a href="#">about</a></li>
            <li><a href="#features-section">portfolio</a></li>
            <li><a href="#contact-section">contact</a></li>
          </ul>
        </nav>
        <div class="hamburger">
          <i id="ham-btn-cta" class="fas fa-bars"></i>
        </div>
      </div>
    </div>
  </header>
  <!-- MAIN BANNER -->
  <main id="main">
    <div class="text-wrapper">
      <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
      <div class="circle">
      </div>
      <div class="main-flex">
        <div class="image-self">
          <img src="image/neil-image.png" alt="Profile picture of Neil Moras">
        </div>
        <div class="intro-head">
          <h1><span>Hi,</span> <span class="block name-span">I'm Neil</span></h1>
          <p><span>a</span> <span>web developer</span> <span>based</span> <span>in</span><span class="block">Toronto, Canada</span></p>
          <a href="resume/neil-resume.pdf" class="btn" download><i class="fa fa-download"></i><span class="hidden">Download</span>Resume</a>
        </div>
      </div>
      <div class="social-icon">
        <a  aria-label="linkedin icon" rel="noreferrer" href="https://www.linkedin.com/in/neil-moras-577a96a5/" target="_blank"><span class="hidden">linkedin link</span><i class="fab icon fa-linkedin-in"></i></a>
        <a aria-label="email icon" rel="noreferrer" href="#contact-section"><span class="hidden">Email link</span><i class="far icon fa-envelope"></i></a>
        <a aria-label="github icon"  rel="noreferrer" href="https://github.com/NeilMoras" target="_blank"><span class="hidden">Githublink icon</span><i class="fab fa-github"></i></a>
      </div>
      <div class="arrow">
        <a href="#about-section"><span class="hidden">Down Arrow</span><i class="fas fa-chevron-circle-down"></i></a>
      </div>
    </div>
  </main>
  <!-- about section start -->
  <section id="about-section">
    <div class="text-wrapper">
      <div class="feature-heading">
        <h2>About Me</h2>
      </div>
      <div class="about-flex">
        <div class="about-image-self">
          <img class="about-img" src="image/about-me-self-image.jpg" alt="Photo of Neil Moras">
        </div>
        <div class="about-head">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
  </section>
  <div id="code-banner">

  </div>
  <!-- SKILLS SECTION -->
  <section id="skills-section">
    <div class="text-wrapper">
      <div class="skill-heading">
        <h2>Skills & Experience</h2>
      </div>
      <div class="skill-flex">
        <div class="front-container">
          <h3>Front-end</h3>
          <i class="fas fa-code"></i>
          <ul class="skill-list">
            <li><i aria-hidden="true" class="fas fa-check-circle"></i>Responsive Design</li>
            <li><i aria-hidden="true" class="fas fa-check-circle"></i>Git/Version Control</li>
            <li><i aria-hidden="true" class="fas fa-check-circle"></i>DOM Manipulation</li>
            <li><i aria-hidden="true" class="fas fa-check-circle"></i>Problem-Solving</li>
          </ul>
        </div>
        <div class="backend-container">
          <h3>Back-end</h3>
          <i class="fas fa-database"></i>
          <ul class="skill-list">
            <li><i aria-hidden="true" class="fas fa-check-circle"></i>Accessibility & Security Compliance</li>
            <li><i aria-hidden="true" class="fas fa-check-circle"></i>Database</li>
            <li><i aria-hidden="true" class="fas fa-check-circle"></i>Frameworks</li>
            <li><i aria-hidden="true" class="fas fa-check-circle"></i>Testing/Debugging</li>
            <li><i aria-hidden="true" class="fas fa-check-circle"></i>Testing/Debugging</li>
          </ul>
        </div>
      </div>
        </div>
      <div class="skill-language-div">
          <div class="text-wrapper">
        <h3>Languages</h3>
        <div class="language-flex">
            <img src="image/html.png" alt="image of html">
            <img src="image/css.png" alt="image of css">
            <img src="image/js.png" alt="image of javascript">
            <img src="image/php.png" alt="image of php">
            <img src="image/php-mysql.png" alt="image of php with my sql">
            <img src="image/jqeury.png" alt="image of jquery">
            <img src="image/vue.js.png" alt="image of vue.js">
            <img src="image/c-sharp.png" alt="image of c-sharp">
            <img src="image/asp.net.jpeg" alt="image of asp.net">
            <img src="image/react-native.png" alt="image of react-native">
              <img src="image/react.png" alt="image of react.js">
        </div>

      </div>
    </div>

  </section>
  <!-- FEATURE SECTION -->
  <section id="features-section">
    <div class="text-wrapper">
      <div class="feature-heading">
        <h2>Featured works</h2>
      </div>
      <div class="grid-flex">
        <div class="col col-image ">
            <img src="image/artboardimage.jpg" alt="">
        </div>
        <div class="col col-text">
          <div class="aligner-item">
            <h3>Movies + Soundtrack API App</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a href="#">Github</a>
            <a href="#">Live</a>
          </div>
        </div>
      </div>
      <div class="grid-flex">
        <div class="col col-image">
          <img src="image/artboardimage.jpg" alt="">
        </div>
        <div class="col col-text col-left">
          <div class="aligner-item">
            <h3>Dragon Ball Semi-Interactive Animation</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <a href="#">Github</a>
              <a href="#">Live</a>
          </div>
        </div>
      </div>
      <div class="grid-flex">
        <div class="col col-image" >
            <img src="image/artboardimage.jpg" alt="">
        </div>
        <div class="col col-text">
          <div class="aligner-item">
            <h3>Bets R Us Movie Betting Website</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <a href="#">Github</a>
              <a href="#">Live</a>
          </div>
        </div>
      </div>
      <div class="grid-flex">
        <div class="col col-image">
        <img src="image/artboardimage.jpg" alt="">
        </div>
        <div class="col col-text col-left">
          <div class="aligner-item">
            <h3>Ticketing System</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <a href="#">Github</a>
              <a href="#">Live</a>
          </div>
        </div>
      </div>
      <div class="grid-flex">
        <div class="col col-image">
            <img src="image/artboardimage.jpg" alt="">
        </div>
        <div class="col col-text">
          <div class="aligner-item">
            <h3>Fighter Jets World</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <a href="#">Github</a>
              <a href="#">Live</a>
          </div>
        </div>
      </div>
      <div class="grid-flex">
        <div class="col col-image">
            <img src="image/artboardimage.jpg" alt="">
        </div>
        <div class="col col-text col-left">
          <div class="aligner-item">
            <h3>Code Snippet Sticky List</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <a href="#">Github</a>
              <a href="#">Live</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- CONTACT SECTION -->
  <section id="contact-section">
    <div class="text-wrapper">
      <div class="contact-heading">
        <h2>Contact Me</h2>
      </div>
      <div class="wrap">
        <div class="contact-frame">
          <h3 class="hidden">Contact information</h3>
          <p><span class="contact-name-bold">Neil Moras</span>
            <span>Toronto,</span>
            <span>Ontario, Canada.</span>
            <span>Email: neilmoras@gmail.com</span>
          </p>
          <iframe title="Map Location of Toronto, Canada"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d184552.57289716916!2d-79.49891565188125!3d43.71815566221442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cb90d7c63ba5%3A0x323555502ab4c477!2sToronto%2C%20ON!5e0!3m2!1sen!2sca!4v1616985533025!5m2!1sen!2sca"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="container">
          <div class="text">
            <p>Hello! I’m interested in open opportunies to showcase my skills and learning. If you happen
              to have any request or clarifications, please don’t hesitate to use this form.</p>
          </div>
          <form action="#">
            <div class="form-row">
              <div class="input-data">
                <input type="text"  id="fullname"  name="fullname" required>
                <label for="fullname">Name</label>
              </div>
              <div class="input-data row-block">
                <input type="email" id="email"  name="email" required>
                <label for="email">Email</label>
              </div>
            </div>
            <div class="form-row">
              <div class="input-data">
                <input type="text" id="subject" name="subject" required>
                <label for="subject">Subject</label>
              </div>
            </div>
            <div class="form-row">
              <div class="input-data textarea">
                <textarea rows="8" cols="80" id="message" name="message" required></textarea>
                <label for="message">Message</label>
              </div>
            </div>
            <div class="form-btn">
              <div class="input-data">
                <input type="submit" name="submitForm" value="submit">
              </div>
            </div>
        </form>
      </div>
    </div>
    <div class="icons">
      <a rel="noreferrer" href="https://www.linkedin.com/in/neil-moras-577a96a5/" target="_blank"><span class="hidden">linkedin icon</span><i class="fab icon fa-linkedin-in"></i></a>
      <a href="#contact-section"><span class="hidden">Email link</span><i class="far icon fa-envelope"></i></a>
      <a rel="noreferrer" href="https://github.com/NeilMoras" target="_blank"><span class="hidden">Githublink icon</span><i class="fab fa-github"></i></a>
    </div>
  </div>
  </section>
  <footer id="footer">
    <div class="text-wrapper">
      <div class="nav-flex-footer">
        <div class="copyright">
          &copy;Copyright, Neil Moras@2021
        </div>
        <div class="nav-footer">
          <nav class="menu-footer">
            <h2 class="hidden">Footer Navigation Menu</h2>
            <ul>
              <li><a class="nav-link btm-underline" href="#">about</a></li>
              <li><a class="nav-link btm-underline" href="#features-section">portfolio</a></li>
              <li><a class="nav-link btm-underline" href="#contact-section">contact</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>
