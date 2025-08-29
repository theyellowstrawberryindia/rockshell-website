<?php include 'header.php'; ?>
<!-- Coming Soon Section -->
<!-- ===== ABOUT US BANNER ===== -->
<section class="about-us-banner">
  <div class="about-banner-content">
    <h1>About Us</h1>
    <p>Innovating for a sustainable future through Heating, Cooling & Effluent Treatment Solutions.</p>
  </div>
</section>

<section class="about-company">
  <h2>About Rockshell Corp.</h2>
  <p>
    Rockshell Corp is the leading manufacturer for innovative Heating, Cooling, and Effluent/Chemical recovery systems in India. 
    Our state-of-the-art manufacturing facility in Vasai, Maharashtra is optimized to produce chemical heating heat pumps, heat pump chillers, 
    and heat pump evaporators — all under one roof. Our team brings over 100 years of combined expertise, ensuring world-class performance and efficiency.
  </p>
</section>

<section class="who-we-are">
  <h2>Who We Are</h2>
  <div class="who-cards">
    <div class="who-card">
      <h3>Professional Workers</h3>
      <p>Our dedicated workmanship, structured approach & unmatched commitment sets us apart from the rest.</p>
    </div>
    <div class="who-card">
      <h3>Effective Team Work</h3>
      <p>Our team works in close coordination to give clients a seamless and hassle-free experience.</p>
    </div>
    <div class="who-card">
      <h3>Quality Assurance</h3>
      <p>We pay close attention at every stage of production to ensure quality standards are met at all times.</p>
    </div>
  </div>
</section>

<section class="mission-vision">
  <div class="mission">
    <h2>Our Mission</h2>
    <p>We aim to provide innovative Heating, Cooling & Effluent treatment solutions that reduce operating cost & increase profitability by optimizing energy and water usage for a sustainable future.</p>
  </div>
  <div class="vision">
    <h2>Our Vision</h2>
    <p>To inspire and empower organizations through Energy and Water Efficient technologies.</p>
  </div>
</section>

<!-- <section class="certifications">
  <h2>Certifications</h2>
  <p>We are proud to hold industry-leading certifications that ensure quality, efficiency, and environmental responsibility.</p>
</section> -->

<style>
    .about-section {
  font-family: 'Open Sans', sans-serif;
  color: #333;
}

.about-banner {
  background: url('banner-image.jpg') center/cover no-repeat;
  height: 50vh;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-size: 3rem; /* bigger banner text */
  font-weight: 700;
  text-align: center;
}

.about-content {
  max-width: 1200px;
  margin: 0 auto;
  padding: 60px 20px;
  line-height: 1.8; /* more readable */
  font-size: 1.2rem; /* bigger base font size */
}

.about-company h2,
.who-we-are h2,
.mission-vision h2,
.certifications h2 {
  font-size: 2.5rem; /* bigger headings */
  font-weight: 700;
  margin-bottom: 20px;
}

.about-company p,
.who-we-are p,
.mission-vision p {
  font-size: 1.15rem; /* slightly bigger text for readability */
  margin-bottom: 20px;
}

.mission,
.vision {
  background: #f8f8f8;
  padding: 40px;
  margin-bottom: 30px;
  border-radius: 8px;
}

.certifications {
  background: #f1f1f1;
  padding: 40px;
  border-radius: 8px;
}

   /* Banner */
.about-us-banner {
  background: linear-gradient(to right, #00233B, #004266);
  color: #fff;
  padding: 80px 20px;
  text-align: center;
}

.about-us-banner h1 {
  font-size: 4rem;
  margin-bottom: 15px;
}

.about-us-banner p {
   font-size: 1.5rem;
  max-width: 800px;
  margin: 0 auto;
}

/* About Company */
.about-company {
  padding: 60px 20px;
  max-width: 1100px;
  margin: auto;
  text-align: center;
}

.about-company h2 {
  font-size: 3rem;
  margin-bottom: 20px;
}

.about-company p {
   font-size: 1.5rem;
  line-height: 1.7;
}

/* Who We Are */
.who-we-are {
  padding: 60px 20px;
  background: #f9f9f9;
}

.who-we-are h2 {
  font-size: 3rem;
  text-align: center;
  margin-bottom: 40px;
}

.who-cards {
  display: flex;
  gap: 20px;
  flex-wrap: wrap;
  justify-content: center;
}

.who-card {
  background: white;
  padding: 30px;
  flex: 1 1 300px;
  max-width: 350px;
  text-align: center;
  border-radius: 10px;
  box-shadow: 0 3px 8px rgba(0,0,0,0.1);
}

.who-card h3 {
  font-size: 1.5rem;
  margin-bottom: 15px;
}

.who-card p {
   font-size: 1.5rem;
}

/* Mission & Vision */
.mission-vision {
  display: flex;
  flex-wrap: wrap;
  gap: 30px;
  padding: 60px 20px;
  background: #eef3f7;
}

.mission, .vision {
  flex: 1 1 400px;
  background: white;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 3px 8px rgba(0,0,0,0.1);
}

.mission h2, .vision h2 {
  font-size: 2rem;
  margin-bottom: 15px;
}

.mission p, .vision p {
  font-size: 1.5rem;
}

/* Certifications */
.certifications {
  padding: 60px 20px;
  text-align: center;
}

.certifications h2 {
  font-size: 2.5rem;
  margin-bottom: 20px;
}

.certifications p {
  font-size: 1.5rem;
}

</style>

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
</div>

