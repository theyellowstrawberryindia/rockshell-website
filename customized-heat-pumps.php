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

  <!-- Break line for responsive only -->
  <div class="breadcrumb-break"></div>

  <img src="assets/Polygon.svg" alt="Breadcrumb arrow" class="breadcrumb-icon" />
  <p class="breadcrumb-text current">
    <a href="customized-heat-pumps">Customized Heat Pumps</a>
  </p>
</div>

    <div class="high-temp-content">
      <div class="high-temp-text">
        <h3>Customized Heat Pumps</h3>
        <p>
          Tailored Thermal Solutions for Maximum Efficiency and Performance : Every building and process is different—your heat pump should be too. Our Customized Heat Pumps are engineered to meet your unique heating and cooling needs with precision. Whether it’s a challenging temperature range, space constraint, or integration with existing systems, we deliver bespoke solutions that optimize performance, efficiency, and lifecycle cost.
        </p>
      </div>
      <div class="high-temp-image">
        <img src="assets/Industry_2.svg" alt="High temperature heat pump" />
      </div>
    </div>
  </div>

  <!-- Full-width HR below the image -->
  <hr class="full-width-divider" />
</section>


<style>
  .breadcrumb-break {
  display: none;
}
 .breadcrumb-text a {
  color: inherit;
  text-decoration: none;
  
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
  margin-top: 80px; /* Ensure it's on top */
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
}
.high-temp-pump {
  padding: 20px 0;
  background-color: #fff;
}

.high-temp-content {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  gap: 80px;
  padding-top: 80px;
}

.high-temp-text {
  max-width: 650px;
  color: #00233B;
}

.high-temp-text h3 {
  font-family: 'Fahkwang', sans-serif;
  font-weight: 600;
  font-size: 40px;
  line-height: 100%;
  text-transform: capitalize;
  margin-bottom: 32px;
}

.high-temp-text p {
  font-family: 'Work Sans', sans-serif;
  font-weight: 400;
  font-size: 24px;
  line-height: 100%;
  color: #00233B;
  max-width: 612px;
}

.high-temp-image img {
  width: 455px;
  height: 536px;
  object-fit: cover;
}

body{
  overflow: hidden;
}

</style>
<style>
  @media (max-width: 768px) {
  .container {
    padding-left: 1.6rem;
    padding-right: 1.6rem;
  }
  .breadcrumb-break {
    display: block;
    flex-basis: 100%;
    height: 0;
    margin: 0;
    padding: 0;
  }
 .breadcrumb-text a {
  color: inherit;
  text-decoration: none;
  font-size: 12px;
  
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
    width: 32.5rem; /* matches width: 225 */padding-top:60px ;
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

</style>
<!-- Here Starts the Heatpump 4 images  Section  -->
<section class="heat-pump-section">
  <div class="container">



    <!-- Heading -->
    <h2 class="section-heading">Discover Product Variants</h2>

<div class="heat-pump-row">
  <a href="#" class="heat-pump-card">
    <img src="assets/products.svg" alt="High Temperature Heat Pumps" />
    <p>Special HEXs - Ti, Duplex, SS316   </p>
  </a>
  <a href="#" class="heat-pump-card">
    <img src="assets/products.svg" alt="Steam Heat Pumps" />
    <p>Heat pumps with cold air  </p>
  </a>
  <a href="#" class="heat-pump-card">
    <img src="assets/products.svg" alt="Low GWP Refrigerant Heat Pump" />
    <p>Heat pump with Cold side and hot side thermal and battery storage  </p>
  </a>
    <a href="#" class="heat-pump-card">
    <img src="assets/products.svg" alt="Low GWP Refrigerant Heat Pump" />
    <p>Brine sourced heat pumps upto -40C  </p>
  </a>
  
</div>


  </div>
</section>


<style>


 .heat-pump-section {
  padding: 60px 0;
  background: #fff;
}

.container {
  width: 100%;
  max-width: 1400px;
  margin: 0 auto;
  /* padding-left: 100px; */
  position: relative;
  box-sizing: border-box;
}

.breadcrumb {
  position: absolute;
  top: -60px;
  /* left: 100px; */
  font-family: 'Work Sans', sans-serif;
  font-size: 14px;
  font-weight: 400;
  line-height: 16px;
  opacity: 1;
}

.section-heading {
  margin-top: 80px;
  font-family: 'Fahkwang', sans-serif;
  font-size: 40px;
  font-weight: 600;
  text-transform: capitalize;
  line-height: 52px;
  width: 449px;
  color: #00233B;
}

.heat-pump-row {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: stretch;
  flex-wrap: nowrap;
  margin-top: 60px;
  gap: 20px;
}

.heat-pump-card {
  flex: 1 1 25%;
  max-width: 298px;
  height: 400px;
  position: relative;
  text-align: center;
  color: #fff;
}

.heat-pump-card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

.heat-pump-card p {
  position: absolute;
  bottom: 20px;
  left: 0;
  right: 0;
  margin: 0;
  font-family: 'Work Sans', sans-serif;
  font-size: 18px;
  font-weight: 400;
  background: rgba(0, 0, 0, 0.4);
  padding: 10px 5px;
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
  .high-temp-pump {
  padding: 0px;
  background-color: #fff;
}
.high-temp-text h3{
  font-size: 30px;
}
.high-temp-text p{
  font-size: 18px;
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
<!-- Here ends the Heat Pump 4 Images Section  -->
 <!-- Here Starts the CTA 1 Section  -->
<section class="contact-cta">
  <div class="contact-container">
    <p class="cta-text">Need a custom coating solution?</p>
    <a href="#contact" class="contact-btns">
      Get Personal Assistance
      <img src="assets/Phone.svg" alt="Phone" />
    </a>
  </div>
</section>

<style>
  .contact-cta {
  width: 100%;
  background-color: #00233B; /* Navy blue */
  height: 7.8rem;
  display: flex;
  align-items: center;
  justify-content: center;
}

.contact-container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  width: 100%;
  max-width: 1400px;
  padding-left: 100px;
  padding-right: 3rem;
  box-sizing: border-box;
}
.cta-text {
  font-size: 2.4rem;
  color: #fff;
  margin: 0;
}

.contact-btns {
  display: flex;
  align-items: center;
  gap: 0.8rem;
  background-color: #fff;
  /* color: #00233B; */
  border: none;
  padding: 0.8rem 1.2rem;
  font-size: 1.8rem;
  text-decoration: none;
  white-space: nowrap;
      display: flex
;
   
    /* gap: 2.4rem; */
    background: linear-gradient(to bottom, #069FCA, #005D83);
    color: #ffffff;
    text-decoration: none;
    font-family: 'Work Sans', sans-serif;
    font-size: 2.4rem;
    font-weight: 500;
    padding: 1.4rem 2rem;
    transition: background 0.3s ease;
}

.contact-btn img {
  width: 2rem;
  height: auto;
}
@media (min-width: 769px) and (max-width: 1024px) {
  .contact-container {
    padding-left: 40px; /* reduce left padding */
    padding-right: 2rem; /* adjust right padding */
    flex-wrap: wrap; /* allow items to wrap */
    justify-content: space-between;
  }

  .cta-text {
    font-size: 1.8rem; /* smaller font for tablets */
    flex: 1 1 60%; /* take about 60% width */
    margin-bottom: 0.5rem;
  }

  .contact-btns {
    font-size: 1.6rem; /* reduce font size */
    padding: 1rem 1.6rem; /* smaller padding */
    flex: 1 1 35%; /* take about 35% width */
    justify-content: center;
    white-space: normal; /* allow wrapping if needed */
  }

  .contact-btns img {
    width: 1.8rem; /* smaller icon */
  }
}
@media (max-width: 420px) {
  .contact-container {
    flex-direction: row;
    justify-content: space-between;
    padding: 0 1.2rem;
  }

  .cta-text {
    font-size: 1.2rem;
  }

  .contact-btn {
    font-size: 1.1rem;
    padding: 0.6rem 1rem;
    gap: 0.6rem;
  }
}

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
<!-- Here ends the CTA1 Section  -->
<section class="why-choose-us">
    <div class="container">
  <h3>What Customization Means for You</h3>
  <ul class="reasons">
    <li>Custom capacities and temperature ranges.</li>
    <li>Cooling, heating, or simultaneous heating/cooling.</li>
    <li>Hybrid systems with multiple energy sources.</li>
    <li>Custom refrigerant options (including low-GWP and natural gases).</li>
    <li>Special MOC heat exchangers like Titanium, Duplex steel, SS316L to treat harsh chemicals.</li>
  </ul></div>
</section>

<style>
.why-choose-us {
  padding: 60px 0px;
  background-color: #fff;
  color: #00233B;
}

.why-choose-us h3 {
  font-family: 'Fahkwang', sans-serif;
  font-weight: 600;
  font-style: normal;
  font-size: 40px;
  line-height: 100%;
  text-transform: capitalize;
  margin-bottom: 40px;
}

.why-choose-us .reasons {
  list-style-type: disc;
  padding-left: 20px;
  /* max-width: 768px; */
}

.why-choose-us .reasons li {
  font-family: 'Work Sans', sans-serif;
  font-weight: 400;
  font-style: normal;
  font-size: 24px;
  line-height: 1.4;
  letter-spacing: 0;
  margin-bottom: 40px;
  color: #00233B;
}

</style>
<!-- Here Starts the CTA Section  -->
<section class="help-cta">
  <div class="help-container">
    <h3 class="help-heading">Need Help?</h3>
    <div class="help-boxes">
      <div class="help-box">
        <div class="help-title">
          <img src="assets/Pencil.svg.svg" alt="Pencil Icon" />
          <span>Request a Quote</span>
        </div>
        <p>Tell us about your project to get a customized quote.</p>
      </div>
      <div class="help-box">
        <div class="help-title">
          <img src="assets/Headset.svg.svg" alt="Headset Icon" />
          <span>Ask a Question</span>
        </div>
        <p>Need clarity or technical support? Reach out now.</p>
      </div>
    </div>
  </div>
</section>

<style>
  .help-cta {
  width: 100%;
  background-color: #00233B;
  padding: 4rem 0;
  box-sizing: border-box;
  color: #ffffff;
  display: flex;
  justify-content: center;
}

.help-container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  width: 100%;
  max-width: 1400px;
  padding-left: 100px;
  padding-right: 3rem;
  box-sizing: border-box;
}

.help-heading {
  font-family: 'Fahkwang', sans-serif;
  font-weight: 600;
  font-size: 4rem;
  line-height: 100%;
  text-transform: capitalize;
  margin: 0;
  color: #ffffff;
}

.help-boxes {
  display: flex;
  gap: 2rem;
}

.help-box {
  border: 1px solid #ffffff;
  padding: 2.4rem;
  width: 29.8rem;
  height: 13.3rem;
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  background-color: transparent;
}

.help-title {
  display: flex;
  align-items: center;
  gap: 1.2rem;
  font-family: 'Work Sans', sans-serif;
  font-weight: 600;
  font-size: 2.4rem;
  line-height: 100%;
}

.help-title img {
  width: 2.4rem;
  height: auto;
}

.help-box p {
  font-family: 'Work Sans', sans-serif;
  font-weight: 400;
  font-size: 1.6rem;
  line-height: 100%;
  margin: 0;
}
@media (min-width: 769px) and (max-width: 1024px) {
  .help-container {
    flex-direction: column;
    align-items: flex-start;
    padding-left: 40px;
    padding-right: 40px;
  }

  .help-heading {
    font-size: 3rem;
    margin-bottom: 2rem;
  }

  .help-boxes {
    
    gap: 1.5rem;
    width: 100%;
  }

  .help-box {
    width: 100%;
    max-width: 600px;
    height: auto;
    padding: 1.6rem;
  }

  .help-title {
    font-size: 2rem;
    gap: 1rem;
  }

  .help-title img {
    width: 2rem;
  }

  .help-box p {
    font-size: 1.4rem;
  }
}
/* Responsive Styling */
@media (max-width: 768px) {
  .help-container {
    flex-direction: column;
    gap: 3rem;
    padding: 0 1.6rem;
  }

  .help-heading {
    font-size: 3rem;
    text-align: center;
  }

  .help-boxes {
    flex-direction: column;
    align-items: center;
  }

  .help-box {
    width: 100%;
    max-width: 36rem;
    height: auto;
  }

  .help-title {
    font-size: 2rem;
  }

  .help-box p {
    font-size: 1.4rem;
  }
}

</style>

<!-- Here ends the CTA Section  -->
<section class="why-choose-us">
    <div class="container">
  <h3>Heat Pumps with Static Fans for Directed Cold Airflow</h3>
  <ul class="reasons">
    <li>Targeted airflow for specific zones or equipment.</li>
    <li>High energy efficiency with optimized fan and compressor operation.</li>
    <li>Uniform cooling distribution without turbulence or dead zones.</li>
    <li>Low maintenance static fan technology with fewer moving parts.</li>
    <li>Custom ducting or nozzle configurations available.</li>
  </ul></div>
</section>


 <section class="key-features-section">
  <div class="container">
    <h4>Key Features of our customized heat pumps</h4>
    <table>
      <tr><td>Heating Capacity</td><td>10 kW – 10+ MW</td></tr>
      <tr><td>Hot Water Temperature</td><td>Up to 90–130°C</td></tr>
      <tr><td>Cooling Capabilities</td><td>-20°C chilled brine to +10°C cooling</td></tr>
      <tr><td>Refrigerants</td><td>R-1234yf, R-1234ze, R-1233zde, R-717 (NH₃)</td></tr>
      <tr><td>Mounting</td><td>Skid-mounted, containerized, or modular</td></tr>
      <tr><td>Controls</td><td>BMS-compatible, remote monitoring, PLC/HMI</td></tr>
    </table>
  </div>
</section>

<style>
    .key-features-section h4{
        font-family: 'Fahkwang', sans-serif;
  font-weight: 600;
  font-style: normal;
  font-size: 40px;
  line-height: 100%;
  text-transform: capitalize;
  color: #00233B;
  margin-bottom: 40px;
    }
/* Table Styles */
table {
  width: 100%;
  border-collapse: collapse;
  margin: 40px 0 20px 0; /* Added top margin for spacing */
  font-family: 'Work Sans', sans-serif;
  font-size: 16px;
  background-color: #fff;
  border: 1px solid #ddd;
}

table tr {
  border-bottom: 1px solid #ddd;
}

table td {
  padding: 12px 16px;
  text-align: left;
  vertical-align: top;
}

/* Column separator for the first column */
table td:first-child {
  font-weight: 600; 
  color: #2a2a2a;
  width: 40%;
  border-right: 1px solid #ddd; /* Column separator line */
}

table td:last-child {
  color: #555;
}

table tr:nth-child(even) {
  background-color: #f9f9f9;
}

table tr:hover {
  background-color: #f1f7ff;
}

/* Title Style */
h4 {
  font-size: 20px;
  font-weight: 700;
  margin-bottom: 10px;
  color: #2a2a2a;
  font-family: 'Work Sans', sans-serif;
}
</style>
<section class="why-choose-us">
    <div class="container">
  <h3>What Customization Means for You</h3>
  <ul class="reasons">
    <li>Custom capacities and temperature ranges.</li>
    <li>Cooling, heating, or simultaneous heating/cooling.</li>
    <li>Hybrid systems with multiple energy sources.</li>
    <li>Custom refrigerant options (including low-GWP and natural gases).</li>
    <li>Special MOC heat exchangers like Titanium, Duplex steel, SS316L to treat harsh chemicals.</li>
  </ul></div>
</section>
<section class="contact-cta">
  <div class="contact-container">
    <p class="cta-text">Need a custom coating solution?</p>
    <a href="#contact" class="contact-btns">
      Get Personal Assistance
      <img src="assets/Phone.svg" alt="Phone" />
    </a>
  </div>
</section>
<!-- Here starts the FAQ Section -->
<section class="faq-section">
  <div class="container">
    <h3 class="faq-heading">Frequently Asked Questions</h3>

    <div class="faq-item">
      <div class="faq-question">
        <h4>What are customized heat pumps?</h4>
        <img src="assets/Dropdown.svg" alt="Toggle answer" class="dropdown-icon" />
      </div>
      <div class="faq-answer">
        <p>Customized heat pumps are engineered to meet your unique heating and cooling needs. They can be tailored for capacity, temperature range, refrigerants, and integration with existing systems.</p>
      </div>
      <hr />
    </div>

    <div class="faq-item">
      <div class="faq-question">
        <h4>How can customized heat pumps improve efficiency?</h4>
        <img src="assets/Dropdown.svg" alt="Toggle answer" class="dropdown-icon" />
      </div>
      <div class="faq-answer">
        <p>By optimizing design for your specific process or building, customized heat pumps reduce energy waste, improve seasonal performance, and ensure precise temperature control.</p>
      </div>
      <hr />
    </div>

    <div class="faq-item">
      <div class="faq-question">
        <h4>Can customized heat pumps handle both heating and cooling?</h4>
        <img src="assets/Dropdown.svg" alt="Toggle answer" class="dropdown-icon" />
      </div>
      <div class="faq-answer">
        <p>Yes. These systems can provide heating, cooling, or simultaneous heating and cooling. Hybrid configurations using multiple energy sources are also possible.</p>
      </div>
      <hr />
    </div>

    <div class="faq-item">
      <div class="faq-question">
        <h4>Which industries benefit from customized heat pumps?</h4>
        <img src="assets/Dropdown.svg" alt="Toggle answer" class="dropdown-icon" />
      </div>
      <div class="faq-answer">
        <p>Industries like commercial buildings, industrial process heating & cooling, food & beverage processing, pharmaceutical manufacturing, cold storage, and district energy networks benefit from tailored solutions.</p>
      </div>
      <hr />
    </div>

    <div class="faq-item">
      <div class="faq-question">
        <h4>How is energy management handled in these systems?</h4>
        <img src="assets/Dropdown.svg" alt="Toggle answer" class="dropdown-icon" />
      </div>
      <div class="faq-answer">
        <p>Smart controllers manage energy flows based on thermal load, time-of-use electricity pricing, renewable inputs, and backup requirements to maximize efficiency and flexibility.</p>
      </div>
      <hr />
    </div>

  </div>
</section>

<style>
  .faq-section {
  padding-top: 80px;
  background-color: #ffffff;
}

.faq-heading {
  font-family: 'Fahkwang', sans-serif;
  font-weight: 600;
  font-size: 4rem;
  line-height: 100%;
  text-transform: capitalize;
  margin-bottom: 4rem;
  color: #00233B;
}

.faq-item {
  margin-bottom: 2.4rem;
}

.faq-question {
  display: flex;
  justify-content: space-between;
  align-items: center;
  cursor: pointer;
}

.faq-question h4 {
  font-family: 'Work Sans', sans-serif;
  font-weight: 400;
  font-size: 2.4rem;
  line-height: 100%;
  margin: 0;
  color: #00233B;
}

.dropdown-icon {
  width: 2.4rem;
  height: 2.4rem;
  transition: transform 0.3s ease;
}

.faq-answer {
  margin-top: 1.2rem;
  font-family: 'Work Sans', sans-serif;
  font-size: 1.8rem;
  line-height: 1.4;
  color: #00233B;
  display: none;
}

hr {
  border: none;
  border-top: 1px solid #dcdcdc;
  margin-top: 2rem;
}

</style>
<script>
  const faqItems = document.querySelectorAll('.faq-item');

  faqItems.forEach(item => {
    const question = item.querySelector('.faq-question');
    const answer = item.querySelector('.faq-answer');
    const icon = item.querySelector('.dropdown-icon');

    question.addEventListener('click', () => {
      answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
      icon.style.transform = answer.style.display === 'block' ? 'rotate(180deg)' : 'rotate(0deg)';
    });
  });
</script>


<!-- Here ends the Faq Section  -->

<!-- Here Starts the Footer section  -->
<?php include 'footer.php'; ?>
<style>
 @media (max-width: 768px) {
  .high-temp-content {
    flex-direction: column;
    gap: 4rem;
    
    /* padding-top: 4rem; */
    /* padding-left: 1.6rem;
    padding-right: 1.6rem; */
  }

  .high-temp-text h3 {
    font-size: 2.4rem; /* 24px */
    margin-bottom: 1.6rem;
    padding-top:40px ;
  }

  .high-temp-text p {
    font-size: 1.4rem; /* 14px */
    line-height: 1.4;
    max-width: 100%;
  }

  .high-temp-image img {
    width: 100%;
    /* height: auto;
    max-width: 100%; */
  }

   

  .container {
    padding-left: 1.6rem;
    padding-right: 1.6rem;
  }
}

@media (max-width: 768px) {
  .heat-pump-row {
    flex-wrap: wrap;
    justify-content: center;
    gap: 2rem;
    margin-top: 4rem;
    padding: 0 1.6rem;
  }

  .heat-pump-card {
    flex: 1 1 calc(50% - 1rem); /* 2 cards per row */
    max-width: calc(50% - 1rem);
    height: 20rem;
  }

  .heat-pump-card p {
    font-size: 1.4rem;
    padding: 0.8rem 0.4rem;
  }

  .section-heading {
    font-size: 2.4rem;
    line-height: 3.2rem;
    width: 100%;
    padding: 0 1.6rem;
    margin-top: 4rem;
    text-align: left;
  }

  .heat-pump-card img {
    height: 100%;
    object-fit: cover;
  }
}
@media (max-width: 420px) {
  .contact-container {
    flex-direction: row;
    justify-content: space-between;
    padding: 0 1.2rem;
  }

  .cta-text {
    font-size: 1.2rem;
  }

  .contact-btn {
    font-size: 1.1rem;
    padding: 0.6rem 1rem;
    gap: 0.6rem;
  }
}
@media (max-width: 768px) {
  .contact-cta {
    height: 5.4rem; /* 54px */
    padding: 0 1.6rem;
  }

  .contact-container {
    padding: 0;
    max-width: 100%;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .cta-text {
    font-family: 'Fahkwang', sans-serif;
    font-weight: 600;
    font-size: 1.2rem;  /* 12px */
    line-height: 1;     /* 100% */
    text-transform: capitalize;
    width: 15.1rem;     /* 151px */
    height: 3.2rem;     /* 32px */
    margin: 0;
    color: #fff;
  }

  .contact-btns {
    width: 17.3rem;       /* 173px */
    height: 3rem;         /* 30px */
    font-size: 1.2rem;    /* 12px */
    padding: 0.8rem;
    gap: 0.4rem;          /* 4px */
    display: flex;
    align-items: center;
    justify-content: center;
    white-space: nowrap;
  }

  .contact-btns img {
    width: 1.6rem;
    height: auto;
  }
}

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
}@media (max-width: 768px) {
  .why-choose-us {
    padding: 4rem 0;
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

@media (max-width: 768px) {
  .faq-section {
    padding: 3rem 1.6rem; /* 16px horizontal */
  }

  .faq-heading {
    font-size: 2rem;        /* ~20px */
    line-height: 2.6rem;    /* Adjusted for heading height ~52px */
    width: 100%;            /* Fits within 303px layout */
    max-width: 30.3rem;
    margin-bottom: 2.4rem;
  }

  .faq-item {
    width: 100%;
    max-width: 35.8rem;     /* 358px */
    margin-bottom: 2.4rem;
  }

  .faq-question h4 {
    font-size: 1.4rem;        /* 10px */
    font-weight: 400;
    line-height: 1.4rem;
    width: 90%;
  }

  .dropdown-icon {
    width: 1.2rem;          /* 12px */
    height: 1.2rem;
  }

  .faq-answer {
    font-size: 1.2rem;      /* 8px */
    line-height: 1.2rem;
    margin-top: 0.8rem;
    width: 100%;
    max-width: 35.8rem;     /* match layout width */
  }

  hr {
    display: none;
  }
  .high-temp-pump {
  padding: 0px;
  background-color: #fff;
}
.heat-pump-section{
  padding-bottom: 60px;
}
}

/* Responsive Styling */
@media (max-width: 768px) {
  .help-cta {
    padding: 3rem 1.6rem;
  }

  .help-container {
    flex-direction: column;
    align-items: flex-start;
    padding: 0;
    gap: 2rem;
  }

  .help-heading {
    font-size: 2rem;
    text-align: left;
    margin-bottom: 1.6rem;
  }

  .help-boxes {
    display: flex;
    flex-direction: row; /* boxes in row */
    justify-content: flex-end; /* align boxes to right */
    gap: 1.6rem;
    width: 100%;
  }

  .help-box {
    width: 17.5rem; /* 175px */
    height: 6.4rem;  /* 64px */
    padding: 0.8rem;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .help-title {
    font-size: 1.2rem;
    gap: 0.8rem;
  }

  .help-title img {
    width: 1.6rem;
    height: auto;
  }

  .help-box p {
    width: 14rem;       /* 140px */
    height: 1.8rem;      /* 18px */
    font-family: 'Work Sans', sans-serif;
    font-weight: 400;
    font-size: 0.8rem;   /* 8px */
    line-height: 1;      /* 100% */
    margin: 0;
  }
}
</style>
 </div>


