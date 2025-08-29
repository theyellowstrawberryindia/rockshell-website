
<?php include 'header.php'; ?>
<style>
    
/* Responsive */

 .contact-section {
  width: 1126px;
  max-width: 100%;
  /* min-height: 909px; */
  padding: 60px 30px;
  margin: 60px auto; /* added vertical spacing above and below */
  border: 1px solid #ccc;
  background: #fff;
  box-sizing: border-box;
  position: relative;
}
.contact-title {
  font-family: 'Manrope', sans-serif;
  font-weight: 600;
  font-size: 32px; /* reduced from 40px */
  line-height: 100%;
  text-transform: capitalize;
  margin-bottom: 20px;
}
.contact-subtitle {
  font-family: 'Manrope', sans-serif;
  font-weight: 600;
  font-size: 18px;
  color: #333333;
  line-height: 100%;
  margin-bottom: 15px;
}

.contact-required {
  font-family: 'Manrope', sans-serif;
  font-weight: 600;
  font-size: 18px;
  color: #333333;
  line-height: 100%;
  margin-bottom: 30px;
}

.contact-form .form-row {
  display: flex;
  gap: 20px;
  margin-bottom: 20px;
  flex-wrap: wrap;
}

.contact-form input,
.contact-form select {
  flex: 1;
  padding: 12px 15px;
  font-family: 'Manrope', sans-serif;
  font-size: 18px;
  border: 1px solid #333333;
  
  box-sizing: border-box;
}

.contact-submit {
  padding: 12px 30px;
  background-color: #00233B;
  color: #fff;
  border: none;
  font-family: 'Manrope', sans-serif;
  font-size: 18px;
  cursor: pointer;
  margin-top: 10px;

}

.contact-terms {
  display: block;
  font-family: 'Manrope', sans-serif;
  font-size: 14px !important;
  margin: 15px 0;
}

.contact-note {
  font-family: 'Manrope', sans-serif;
  font-size: 16px;
  line-height: 1.6;
  color: #444;
}
.contact-form .form-group {
  display: flex;
  flex-direction: column;
  flex: 1;
}

.contact-form label {
  font-family: 'Manrope', sans-serif;
  font-size: 16px;
  font-weight: 500;
  margin-bottom: 5px;
  color: #333;
}

</style>
<section class="contact-section">
  <div class="container">
    <!-- Title -->
    <h2 class="contact-title">How Can We Help You?</h2>

    <!-- Subtitle -->
    <p class="contact-subtitle">
      Thank you for your interest in Rockshell. Please fill out the form below and we will get back to you as soon as possible.
    </p>

    <!-- Required note -->
    <p class="contact-required">Required fields are marked *</p>

    <!-- Contact Form -->
<form class="contact-form">
  <div class="form-row">
    <div class="form-group">
      <label for="fullName">Full Name*</label>
      <input type="text" id="fullName" required>
    </div>
    <div class="form-group">
      <label for="jobTitle">Job Title*</label>
      <input type="text" id="jobTitle" required>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group">
      <label for="companyName">Company Name</label>
      <input type="text" id="companyName" required>
    </div>
    <div class="form-group">
      <label for="email">Your Email</label>
      <input type="email" id="email" required>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group">
      <label for="phone">Phone Number</label>
      <input type="tel" id="phone" required>
    </div>
    <div class="form-group">
      <label for="location">Location</label>
      <input type="text" id="location" required>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group">
      <label for="country">Country</label>
      <input type="text" id="country" required>
    </div>
    <div class="form-group">
      <label for="referral">How did you hear about Rockshell?</label>
      <select id="referral" required>
        <option value="">Select</option>
        <option value="Referral">Referral</option>
        <option value="Website">Website</option>
        <option value="Other">Other</option>
      </select>
    </div>
  </div>

  <button type="submit" class="contact-submit">Submit</button>

  <label class="contact-terms">
    <input type="checkbox" required> I accept the Terms & Conditions
  </label>

  <p class="contact-note">
    Your request will be sent to the relevant departments to assist with your requirement.
    By clicking 'Submit' you are authorizing Rockshell to contact you so that we may fulfill your request, as well as to communicate with you regarding our products and services.
  </p>
</form>

  </div>
</section>
<style>

</style>


<?php include 'footer.php'; ?>
</div>

<!-- ==========  FOOTER SECTION - END ========== -->
<script src="main.js"></script>

