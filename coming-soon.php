<?php include 'header.php'; ?>
<!-- Coming Soon Section -->
<section class="coming-soon-section">
  <div class="coming-soon-content">
    <h2>Coming Soon</h2>
    <p>Exciting updates are on the way! Stay tuned for new features, services, and more from Rockshell Corp.</p>
   
  </div>
</section>
<style>
.coming-soon-section {
  padding: 8rem 2rem; /* increased height with more padding */
  background: linear-gradient(180deg, #00233B 0%, #004266 100%);
  color: #fff;
  text-align: center;
  font-family: 'Fahkwang', sans-serif;
  min-height: 60vh; /* ensures it takes up at least 60% of screen height */
}

.coming-soon-content {
  max-width: 900px; /* wider content area */
  margin: 0 auto;
}

.coming-soon-section h2 {
  font-size: 5rem; /* bigger title */
  font-weight: 600;
  margin-bottom: 1.5rem;
}

.coming-soon-section p {
  font-size: 2.6rem;
  font-family: 'Work Sans', sans-serif;
  margin-bottom: 2rem;
  max-width: 800px; /* keeps text in a nice readable width */
  margin-left: auto;
  margin-right: auto;
}
.coming-soon-timer {
  display: flex;
  justify-content: center;
  gap: 2rem;
}

.time-box {
  background: rgba(255, 255, 255, 0.1);
  padding: 1rem 1.5rem;
  border-radius: 0.5rem;
  min-width: 70px;
}

.time-box span {
  font-size: 2rem;
  font-weight: 700;
  display: block;
}

.time-box small {
  font-size: 1rem;
  opacity: 0.8;
}

@media (max-width: 768px) {
  .coming-soon-section h2 {
    font-size: 2rem;
  }
  .coming-soon-timer {
    gap: 1rem;
  }
  .time-box {
    padding: 0.8rem 1rem;
    min-width: 60px;
  }
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

