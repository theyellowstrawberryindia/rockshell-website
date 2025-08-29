<<<<<<<< HEAD:index.php
========
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Rockshell Corp</title>
<!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Fahkwang:wght@600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Fahkwang:wght@600&display=swap" rel="stylesheet">

  <!-- External CSS -->
  <link rel="stylesheet" href="styles.css" />
</head>
<body>

  <!-- Navbar -->
<nav class="custom-navbar">
  <div class="container d-flex align-items-center justify-content-between">
    <!-- Logo -->
    <a href="index.html">
      <img src="assets/rockshell-logo.png" alt="Logo" class="navbar-logo">
    </a>

    <!-- Desktop nav links -->
    <ul class="nav ms-5 d-none d-md-flex">
      <li class="nav-item"><a class="nav-link" href="index.html">Heat Pumps Solutions</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Heat Pump dryers & Evaporators</a></li>
    
      <li class="nav-item"><a class="nav-link" href="service.html">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="applications.html">Industries</a></li>
      
      <li class="nav-item"><a class="nav-link" href="blog.html">Insights</a></li>
      
      <!-- <li class="nav-item"><a class="nav-link" href="contact-us.html">Contact</a></li> -->
     
    </ul>

   <!-- Desktop "Get a Quote" button with icon -->
<a href="get-a-quote.html" class="quote-btn d-none d-md-flex">
  
  Contact Us
  <img src="assets/log-out.svg" alt="Logout Icon" class="btn-icon">
</a>



 <!-- Mobile controls -->
<div class="mobile-controls d-flex align-items-center d-md-none">
  <button class="quote-btn">Contact Us</button>
  <button class="menu-btn">
    <img src="assets/menu-btn.png" alt="Menu">
  </button>
</div>

<!-- Mobile Navigation Menu -->
<div class="mobile-nav">
  <!-- Back button -->
  <a href="index.html" class="back-btn d-md-none">
    <img src="assets/arrow-left.svg" alt="Back">
  </a>

  <ul>
    <li><a href="#">Heat Pumps Solutions</a></li>
    <li><a href="#">Heat Pump dryers & Evaporators</a></li>
     <li><a href="applications.html">Services</a></li>
    <li><a href="service.html">Industries</a></li>
    <li><a href="#">Insights</a></li>
  </ul>
</div>

  </div>
</nav>



    <!-- Nav bar responsive Code starts here -->
   <style>
    /* ================================================
   NAVBAR RESPONSIVENESS
   ================================================ */

/* Tablet & Small Laptop screens (769px – 1024px) */
@media (max-width: 1024px) and (min-width: 769px) {
  .custom-navbar {
    height: 90px;          /* shrink navbar */
    padding: 0 1rem;       /* tighter padding */
  }

  .custom-navbar .nav-link {
    margin-left: 25px !important;     /* reduce spacing */
    font-size: 14px !important;       /* slightly smaller text */
  }

  .navbar-logo {
    height: 65px;          /* smaller logo */
    width: auto;
  }

  .quote-btn {
    width: 120px;
    height: 38px;
    font-size: 13px;
    padding: 8px 12px;
  }
  .container{
    padding-top: 1rem !important;
  }
}

/* Tablet Portrait (max-width: 768px) → already handled by your existing rules */

/* Tablet Landscape to Medium Desktops (1025px – 1280px) → you already defined */

    .quote-btn .btn-icon {
  width: 18px;      /* adjust size */
  height: 18px;
  margin-left: 8px; /* spacing between icon and text */
  object-fit: contain;
}

    /* Tablet screens (1025px – 1280px) */
@media (max-width: 1280px) and (min-width: 1025px) {
  .custom-navbar {
    height: 100px;       /* reduce height slightly */
    padding: 0 1.5rem;   /* give breathing space */
  }

  .custom-navbar .nav-link {
    margin-left: 30px !important;   /* smaller gaps so it doesn’t squeeze */
    font-size: 15px !important;     /* slightly smaller text */
  }

  .quote-btn {
    width: 130px;
    height: 40px;
    font-size: 14px;
  }

  .navbar-logo {
    height: 70px;
    width: auto;
  }
}

    .back-btn {
  position: absolute;
  top: 1rem;
  left: 1rem;
  display: inline-block;
  z-index: 1100;
}

.back-btn img {
  width: 28px;
  height: auto;
}
    /* Navbar */
    .custom-navbar {
      overflow-x: hidden;
      background-color: #FAFAFA;
      height: 120px;
      display: flex;
      align-items: center;
    }

   .custom-navbar .nav-link {
   font-family: 'Work Sans', sans-serif;
  font-size: 16px;
  font-weight: 400;
  color: #000;
  padding: 0;
  margin-left: 50px; /* increased gap between links */
  position: relative;
  transition: color 0.3s ease;
}

   .custom-navbar .nav-link {
   font-family: 'Work Sans', sans-serif;
  font-size: 16px;
  font-weight: 400;
  color: #00233B;
  padding: 0;
  margin-left: 50px; /* more gap between links */
  position: relative;
  transition: color 0.3s ease;
}

.custom-navbar .nav-link:hover {
  color: #00233B;
}

.custom-navbar .nav-link::after {
  content: '';
  position: absolute;
  bottom: -6px;
  left: 50%;
  transform: translateX(-50%);
  width: 0;
  height: 2px;
  background-color: #00233B;
  transition: width 0.3s ease;
}

.custom-navbar .nav-link:hover::after {
  width: 50px; /* wider dash when hovered */
}

    .navbar-logo {
      height: 80px;
      width: 88px;
    }

    /* Get a Quote button */
/* Base */
.quote-btn {
  background: linear-gradient(90deg, #01739C, #00233B);
  color: #fff;
  width: 146px;
  height: 44px;
  padding: 16px;
  border: none;
  text-decoration: none;
  font-family: 'Work Sans', sans-serif;
  font-size: 16px;
  font-weight: 400;
  display: flex;
  align-items: center;
  justify-content: center;
  
  transition: background 0.6s ease, transform 0.2s ease, box-shadow 0.2s ease;
}

/* Hover */
.quote-btn:hover {
  background: linear-gradient(90deg, #00233B, #01739C); /* smooth reverse gradient */
  transform: scale(1.05); /* subtle zoom */
  box-shadow: 0 4px 12px rgba(0, 35, 59, 0.3); /* glow shadow */
}

    /* Mobile responsive styles */

.mobile-controls {
  display: none;
}
/* Mobile Nav Hidden by Default */
.mobile-nav {
  position: fixed;
  top: 0;
  left: -100%;
  width: 80%;
  /* max-width: 300px; */
  height: 100vh;
  background: #fff;
  box-shadow: 2px 0 10px rgba(0,0,0,0.1);
  z-index: 2000;
  transition: left 0.3s ease;
  display: flex;
  flex-direction: column;
  padding: 20px;
}

/* Slide In */
.mobile-nav.active {
  left: 0;
}
  .custom-navbar {
      flex-shrink: 0; /* Prevent navbar from shrinking */
    }
/* Slide Out Animation */
.mobile-nav.slide-out {
  left: -100%;
  transition: left 0.3s ease;
}

/* Navbar styles */
.custom-navbar {
  position: relative; /* default: normal flow */
  top: 0;
  left: 0;
  width: 100%;
  background: white;
  z-index: 2000;
  transition: all 0.3s ease-in-out;
  padding: 0.8rem 0;
}

/* Default navbar state */
.custom-navbar .navbar-logo {
  transition: all 0.3s ease-in-out;
  
}

/* When sticky */
.custom-navbar.scrolled {
  position: fixed;
  top: 0;
  left: 0;
  background: #fff;
  box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}

.custom-navbar.scrolled .navbar-logo {
  content: url("assets/mobile-logo.png");
        height: 70px;
        object-fit: contain;
    width: 70px;
}


/* Default mobile nav - hidden */
/* Default mobile nav - hidden */
.mobile-nav {
  position: fixed;
  top: 0;
  left: -100%; /* start off-screen */
  width: 100%;
  
  height: 100vh;
  background-color: #fff;
  color: #00233B;
  text-align: center;
  z-index: 1000;
  padding-top: 3rem;
  overflow: hidden;
  transition: left 0.3s ease-in-out; /* smooth slide */
}

/* Show nav */
.mobile-nav.active {
  left: 0; /* slides into view */
}

/* Show nav */
.mobile-nav.active {
  display: block;
}
.space {
  padding-top: 100px;
}
body.no-scroll {
  height: 100vh;
  overflow: hidden; /* Disable body scroll */
}

.mobile-nav ul {
    list-style: none;
    margin: 8rem 0 0 0;
    padding: 0;
}

.mobile-nav li {
  margin: 1.2rem 0; /* Spacing between links */
}

.mobile-nav a {
  color: #00233B;
  font-family: 'Manrope', sans-serif;
  text-decoration: none;
  font-size: 2rem;
  display: block;
  padding: 2rem 0; /* Increase height */
}
@media (max-width: 768px) {
  .menu-btn {
    border: none !important;      
    outline: none !important;     
    background: transparent !important; 
    /* adjust padding for mobile */
    width: auto !important;        /* ensures button isn’t too wide */
    height: 40px !important;       /* proper touch-friendly height */
    font-size: 16px !important;    /* adjust text/icon size */
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
  }
  .mobile-nav {
  position: fixed;
  top: 0;
  left: -100%; /* start off-screen */
  width: 100%;
  overflow: hidden;
  height: 100vh;
  background-color: #fff;
  color: #00233B;
  text-align: center;
  z-index: 1000;
  padding-top: 3rem;
  overflow: hidden;
  transition: left 0.3s ease-in-out; /* smooth slide */
}
    .menu-btn img {
    width: 32px !important;  /* adjust width for mobile */
    height: 32px !important; /* maintain aspect ratio */
    object-fit: contain;     /* prevent stretching */
  }
}
@media (max-width: 768px) {

  /* Requirement Bar */
  .requirement-bar {
    width: 100%;
    max-width: 440px;
    height: 30px;
    /* margin: 24px auto 0; */
    padding: 0 8px;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .requirement-text,
  .inquire-text {
    font-size: 9px;
    line-height: 100%;
    text-decoration:none;
    font-weight: 400;
    text-align: center;
  }

  .arrow-icon {
    width: 14px;
    height: 14px;
    margin: 0 6px;
  }

  /* Navbar */
  .custom-navbar {
    height: 70px;
  
  }
.inquire-text{
  color: #00233B;
  text-decoration:none;
}
  .navbar-logo {
    content: url("assets/logo.svg");

            width: 60px;
        height: auto;
  }
>>>>>>>> 44bf744f3d94eee28fe115ce262ddeed1f8a69ae:index.html

  .custom-navbar .nav {
    display: none; /* hide desktop nav links */
  }

<<<<<<<< HEAD:index.php
<?php include 'header.php'; ?>

========
  .quote-btn {
    width: auto;
    height: 32px;
    padding: 6px 12px;
    font-size: 12px;
  }

  .mobile-controls {
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .menu-btn img {
    width: 20px;
    height: 20px;
  }

}


   </style>
   <script>
  
  /* ===== Sticky Navbar + Requirement Bar ===== */
  const navbar = document.querySelector(".custom-navbar");
  const requirementBar = document.querySelector(".requirement-bar");

  if (navbar && requirementBar) {
    window.addEventListener("scroll", () => {
      if (window.scrollY > 50) {
        requirementBar.classList.add("hidden");
        navbar.classList.add("scrolled");
      } else {
        requirementBar.classList.remove("hidden");
        navbar.classList.remove("scrolled");
      }
    });
  }
/* ==========================
   MOBILE NAV MENU
   ========================== */
document.addEventListener("DOMContentLoaded", () => {
  const menuBtn = document.querySelector('.menu-btn');
  const backBtn = document.querySelector('.back-btn');
  const mobileNav = document.querySelector('.mobile-nav');
  const body = document.body;

  if (menuBtn && backBtn && mobileNav) {
    // Open menu
    menuBtn.addEventListener('click', () => {
      mobileNav.classList.add('active');
      mobileNav.classList.remove('slide-out');
      body.classList.add('no-scroll'); // 🚫 lock background scroll
    });

    // Close menu
    backBtn.addEventListener('click', (e) => {
      e.preventDefault();
      mobileNav.classList.remove('active');
      mobileNav.classList.add('slide-out');
      body.classList.remove('no-scroll'); // ✅ allow scroll again

      // optional: cleanup after animation
      setTimeout(() => {
        mobileNav.classList.remove('slide-out');
      }, 300); // match your CSS transition
    });
  }
});


</script>
>>>>>>>> 44bf744f3d94eee28fe115ce262ddeed1f8a69ae:index.html





<section class="hero-section">
  <div class="container hero-inner">
    <div class="hero-content welcome-text">
      <p class="intro-text">Welcome To ROCKSHELL CORP</p>
      <h2 class="main-heading">
        Working <span class="highlight">Towards Building</span><br />
        A Sustainable <span class="highlight">Future</span>
      </h2>
      <a class="expert-btn" href="#">
       
        Connect With Expert
         <img src="assets/log-out.svg" alt="Logout Icon" class="btn-icon" />
      </a>
    </div>
    <div class="hero-image">
      <img src="assets/hexa.svg" alt="Hexagon Visual" />
    </div>
  </div>
</section>
   <!-- Hero Section Responsive Ends Here -->
<style>
  @media (min-width: 769px) and (max-width: 1024px) {
  .hero-inner {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    text-align: left;
  }

  .hero-content {
    flex: 1;
    text-align: left;  /* Left align all text inside */
  }

  .intro-text,
  .main-heading,
  .expert-btn {
    text-align: left;  /* Left align intro text, heading, and button */
    margin-left: 0;    /* Remove any left margin if present */
  }

  .expert-btn {
    justify-content: flex-start; /* Align button content to left */
  }

  .hero-image {
    flex: 1;
    display: flex;
    justify-content: center; /* keep image centered on right */
  }
}

    @media (max-width: 768px) {
      
  .hero-section {
    flex-direction: column;
    align-items: flex-start;
    padding: 2rem;
    position: relative;
    background: #f9f9f9;
  }

  .hero-section::before {
    /* top: 7.5rem;    */
    left: 3rem;    /* design.svg left */
    width: 40rem;  /* design.svg width */
    height: 18rem; /* design.svg height */
    background-size: contain;
  }

  .hero-content {
    max-width: 100%;
    margin-top: 50px;
  }

  .intro-text,
.main-heading,
.expert-btn {
  text-align: left;
  margin-left: -2rem; /* Pushes it toward the left side of screen */
}

.intro-text {
  font-size: 1.4rem;
  line-height: 1;
  width: 25.3rem;
  /* margin-bottom: 1rem; */
}

.main-heading {
  font-size: 2.6rem;
  line-height: 1.3;
  width: 40.1rem;
  margin-bottom: 2rem;
}

.expert-btn {
  font-size: 1.4rem;
  padding: 1rem 2rem;
  gap: 1.2rem;
  display: inline-flex;
  align-items: center;
  text-align: left;
  margin-left: -15rem;
}

.expert-btn .btn-icon {
  width: 2rem;
  height: 2rem;
  margin-top: 0.1rem;
}


  .hero-image img {
    width: 37.6rem; /* hexa.svg width */
    height: 40rem;  /* hexa.svg height */
    /* margin-top: 2rem; */
    margin-left: 2rem;
  }

  .welcome-text::before {
    top: -5rem;
    left: -10rem;
    width: 45rem;
    height: 45rem;
  }
}

</style>
 <!-- Hero Section Responsive Ends Here -->




      <!-- Industry Section -->
  
   <!-- Industry Section -->
  
  <section class="industry-section">
    <div class="industry-content">
      <h1 class="industry-heading">
        Built For Industry.<br />
        Trusted For Execution.
      </h1>
      <p class="industry-description">
        Rockshell Corp is a leading manufacturer for Innovative Heating, Cooling and Effluent/Chemical recovery solutions in India. Rockshell continues to innovate & strives to save operational cost for its customers. It also endeavours to create a cleaner environment across the globe through its products and services.
      </p>
      <a class="read-more-btn" href="#">
        Read More <img src="assets/log-out.svg" alt="Arrow" />
      </a>

      <div class="industry-metrics-wrapper">
        <div class="full-width-border"></div>

        <div class="industry-metrics">
          <div class="metric">
            <strong>100+</strong>
            <span>years of experience</span>
          </div>
          <div class="divider"></div>
          <div class="metric">
            <strong>1000+</strong>
            <span>employee strength</span>
          </div>
          <div class="divider"></div>
          <div class="metric">
            <strong>1000+</strong>
            <span>projects</span>
          </div>
        </div>
      </div>
    
</div>
    <div class="industry-image">
      <img src="assets/engineer.svg" alt="Engineer" />
    </div>
    <!-- This only shows on mobile -->
<div class="industry-metrics-wrapper mobile-only-metrics">
  <div class="full-width-border"></div>

  <div class="industry-metrics">
    <div class="metric">
      <strong>100+</strong>
      <span>years of experience</span>
    </div>
    <div class="divider"></div>
    <div class="metric">
      <strong>1000+</strong>
      <span>employee strength</span>
    </div>
    <div class="divider"></div>
    <div class="metric">
      <strong>1000+</strong>
      <span>projects</span>
    </div>
  </div>
</div>

  </section>
  <style>
    .industry-metrics-wrapper {
  display: block;
}
.mobile-only-metrics {
  display: none;
}

@media (max-width: 768px) {
  /* On mobile: hide original, show new metrics section */
  .industry-metrics-wrapper:not(.mobile-only-metrics) {
    display: none;
  }

  .mobile-only-metrics {
    display: block;
  }
   .industry-image img {
    margin-left: 40px;
   
  }
}

/* ========================================
   Small Desktop View 1025px – 1234px
   ======================================== */
@media (min-width: 1025px) and (max-width: 1234px) {
  .industry-section {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 4rem;
    padding: 6rem 2rem;
  }

  .industry-content {
    flex: 1;
    padding: 0 2rem;
  }

  .industry-heading {
    font-size: 3rem;
    margin-bottom: 1.2rem;
  }

  .industry-description {
    font-size: 1.5rem;
    max-width: 48rem;
    margin-bottom: 1.6rem;
  }

  .read-more-btn {
    font-size: 1.35rem;
    padding: 1rem 1.5rem;
    margin-bottom: 2rem;
  }

  .industry-image img {
    max-width: 95%;
  }

  .industry-metrics-wrapper {
    margin-top: 2rem;
  }

  .industry-metrics {
    max-width: 38rem;
  }

  .metric strong {
    font-size: 1.9rem;
  }

  .metric span {
    font-size: 1.15rem;
  }

  .full-width-border {
    width: 210%;
  }
}
/* Tablet & iPad view: keep desktop styling */
@media (min-width: 769px) and (max-width: 1024px) {
  .industry-section {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 4rem;
    padding: 6rem 0;
  }

  .industry-content {
    flex: 1;
    padding: 0 2rem;
  }

  .industry-heading {
    font-family: 'Fahkwang', sans-serif;
    font-size: 3.2rem;
    font-weight: 600;
    line-height: 1.2;
    text-transform: capitalize;
    color: #00233B;
    width: auto;
    margin-bottom: 1.2rem;
  }

  .industry-description {
    font-family: 'Work Sans', sans-serif;
    font-size: 1.6rem;
    font-weight: 400;
    line-height: 1.4;
    max-width: 50rem;
    margin-bottom: 1.6rem;
    color: #00233B;
  }

  .read-more-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.8rem;
    font-size: 1.4rem;
    padding: 1rem 1.6rem;
    background-color: #00233B;
    color: white;
    text-decoration: none;
    font-family: 'Work Sans', sans-serif;
    margin-bottom: 2rem;
  }

  .read-more-btn img {
    width: 1.6rem;
    height: 1.6rem;
  }

  .industry-image {
    flex: 1;
    display: flex;
    justify-content: center;
  }

  .industry-image img {
    max-width: 100%;
    height: auto;
  }

  .industry-metrics-wrapper {
    display: block;
    margin-top: 2rem;
  }

  .mobile-only-metrics {
    display: none !important;
  }

  .industry-metrics {
    display: flex;
    justify-content: space-between;
    max-width: 40rem;
  }

  .metric strong {
    font-size: 2rem;
    font-weight: 600;
  }

  .metric span {
    font-size: 1.2rem;
    font-weight: 400;
  }
  .full-width-border{
    width: 230%;
    margin: 0rem;
  }
   .divider {
      height: 10rem;
      width: 1px;
      background-color: #00233B;
    }
}

@media (max-width: 768px) {
    .industry-section {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      padding: 6rem 0;
      gap: 4rem;
    }

    .industry-content {
      flex: 1;
      padding: 0 2rem;
    }

    .industry-heading {
      font-family: 'Fahkwang', sans-serif;
      font-size: 2rem;
      font-weight: 600;
      line-height: 1;
      text-transform: capitalize;
      width: 25.9rem;
      margin-bottom: 1.2rem;
      color: #00233B;
    }

    .industry-description {
      font-family: 'Work Sans', sans-serif;
      font-size: 1.2rem;
      font-weight: 400;
      line-height: 1.2;
      width: 30.6rem;
      margin-bottom: 1.6rem;
      color: #00233B;
    }

    .read-more-btn {
      display: inline-flex;
      align-items: center;
      gap: 0.8rem;
      font-size: 1.2rem;
      padding: 0.8rem 1.2rem;
      background-color: #00233B;
      color: white;
      text-decoration: none;
      /* border-radius: 0.4rem; */
      margin-bottom: 2rem;
        font-family: 'Work Sans', sans-serif;
    }

    .read-more-btn img {
      width: 1.6rem;
      height: 1.6rem;
    }

    .industry-image {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .industry-image.mobile-only {
      display: flex;
      margin-bottom: 2rem;
    }

    .industry-image.mobile-only img {
      width: 39rem;
      height: 47.2rem;
      object-fit: contain;
      opacity: 1;
    }

    .desktop-only {
      display: none;
    }

    .industry-metrics-wrapper {
      position: relative;
      margin-top: -3rem;
      padding-bottom: 5px;
      width: 100%;
    }

    .full-width-border {
     position: absolute;
        top: -60%;
        left: 0;
        width: 50rem;
        right: 0;
        height: 1px;
        background-color: #ccc;
        z-index: 0;
        padding: 0px;
    }

    .industry-metrics {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 1.2rem;
      padding: 0;
      width: 33.9rem;
      margin: 0 auto;
      z-index: 1;
      position: relative;
    }

    .metric {
      width: 8.6rem;
      height: 5.3rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      font-family: 'Work Sans', sans-serif;
      color: #00233B;
      text-align: center;
    }

    .metric strong {
      font-size: 24px;
      font-weight: 600;
    }

    .metric span {
      font-size: 1rem;
      font-weight: 400;
    }

    .divider {
      height: 8rem;
      width: 1px;
      background-color: #00233B;
    }
  }



  </style>
<style>

 @media (max-width: 768px) {
  .industry-section {
    padding: 0;
    margin: 0;
    background: #fff;
    overflow-x: hidden;
  }

  .industry-content {
    padding: 0 1.6rem; /* 16px left/right, matching `left: 16px` */
  }

  .industry-heading {
    width: 30.9rem;     /* 259px */
    height: 5.2rem;     /* 52px */
    margin-top: -5.88rem; /* approx 788px spacing */
    font-family: 'Fahkwang', sans-serif;
    font-weight: 600;
    font-size: 2.4rem;    /* 20px */
    line-height: 100%;
    letter-spacing: 0;
    text-transform: capitalize;
    color: #00233B;
  }

  .industry-description {
    width: 35.6rem;     /* 306px */
    height: 7.4rem;     /* 74px */
    margin-top: 2rem;
    font-family: 'Work Sans', sans-serif;
    font-weight: 400;
    font-size: 1.4rem;  /* 12px */
    
    letter-spacing: 0;
    color:#00233B;
  }

  .read-more-btn {
    margin-top: 2.2rem;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.8rem;         /* 8px */
    width: 12.7rem;      /* 107px */
    height: 3rem;        /* 30px */
    padding: 0.8rem 1.2rem; /* 8px top/bottom, 12px left/right */
    background-color: #01739C;
    color: white;
    text-decoration: none;
    font-size: 1.2rem;
    margin-top: 4rem;
      font-family: 'Work Sans', sans-serif;
  }

  .read-more-btn img {
    width: 1.2rem;
    height: auto;
  }
}
</style>

 <!-- The Industry Metrics Section's Responsive Ends Here -->

<section class="industry-overlap-section">
  <div class="industry-overlay-content">
    <div class="industry-box">
      <h3>Innovative Technology</h3>
      <p>Rockshell Corps Heat pump are designed to Heat up Alkaline, acidic chemicals etc in the most energy efficient manner with special</p>
      <div class="read-more">
        <span>Read More</span>
        <img src="assets/log-out.svg" alt="Arrow Icon" />
      </div>
    </div>
    <div class="industry-box">
      <h3>Operational Efficiency</h3>
      <p>Streamlined processes and optimized performance across sectors.</p>
      <div class="read-more">
        <span>Read More</span>
        <img src="assets/log-out.svg" alt="Arrow Icon" />
      </div>
    </div>
    <div class="industry-box">
      <h3>Sustainable Impact</h3>
      <p>Creating eco-friendly innovations that drive a cleaner tomorrow.</p>
      <div class="read-more">
        <span>Read More</span>
        <img src="assets/log-out.svg" alt="Arrow Icon" />
      </div>
    </div>
  </div>

  <img src="assets/clip.svg" alt="Clip Decoration" class="bottom-clip" />
</section>

<style>
    @media (max-width: 768px) {
  .industry-overlap-section {
    height: 16.6rem; /* 166px */
    padding: 0;
    background: url('assets/engineer2.svg') no-repeat center;
    background-size: cover;
    position: relative;
    justify-content: center;
  }

.industry-overlay-content {
  position: absolute;
  top: 14rem;
  
  left: 10.9rem; /* Aligns it slightly inset from the right edge */
  transform: none; /* Remove center shifting */
  width: 28.3rem; /* 283px */
  margin: 0;
  /* gap: 1.2rem; */
}


  .industry-box {
    width: 100%;
    height: 9.2rem; /* 92px */
    padding: 1.6rem;
    background-color: #fff;
    border-radius: 0;
    border-top: 1px solid #e0e0e0;
    box-shadow: none;
  }

  .industry-box:first-child {
    border-top: none;
  }

  .industry-box h3 {
    font-size: 1.6rem;
    margin-bottom: 0.6rem;
  }

  .industry-box p {
    font-size: 1.2rem;
    line-height: 1.4;
  }

  .bottom-clip {
    position: absolute;
    width: 26.5rem; /* 265px */
    height: auto;
    left: -4.1rem; /* -41px */
    top: 17.2rem;  /* 172px */
    transform: rotate(-90deg);
    opacity: 0.56;
    z-index: 0;
  }
}
@media (max-width: 768px) {
  .industry-overlay-content {
    flex-direction: column;
  }

  .industry-box {
    flex: 1 1 100%;
    width: 100%;
    min-height: auto;
  }

  .industry-box p {
    flex-grow: 1;
    margin-bottom: 1.5rem;
  }

  .read-more {
    display: flex;
    align-items: center;
    gap: 0.8rem;
    font-size: 1.4rem;
    color: #004266;
    margin-top: auto;
  }

  .read-more img {
    width: 1.6rem;
    height: auto;
  }
}

</style>
<!-- <section class="our-clients-section">
  <div class="clients-container">
    <div class="clients-text">
  <div class="clients-heading-with-line">
    
    <h2>Our Clients</h2>
    <div class="vertical-line"></div>
  </div>
</div>

   

    <div class="clients-logos">
      <img src="assets/Everest.svg" alt="Everest" />
      <img src="assets/DHL.svg" alt="DHL" />
      <img src="assets/Hero.svg" alt="Hero" />
      <img src="assets/Cummins.svg" alt="Cummins" />
      <img src="assets/Dharamsi.svg" alt="Chemical Co." />
    </div>
  </div>
</section> -->
<!-- Decorative clip image above Our Clients -->

<!-- The Engineer2 section Responsive ends here -->

<!-- The Logos section Responsive Starts here -->
<style>
    @media (max-width: 768px) {
  .clients-row {
    display: flex;
    align-items: center;
    width: 79.2rem; /* 792px */
    max-width: 120%;
    height: 6.7rem;  /* 67px */
    border-width: 1px;
    border-color: #00233B;
    border-style: solid;
    overflow: hidden;
    padding: 0 3.6rem;
    box-sizing: border-box;

    /* 👇 Add this to push it lower */
    margin-top: 40rem; /* or adjust as needed */
  }
  .our-clients-section {
    border-top: none;
    border-bottom: none;
    margin-top: 4rem; /* optional: reduce spacing for mobile */
  }
  .clients-heading {
    flex: 0 0 auto;
    width: 12rem; /* 120px */
    height: 2.6rem; /* 26px */
    font-family: 'Fahkwang', sans-serif;
    font-weight: 600;
    font-size: 2rem;
    line-height: 100%;
    color: #00233B;
    text-transform: capitalize;
    border-right: 0px solid #00233B;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 0rem;
  }

  .clients-logos {
    display: flex;
    gap: 1.4rem;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    -webkit-overflow-scrolling: touch;
  }

  .clients-logos img {
    flex: 0 0 auto;
    height: 3.2rem;
    scroll-snap-align: center;
    height: 5rem;
    width: 6rem;
  }

  .clients-logos::-webkit-scrollbar {
    display: none;
  }
}


</style>

<section class="our-clients-section">
  <div class="clients-row">
    <h2 class="clients-heading">Our Clients</h2>
    
    <div class="clients-logos-scroll-wrapper">
      <div class="clients-logos">
        <img src="assets/Everest.svg" alt="Everest" />
        <img src="assets/DHL.svg" alt="DHL" />
        <img src="assets/Hero.svg" alt="Hero" />
        <img src="assets/Cummins.svg" alt="Cummins" />
        <img src="assets/Dharamsi.svg" alt="Dhampur Chemicals" />
        <!-- Duplicate logos for smooth loop -->
        <img src="assets/Everest.svg" alt="Everest" />
        <img src="assets/DHL.svg" alt="DHL" />
        <img src="assets/Hero.svg" alt="Hero" />
        <img src="assets/Cummins.svg" alt="Cummins" />
        <img src="assets/Dharamsi.svg" alt="Dhampur Chemicals" />
        

      </div>
    </div>

  </div>
</section>
<style>
</style>
<!-- The Logos section Responsive ends here -->


<!-- The CTA section Responsive Starts  here -->
<section class="contact-cta">
  <div class="contact-container">
    <p class="cta-text">
      Looking for more information about ROCKSHELL's products or services?
    </p>
    <a href="#contact" class="contact-btn">
      Contact Us
      <img src="assets/Phone.svg" alt="Phone" />
    </a>
  </div>
</section>
<style>
@media (max-width: 420px) {
  .contact-container {
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    height: 5.4rem; /* 54px */
    padding: 0 1.6rem;
  }

  .cta-text {
    width: auto;
    font-size: 1.2rem;
    line-height: 1.4;
    flex: 1; /* allows text to grow naturally */
  }

  .contact-btn {
    width: auto;
    padding: 0.8rem 1.2rem;
    font-size: 1.2rem;
    display: flex;
    align-items: center;
    gap: 0.8rem;
  }
.contact-cta {
  width: 100%;
  background-color: #00233B; /* navy blue */
  height: 5.8rem;
  display: flex;
  align-items: center;
  justify-content: center;
}
  .contact-btn img {
    width: 1.2rem;
    height: auto;
  }
}


</style>
<!-- The CTA section Responsive ends here -->


<!-- The CTA Wrapper section Responsive Starts  here -->
<div class="container">
<section class="portfolio-message-section">
  <div class="portfolio-content container">
    <div class="text-column">
      <h3>Businesses</h3>
      <p>Our diverse portfolio</p>
    </div>
   <div class="cta-wrapper">
    
    <p class="cta-description">
      We take pride in every project we complete solving tough industrial
      challenges with care, skill, and commitment.
    </p>
   <div class="cta-button">
      <a href="#" class="cta-btn">
        See Our Work
        <img src="assets/log-out.svg" alt="arrow icon" />
      </a>
    </div>

  </div>
  </div></div>

  <div class="portfolio-images-row">
    <img src="assets/Industry_5.svg" alt="Project 1" />
    <img src="assets/Industry_2.svg" alt="Project 2" />
    <img src="assets/Industry_3.svg" alt="Project 3" />
    <img src="assets/Industry_4.svg" alt="Project 4" />
    <img src="assets/Industry_5.svg" alt="Project 5" />
  </div>
</section>
<style>
  /* Tablet & iPad view */
@media (min-width: 769px) and (max-width: 1024px) {
  .portfolio-message-section {

  }

  .portfolio-content {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    gap: 3rem;
  }

  .text-column {
    flex: 1;
  }

  .text-column h3 {
    font-size: 2.4rem;
    margin-bottom: 0.5rem;
  }

  .text-column p {
    font-size: 1.4rem;
  }

  .cta-wrapper {
    flex: 2;
    display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 1.5rem;
  }

  .cta-description {
    font-size: 1.5rem;
    line-height: 1.4;
    max-width: 100%;
    margin-top: -11rem;
  }

  .cta-button {
    margin-top: 0.5rem;
  }

  .cta-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.8rem;
    font-size: 1.4rem;
    padding: 0.8rem 1.6rem;
    background-color: #00233B;
    color: #fff;
    text-decoration: none;
  }

  .cta-btn img {
    width: 1.4rem;
    height: 1.4rem;
  }
}

    @media (max-width: 420px) {
  .portfolio-message-section {
    padding: 2rem 1.6rem;
  }

  .portfolio-content {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    gap: 1.6rem;
  }

  .text-column h3 {
    font-family: 'Fahkwang', sans-serif;
    font-weight: 600;
    font-size: 2rem;
    line-height: 100%;
    margin: 0;
  }

  .text-column p {
    font-family: 'Work Sans', sans-serif;
    font-size: 1.2rem;
    font-weight: 400;
    line-height: 100%;
    margin-top: 0.6rem;
  }

  .cta-wrapper {
    max-width: 17.5rem;
    display: flex;
    flex-direction: column;
    gap: 0.8rem;
  }

  .cta-description {
    font-family: 'Work Sans', sans-serif;
    font-size: 1.2rem;
    line-height: 100%;
  }

  .cta-btn {
    font-size: 1.2rem;
      font-family: 'Work Sans', sans-serif;
    font-weight: 400;
    display: flex;
    align-items: center;
    gap: 0.8rem;
    padding: 0.8rem 1.2rem;
    background: linear-gradient(to right, #01739C, #00233B); /* Optional gradient */
    color: white;
    
    width: 12.5rem;
    height: 3rem;
    text-decoration: none;
  }

  .cta-btn img {
    width: 1.2rem;
    height: auto;
  }

     .portfolio-images-row {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
        padding: 1rem 1rem;
        margin-top: -180px;
    }

  .portfolio-images-row img {
    width: 17.5rem;
    height: 24.3rem;
    object-fit: cover;
  }
  .container {
    padding: 0;
  }
  body {
  font-family: 'Work Sans', sans-serif;
  background-color: #fff;
  overflow-x: hidden;
}
}
</style>
<!-- The CTA Wrapper section Responsive Starts  here -->
<style>
  @media (max-width: 480px) {
  .portfolio-message-section {
    padding: 2rem 1.6rem;
  }

  .portfolio-content {

    gap: 1.6rem;
  }

  .text-column h3 {
    font-family: 'Fahkwang', sans-serif;
    font-weight: 600;
    font-size: 2rem;
    line-height: 100%;
    margin: 0;
  }
 .cta-text {
    width: auto;
    font-size: 13px;
    line-height: 1.4;
    flex: 1;
  }
   .contact-cta {
   padding: 0rem;
   height: 5rem;
  }
  .text-column p {
    font-family: 'Work Sans', sans-serif;
    font-size: 1.2rem;
    font-weight: 400;
    line-height: 100%;
    margin-top: 0.6rem;
  }

  .cta-wrapper {
    width: 100%;
    display: flex;
    flex-direction: column;
    gap: 0.8rem;
  }

  .cta-description {
    font-family: 'Work Sans', sans-serif;
    font-size: 1.2rem;
    line-height: 1.4;
  }

  .cta-btn {
    font-size: 1.2rem;
    font-family: 'Work Sans', sans-serif;
    font-weight: 400;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.8rem;
    padding: 0.8rem 1.2rem;
    background: linear-gradient(to right, #01739C, #00233B);
    color: white;
    width: 100%;
    height: auto;
    text-decoration: none;
  }

  .cta-btn img {
    width: 1.2rem;
    height: auto;
  }

  .portfolio-images-row {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
    padding: 1rem 1rem;
    margin-top: -10rem; /* Replaced negative margin */
  }

  .portfolio-images-row img {
    width: 100%;
    height: auto;
    aspect-ratio: 3 / 4;
    object-fit: cover;
   
  }
.contact-btn img{
  width: 2rem;
  height: 2rem;
}
  .container {
    padding: 0 1rem;
    width: 100%;
    box-sizing: border-box;
  }

  body {
    font-family: 'Work Sans', sans-serif;
    background-color: #fff;
    overflow-x: hidden;
  }
}
</style>
<!-- The Blog section Responsive Starts  here -->
<section class="blog-section">
  <div class="container">
    <div class="blog-header">
      <h3>Blog</h3>
      <p>
        Stay updated with tips, stories, and project learnings from our team working on-site in the industry.
      </p>
      <div class="arrow-controls">
        <img src="assets/arrow-left.svg" alt="Previous" class="arrow-left" />
        <img src="assets/arrow-right.svg" alt="Next" class="arrow-right" />
      </div>
    </div>


  <div class="blog-cards">
    <div class="blog-card">
      <img src="assets/Image_1.svg" alt="Blog 1" />
      <p class="blog-description">
        Custom-Engineered Solutions: Products designed to match your exact industry requirements.
      </p>
      <hr />
      <div class="blog-meta">
        <span>Aditi</span>
        <span>01 May 2025</span>
      </div>
    </div>

    <div class="blog-card">
      <img src="assets/Image_2.svg" alt="Blog 2" />
      <p class="blog-description">
        Unmatched Quality Standards: Strict quality control ensuring durability and performance.
      </p>
      <hr />
      <div class="blog-meta">
        <span>Lakshay</span>
        <span>01 May 2025</span>
      </div>
    </div>

    <div class="blog-card">
      <img src="assets/Image_3.svg" alt="Blog 3" />
      <p class="blog-description">
        Advanced Manufacturing Technology: Cutting-edge processes for precision and efficiency.
      </p>
      <hr />
      <div class="blog-meta">
        <span>Dayand</span>
        <span>01 May 2025</span>
      </div>
    </div>
  </div>
  </div>
</section>
<hr class="full-width-hr" />
<style>
    

@media (max-width: 768px) {
  .blog-cards {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    -webkit-overflow-scrolling: touch;
    gap: 1.6rem;
    padding: 1rem 1.6rem;
    margin-top: -5rem;
  }

  .blog-card {
    flex: 0 0 auto;
    width: 24rem; /* fixed card width */
    scroll-snap-align: start;
   
  
    background-color: #fff;
  }

  .blog-card img {
    width: 100%;
    height: 16rem;
    object-fit: cover;
  
  }

 .blog-description {
  font-size: 1.2rem;
  padding: 1rem;
  line-height: 1.4;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}


  .blog-meta {
    display: flex;
    justify-content: space-between;
    font-size: 1rem;
    padding: 0 1rem 1rem;
  }

  .container {
    padding: 1rem; /* remove global container padding in mobile */
  }
    .blog-header {
    display: flex;
    flex-direction: column;
    gap: 1.2rem;
   
    /* padding: 0 1.6rem; */
  }
  .blog-header h3 {
    font-size: 3rem;
    line-height: 1.2;
  }

  .blog-header p {
    font-size: 1.4rem;
    line-height: 1.6;
    max-width: 60%;
    padding-bottom: 1rem;
  }

  .arrow-controls {
    display: none;
    gap: 1.2rem;
    margin-top: -20rem;
    gap: 2rem;
  }

  .arrow-controls img {
    width: 2.2rem;
    height: 2.2rem;
    cursor: pointer;
  }
}
@media (min-width: 769px) and (max-width: 1024px) {
  .blog-cards {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    -webkit-overflow-scrolling: touch;
     scrollbar-width: none; 
    -ms-overflow-style: none;
    gap: 2rem;
    padding: 1rem 2rem;
    margin-top: 2rem;
  }
.blog-cards::-webkit-scrollbar {
  display: none; /* Hide scrollbar for Chrome, Safari and Opera */
}
  .blog-card {
    flex: 0 0 auto;
    width: 28rem; /* Slightly bigger cards than mobile */
    scroll-snap-align: start;
    background-color: #fff;
  }

  .blog-card img {
    width: 100%;
    height: 18rem;
    object-fit: cover;
  }

  .blog-description {
    font-size: 1.4rem;
    padding: 1rem;
    line-height: 1.5;
    white-space: normal; /* multiline text */
    overflow: visible;
    text-overflow: unset;
  }

  .blog-meta {
    font-size: 1.2rem;
    padding: 0 1rem 1rem;
  }

  .blog-header {
    padding: 0 2rem;
  }

  .blog-header h3 {
    font-size: 3.6rem;
  }

  .blog-header p {
    font-size: 1.6rem;
    max-width: 50%;
  }

  .arrow-controls {
    display: flex; /* show arrows on tablet */
    gap: 2rem;
    margin-top: 1rem;
  }

  .arrow-controls img {
    width: 2.4rem;
    height: 2.4rem;
    cursor: pointer;
  }

  .container {
    padding: 0 2rem;
    padding-top: 5rem;
  }
}


</style>

<!-- Blog Section Responsive Ends Here -->

<section class="signup-email-section">


  <div class="signup-flex">
    <!-- Left Side -->
    <div class="signup-left">
      <h3>Sign Up For Our Newsletter</h3>
      <div class="email-box">
        <input type="email" placeholder="Enter email" />
        <button type="submit">
          <img src="assets/mail.svg" alt="Send" />
        </button>
      </div>
    </div>

    <!-- Right Side Image -->
    <div class="signup-right">
      <img src="assets/Map.svg" alt="Newsletter Image" />
    </div>
  </div>
</section>

<style>
 @media (max-width: 768px) {
  .signup-email-section {
    padding: 2rem 1rem;
    background-color: #fff;
  }

  .signup-flex {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 2rem;
  }

  .signup-right {
    order: 1;
    width: 100%;
  }

  .signup-right img {
    width: 39rem;   /* 390px */
    height: 23.9rem; /* 239px */
    object-fit: contain;
  }

  .signup-left {
    order: 2;
    width: 100%;
  }

  .signup-left h3 {
    width: 23.3rem;   /* 233px */
    height: 2.1rem;   /* 21px */
    font-family: 'Fahkwang', sans-serif;
    font-weight: 600;
    font-size: 1.6rem;
    line-height: 100%;
    text-transform: capitalize;
    margin: 0 0 1rem;
  }

  .email-box {
    width: 35.9rem;    /* 359px */
    height: 4rem;      /* 40px */
    padding: 1rem 1.2rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border: 1px solid #000;
    box-sizing: border-box;
  }

  .email-box input {
    flex: 1;
    border: none;
    outline: none;
    font-size: 1.4rem;
  }

  .email-box button {
    background: none;
    border: none;
    padding: 0;
    cursor: pointer;
  }

  .email-box button img {
    width: 2rem;
    height: 2rem;
  }
}
/* Tablet & iPad styles: 769px to 1024px */
@media (min-width: 769px) and (max-width: 1024px) {
  .signup-email-section {
    padding: 3rem 4rem;
    background-color: #fff;
  }

  .signup-flex {
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 3rem;
    justify-content: space-between;
  }

  .signup-left {
    order: 0;
    width: 50%;
  }

  .signup-left h3 {
    width: auto;
    font-size: 2.4rem;
    line-height: 1.2;
    margin-bottom: 1.5rem;
    font-family: 'Fahkwang', sans-serif;
    font-weight: 600;
    text-transform: capitalize;
    color: #00233B;
  }

  .email-box {
    width: 100%;
    max-width: 400px;
    height: 4.8rem;
    padding: 1rem 1.5rem;
    border: 1px solid #000;
    display: flex;
    align-items: center;
    box-sizing: border-box;
  }

  .email-box input {
    flex: 1;
    border: none;
    outline: none;
    font-size: 1.6rem;
  }

  .email-box button {
    background: none;
    border: none;
    padding: 0;
    cursor: pointer;
  }

  .email-box button img {
    width: 2.4rem;
    height: 2.4rem;
  }

  .signup-right {
    order: 1;
    width: 50%;
    display: flex;
    justify-content: center;
  }

  .signup-right img {
    width: 100%;
    max-width: 450px;
    height: auto;
    object-fit: contain;
  }
}

</style>
<?php include 'footer.php'; ?>
<style>
@media (max-width: 768px) {
  .why-choose-us {
    padding: 4rem 0;
  }
 .space {
    display: none !important;
  }
  .why-choose-us h3 {
    font-size: 2.4rem;
    margin-bottom: 2.4rem;
  }

  .why-choose-us .reasons {
    padding-left: 1.6rem;
  }

  .why-choose-us .reasons li {
    font-size: 1.6rem;
    margin-bottom: 2.4rem;
  }
}
</style>
</div>

