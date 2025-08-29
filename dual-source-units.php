<?php include 'header.php'; ?>

<!-- Here Ends the Ends the Navbar  Section  -->
<section class="high-temp-pump">
  <div class="container">
  <div class="breadcrumb">
  <img src="assets/Polygon.svg" alt="Breadcrumb arrow" class="breadcrumb-icon inactive" />
  <p class="breadcrumb-text current inactive">
    <a href="index">Home</a>
  </p>

  <img src="assets/Polygon.svg" alt="Breadcrumb arrow" class="breadcrumb-icon inactive" />
  <p class="breadcrumb-text current inactive">
    <a href="heat-pump-solutions">Heat Pump Solutions</a>
  </p>

  <img src="assets/Polygon.svg" alt="Breadcrumb arrow" class="breadcrumb-icon" />
  <p class="breadcrumb-text current">
    <a href="high-temperature-heat-pumps">High Temperature Heat Pumps</a>
  </p>

  <!-- New line for Air and Water -->
  <img src="assets/Polygon.svg" alt="Breadcrumb arrow" class="breadcrumb-icon" />
  <p class="breadcrumb-text current">
    Dual Source Heat Pumps
  </p>
</div>

<style>
  .breadcrumb-text a {
  color: inherit;
  text-decoration: none;
  opacity: 0.6; /* Match the inactive breadcrumb style */
}

.breadcrumb-text a:hover {
  text-decoration: underline;
}

    .full-width-divider {
  width: 100vw;
  border: none;
  height: 1px;
  background-color: #00233B;
  margin: -2px 0 0; /* Add top margin to separate from content */
  padding: 0;
}

  .breadcrumb {
  display: flex;
  align-items: center;
  gap: 0.8rem;
  margin-bottom: 2rem;
  position: relative;
  z-index: 10;
  padding-top: 20px; /* Ensure it's on top */
}
/* Style for inactive (gray) breadcrumb */
.breadcrumb-text.inactive {
  color: #00233B; /* Light gray */
  opacity: 0.6;
}

.breadcrumb-icon.inactive {
 opacity: 0.6;
  color: #00233B;
}
.breadcrumb-icon {
  width: 8px;
  height: 8px;
  transform: rotate(-90deg);
  flex-shrink: 0;
  z-index: 10;
}

.breadcrumb-text {
  font-family: 'Work Sans', sans-serif;
  font-weight: 300;
  font-size: 14px;
  line-height: 1;
  color: #00233B;
  margin: 0;
}

.breadcrumb-text.current {
  font-weight: 400;
} @media (max-width: 768px) {
  .container {
    padding-left: 1.6rem;
    padding-right: 1.6rem;
  }
 .breadcrumb-text a {
  color: inherit;
  text-decoration: none;
  font-size: 10px;
  opacity: 0.6; /* Match the inactive breadcrumb style */
}
  .breadcrumb {
    position: static; /* remove absolute on small screens */
    margin-bottom: 1.2rem;
    flex-wrap: wrap;
  }
.breadcrumb-text {
  font-family: 'Work Sans', sans-serif;
  font-weight: 300;
  font-size: 12px;
  line-height: 1;
  color: #00233B;
  margin: 0;
}

  .section-heading {
    margin-top: 0;
    font-size: 2.2rem; /* ~22px */
    line-height: 2.6rem; /* ~26px */
    width: 32.5rem; /* matches width: 225 */
  }

  .heat-pump-row {
    flex-wrap: wrap;
    gap: 1.6rem;
    justify-content: space-between;
  }

  .heat-pump-card {
    flex: 1 1 calc(50% - 0.8rem); /* two per row with spacing */
    max-width: 100%;
    height: auto;
    aspect-ratio: 3 / 4; /* keeps height proportional */
  }

  .heat-pump-card img {
    height: 100%;
    object-fit: cover;
  }

  .heat-pump-card p {
    font-size: 1.4rem;
    padding: 0.8rem;
  }
}
@media (min-width: 769px) and (max-width: 1024px) {
  .container {
    padding-left: 40px;
    padding-right: 40px;
    max-width: 100%;
    box-sizing: border-box;
  }

  .breadcrumb {
    position: static;
    margin-bottom: 1rem;
    font-size: 11px;
    left: auto;
    top: auto;
  }

  .section-heading {
    margin-top: 40px;
    font-size: 32px;
    line-height: 42px;
    width: 100%;
    max-width: 400px;
  }

  .heat-pump-row {
    gap: 15px;
    flex-wrap: wrap;
    justify-content: space-between; /* distribute cards */
  }

  .heat-pump-card {
    flex: 1 1 45%;
    max-width: 45%;
    height: 350px;
    margin-bottom: 20px;
    box-sizing: border-box;
  }

  .heat-pump-card p {
    font-size: 16px;
    padding: 8px 5px;
  }

  .breadcrumb-icon {
    width: 7px;
    height: 7px;
  }

  .breadcrumb-text {
    font-size: 11px;
  }
}

</style>
<section class="air-water-section">
  <div class="container">
    <div class="air-water-content">
      <!-- Left column -->
      <div class="performance-left">
        <h3>Dual Source Heat Pumps </h3>

        <div class="performance-block">
          <h4>	Air Source Mode: </h4>
          <p>Pulls heat from the outside air during milder conditions. </p>
          <hr />
        </div>

        <div class="performance-block">
          <h4>Water source Mode:  </h4>
          <p>Pulls heat from from utitlies like chiller, cooling tower, air compressors etc </p>
          <hr />
        </div>

        <div class="performance-block">
          <h4>Ground Source Mode:</h4>
          <p>Switches to ground loop heating during colder months or when air temperatures drop.</p>
          <hr />
        </div>
         <div class="performance-block">
          <h4>Smart Control System:   </h4>
          <p>Monitors energy efficiency and selects the most effective mode in real-time. </p>
          <hr />
        </div>
      </div>

      <!-- Right column -->
      <div class="performance-description">
        <p>
    Dual Source Heat Pumps are advanced systems designed to provide reliable heating and cooling throughout the year. 
          By intelligently switching between air, water, or ground sources, these units maximize energy efficiency, reduce operational costs, and maintain optimal hot water supply even in challenging conditions.
        </p>
      </div>
    </div>
  </div>
</div>
</section>

<style>
  .air-water-section {
  background-color: #fff;
  padding: 80px 0px;
  color: #00233B;
}

.air-water-content {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  gap: 80px;
  flex-wrap: nowrap; /* ensures left-right layout doesn't wrap on larger screens */
}

.performance-left {
  max-width: 628px;
  flex: 0 0 50%;
}

.performance-left h3 {
  font-family: 'Fahkwang', sans-serif;
  font-weight: 600;
  font-size: 40px;
  line-height: 100%;
  text-transform: capitalize;
  margin-bottom: 40px;
  margin-left: -28px;
}

.performance-description {
  max-width: 612px;
  flex: 0 0 45%;
  margin-top: 115px; /* Aligns with .performance-block h4 */
  
}

.performance-block h4 {
  font-family: 'Work Sans', sans-serif;
  font-weight: 400;
  font-size: 24px;
  margin-bottom: 8px;
  color: #00233B;
   margin-left: -28px;
}

.performance-block p {
  font-family: 'Fahkwang', sans-serif;
  font-weight: 600;
  font-size: 24px;
  text-transform: capitalize;
  margin: 0 0 12px 0;
   margin-left: -28px;
}

.performance-block hr {
  border: none;
  border-top: 1px solid #00233B;
  width: 100%;
  padding-top: 15px;
   margin-left: -28px;
}

.performance-description {
  max-width: 612px;
  flex: 0 0 45%;
}

.performance-description p {
  font-family: 'Work Sans', sans-serif;
  font-weight: 400;
  font-size: 24px;
  line-height: 100%;
  margin-bottom: 24px;
  color: #00233B;
}
body{
  overflow: hidden;
}
/* Mobile Styles */

.air-water-content {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  gap: 40px;
  flex-wrap: wrap; /* allow stacking on small screens */
}

.performance-left,
.performance-description {
  flex: 1 1 48%; /* take roughly half width each */
  max-width: 100%;
  box-sizing: border-box;
}

.performance-left h3,
.performance-block h4,
.performance-block p,
.performance-block hr {
  margin-left: 0; /* remove negative margins */
}

.performance-description {
  margin-top: 115px; /* Keep alignment on desktop */
}

@media (max-width: 1024px) {
  .performance-description {
    margin-top: 40px; /* Reduce gap on smaller screens */
  }
}

@media (max-width: 768px) {
  .performance-left,
  .performance-description {
    flex: 1 1 100%;
          
        margin-left: -15px;
  }
  .performance-description {
    margin-top: 20px;
    font-size: 8px;

  }
  .air-water-content{
    gap: 0px;
  }
  .air-water-section{
    padding:0px;
  }

 .performance-description p {
  
  position: relative; /* so top/left works */
 
  font-family: 'Work Sans', sans-serif;
  font-weight: 400;
  font-style: normal;
  font-size: 14px;
   line-height: 160%;
  letter-spacing: 0;
  opacity: 1;
}

  .performance-block h4{
    font-size: 14px;
  }
  .performance-block p{
    font-size: 14px;
  }
  .performance-left h3{
    font-size: 20px;
    padding-top: 40px;
  }
}

</style>

<section class="heatpump-industrial-section">
  <div class="heatpump-industrial-bg">
    <div class="container">
    <div class="heatpump-industrial-wrapper">
      <div class="heatpump-industrial-content">
        <h3>What Is a Dual Source Heat Pump?</h3>
        <p>
        A dual source heat pump combines the best of both air source, water source and ground source (geothermal) technologies. By switching between the air and water as heat sources, it optimizes energy efficiency and delivers consistent hot water—even in extreme temperatures.


        </p>
      </div>
      <div class="heatpump-industrial-image">
        <img src="assets/introduction_airwater.jpg" alt="Seasaw Image" />
      </div>
    </div>
  </div>
  </div>
</section>



<style>
.heatpump-industrial-section {
  width: 100%;
}
.heatpump-industrial-image {
  position: relative;
  right: -100px;
  flex: 1; /* Allow image container to grow with content */
  display: flex;
  align-items: stretch; /* Let image fill full height */
}

.heatpump-industrial-image img {
  width: 728px;
  height: 712px;
  object-fit: contain;
  display: block;
}

.heatpump-industrial-bg {
  background-color: #00233B;
  width: 100%;
  
}
.heatpump-industrial-wrapper {
  display: flex;
  justify-content: space-between;
  align-items: stretch; /* Makes both columns equal in height */
  width: 100%;
  box-sizing: border-box;
  /* Remove fixed height so it grows with content */
}
.heatpump-industrial-content {
  color: #ffffff;
  font-family: 'Fahkwang', sans-serif;
  max-width: 628px;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
}
.heatpump-industrial-content h3 {
  font-size: 40px;
  font-weight: 600;
  line-height: 100%;
  text-transform: capitalize;
  padding-top: 80px;
  padding-bottom: 60px;
  margin: 0;
}

.heatpump-industrial-content p {
  font-family: 'Work Sans', sans-serif;
  font-size: 20px;
  font-weight: 300;
  line-height: 160%;
  margin: 0;
  max-width: 612px;
}



.heatpump-industrial-image img {
  width: 100%;
  height: 100%; /* Image fills height of content */
  object-fit: cover; /* Use "contain" if you don't want cropping */
  display: block;
}
@media (min-width: 769px) and (max-width: 1024px) {
  .heatpump-industrial-wrapper {
    flex-direction: column;        /* Stack content vertically */
    align-items: center;           /* Center horizontally */
    gap: 40px;                    /* Space between content and image */
  }

  .heatpump-industrial-content {
    max-width: 100%;
    padding: 0 20px;
    text-align: center;           /* Center text for tablet */
  }

  .heatpump-industrial-content h3 {
    font-size: 32px;
    padding-top: 40px;
    padding-bottom: 30px;
    max-width: 90%;
    margin: 0 auto;
  }

  .heatpump-industrial-content p {
    font-size: 16px;
    max-width: 90%;
    margin: 0 auto;
    line-height: 1.5;
  }

  .heatpump-industrial-image {
    position: static;             /* Reset position */
    right: 0;                    /* Reset right offset */
    width: 100%;
    max-width: 600px;             /* Limit max width */
    display: flex;
    justify-content: center;
  }

  .heatpump-industrial-image img {
    width: 100%;
    height: auto;                /* Keep aspect ratio */
    object-fit: contain;  
    padding-bottom: 40px;       /* Prevent cropping */
  }

  .heatpump-industrial-bg {
    padding-left: 20px;
    padding-right: 20px;
  }
}

@media (max-width: 768px) {
  .heatpump-industrial-wrapper {
    flex-direction: column; /* Stack text and image vertically */
    align-items: center;
    text-align: center;
  }

  .heatpump-industrial-image {
    position: static; /* remove right offset */
    width: 100%;
    margin-top: 20px;
  }

  .heatpump-industrial-image img {
    width: 100%;
    height: auto;
    object-fit: contain;
    margin-bottom: 20px;
  }

  .heatpump-industrial-content h3 {
    font-family: 'Fahkwang', sans-serif;
    font-weight: 600; /* SemiBold */
    font-style: normal;
    font-size: 16px !important;
    padding-top: 30px !important;
    letter-spacing: 0;
    text-transform: capitalize;
    text-align: left;
    opacity: 1;
  }

  .heatpump-industrial-content p {
    font-size: 14px !important;
    padding-bottom: 40px;
    text-align: left;
  }
}

</style>




<section class="how-heatpumps-work-section">
  <div class="container">
    <div class="how-heatpumps-work-wrapper">
      <div class="how-heatpumps-work-content">
        <h3>Why Industrial Facilities Choose Dual Source Heat Pumps?</h3>
        <p>
                  <strong>Intelligent Source Switching</strong>
Automatically alternates between ground and air sources based on real-time conditions to ensure optimal energy usage and reliability.

        </p>
         <p>
                <strong>Lower Operational Costs</strong> 
Reduces reliance on fossil fuels and stabilizes energy bills by using the most cost-effective heat source available.


        </p>
         <p>
             <strong>Scalable for Industrial</strong>    Needs
Designed for large-scale operations with high thermal demands, including manufacturing plants, warehouses, processing facilities, data centers, and institutional campuses.

        </p>
          <p>
                <strong>Sustainability & Compliance</strong> 
Supports corporate ESG goals and helps meet regulatory standards for energy efficiency and carbon reduction.


        </p>
      </div>
      <div class="how-heatpumps-work-image">
        <img src="assets/Clip1.svg" alt="Industrial Process Diagram" />
      </div>
    </div>
  </div>
</section>
<style>
    .how-heatpumps-work-section {
  width: 100%;
  background-color: #ffffff; /* adjust as needed */
  padding: 100px 0;
}

.how-heatpumps-work-wrapper {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  flex-wrap: wrap;
  gap: 40px;
}

.how-heatpumps-work-content {
  max-width: 612px;
  color: #00233B;
}

.how-heatpumps-work-content h3 {
  font-family: 'Fahkwang', sans-serif;
  font-size: 32px;
  font-weight: 600;
  line-height: 100%;
  text-transform: capitalize;
  margin-bottom: 54px;
}

.how-heatpumps-work-content p {
  font-family: 'Work Sans', sans-serif;
  font-size: 24px;
  font-weight: 400;
   margin-bottom: 16px; /* adjust as needed */
  line-height: 1.6;  
  line-height: 150%; /* Better readability */
}
.how-heatpumps-work-image {
  margin: 0;
  padding: 0;
  position: relative;
  top: -100px; /* Pull upward to stick to previous image — tweak if needed */
}
.how-heatpumps-work-image img {
  /* width: 326px;
  height: 409px; */
  
 
  display: block;
  margin: 0;
  padding: 0;
}
/* Tablet (iPad and similar) */
@media (min-width: 769px) and (max-width: 1024px) {
  .how-heatpumps-work-wrapper {
    flex-direction: column;
    align-items: center;
    gap: 30px;
  }

  .how-heatpumps-work-content {
    max-width: 100%;
    text-align: center;
    padding: 0 20px;
  }

  .how-heatpumps-work-content h3 {
    font-size: 28px;
    margin-bottom: 20px;
  }

  .how-heatpumps-work-content p {
    font-size: 18px;
    line-height: 1.4;
  }

  .how-heatpumps-work-image {
    position: static;
    top: 0;
    max-width: 90%;
  }

  .how-heatpumps-work-image img {
    width: 100%;
    height: auto;
    display: block;
  }
}
@media (max-width: 992px) {
  .how-heatpumps-work-wrapper {
    flex-direction: column;
    align-items: left;
    text-align: left;
    gap: 20px;
  }
.how-heatpumps-work-section{
  padding-top: 30px;
  padding-bottom: 10px;
}
  .how-heatpumps-work-content {
    max-width: 100%;
   
  }

  .how-heatpumps-work-content h3 {
    font-size: 24px;
  }

  .how-heatpumps-work-content p {
    font-size: 14px;
    line-height: 1.5;
  }

  .how-heatpumps-work-image {
    position: static; /* remove -100px offset */
    margin-top: 20px;
    width: 100%;
  }

  .how-heatpumps-work-image img {
    width: 100%;
    height: auto;
    object-fit: contain;
  }
}

</style>

<section class="heatpump-industrial-section">
  <div class="heatpump-industrial-bgs">
    <div class="container">
    <div class="heatpump-industrial-wrapper2">
          <div class="heatpump-industrial-image2">
        <img src="assets/Waste_Heat_Airwater.jpg" alt="Seasaw Image" />
      </div>
      <div class="heatpump-industrial-contents">
        <h3>System Features</h3>
        <p>
           Rockshell Corp’s dual source heat pumps feature integrated water source and air source technology, variable capacity compressors for optimal load matching and efficiency, advanced controls with BMS integration, modular design for phased installation or future expansion, and remote monitoring and diagnostics. These systems deliver reliable performance even in extreme climates, reduce CO₂ emissions, lower peak demand charges, and ensure improved thermal stability along with consistent process hot water temperatures.

        </p>
      </div>
    
    </div>
  </div>
  </div>
</section>



<style>
.heatpump-industrial-section {
  width: 100%;
}


.heatpump-industrial-image2 img {
  /* width: 728px;
  height: 712px; */
  object-fit: contain;
  display: block;
}

.heatpump-industrial-bgs {
  background-color: #05A0C6;
  width: 100%;
  
}


.heatpump-industrial-wrapper2 {
  display: flex;
  flex-direction: row-reverse;
  justify-content: space-between;
  align-items: stretch; /* This makes both sides match height */
  width: 100%;
  box-sizing: border-box;
}

.heatpump-industrial-contents {
  color: #ffffff;
  font-family: 'Fahkwang', sans-serif;
  max-width: 628px;
  /* Remove height and overflow so it grows naturally */
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
}

.heatpump-industrial-contents h3 {
  font-size: 40px;
  font-weight: 600;
  line-height: 100%;
  text-transform: capitalize;
  padding-top: 80px;
  padding-bottom: 60px;
  margin: 0;
}

.heatpump-industrial-contents p {
  font-family: 'Work Sans', sans-serif;
  font-size: 20px;
  font-weight: 300;
  line-height: 160%;
  margin: 0;
  max-width: 612px;
  padding-bottom: 20px;
  /* Remove overflow, let it grow */
}

.heatpump-industrial-image2 {
  flex: 1; /* Allow image container to grow */
  position: relative;
  left: 100px;
  display: flex; /* Required for image inside to fill it */
  align-items: stretch;
}

.heatpump-industrial-image2 img {
  width: 100%;
  height: 100%; /* Image will now scale with text section height */
  object-fit: cover; /* or use contain if you want full visibility */
  display: block;
}
@media (max-width: 992px) {
  .heatpump-industrial-wrapper2 {
    flex-direction: column; /* Stack image & text */
    align-items: center;
    text-align: center;
  }

  .heatpump-industrial-image2 {
    position: static; /* Remove the left offset */
    width: 100%;
    margin-bottom: 20px;
  }

  .heatpump-industrial-image2 img {
    width: 100%;
    height: auto; /* Let image keep proportions */
    object-fit: contain;
    margin-top: 20px;
  }

  .heatpump-industrial-contents {
    max-width: 100%;
    
    text-align: left;
  }

  .heatpump-industrial-contents h3 {
    font-size: 24px;
    padding-top: 20px;
    padding-bottom: 20px;
  }

  .heatpump-industrial-contents p {
    font-size: 14px;
    line-height: 1.5;
  }
}

</style>
<div class="space"></div>
<style>
    .space{
        padding-top: 80px;
        /* padding-bottom: 100px; */
    }
</style>
<!-- Industry Section -->
<section class="overlap-industry-section">
  <div class="overlap-industry-content">
    <div class="overlap-industry-card">
      <h3 class="heatpump-heading2">Applications:</h3>
      <ul class="industry-feature-list">
        <li>	Manufacturing and Production Plants</li>
        <li>	Logistics & Distribution Centers</li>
        <li>	Food & Beverage Processing Facilities</li>
        <li>	Chemical and Pharmaceutical Plants</li>
         <li> 	District Heating & Cooling Systems</li>
         <li> 	Data Centers & Critical Infrastructure</li>
        
      </ul>
    </div>
  </div>
</section>
    <div class="container">
<h3 class="why-choose-heading"></h3>
</div>
 <hr class="overlap-industry-separator" />

<style>
/* Hover effect when card is hovered */
.overlap-industry-separator {
  border: none;
  border-top: 2px solid #00233B; /* color matching your theme */
  margin-top: 24rem; /* spacing above and below */
  width: 100%; /* full width */
  max-width: 200.6rem; /* same as card width */
  margin-left: auto;
  margin-right: auto;
}

/* Section: Industry (with background image right, card left) */
.overlap-industry-section {
  position: relative;
  width: 100%;
  display: flex;
  justify-content: flex-end; /* Push content to the right */
  align-items: flex-start;
  padding: 8rem 0;
  background: url('assets/construction.svg') no-repeat top left;
  background-size: contain;
   margin-bottom: 0rem;
}

.overlap-industry-content {
  width: 100%;               /* Take full width of screen */
  display: flex;
  justify-content: flex-end; /* Push card to the right */
}
.overlap-industry-card {
  background-color: #00233B;
  padding: 2.4rem;
  
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
  width: 60.6rem;            /* Reduced width */
}
.industry-feature-list {
  font-family: 'Work Sans', sans-serif;
  font-weight: 400;
  font-size: 2.4rem;
  line-height: 1.4;
  color: #ffffff;
  padding-left: 2rem;
  padding-right: 2rem;
  padding-bottom: 20px;
  margin: 0;
  list-style-type: disc;
}

.industry-feature-list li + li {
  margin-top: 1.6rem;
  padding-top: 1.6rem;
  border-top: 1px solid #eee;
}

.why-choose-heading {
  font-family: 'Fahkwang', sans-serif;
  font-weight: 600;
  font-size: 3rem;
  line-height: 100%;
  color: #00233B;
  padding-top: 80px;
  margin-top: -40rem;
  width: 65.6rem;
}

/* .overlap-industry-card:hover {
  background-color: #00233B;
  color: #ffffff;
}

.overlap-industry-card:hover h3,
.overlap-industry-card:hover p {
  color: #ffffff;
} */


@media (min-width: 768px) and (max-width: 1024px) {
  .overlap-industry-section {
    flex-direction: column; /* Stack vertically on tablets */
    align-items: center;
    padding: 4rem 2rem;
    background-position: center top;
    background-size: contain;
    margin-bottom: 4rem;
  }

  .overlap-industry-content {
    justify-content: center; /* Center the card */
    width: 100%;
    padding: 0 1rem;
  }

  .overlap-industry-card {
    width: 100%;        /* Full width inside container */
    max-width: 600px;   /* Limit max width for readability */
    padding: 2rem 1.5rem;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.07);
  }

  .industry-feature-list {
    font-size: 1.6rem;  /* Smaller font on tablets */
    padding-left: 1rem;
    padding-right: 1rem;
  }

  .industry-feature-list li + li {
    margin-top: 1rem;
    padding-top: 1rem;
    border-top: 1px solid rgba(255, 255, 255, 0.3);
  }

  .why-choose-heading {
    font-size: 2rem;  /* Smaller heading */
    width: 100%;
    max-width: 600px;
    margin: 2rem auto 4rem auto;
    padding-top: 40px;
    margin-top: 0; /* Remove negative margin */
    text-align: center;
  }

  .overlap-industry-separator {
    margin-top: 3rem;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
  }
}

/* Mobile Styles */
@media (max-width: 992px) {
  /* Heading styling */
  .why-choose-heading {
  display: none !important;
  }
.overlap-industry-section img[src*="construction.svg"] {
  width: 50% !important;
  height: 300px !important; /* fixed height */
  max-height: none !important; /* remove any max-height */
  object-fit: cover !important; /* fill the height without distortion */
  display: block !important;
  margin: 0 !important;
}


  .overlap-industry-section {
    min-height: 550px !important; /* even taller container */
    background-position: top left;
    background-size: 180% auto !important; /* increase background image size */
  }


/* Align text to left */
.overlap-industry-section,
.overlap-industry-content {
  text-align: left !important;
}

  /* Content wrapper full width */
.overlap-industry-content {
  display: flex;
  flex-direction: column;
  justify-content: center;
  width: 80%;  /* Increased width */
  padding-left: 0rem;
  box-sizing: border-box;
}

.overlap-industry-card {
  width: 100%;
  padding: 1.5rem;
  box-sizing: border-box;
}

  /* Bullet list style */
  .industry-feature-list {
    font-size: 12px;
    padding-left: 1rem;
    padding-right: 1rem;
  }
}

/* Responsive adjustments */
@media (max-width: 992px) {
  .overlap-industry-separator {
    margin-top: 4rem;       /* Reduce top margin on smaller screens */
    max-width: 90%;         /* Use a percentage max width for responsiveness */
  }
}

@media (max-width: 576px) {
  .overlap-industry-separator {
    margin-top: 2rem;       /* Even smaller margin on very small screens */
    max-width: 100%;        /* Full width on smallest screens */
  }
}
</style>
<!-- Here ends the Industry Section  -->


<div class="space"></div>

<!-- Here ends the CTA1 Section  -->
<!-- Here ends the CTA1 Section  -->
<section class="heatpump-benefits1">
      <div class="container">
  <div class="heatpump-container1">
   
    <ul class="heatpump-reasons1">
      <!-- <li>	Process Heating: Industrial heat pumps are commonly used for process heating in industries such as chemical manufacturing, food processing, and paper production. They can efficiently raise the temperature of liquids and gases used in these processes.</li>
      <li>	Waste Heat Recovery: One of the key advantages of industrial heat pumps is their ability to recover waste heat from various industrial processes. This recovered heat can then be reused to reduce the facility's overall energy consumption.</li>
      <li>	Cooling and Air Conditioning: In addition to heating, industrial heat pumps can provide effective cooling solutions for industrial facilities, ensuring stable temperatures for processes and equipment.</li>
      <li>	Drying and Dehumidification: Industries that require drying or dehumidification processes, such as agriculture and pharmaceuticals, can benefit from industrial heat pumps, as they can efficiently remove moisture from the air.</li>
      -->
    </ul>
  </div>
</section>
<style>
.heatpump-benefits1 {
  padding: 60px 0;
  background-color: #ffffff;
  color:  #00233B; /* White text on dark background */
}

.heatpump-heading2 {
  font-family: 'Fahkwang', sans-serif;
  font-weight: 600;
  font-style: normal;
  font-size: 40px;
  line-height: 100%;
  text-transform: capitalize;
  margin-bottom: 40px;
  color: #f1f1f1; /* ensure heading is white */
}
.heatpump-heading1 {
  font-family: 'Fahkwang', sans-serif;
  font-weight: 600;
  font-style: normal;
  font-size: 40px;
  line-height: 100%;
  text-transform: capitalize;
  margin-bottom: 40px;
  color: #00233B; /* ensure heading is white */
}

.heatpump-reasons1 {
  list-style-type: disc;
  padding-left: 20px;
 
  color: #00233B; /* white text for list */
}

.heatpump-reasons1 li {
  font-family: 'Work Sans', sans-serif;
  font-weight: 400;
  font-style: normal;
  font-size: 24px;
  line-height: 1.4;
  letter-spacing: 0;
  margin-bottom: 40px;
}

</style>
<!-- Here ends the CTA1 Section  -->
<section class="heatpump-benefits">
  <div class="container">
    <div class="heatpump-container">
      <h3 class="heatpump-heading">Salient features of Simultaneous heat pump units:</h3>
      <ul class="heatpump-reasons">
        <li> Units operates with HFO R1234Ze & R1233Zde with a Global Warming Potential of 7 and an Ozone depletion potential (ODP) of 0</li>
        <li> Units capable of delivering 130C temperature. </li>
        <li> A turn-down of around 10% to 20% can be achieved in most cases, this makes the unit ideal where process demands keep fluctuating. </li>
        <li> Capable of delivering the entire solution with pumps, buffer vessels, sensors, piping, and accessories </li>
        <li> Unit available with all common communication protocols Modbus, Profibus, Profinet and BACNet</li>
        
      </ul>
    </div>
  </div>
</section>

<style>
.heatpump-benefits {
  padding: 60px 0;
  background-color: #00233B;
  color: #ffffff; /* White text on dark background */
}


.heatpump-heading {
  font-family: 'Fahkwang', sans-serif;
  font-weight: 600;
  font-style: normal;
  font-size: 40px;
  line-height: 100%;
  text-transform: capitalize;
  margin-bottom: 40px;
  color: #ffffff; /* ensure heading is white */
}

.heatpump-reasons {
  list-style-type: disc;
  padding-left: 20px;
 
  color: #ffffff; /* white text for list */
}

.heatpump-reasons li {
  font-family: 'Work Sans', sans-serif;
  font-weight: 400;
  font-style: normal;
  font-size: 24px;
  line-height: 1.4;
  letter-spacing: 0;
  margin-bottom: 40px;
}
@media (max-width: 992px) {
  .heatpump-benefits1 {
    padding: 40px 15px;
  }

  .heatpump-heading1 {
    font-size: 28px;
    max-width: 100%;
    margin-bottom: 25px;
    text-align: left;
  }

  .heatpump-reasons1 {
    padding-left: 15px;
    max-width: 100%;
  }

  .heatpump-reasons1 li {
    font-size: 16px;
    margin-bottom: 20px;
  }
}

@media (max-width: 576px) {
  .heatpump-benefits1 {
    padding: 30px 10px;
  }

  .heatpump-heading1 {
    font-size: 24px;
    margin-bottom: 20px;
  }

  .heatpump-reasons1 li {
    font-size: 14px;
    margin-bottom: 15px;
  }
}
@media (max-width: 992px) {
  .heatpump-benefits {
    padding: 40px 15px;
  }

  .heatpump-heading {
    font-size: 28px;
    max-width: 100%;
    margin-bottom: 25px;
    text-align: left;
  }

  .heatpump-reasons {
    padding-left: 15px;
    max-width: 100%;
  }

  .heatpump-reasons li {
    font-size: 16px;
    margin-bottom: 20px;
  }
}

@media (max-width: 576px) {
  .heatpump-benefits {
    padding: 30px 10px;
  }

  .heatpump-heading {
    font-size: 24px;
    margin-bottom: 20px;
  }

  .heatpump-reasons li {
    font-size: 14px;
    margin-bottom: 15px;
  }
}
</style>

<!-- Here Starts the Footer section  -->
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

