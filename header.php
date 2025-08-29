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
    <a href="index">
      <img src="assets/rockshell-logo.png" alt="Logo" class="navbar-logo">
    </a>

    <!-- Desktop nav links -->
    <ul class="nav ms-5 d-none d-md-flex">
      <li class="nav-item"><a class="nav-link" href="heat-pump-solutions">Heat Pumps Solutions</a></li>
      <li class="nav-item"><a class="nav-link" href="heat-pump-dryers-evaporators">Heat Pump dryers & Evaporators</a></li>
    
      <li class="nav-item"><a class="nav-link" href="service">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="applications">Industries</a></li>
      
      <li class="nav-item"><a class="nav-link" href="#">Insights</a></li>
      
      <!-- <li class="nav-item"><a class="nav-link" href="contact-us.html">Contact</a></li> -->
     
    </ul>

   <!-- Desktop "Get a Quote" button with icon -->
<a href="get-a-quote" class="quote-btn d-none d-md-flex">
  
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
  <a href="index" class="back-btn d-md-none">
    <img src="assets/arrow-left.svg" alt="Back">
  </a>

  <ul>
    <li><a href="#">Heat Pumps Solutions</a></li>
    <li><a href="#">Heat Pump dryers & Evaporators</a></li>
     <li><a href="applications">Services</a></li>
    <li><a href="service">Industries</a></li>
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

  .custom-navbar .nav {
    display: none; /* hide desktop nav links */
  }

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
