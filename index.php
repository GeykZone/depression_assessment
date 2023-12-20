<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Villa Agency - Real Estate HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="assets/css/form-question.css">

    <style>
    /* Add your existing styles here */

    .hidden {
        opacity: 0;
    }

    /* Add your other styles here */
</style>

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

  <div class="main-banner">
      <div class="item item-1">
        <div class="header-text">
         <section class="radio-section">
            <div class="radio-list">

              <h3 class="text-white">Depression Assessment Questionnaire</h3>

              <h5 class="text-danger fw-bold mb-2 d-none" id="invalid_lrn_msg">Please enter a valid Learner Reference Number that consists of 12 digits.</h5>
              <div class="input-group mb-3">
              <label class="input-group-text" for="inputGroupSelect01">LRN: </label>
              <input type="text" class="form-control" placeholder="Learner Reference Number" id="lrn_input" oninput="validateInput()" maxlength="12">
              </div>
             

              <h4 class="text-white">For each statement, click the number that best represents your feelings or experiences.
                Use the following scale:
              </h4>

              <br>

              <h4 class="text-white">1 = Strongly Disagree</h4>
              <h4 class="text-white">2 = Disagree</h4>
              <h4 class="text-white">3 = Neutral</h4>
              <h4 class="text-white">4 = Agree</h4>
              <h4 class="text-white">5 = Strongly Agree</h4>
            
              <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-4">
                <button class="cutom-btn " onclick="nextPage()"><span> Proceed</span></button>
              </div>

            </div>
          </section>
        </div>
      </div>
      
      <div class="item item-2 hidden">
      <div class="header-text">
         <!-- ***** Question 1 ***** -->
        <section class="radio-section">
            <div class="radio-list">
              <h3 class="text-white">I have felt sad, lonely, or down most of the time.</h3>
              <h4 class="text-danger fw-bold mb-2 radio-error-msg d-none">Kindly select a response from the provided options.</h4>
              <div class="radio-item"><input name="radio1" value="1" id="q1_radio1" type="radio"><label for="q1_radio1">1 Strongly Disagree</label></div>
              <div class="radio-item"><input name="radio1" value="2" id="q1_radio2" type="radio"><label for="q1_radio2">2 Disagree</label></div>
              <div class="radio-item"><input name="radio1" value="3" id="q1_radio3" type="radio"><label for="q1_radio3">3 Neutral</label></div>
              <div class="radio-item"><input name="radio1" value="4" id="q1_radio4" type="radio"><label for="q1_radio4">4 Agree</label></div>
              <div class="radio-item"><input name="radio1" value="5" id="q1_radio5" type="radio"><label for="q1_radio5">5 Strongly Agree</label></div>
            
              <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                <button class="cutom-btn" onclick="previousPage()"><span> Previous</span></button>
                <button class="cutom-btn" onclick="nextPage()"><span> Next</span></button>
              </div>
            </div>
          </section>
          <!-- ***** Question 1 ***** -->
        </div>
      </div>
      <div class="item item-3 hidden">
        <div class="header-text">
          <!-- ***** Question 2 ***** -->
        <section class="radio-section">
            <div class="radio-list ">
              <h3 class="text-white">I have lost interest in activities that I used to enjoy.</h3>
              <h4 class="text-danger fw-bold mb-2 radio-error-msg d-none">Kindly select a response from the provided options.</h4>
              <div class="radio-item"><input name="radio2" value="1" id="q2_radio1" type="radio"><label for="q2_radio1">1 Strongly Disagree</label></div>
              <div class="radio-item"><input name="radio2" value="2" id="q2_radio2" type="radio"><label for="q2_radio2">2 Disagree</label></div>
              <div class="radio-item"><input name="radio2" value="3" id="q2_radio3" type="radio"><label for="q2_radio3">3 Neutral</label></div>
              <div class="radio-item"><input name="radio2" value="4" id="q2_radio4" type="radio"><label for="q2_radio4">4 Agree</label></div>
              <div class="radio-item"><input name="radio2" value="5" id="q2_radio5" type="radio"><label for="q2_radio5">5 Strongly Agree</label></div>
              
              <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                <button class="cutom-btn " onclick="previousPage()"><span> Previous</span></button>
                <button class="cutom-btn " onclick="nextPage()"><span> Next</span></button>
              </div>
            </div>
          </section>
          <!-- ***** Question 2 ***** -->
        </div>
      </div>
      <div class="item item-4 hidden">
        <div class="header-text">
          <!-- ***** Question 3 ***** -->
          <section class="radio-section">
            <div class="radio-list ">
              <h3 class="text-white">I have trouble sleeping (either too much or too little).</h3>
              <h4 class="text-danger fw-bold mb-2 radio-error-msg d-none">Kindly select a response from the provided options.</h4>
              <div class="radio-item"><input name="radio3" value="1" id="q3_radio1" type="radio"><label for="q3_radio1">1 Strongly Disagree</label></div>
              <div class="radio-item"><input name="radio3" value="2" id="q3_radio2" type="radio"><label for="q3_radio2">2 Disagree</label></div>
              <div class="radio-item"><input name="radio3" value="3" id="q3_radio3" type="radio"><label for="q3_radio3">3 Neutral</label></div>
              <div class="radio-item"><input name="radio3" value="4" id="q3_radio4" type="radio"><label for="q3_radio4">4 Agree</label></div>
              <div class="radio-item"><input name="radio3" value="5" id="q3_radio5" type="radio"><label for="q3_radio5">5 Strongly Agree</label></div>
            
              <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                <button class="cutom-btn " onclick="previousPage()"><span> Previous</span></button>
                <button class="cutom-btn " onclick="nextPage()"><span> Next</span></button>
              </div>
            </div>
          </section>
         <!-- ***** Question 3 ***** -->
        </div>
      </div>

      <div class="item item-5 hidden">
        <div class="header-text">
          <!-- ***** Question 4 ***** -->
          <section class="radio-section">
            <div class="radio-list ">
              <h3 class="text-white">I feel tired or lacks energy in most days.</h3>
              <h4 class="text-danger fw-bold mb-2 radio-error-msg d-none">Kindly select a response from the provided options.</h4>
              <div class="radio-item"><input name="radio4" value="1" id="q4_radio1" type="radio"><label for="q4_radio1">1 Strongly Disagree</label></div>
              <div class="radio-item"><input name="radio4" value="2" id="q4_radio2" type="radio"><label for="q4_radio2">2 Disagree</label></div>
              <div class="radio-item"><input name="radio4" value="3" id="q4_radio3" type="radio"><label for="q4_radio3">3 Neutral</label></div>
              <div class="radio-item"><input name="radio4" value="4" id="q4_radio4" type="radio"><label for="q4_radio4">4 Agree</label></div>
              <div class="radio-item"><input name="radio4" value="5" id="q4_radio5" type="radio"><label for="q4_radio5">5 Strongly Agree</label></div>
            
              <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                <button class="cutom-btn " onclick="previousPage()"><span> Previous</span></button>
                <button class="cutom-btn " onclick="nextPage()"><span> Next</span></button>
              </div>
            </div>
          </section>
         <!-- ***** Question 4 ***** -->
        </div>
      </div>

      <div class="item item-6 hidden">
        <div class="header-text">
          <!-- ***** Question 5 ***** -->
          <section class="radio-section">
            <div class="radio-list ">
              <h3 class="text-white">I have noticed changes in my appetite or weight.</h3>
              <h4 class="text-danger fw-bold mb-2 radio-error-msg d-none">Kindly select a response from the provided options.</h4>
              <div class="radio-item"><input name="radio5" value="1" id="q5_radio1" type="radio"><label for="q5_radio1">1 Strongly Disagree</label></div>
              <div class="radio-item"><input name="radio5" value="2" id="q5_radio2" type="radio"><label for="q5_radio2">2 Disagree</label></div>
              <div class="radio-item"><input name="radio5" value="3" id="q5_radio3" type="radio"><label for="q5_radio3">3 Neutral</label></div>
              <div class="radio-item"><input name="radio5" value="4" id="q5_radio4" type="radio"><label for="q5_radio4">4 Agree</label></div>
              <div class="radio-item"><input name="radio5" value="5" id="q5_radio5" type="radio"><label for="q5_radio5">5 Strongly Agree</label></div>

              <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                <button class="cutom-btn " onclick="previousPage()"><span> Previous</span></button>
                <button class="cutom-btn " onclick="nextPage()"><span> Next</span></button>
              </div>
            </div>
          </section>
         <!-- ***** Question 5 ***** -->
        </div>
      </div>

      <div class="item item-7 hidden">
        <div class="header-text">
          <!-- ***** Question 6 ***** -->
          <section class="radio-section">
            <div class="radio-list ">
              <h3 class="text-white">I have difficulty making decisions.</h3>
              <h4 class="text-danger fw-bold mb-2 radio-error-msg d-none">Kindly select a response from the provided options.</h4>
              <div class="radio-item"><input name="radio6" value="1" id="q6_radio1" type="radio"><label for="q6_radio1">1 Strongly Disagree</label></div>
              <div class="radio-item"><input name="radio6" value="2" id="q6_radio2" type="radio"><label for="q6_radio2">2 Disagree</label></div>
              <div class="radio-item"><input name="radio6" value="3" id="q6_radio3" type="radio"><label for="q6_radio3">3 Neutral</label></div>
              <div class="radio-item"><input name="radio6" value="4" id="q6_radio4" type="radio"><label for="q6_radio4">4 Agree</label></div>
              <div class="radio-item"><input name="radio6" value="5" id="q6_radio5" type="radio"><label for="q6_radio5">5 Strongly Agree</label></div>

              <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                <button class="cutom-btn " onclick="previousPage()"><span> Previous</span></button>
                <button class="cutom-btn " onclick="nextPage()"><span> Next</span></button>
              </div>
            </div>
          </section>
         <!-- ***** Question 6 ***** -->
        </div>
      </div>

      <div class="item item-8 hidden">
        <div class="header-text">
          <!-- ***** Question 7 ***** -->
          <section class="radio-section">
            <div class="radio-list ">
              <h3 class="text-white">I feel worthless or guilty for no apparent reason.</h3>
              <h4 class="text-danger fw-bold mb-2 radio-error-msg d-none">Kindly select a response from the provided options.</h4>
              <div class="radio-item"><input name="radio7" value="1" id="q7_radio1" type="radio"><label for="q7_radio1">1 Strongly Disagree</label></div>
              <div class="radio-item"><input name="radio7" value="2" id="q7_radio2" type="radio"><label for="q7_radio2">2 Disagree</label></div>
              <div class="radio-item"><input name="radio7" value="3" id="q7_radio3" type="radio"><label for="q7_radio3">3 Neutral</label></div>
              <div class="radio-item"><input name="radio7" value="4" id="q7_radio4" type="radio"><label for="q7_radio4">4 Agree</label></div>
              <div class="radio-item"><input name="radio7" value="5" id="q7_radio5" type="radio"><label for="q7_radio5">5 Strongly Agree</label></div>

              <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                <button class="cutom-btn " onclick="previousPage()"><span> Previous</span></button>
                <button class="cutom-btn " onclick="nextPage()"><span> Next</span></button>
              </div>
            </div>
          </section>
         <!-- ***** Question 7 ***** -->
        </div>
      </div>

      <div class="item item-9 hidden">
        <div class="header-text">
          <!-- ***** Question 8 ***** -->
          <section class="radio-section">
            <div class="radio-list ">
              <h3 class="text-white">I have had thoughts of harming myself or ending my life.</h3>
              <h4 class="text-danger fw-bold mb-2 radio-error-msg d-none">Kindly select a response from the provided options.</h4>
              <div class="radio-item"><input name="radio8" value="1" id="q8_radio1" type="radio"><label for="q8_radio1">1 Strongly Disagree</label></div>
              <div class="radio-item"><input name="radio8" value="2" id="q8_radio2" type="radio"><label for="q8_radio2">2 Disagree</label></div>
              <div class="radio-item"><input name="radio8" value="3" id="q8_radio3" type="radio"><label for="q8_radio3">3 Neutral</label></div>
              <div class="radio-item"><input name="radio8" value="4" id="q8_radio4" type="radio"><label for="q8_radio4">4 Agree</label></div>
              <div class="radio-item"><input name="radio8" value="5" id="q8_radio5" type="radio"><label for="q8_radio5">5 Strongly Agree</label></div>

              <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                <button class="cutom-btn " onclick="previousPage()"><span> Previous</span></button>
                <button class="cutom-btn " onclick="nextPage()"><span> Next</span></button>
              </div>
            </div>
          </section>
         <!-- ***** Question 8 ***** -->
        </div>
      </div>

      <div class="item item-10 hidden">
        <div class="header-text">
          <!-- ***** Question 9 ***** -->
          <section class="radio-section">
            <div class="radio-list ">
              <h3 class="text-white">I have trouble enjoying the company of others.</h3>
              <h4 class="text-danger fw-bold mb-2 radio-error-msg d-none">Kindly select a response from the provided options.</h4>
              <div class="radio-item"><input name="radio9" value="1" id="q9_radio1" type="radio"><label for="q9_radio1">1 Strongly Disagree</label></div>
              <div class="radio-item"><input name="radio9" value="2" id="q9_radio2" type="radio"><label for="q9_radio2">2 Disagree</label></div>
              <div class="radio-item"><input name="radio9" value="3" id="q9_radio3" type="radio"><label for="q9_radio3">3 Neutral</label></div>
              <div class="radio-item"><input name="radio9" value="4" id="q9_radio4" type="radio"><label for="q9_radio4">4 Agree</label></div>
              <div class="radio-item"><input name="radio9" value="5" id="q9_radio5" type="radio"><label for="q9_radio5">5 Strongly Agree</label></div>

              <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                <button class="cutom-btn " onclick="previousPage()"><span> Previous</span></button>
                <button class="cutom-btn " onclick="nextPage()"><span> Next</span></button>
              </div>
            </div>
          </section>
         <!-- ***** Question 9 ***** -->
        </div>
      </div>

      <div class="item item-11 hidden">
        <div class="header-text">
          <!-- ***** Question 10 ***** -->
          <section class="radio-section">
            <div class="radio-list ">
              <h3 class="text-white">I find it hard to get out of bed or start my day.</h3>
              <h4 class="text-danger fw-bold mb-2 radio-error-msg d-none">Kindly select a response from the provided options.</h4>
              <div class="radio-item"><input name="radio10" value="1" id="q10_radio1" type="radio"><label for="q10_radio1">1 Strongly Disagree</label></div>
              <div class="radio-item"><input name="radio10" value="2" id="q10_radio2" type="radio"><label for="q10_radio2">2 Disagree</label></div>
              <div class="radio-item"><input name="radio10" value="3" id="q10_radio3" type="radio"><label for="q10_radio3">3 Neutral</label></div>
              <div class="radio-item"><input name="radio10" value="4" id="q10_radio4" type="radio"><label for="q10_radio4">4 Agree</label></div>
              <div class="radio-item"><input name="radio10" value="5" id="q10_radio5" type="radio"><label for="q10_radio5">5 Strongly Agree</label></div>

              <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                <button class="cutom-btn " onclick="previousPage()"><span> Previous</span></button>
                <button class="cutom-btn " onclick="nextPage()"><span> Next</span></button>
              </div>
            </div>
          </section>
         <!-- ***** Question 10 ***** -->
        </div>
      </div>

      <div class="item item-12 hidden">
        <div class="header-text">
          <!-- ***** Question 11 ***** -->
          <section class="radio-section">
            <div class="radio-list ">
              <h3 class="text-white">I often feel anxious or on edge.</h3>
              <h4 class="text-danger fw-bold mb-2 radio-error-msg d-none">Kindly select a response from the provided options.</h4>
              <div class="radio-item"><input name="radio11" value="1" id="q11_radio1" type="radio"><label for="q11_radio1">1 Strongly Disagree</label></div>
              <div class="radio-item"><input name="radio11" value="2" id="q11_radio2" type="radio"><label for="q11_radio2">2 Disagree</label></div>
              <div class="radio-item"><input name="radio11" value="3" id="q11_radio3" type="radio"><label for="q11_radio3">3 Neutral</label></div>
              <div class="radio-item"><input name="radio11" value="4" id="q11_radio4" type="radio"><label for="q11_radio4">4 Agree</label></div>
              <div class="radio-item"><input name="radio11" value="5" id="q11_radio5" type="radio"><label for="q11_radio5">5 Strongly Agree</label></div>

              <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                <button class="cutom-btn " onclick="previousPage()"><span> Previous</span></button>
                <button class="cutom-btn " onclick="nextPage()"><span> Next</span></button>
              </div>
            </div>
          </section>
         <!-- ***** Question 11 ***** -->
        </div>
      </div>

      <div class="item item-13 hidden">
        <div class="header-text">
          <!-- ***** Question 12 ***** -->
          <section class="radio-section">
            <div class="radio-list ">
              <h3 class="text-white">I have lost interest in my personal appearance or hygiene.</h3>
              <h4 class="text-danger fw-bold mb-2 radio-error-msg d-none">Kindly select a response from the provided options.</h4>
              <div class="radio-item"><input name="radio12" value="1" id="q12_radio1" type="radio"><label for="q12_radio1">1 Strongly Disagree</label></div>
              <div class="radio-item"><input name="radio12" value="2" id="q12_radio2" type="radio"><label for="q12_radio2">2 Disagree</label></div>
              <div class="radio-item"><input name="radio12" value="3" id="q12_radio3" type="radio"><label for="q12_radio3">3 Neutral</label></div>
              <div class="radio-item"><input name="radio12" value="4" id="q12_radio4" type="radio"><label for="q12_radio4">4 Agree</label></div>
              <div class="radio-item"><input name="radio12" value="5" id="q12_radio5" type="radio"><label for="q12_radio5">5 Strongly Agree</label></div>

              <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                <button class="cutom-btn " onclick="previousPage()"><span> Previous</span></button>
                <button class="cutom-btn " onclick="nextPage()"><span> Next</span></button>
              </div>
            </div>
          </section>
         <!-- ***** Question 12 ***** -->
        </div>
      </div>

      <div class="item item-14 hidden">
        <div class="header-text">
          <!-- ***** Question 13 ***** -->
          <section class="radio-section">
            <div class="radio-list ">
              <h3 class="text-white">I have experienced physical symptoms such as aches, heart burn, hyper ventilation and/ or digestive issues without apparent reasons.</h3>
              <h4 class="text-danger fw-bold mb-2 radio-error-msg d-none">Kindly select a response from the provided options.</h4>
              <div class="radio-item"><input name="radio13" value="1" id="q13_radio1" type="radio"><label for="q13_radio1">1 Strongly Disagree</label></div>
              <div class="radio-item"><input name="radio13" value="2" id="q13_radio2" type="radio"><label for="q13_radio2">2 Disagree</label></div>
              <div class="radio-item"><input name="radio13" value="3" id="q13_radio3" type="radio"><label for="q13_radio3">3 Neutral</label></div>
              <div class="radio-item"><input name="radio13" value="4" id="q13_radio4" type="radio"><label for="q13_radio4">4 Agree</label></div>
              <div class="radio-item"><input name="radio13" value="5" id="q13_radio5" type="radio"><label for="q13_radio5">5 Strongly Agree</label></div>

              <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                <button class="cutom-btn " onclick="previousPage()"><span> Previous</span></button>
                <button class="cutom-btn " onclick="nextPage()"><span> Next</span></button>
              </div>
            </div>
          </section>
         <!-- ***** Question 13 ***** -->
        </div>
      </div>

      <div class="item item-15 hidden">
        <div class="header-text">
          <!-- ***** Question 14 ***** -->
          <section class="radio-section">
            <div class="radio-list ">
              <h3 class="text-white">Over the past two weeks, I am anxious and agitated or restless.</h3>
              <h4 class="text-danger fw-bold mb-2 radio-error-msg d-none">Kindly select a response from the provided options.</h4>
              <div class="radio-item"><input name="radio14" value="1" id="q14_radio1" type="radio"><label for="q14_radio1">1 Strongly Disagree</label></div>
              <div class="radio-item"><input name="radio14" value="2" id="q14_radio2" type="radio"><label for="q14_radio2">2 Disagree</label></div>
              <div class="radio-item"><input name="radio14" value="3" id="q14_radio3" type="radio"><label for="q14_radio3">3 Neutral</label></div>
              <div class="radio-item"><input name="radio14" value="4" id="q14_radio4" type="radio"><label for="q14_radio4">4 Agree</label></div>
              <div class="radio-item"><input name="radio14" value="5" id="q14_radio5" type="radio"><label for="q14_radio5">5 Strongly Agree</label></div>

              <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                <button class="cutom-btn " onclick="previousPage()"><span> Previous</span></button>
                <button class="cutom-btn " onclick="nextPage()"><span> Next</span></button>
              </div>
            </div>
          </section>
         <!-- ***** Question 14 ***** -->
        </div>
      </div>

      <div class="item item-16 hidden">
        <div class="header-text">
          <!-- ***** Question 15 ***** -->
          <section class="radio-section">
            <div class="radio-list ">
              <h3 class="text-white">I have angry outburst, irritability and frustration even on small matters.</h3>
              <h4 class="text-danger fw-bold mb-2 radio-error-msg d-none">Kindly select a response from the provided options.</h4>
              <div class="radio-item"><input name="radio15" value="1" id="q15_radio1" type="radio"><label for="q15_radio1">1 Strongly Disagree</label></div>
              <div class="radio-item"><input name="radio15" value="2" id="q15_radio2" type="radio"><label for="q15_radio2">2 Disagree</label></div>
              <div class="radio-item"><input name="radio15" value="3" id="q15_radio3" type="radio"><label for="q15_radio3">3 Neutral</label></div>
              <div class="radio-item"><input name="radio15" value="4" id="q15_radio4" type="radio"><label for="q15_radio4">4 Agree</label></div>
              <div class="radio-item"><input name="radio15" value="5" id="q15_radio5" type="radio"><label for="q15_radio5">5 Strongly Agree</label></div>

              <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                <button class="cutom-btn " onclick="previousPage()"><span> Previous</span></button>
                <button class="cutom-btn " onclick="nextPage()"><span> Next</span></button>
              </div>
            </div>
          </section>
         <!-- ***** Question 15 ***** -->
        </div>
      </div>

      <div class="item item-17 hidden">
        <div class="header-text">
          <!-- ***** Question 16 ***** -->
          <section class="radio-section">
            <div class="radio-list ">
              <h3 class="text-white">This past two weeks, I am self-blaming.</h3>
              <h4 class="text-danger fw-bold mb-2 radio-error-msg d-none">Kindly select a response from the provided options.</h4>
              <div class="radio-item"><input name="radio16" value="1" id="q16_radio1" type="radio"><label for="q16_radio1">1 Strongly Disagree</label></div>
              <div class="radio-item"><input name="radio16" value="2" id="q16_radio2" type="radio"><label for="q16_radio2">2 Disagree</label></div>
              <div class="radio-item"><input name="radio16" value="3" id="q16_radio3" type="radio"><label for="q16_radio3">3 Neutral</label></div>
              <div class="radio-item"><input name="radio16" value="4" id="q16_radio4" type="radio"><label for="q16_radio4">4 Agree</label></div>
              <div class="radio-item"><input name="radio16" value="5" id="q16_radio5" type="radio"><label for="q16_radio5">5 Strongly Agree</label></div>

              <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                <button class="cutom-btn " onclick="previousPage()"><span> Previous</span></button>
                <button class="cutom-btn " onclick="nextPage()"><span> Next</span></button>
              </div>
            </div>
          </section>
         <!-- ***** Question 16 ***** -->
        </div>
      </div>

      <div class="item item-18 hidden">
        <div class="header-text">
          <!-- ***** Question 17 ***** -->
          <section class="radio-section">
            <div class="radio-list ">
              <h3 class="text-white">Lately, I wanted to be alone inside a dark room.</h3>
              <h4 class="text-danger fw-bold mb-2 radio-error-msg d-none">Kindly select a response from the provided options.</h4>
              <div class="radio-item"><input name="radio17" value="1" id="q17_radio1" type="radio"><label for="q17_radio1">1 Strongly Disagree</label></div>
              <div class="radio-item"><input name="radio17" value="2" id="q17_radio2" type="radio"><label for="q17_radio2">2 Disagree</label></div>
              <div class="radio-item"><input name="radio17" value="3" id="q17_radio3" type="radio"><label for="q17_radio3">3 Neutral</label></div>
              <div class="radio-item"><input name="radio17" value="4" id="q17_radio4" type="radio"><label for="q17_radio4">4 Agree</label></div>
              <div class="radio-item"><input name="radio17" value="5" id="q17_radio5" type="radio"><label for="q17_radio5">5 Strongly Agree</label></div>

              <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                <button class="cutom-btn " onclick="previousPage()"><span> Previous</span></button>
                <button class="cutom-btn " onclick="nextPage()"><span> Next</span></button>
              </div>
            </div>
          </section>
         <!-- ***** Question 17 ***** -->
        </div>
      </div>

      <div class="item item-19 hidden">
        <div class="header-text">
          <!-- ***** Question 18 ***** -->
          <section class="radio-section">
            <div class="radio-list ">
              <h3 class="text-white">This past few weeks, I am hearing voices or seeing stuffs.</h3>
              <h4 class="text-danger fw-bold mb-2 radio-error-msg d-none">Kindly select a response from the provided options.</h4>
              <div class="radio-item"><input name="radio18" value="1" id="q18_radio1" type="radio"><label for="q18_radio1">1 Strongly Disagree</label></div>
              <div class="radio-item"><input name="radio18" value="2" id="q18_radio2" type="radio"><label for="q18_radio2">2 Disagree</label></div>
              <div class="radio-item"><input name="radio18" value="3" id="q18_radio3" type="radio"><label for="q18_radio3">3 Neutral</label></div>
              <div class="radio-item"><input name="radio18" value="4" id="q18_radio4" type="radio"><label for="q18_radio4">4 Agree</label></div>
              <div class="radio-item"><input name="radio18" value="5" id="q18_radio5" type="radio"><label for="q18_radio5">5 Strongly Agree</label></div>

              <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                <button class="cutom-btn " onclick="previousPage()"><span> Previous</span></button>
                <button class="cutom-btn " onclick="nextPage()"><span> Next</span></button>
              </div>
            </div>
          </section>
         <!-- ***** Question 18 ***** -->
        </div>
      </div>

      <div class="item item-20 hidden">
        <div class="header-text">
          <!-- ***** Question 19 ***** -->
          <section class="radio-section">
            <div class="radio-list ">
              <h3 class="text-white">Lately, I feel nobody understands me all the time.</h3>
              <h4 class="text-danger fw-bold mb-2 radio-error-msg d-none">Kindly select a response from the provided options.</h4>
              <div class="radio-item"><input name="radio19" value="1" id="q19_radio1" type="radio"><label for="q19_radio1">1 Strongly Disagree</label></div>
              <div class="radio-item"><input name="radio19" value="2" id="q19_radio2" type="radio"><label for="q19_radio2">2 Disagree</label></div>
              <div class="radio-item"><input name="radio19" value="3" id="q19_radio3" type="radio"><label for="q19_radio3">3 Neutral</label></div>
              <div class="radio-item"><input name="radio19" value="4" id="q19_radio4" type="radio"><label for="q19_radio4">4 Agree</label></div>
              <div class="radio-item"><input name="radio19" value="5" id="q19_radio5" type="radio"><label for="q19_radio5">5 Strongly Agree</label></div>

              <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                <button class="cutom-btn " onclick="previousPage()"><span> Previous</span></button>
                <button class="cutom-btn " onclick="nextPage()"><span> Next</span></button>
              </div>
            </div>
          </section>
         <!-- ***** Question 19 ***** -->
        </div>
      </div>

      <div class="item item-21 hidden">
        <div class="header-text">
          <!-- ***** Question 20 ***** -->
          <section class="radio-section">
            <div class="radio-list ">
              <h3 class="text-white">Recently, I have problems with my memory, concentration and focus.</h3>
              <h4 class="text-danger fw-bold mb-2 radio-error-msg d-none">Kindly select a response from the provided options.</h4>
              <div class="radio-item"><input name="radio20" value="1" id="q20_radio1" type="radio"><label for="q20_radio1">1 Strongly Disagree</label></div>
              <div class="radio-item"><input name="radio20" value="2" id="q20_radio2" type="radio"><label for="q20_radio2">2 Disagree</label></div>
              <div class="radio-item"><input name="radio20" value="3" id="q20_radio3" type="radio"><label for="q20_radio3">3 Neutral</label></div>
              <div class="radio-item"><input name="radio20" value="4" id="q20_radio4" type="radio"><label for="q20_radio4">4 Agree</label></div>
              <div class="radio-item"><input name="radio20" value="5" id="q20_radio5" type="radio"><label for="q20_radio5">5 Strongly Agree</label></div>

              <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                <button class="cutom-btn " onclick="previousPage()"><span> Previous</span></button>
                <button class="cutom-btn " ><span> Submit</span></button>
              </div>
            </div>
          </section>
         <!-- ***** Question 20 ***** -->
        </div>
      </div>

  </div>
<!--- Results --->
<!--- Results --->

  <footer>
      <div class="col-sm-12">
        <p>Copyright © 2024</p>
        <p>Depression Assessment Questionnaire</p>
      </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>
  <script>
      let currentPage = 1;
      const items = document.querySelectorAll('.item');

      function showPage(pageNumber) {
        $(".radio-error-msg").addClass("d-none");
          items.forEach((item, index) => {
              if (index + 1 === pageNumber) {
                item.classList.remove('hidden');
              } else {
                  item.classList.add('hidden');
              }
          });
      }
      

      function nextPage() {
        let hasLRN = true;
        let lrnId = $("#lrn_input");
        let invalidIrnMsgId = $("#invalid_lrn_msg");

        if (lrnId.val().length < 12) 
        {
          invalidIrnMsgId.removeClass("d-none");
          hasLRN = false;
        }

        if(hasLRN)
        {
          invalidIrnMsgId.addClass("d-none");

          if (currentPage < 21) {
            let radiobutton = currentPage - 1;
            let hasChecked = true
            if(radiobutton != 0)
            {
              if (!$("input[name='radio"+radiobutton+"']:checked").length > 0) {
                // Remove d-none class from p tag with class radio-error-msg
                $(".radio-error-msg").removeClass("d-none");
                hasChecked = false
              }
            }

            if(hasChecked)
            { currentPage++;
              showPage(currentPage);
            }
          }
        }

      }

      function previousPage() {
          if (currentPage > 1) {
              currentPage--;
              showPage(currentPage);
          }
      }

      function validateInput() {
      let inputField = document.getElementById('lrn_input');

      let inputValue = inputField.value;

      // Remove non-numeric characters
      let numericValue = inputValue.replace(/\D/g, '');

      // Limit to 12 digits
      numericValue = numericValue.substring(0, 12);

      // Update the input field
      inputField.value = numericValue;
     }

  </script>



  </body>
</html>