<?php
session_start();

if (isset($_SESSION['success_message'])) {
  echo "<script>alert('" . $_SESSION['success_message'] . "');</script>";
  unset($_SESSION['success_message']);
}

if (isset($_SESSION['error_message'])) {
  echo "<script>alert('" . $_SESSION['error_message'] . "');</script>";
  unset($_SESSION['error_message']);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Charly Travel and Tours | Guided Tours and Rentals in Sri Lanka</title>
  <meta name="description" content="Discover Sri Lanka with Charly Travel and Tours, offering guided tours from Galle to Ella, Sigiriya, Kandy, and more. Rent motorbikes and tuk-tuks for exploring the Southern Province. Customized travel experiences await you in Sri Lanka!" />
  <meta name="keywords" content="Sri Lanka guided tours, Galle to Ella, Galle to Sigiriya, Galle to Kandy, Galle motorbike rental, Galle tuk-tuk rental, Southern Province travel, Unawatuna tours, Charly Travel and Tours" />
  <meta property="og:image" content="https://raw.githubusercontent.com/JanithSheshan/charly-travels/refs/heads/main/assets/img/logo.png">
  <meta property="og:url" content="https://charlytravelandtours.com">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.php" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename"><b>Charly Travel</b></h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php#hero" class="active">Home</a></li>
          <li><a href="index.php#about">About</a></li>
          <li><a href="index.php#services">Services</a></li>
          <li><a href="index.php#Gallery">Gallery</a></li>
          <li><a href="index.php#packages-activities">Packages & Activities</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> -->
          <li><a href="index.php#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="https://wa.me/94771882680" target="_blank"><i class="bi bi-whatsapp"></i>  Now</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="section hero light-background">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
            <h1>Explore Sri Lanka with Charly Travel and Tours</h1>
            <p>Your guide to unforgettable journeys from Galle to iconic destinations across Sri Lanka.</p>
            <div class="d-flex">
              <a href="index.php#about" class="btn-get-started">Get Started</a>
              <a href="#" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Fixed WhatsApp button -->
    <a href="https://wa.me/94771882680" class="fixed-button" target="_blank">
      <i class="bi bi-whatsapp"></i>
      <p class="whatsapp-text">WhatsApp</p>
    </a>


    <!-- About Section -->
    <section id="about" class="section about">

      <div class="container">

        <div class="row gy-3">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/about-img.jpg" alt="" class="img-fluid image">
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="about-content ps-0 ps-lg-3">
              <h3>Explore the Beauty of Sri Lanka with Us</h3>
              <p class="fst-italic">
                At Charly Travel and Tours, we specialize in providing customized guided tours from Galle to the most scenic and historic locations across Sri Lanka. Experience the journey of a lifetime!
              </p>

              <h3>Why Choose Us</h3>
              
              <ul>
                <li>
                  <i class="bi bi-globe"></i>
                  <div>
                    <h4>Local Expertise</h4>
                    <p>We know the hidden gems of Sri Lanka that you won't find in guidebooks, offering authentic and unique travel experiences.</p>
                  </div>
                </li>
                <li>
                  <i class="bi bi-shield-check"></i>
                  <div>
                    <h4>Safety and Comfort</h4>
                    <p>Your safety is our top priority. We provide well-maintained vehicles and experienced guides to ensure a smooth journey.</p>
                  </div>
                </li>
                <li>
                  <i class="bi bi-star"></i>
                  <div>
                    <h4>Customized Tours</h4>
                    <p>We offer flexible and personalized itineraries, allowing you to explore Sri Lanka at your own pace and according to your interests.</p>
                  </div>
                </li>
              </ul>
            </div>

          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id="services" class="services section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Services</h2>
        <p>Explore the diverse services we offer at Charly Travel and Tours to make your Sri Lankan journey memorable.</p>
      </div>
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative" style="background-color: #f0f9ff; padding: 20px; border-radius: 10px;">
              <div class="icon"><i class="fas fa-pen-alt"></i></div>
              <h4>Guided Tours</h4>
              <p>Personalized guided tours from Galle to destinations like Ella, Sigiriya, Kandy, Jaffna, and more.</p>
            </div>
          </div>
    
          <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative" style="background-color: #f6f6f6; padding: 20px; border-radius: 10px;">
              <div class="icon"><i class="fas fa-car"></i></div>
              <h4>Airport Transfers</h4>
              <p>Convenient and reliable airport transfers from Galle to all major airports in Sri Lanka.</p>
            </div>
          </div>
    
          <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative" style="background-color: #fff0f0; padding: 20px; border-radius: 10px;">
              <div class="icon"><i class="fas fa-motorcycle"></i></div>
              <h4>Motorbike Rentals</h4>
              <p>Rent motorbikes to explore the scenic Southern Province at your own pace and convenience.</p>
            </div>
          </div>
    
          <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative" style="background-color: #f9f0ff; padding: 20px; border-radius: 10px;">
              <div class="icon"><i class="fas fa-taxi"></i></div>
              <h4>Tuk-tuk Rentals</h4>
              <p>Explore Unawatuna, Galle, and nearby areas by renting our easy-to-drive tuk-tuks.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Services Section -->

    <!-- Gallery Section -->
    <section id="Gallery" class="Gallery section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Gallery</h2>
        <p>Explore the stunning sights of Sri Lanka through our collection of beautiful moments captured during our tours. Get inspired for your next adventure with us!</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <!-- <ul class="Gallery-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Product</li>
            <li data-filter=".filter-branding">Branding</li>
            <li data-filter=".filter-books">Books</li>
          </ul> -->
          <!-- End Gallery Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 Gallery-item isotope-item filter-app">
              <div class="Gallery-content h-100">
                <img src="assets/img/Gallery/img 1.jpg" class="img-fluid" alt="Tourists exploring the cultural sites of galle fort with Charly Travel">
                <div class="Gallery-info">
                  <a href="assets/img/Gallery/img 1.jpg" data-Gallery="Gallery-Gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-4 col-md-6 Gallery-item isotope-item filter-product">
              <div class="Gallery-content h-100">
                <img src="assets/img/Gallery/img 2.jpg" class="img-fluid" alt="Tourists exploring the cultural sites of hikkaduwa with Charly Travel">
                <div class="Gallery-info">
                  <a href="assets/img/Gallery/img 2.jpg" data-Gallery="Gallery-Gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-4 col-md-6 Gallery-item isotope-item filter-branding">
              <div class="Gallery-content h-100">
                <img src="assets/img/Gallery/img 3.jpg" class="img-fluid" alt="Tourists exploring the cultural sites of nuwaraeliya with Charly Travel">
                <div class="Gallery-info">
                  <a href="assets/img/Gallery/img 3.jpg" data-Gallery="Gallery-Gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-4 col-md-6 Gallery-item isotope-item filter-books">
              <div class="Gallery-content h-100">
                <img src="assets/img/Gallery/img 4.jpg" class="img-fluid" alt="Tourists exploring the cultural sites of galle fort with Charly Travel">
                <div class="Gallery-info">
                  <a href="assets/img/Gallery/img 4.jpg" data-Gallery="Gallery-Gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-4 col-md-6 Gallery-item isotope-item filter-app">
              <div class="Gallery-content h-100">
                <img src="assets/img/Gallery/img 5.jpg" class="img-fluid" alt="Tourists exploring the cultural sites of galle fort with Charly Travel">
                <div class="Gallery-info">
                  <a href="assets/img/Gallery/img 5.jpg" data-Gallery="Gallery-Gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-4 col-md-6 Gallery-item isotope-item filter-product">
              <div class="Gallery-content h-100">
                <img src="assets/img/Gallery/img 6.jpg" class="img-fluid" alt="Tourists exploring the cultural sites of sigiriya with Charly Travel">
                <div class="Gallery-info">
                  <a href="assets/img/Gallery/img 6.jpg" data-Gallery="Gallery-Gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-4 col-md-6 Gallery-item isotope-item filter-branding">
              <div class="Gallery-content h-100">
                <img src="assets/img/Gallery/img 7.jpg" class="img-fluid" alt="Tourists exploring the cultural sites of galle fort with Charly Travel">
                <div class="Gallery-info">
                  <a href="assets/img/Gallery/img 7.jpg" data-Gallery="Gallery-Gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-4 col-md-6 Gallery-item isotope-item filter-books">
              <div class="Gallery-content h-100">
                <img src="assets/img/Gallery/img 8.jpg" class="img-fluid" alt="Tourists exploring the cultural sites of world's end sri lanka with Charly Travel">
                <div class="Gallery-info">
                  <a href="assets/img/Gallery/img 8.jpg" data-Gallery="Gallery-Gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-4 col-md-6 Gallery-item isotope-item filter-app">
              <div class="Gallery-content h-100">
                <img src="assets/img/Gallery/img 9.jpg" class="img-fluid" alt="Tourists exploring the cultural sites of galle fort with Charly Travel">
                <div class="Gallery-info">
                  <a href="assets/img/Gallery/img 9.jpg" data-Gallery="Gallery-Gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-4 col-md-6 Gallery-item isotope-item filter-product">
              <div class="Gallery-content h-100">
                <img src="assets/img/Gallery/img 10.jpg" class="img-fluid" alt="Tourists exploring the cultural sites of ella with Charly Travel">
                <div class="Gallery-info">
                  <a href="assets/img/Gallery/img 10.jpg" data-Gallery="Gallery-Gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-4 col-md-6 Gallery-item isotope-item filter-branding">
              <div class="Gallery-content h-100">
                <img src="assets/img/Gallery/img 11.jpg" class="img-fluid" alt="Tourists exploring the cultural sites of galle fort with Charly Travel">
                <div class="Gallery-info">
                  <a href="assets/img/Gallery/img 11.jpg" data-Gallery="Gallery-Gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-4 col-md-6 Gallery-item isotope-item filter-books">
              <div class="Gallery-content h-100">
                <img src="assets/img/Gallery/img 12.jpg" class="img-fluid" alt="Tourists exploring the cultural sites of galle fort with Charly Travel">
                <div class="Gallery-info">
                  <a href="assets/img/Gallery/img 12.jpg" data-Gallery="Gallery-Gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Gallery Item -->

          </div><!-- End Gallery Container -->

        </div>

      </div>

    </section><!-- /Gallery Section -->

<!-- packages-activities -->
    <section id="packages-activities" class="section packages-activities light-background">
      <div class="container section-title" data-aos="fade-up">
        <h2>Packages & Activities</h2>
        <p>Explore our curated tour packages and exciting activities designed to provide you with an unforgettable experience in Sri Lanka.</p>
      </div>
      <div class="container">
        <div class="row gy-4">
          <!-- Package 1: Cultural Tour -->
          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="package-card" style="background-color: #fef9ef; border-radius: 10px; padding: 15px;">
              <img src="assets/img/packages/cultural-tour.jpg" class="img-fluid rounded" alt="Cultural Tour">
              <div class="package-details">
                <h4>Cultural Tour</h4>
                <p>Discover the rich cultural heritage of Sri Lanka with guided tours to ancient cities like Sigiriya, Kandy, and Anuradhapura.</p>
                <a href="#contact" class="btn-learn-more">Learn More</a>
              </div>
            </div>
          </div>
    
          <!-- Package 2: Adventure Trekking -->
          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="package-card" style="background-color: #eff7fe; border-radius: 10px; padding: 15px;">
              <img src="assets/img/packages/adventure-trekking.jpg" class="img-fluid rounded" alt="Adventure Trekking">
              <div class="package-details">
                <h4>Adventure Trekking</h4>
                <p>Experience thrilling treks to Ella, Adams Peak, and Knuckles Mountain Range, perfect for adventure enthusiasts.</p>
                <a href="#contact" class="btn-learn-more">Learn More</a>
              </div>
            </div>
          </div>
    
          <!-- Package 3: Beach Escapades -->
          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="package-card" style="background-color: #fef0f0; border-radius: 10px; padding: 15px;">
              <img src="assets/img/packages/beach-escapades.jpg" class="img-fluid rounded" alt="Beach Escapades">
              <div class="package-details">
                <h4>Beach Escapades</h4>
                <p>Relax and unwind on the stunning beaches of Unawatuna, Mirissa, and Hikkaduwa with our specially designed beach packages.</p>
                <a href="#contact" class="btn-learn-more">Learn More</a>
              </div>
            </div>
          </div>
    
          <!-- Activity 1: Whale Watching -->
          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="package-card" style="background-color: #f9f9fe; border-radius: 10px; padding: 15px;">
              <img src="assets/img/packages/whale-watching.jpg" class="img-fluid rounded" alt="Whale Watching">
              <div class="package-details">
                <h4>Whale Watching</h4>
                <p>Join our guided whale watching tours in Mirissa and witness the majestic blue whales in their natural habitat.</p>
                <a href="#contact" class="btn-learn-more">Learn More</a>
              </div>
            </div>
          </div>
    
          <!-- Activity 2: Snorkeling & Diving -->
          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="500">
            <div class="package-card" style="background-color: #f0fff4; border-radius: 10px; padding: 15px;">
              <img src="assets/img/packages/snorkeling-diving.jpg" class="img-fluid rounded" alt="Snorkeling and Diving">
              <div class="package-details">
                <h4>Snorkeling & Diving</h4>
                <p>Explore the underwater beauty of Sri Lanka with snorkeling and diving activities in Hikkaduwa and Unawatuna.</p>
                <a href="#contact" class="btn-learn-more">Learn More</a>
              </div>
            </div>
          </div>
    
          <!-- Activity 3: Safari Tours -->
          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="600">
            <div class="package-card" style="background-color: #fff6f6; border-radius: 10px; padding: 15px;">
              <img src="assets/img/packages/safari-tours.jpg" class="img-fluid rounded" alt="Safari Tours">
              <div class="package-details">
                <h4>Safari Tours</h4>
                <p>Get up close with wildlife on safari tours in Yala National Park and Udawalawe National Park.</p>
                <a href="#contact" class="btn-learn-more">Learn More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- /packages-activities -->    


    <!-- Faq Section -->
    <!-- Faq Section -->
<section id="faq" class="faq section light-background">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Frequently Asked Questions</h2>
    <p>Find answers to some of the most common questions about our tours and services.</p>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="row">
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <div class="faq-container">
          <div class="faq-item">
            <h3>How can I book a tour with Charly Travel and Tours?</h3>
            <div class="faq-content">
              <p>You can book a tour by visiting our website and filling out the contact form, calling our customer service, or sending us an email. We will guide you through the booking process and provide all the necessary details.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3>Are your tours customizable according to my preferences?</h3>
            <div class="faq-content">
              <p>Yes, we offer customizable tours to fit your preferences. Whether you want to explore specific destinations or have special requirements, we can tailor the itinerary to make your trip unique and memorable.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3>What safety measures do you have in place during tours?</h3>
            <div class="faq-content">
              <p>Safety is our top priority. Our guides are experienced professionals, and we follow strict safety protocols for all activities. We provide well-maintained vehicles and ensure that our adventure activities are conducted with the highest safety standards.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->
        </div>
      </div><!-- End Faq Column-->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <div class="faq-container">
          <div class="faq-item">
            <h3>Do you provide airport transfer services?</h3>
            <div class="faq-content">
              <p>Yes, we offer reliable airport transfer services from Galle to major airports in Sri Lanka. You can include this service when booking your tour or request it separately as needed.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3>What is included in your tour packages?</h3>
            <div class="faq-content">
              <p>Our tour packages typically include transportation, guided tours, and entry tickets to various attractions. Specific details may vary depending on the package you choose, so please check the itinerary for each tour for more information.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3>How do I pay for my booking?</h3>
            <div class="faq-content">
              <p>We accept a range of payment options including credit/debit cards, bank transfers, and cash payments. Payment details and instructions will be provided once your booking is confirmed.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->
        </div>
      </div><!-- End Faq Column-->
    </div>
  </div>
</section>
<!-- /Faq Section -->

    <!-- Team Section -->
    <!-- <section id="team" class="team section">

      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div>

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter White</h4>
                  <span>Chief Executive Officer</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Product Manager</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>CTO</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section> -->
    <!-- /Team Section -->

    <!-- Clients Section -->
    <!-- <section id="clients" class="clients section light-background"> -->

      <!-- Section Title -->
      <!-- <div class="container section-title" data-aos="fade-up">
        <h2>Clients</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div> -->
      <!-- End Section Title -->

      <!-- <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section> -->
    <!-- /Clients Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact Us</h2>
        <p>We'd love to hear from you! Get in touch for more information about our tours and services.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>location</h3>
                  <p>Unawatuna, Galle, Southern Province, Sri Lanka</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call Us</h3>
                  <p>+94 77 188 2680</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Us</h3>
                  <a href="mailto:charlytravelandtours@gmail.com"><p>Charlytravelandtours@gmail.com</p></a>
                </div>
              </div><!-- End Info Item -->

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31743.01523613751!2d80.23375471259516!3d6.011635264300847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae172f162bf926d%3A0xc0444c5e8377446c!2sUnawatuna!5e0!3m2!1sen!2slk!4v1729196515549!5m2!1sen!2slk" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <div class="col-lg-7">
            <form action="contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name-field" class="pb-2">Your Name</label>
                  <input type="text" name="name" id="name" class="form-control" required="">
                </div>

                <div class="col-md-6">
                  <label for="email-field" class="pb-2">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="subject-field" class="pb-2">Subject</label>
                  <input type="text" class="form-control" name="subjectnew" id="subjectnew" required="">
                </div>

                <div class="col-md-12">
                  <label for="message-field" class="pb-2">Message</label>
                  <textarea class="form-control" name="message" rows="10" id="message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer position-relative">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4>Join Our Travel Community</h4>
            <p>Subscribe to our newsletter and be the first to know about our latest tours, special offers, and travel tips!</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form">
                <input type="email" name="email" placeholder="Enter your email address">
                <input type="submit" value="Subscribe">
              </div>
              <div class="loading" style="display: none;">Loading...</div>
              <div class="error-message" style="display: none; color: red; margin-top: 10px;">There was an error with your subscription. Please try again.</div>
              <div class="sent-message" style="display: none; color: green; margin-top: 10px;">Your subscription request has been sent. Thank you!</div>
            </form>
          </div>
        </div>
      </div>
    </div>
    

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.php" class="d-flex align-items-center">
            <span class="sitename">Charly Travel and Tours</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Unawatuna, Galle, </p>
            <p>Southern Province, Sri Lanka</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+94 77 188 2680</span></p>
            <p><strong>Email:</strong> <span>Charlytravelandtours@gmail.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Guided Tours</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Airport Transfers</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Motorbike Rentals</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Tuk-tuk Rentals</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Follow Us</h4>
          <p>Stay connected with us on social media and get the latest updates on our tours and special offers!</p>
          <div class="social-links d-flex justify-content-center">
            <a href="https://facebook.com/yourprofile" target="_blank" aria-label="Facebook" style="font-size: 24px; color: #1877F2;">
              <i class="bi bi-facebook"></i>
          </a>
          <a href="https://instagram.com/yourprofile" target="_blank" aria-label="Instagram" style="font-size: 24px; color: #E4405F;">
              <i class="bi bi-instagram"></i>
          </a>
          <a href="https://tiktok.com/@yourprofile" target="_blank" aria-label="TikTok" style="font-size: 24px; color: #000000;">
              <i class="bi bi-tiktok"></i>
          </a>
          </div>
        </div>
        

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Charly Travel and Tours</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        Powered by <a href="https://forgear.lk/" target="_blank">FORGEAR</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#hero" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- google translate -->
  <div id="google_translate_element" class="d-flex align-items-center justify-content-center">
    <script type="text/javascript" defer>
      function googleTranslateElementInit() {
        new google.translate.TranslateElement({ pageLanguage: '', includedLanguages: 'ru,es,es-419,it,de,hi,ta,ar,iw,zh-CN,zh-TW,fr,pt,af,ja,ko,nl,tl,en,uk,id,mt', layout: google.translate.TranslateElement.InlineLayout.SIMPLE }, 'google_translate_element');
      }
    </script>
  </div>
  
  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
  <script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script type="text/javascript" async src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>