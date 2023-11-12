<?php
session_start();

// check if user is logged in
if (!isset($_SESSION['username'])) {
    // redirect to login page
    header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CV</title>
    <link rel="stylesheet" href="assets/css/index.css" />
    <link rel="stylesheet" href="assets/css/cv.css" />
    <script
      src="https://kit.fontawesome.com/599132b028.js"
      crossorigin="anonymous"
    ></script>
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <!-- END FONTS -->

    <!-- ANIMATE.CSS ( just for a little fun :p ) -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <!-- END ANIMATE.CSS -->
  </head>
  <body>
    <div class="welcome white">
        Welcome <?php echo $_SESSION['fullname']; ?>! | <a href="logout.php">Logout</a>
    </div>
    <div class="sidebar">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="cv.php">CV</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
    </div>
    <div class="content">
      <!-- animate__animated animate__backInDown: one liner to utilize animate.css -->
      <div class="container animate__animated animate__backInDown">
        <div class="section-wrapper">
          <div class="profile left-screen">
            <div class="profile-img">
              <img
                class=""
                src="assets/images/selfie.jpg"
                alt="No need for SEO Optimization xD"
              />
            </div>
            <div class="profile-details">
              <h1 class="name">Ahmad El-Kurdi</h1>
              <h2 class="job-title">Full Stack Developer</h2>
              <p class="description">
                Dynamic Full Stack Developer with a strong foundation in web
                technologies, virtualization, and automation. Proven expertise
                in crafting seamless user experiences across diverse industries.
                Adept in harnessing the power of modern frameworks, tools, and
                APIs to deliver scalable and performance-driven solutions.
                Passionate about continuous learning and innovation.
              </p>
            </div>
          </div>
          <ul class="card-container">
            <li>
              <img
                class="hero-icon"
                src="assets/icons/envelope.svg"
                alt="No need for SEO Optimization xD"
              />
              ahmad@kurdi.io
            </li>
            <li>
              <img
                class="hero-icon"
                src="assets/icons/mobile.svg"
                alt="No need for SEO Optimization xD"
              />
              +961 78896669
            </li>
            <li>
              <img
                class="hero-icon"
                src="assets/icons/map-pin.svg"
                alt="No need for SEO Optimization xD"
              />
              Saida, Lebanon
            </li>
            <li>
              <img
                class="hero-icon"
                src="assets/icons/linkedin.svg"
                alt="No need for SEO Optimization xD"
              />
              <a href="https://www.linkedin.com/in/ahmad-m-kurdi/">
                linkedin.com
                <img
                  class="hero-icon transparent"
                  src="assets/icons/link.svg"
                  alt="No need for SEO Optimization xD"
                />
              </a>
            </li>
          </ul>
        </div>

        <div class="section-wrapper">
          <!-- work experience start -->
          <div class="work-experience left-screen">
            <h1 class="work-experience-header">
              <img
                class="hero-icon"
                src="assets/icons/briefcase.svg"
                alt="No need for SEO Optimization xD"
              />
              Work Experience
            </h1>
            <div class="experience-entry">
              <h2 class="experience-entry-position">
                Full Stack & Virtualization Engineer
              </h2>
              <a
                class="experience-entry-company"
                href="https://datawagon.com/company"
                target="_blank"
              >
                Datawagon LLC
                <img
                  class="hero-icon transparent"
                  src="assets/icons/link-black.svg"
                  alt="No need for SEO Optimization xD"
                />
              </a>
              <p class="experience-entry-timespan">June 2022-Present</p>
              <ul class="experience-entry-description">
                <li>
                  Developed new features and addressed bugs for a React
                  dashboard, integrating Proxmox VM management. Collaborated on
                  the backend using Dockerized Laravel PHP.
                </li>

                <li>
                  Established a custom Laravel Proxmox API to communicate with
                  the frontend, creating a specialized VM backup and ISO
                  management solution, accounting for user limits.
                </li>

                <li>
                  Engineered WHMCS and Colocrossing reverse proxies via NGINX
                  and Python for automation tasks.
                </li>

                <li>Contributed to frontend UI/UX design enhancements.</li>

                <li>
                  Utilized GitHub for version control and collaboration
                  throughout projects.
                </li>
              </ul>
            </div>

            <div class="experience-entry">
              <h2 class="experience-entry-position">Full Stack Developer</h2>
              <a
                class="experience-entry-company"
                href="https://rentradar.io/"
                target="_blank"
              >
                RentRadar (Elements LLC)
                <img
                  class="hero-icon transparent"
                  src="assets/icons/link-black.svg"
                  alt="No need for SEO Optimization xD"
                />
              </a>
              <p class="experience-entry-timespan">March 2023-Present</p>
              <ul class="experience-entry-description">
                <li>
                  Spearheaded the development of new features and addressed
                  critical bugs for the React dashboard, leveraging Semantic UI
                  and SCSS for enhanced user experience.
                </li>

                <li>
                  Conducted database migrations between MongoDB and PostgreSQL,
                  emphasizing geospatial queries using PostGIS, ensuring
                  seamless data transition.
                </li>
                <li>
                  Executed scraping tasks, paired with basic machine learning
                  and NLP initiatives, to derive actionable insights.
                </li>

                <li>
                  Championed performance optimization strategies to bolster
                  dashboard responsiveness and efficiency.
                </li>

                <li>
                  Orchestrated DevOps practices, utilizing GitHub Actions for
                  auto-pull on commits and automating web server restarts.
                </li>
              </ul>
            </div>

            <div class="experience-entry">
              <h2 class="experience-entry-position">
                Independent Full Stack Project
              </h2>
              <p class="experience-entry-timespan">2018-Present</p>
              <ul class="experience-entry-description">
                <li>
                  Orchestrated end-to-end development, from backend APIs to
                  frontend dashboards, fully realizing a comprehensive system.
                </li>

                <li>
                  Engineered Discord bots for enhanced role management and
                  streamlined moderation tasks.
                </li>

                <li>
                  Integrated Stripe CLI for payment processing, leveraging
                  webhooks for real-time transaction updates.
                </li>

                <li>
                  Optimized backend API load balancing using HA Proxy and NGINX,
                  ensuring robust uptime and responsiveness.
                </li>

                <li>
                  Undertook extensive web scraping operations utilizing
                  Puppeteer, Playwright, and Selenium for data collection.
                </li>

                <li>
                  Transformed web presence from a PHP-based site to a modern Vue
                  and Express-powered dashboard.
                </li>

                <li>
                  Developed high-performance backend APIs using Quart ASGI,
                  achieving rapid response times.
                </li>

                <li>
                  Administered a MySQL database, implementing obfuscation,
                  regular backups, and master-slave replication for enhanced
                  data redundancy.
                </li>

                <li>
                  Established a fortified admin dashboard incorporating Google
                  2FA, IP-based access controls, rate-limiting, and extensive
                  logging.
                </li>
              </ul>
            </div>
          </div>
          <!-- work experience end -->

          <div class="card-container">
            <div class="skills-container">
              <h2 class="skills-header">
                <img
                  class="hero-icon"
                  src="assets/icons/rocket.svg"
                  alt="No need for SEO Optimization xD"
                />
                Skills
              </h2>
              <ul class="skills-list">
                <li>Python</li>
                <li>Javascript</li>
                <li>PHP</li>
                <li>SQL/NoSQL</li>
                <li>HTML/CSS</li>
                <li>Java</li>
                <li>Bash</li>
                <li>C</li>
                <li>Linux</li>
                <li>Stripe API</li>
                <li>Discord API</li>
                <li>AutoCAD</li>
                <li>Matlab</li>
                <li>Solidworks</li>
              </ul>
            </div>

            <div class="skills-container">
              <h2 class="skills-header">
                <img
                  class="hero-icon"
                  src="assets/icons/rocket.svg"
                  alt="No need for SEO Optimization xD"
                />
                Frameworks
              </h2>
              <ul class="skills-list">
                <li>React</li>
                <li>Vue</li>
                <li>NextJS</li>
                <li>Express.js</li>
                <li>Flask</li>
                <li>Laravel</li>
                <li>Tailwind CSS</li>
                <li>Sass</li>
                <li>EJS</li>
                <li>TensorFlow</li>
              </ul>
            </div>

            <div class="skills-container">
              <h2 class="skills-header">
                <img
                  class="hero-icon"
                  src="assets/icons/rocket.svg"
                  alt="No need for SEO Optimization xD"
                />
                Tools
              </h2>
              <ul class="skills-list">
                <li>NGINX</li>
                <li>Apache</li>
                <li>HAProxy</li>
                <li>MySQL</li>
                <li>Postgres</li>
                <li>MongoDB</li>
                <li>SQLite</li>
                <li>
                  <!-- I know it's not a "tool" per say, it's a runtime env but just for simplicity -->
                  Node.js
                </li>
                <li>Git</li>
                <li>Docker</li>
                <li>Webpack</li>
                <li>Babel</li>
                <li>VS Code</li>
                <li>AWS</li>
                <li>Postman</li>
                <li>Figma</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="footer">
        Made with
        <img
          class="hero-icon transparent"
          src="assets/icons/heart.svg"
          alt="No need for SEO Optimization xD"
        />
        by Ahmad El-Kurdi
      </div>
    </div>
  </body>
</html>
