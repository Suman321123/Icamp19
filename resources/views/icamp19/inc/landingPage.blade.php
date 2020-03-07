@extends('icamp19.layout.mainLayout')

@section('content')

<!DOCTYPE html>
<html lang="en">


<head>
   <!-- Basic Page Needs ================================================== -->
   <meta charset="utf-8">

   <!-- Mobile Specific Metas ================================================== -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

   <!-- Site Title -->
   <title>Internship Camp 2k19</title>

    <!-- CSS
         ================================================== -->
   <!-- Bootstrap -->
   <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

   <!-- FontAwesome -->
   <!-- <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"> -->
   <!-- Animation -->
   <link rel="stylesheet" href="{{asset('css/animate.css')}}">
   <!-- magnific -->
   <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
   <!-- carousel -->
   <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
   <!-- isotop -->
   <link rel="stylesheet" href="{{asset('css/isotop.css')}}">
   <!-- ico fonts -->
   <link rel="stylesheet" href="{{asset('css/xsIcon.css')}}">
   <!-- Template styles-->
   <link rel="stylesheet" href="{{asset('css/style.css')}}">
   <!-- Responsive styles-->
   <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

</head>

<body>
   <div class="body-inner">
      <!-- Header start -->
      <header id="header" class="header header-transparent nav-border">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
               <!-- logo-->
               <a class="navbar-brand" href="#">
                  <img src="{{asset('img/icamp-logo.png')}}" alt="" style="height:70px;">
               </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                  aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"><i class="icon icon-menu"></i></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav ml-auto">
                     
                     <li class="dropdown nav-item">
                        <a href="#event_outcome" class="scroll">Event Outcome </a>
                        
                     </li>
                     <li class="nav-item dropdown">
                        <a href="#testimonials" class="scroll" >Testimonials</a>
                        

                     </li>
                     <li class="nav-item dropdown">
                        <a href="#questionnaires" class="scroll">Questionnaires </a>
                        
                     </li>
                     <li class="nav-item dropdown">
                        <a href="#pricing" class="scroll"> Pricing </a>
                        
                     </li>

                     <li class="nav-item dropdown">
                           <a href="register"> Register </a>
                           
                        </li>
                    
                  </ul>
               </div>
            </nav>
         </div><!-- container end-->
      </header>
      <!--/ Header end -->

      <!-- banner start-->
      <section class="main-slider owl-carousel">
         <div class="banner-item overlay" style="background-image:url({{asset('img/hero_area/banner3.jpg')}})">
            <div class="container">
               <div class="row">
                  <div class="col-lg-11 mx-auto">
                     <div class="banner-content-wrap text-center">
                        <img class="title-shap-img" src="{{asset('img/shap/title-white.png')}}" alt="">
                        <p class="banner-info">29 to 31st March, 2019, KIIT, Bhubaneswar</p>
                        <h1 class="banner-title">Internship Camp'19</h1>

                        <p class="banner-desc">
                           Get a chance to explore your career opportunities, and expand your horizons in every possile way.
                        </p>
                        <!-- Countdown end -->
                        <div class="banner-btn">
                           <a href="register" class="btn">Register</a>
                           
                        </div>

                     </div>
                     <!-- Banner content wrap end -->
                  </div><!-- col end-->

               </div><!-- row end-->
            </div>
            <!-- Container end -->
         </div><!-- banner item end-->
         <div class="banner-item overlay" style="background-image:url({{asset('img/hero_area/banner4.jpg')}})">
            <div class="container">
               <div class="row">
                  <div class="col-lg-10 mx-auto">
                     <div class="banner-content-wrap text-center">
                        <img class="title-shap-img" src="{{asset('img/shap/title-white.png')}}" alt="">
                        <p class="banner-info">29 to 31st March, 2019, KIIT, Bhubaneswar</p>
                        <h1 class="banner-title">Internship Camp'19</h1>

                        <p class="banner-desc">
                           Be ready for another flagship event of KIIT E-Cell, where more than 100 companies are waiting to recruit you.
                        </p>
                        <!-- Countdown end -->
                        <div class="banner-btn">
                           <a href="register" class="btn">Register</a>
                           
                        </div>

                     </div>
                     <!-- Banner content wrap end -->
                  </div><!-- col end-->

               </div><!-- row end-->
            </div>
            <!-- Container end -->
         </div><!-- banner item end-->
         <div class="banner-item overlay" style="background-image:url({{asset('img/hero_area/banner5.jpg')}})">
            <div class="container">
               <div class="row">
                  <div class="col-lg-10 mx-auto">
                     <div class="banner-content-wrap text-center">
                        <img class="title-shap-img" src="{{asset('img/shap/title-white.png')}}" alt="">
                        <p class="banner-info">29 to 31st March, 2019, KIIT, Bhubaneswar</p>
                        <h1 class="banner-title">Internship Camp'19</h1>

                        <p class="banner-desc">
                           Utilize your time in the best possible way. Gear up for Internship Camp, 2k19.
                        </p>
                        <!-- Countdown end -->
                        <div class="banner-btn">
                           <a href="register" class="btn">Register</a>
                           
                        </div>

                     </div>
                     <!-- Banner content wrap end -->
                  </div><!-- col end-->

               </div><!-- row end-->
            </div>
            <!-- Container end -->
         </div><!-- banner item end-->

      </section>
      <!-- banner end-->

      
      <!-- ts intro start -->
      <section class="ts-intro-outcome" style="background-image: url({{asset('img/bg/outcomes_bg.jpg')}})" id="event_outcome">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 mx-auto">
                  <h2 class="section-title text-center">
                     <span>Why Join us</span>
                     Outcomes and Benefits
                  </h2>
               </div>
            </div><!-- row end-->
            <div class="row">
               <div class="col-lg-3 col-md-6 outcome-item">
                  <div class="ts-single-outcome">
                     <i class="fa fa-globe"></i>
                     <h3 class="ts-title">Connections</h3>
                  </div><!-- single outcome end-->
               </div><!-- col end-->
               <div class="col-lg-3 col-md-6 outcome-item">
                  <div class="ts-single-outcome">
                     <i class="far fa-building"></i>
                     <h3 class="ts-title">Placement ready</h3>
                  </div><!-- single outcome end-->
               </div><!-- col end-->
               <div class="col-lg-3 col-md-6 outcome-item">
                  <div class="ts-single-outcome">
                     <i class="far fa-sticky-note"></i>
                     <h3 class="ts-title">Experience</h3>
                  </div><!-- single outcome end-->
               </div><!-- col end-->
               <div class="col-lg-3 col-md-6 outcome-item">
                  <div class="ts-single-outcome">
                     <i class="fas fa-sort-amount-up"></i>
                     <h3 class="ts-title">Skills upgradation</h3>
                  </div><!-- single outcome end-->
               </div><!-- col end-->
            </div>
         </div><!-- container end-->
      </section>
      <!-- ts intro end-->
      <!-- ts funfact start-->
      <section class="ts-funfact" style="background-image: url({{asset('img/bg/funfact_bg.jpg')}})">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-6">
                  <div class="ts-single-funfact">
                     <h3 class="funfact-num"><span class="counterUp" data-counter="100">100</span>+</h3>
                     <h4 class="funfact-title">Companies
                        </h4>
                  </div>
               </div><!-- col end-->
               <div class="col-lg-3 col-md-6">
                  <div class="ts-single-funfact">
                     <h3 class="funfact-num"><span class="counterUp" data-counter="4">4</span></h3>
                     <h4 class="funfact-title">Chances</h4>
                  </div>
               </div><!-- col end-->
               <div class="col-lg-3 col-md-6">
                  <div class="ts-single-funfact">
                     <h3 class="funfact-num"><span class="counterUp" data-counter="500">500</span>+</h3>
                     <h4 class="funfact-title">Internships
                        Offer</h4>
                  </div>
               </div><!-- col end-->
               <div class="col-lg-3 col-md-6">
                  <div class="ts-single-funfact">
                     <h3 class="funfact-num"><span class="counterUp" data-counter="10">10</span>+</h3>
                     <h4 class="funfact-title">Cities
                        </h4>
                  </div>
               </div><!-- col end-->
            </div><!-- row end-->
         </div><!-- container end-->
      </section>
      <!-- ts funfact end-->

      <!-- ts speaker start-->
      <section class="ts-speakers speaker-classic" style="background-image:url({{asset('img/speakers/speaker_bg.png')}})" id="testimonials">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 mx-auto">
                  <h2 class="section-title text-center">
                     <span>Listen to the</span>
                     Our Testimonials
                  </h2>
               </div><!-- col end-->
            </div><!-- row end-->
            <div class="row">
               <div class="col-lg-1"></div>
               <div class="col-lg-2 col-md-6">
                  <div class="ts-speaker">
                     <div class="speaker-img">
                        <img class="img-fluid" src="{{asset('img/image2.jpeg')}}" alt="" style="height: 250px;">
                        <a href="#popup_1" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
                                    <i class="fas fa-plus"></i>
                                </a>
                     </div>
                     <div class="ts-speaker-info">
                        <h3 class="ts-title"><a href="#">Ayush Lal</a></h3>
                        <p>
                           3rd year, ETC
                        </p>
                     </div>
                  </div>
                  <!-- popup start-->
                  <div id="popup_1" class="container ts-speaker-popup mfp-hide">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-img">
                              <img src="{{asset('img/image2.jpeg')}}" alt="">
                           </div>
                        </div><!-- col end-->
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-content">
                              <h3 class="ts-title">Ayush Lal</h3>
                              <span class="speakder-designation">Internship profile : Technical</span>
                              <h5 class="session-name">
                                 Kriti Technologies
                              </h5>
                              <p>
                                 Worked on database management on UNIX Servers,firewall, and also helped in the UI/UX of the app. I was designated as the poc for clients which gave me abundant experience of the working environment in a corporate structure.
                              </p>
                              
                              <div class="row">
                                 <div class="col-lg-6">
                                    
                                 </div>
                                 <div class="col-lg-6">
                                    
                                 </div>
                              </div>
                              
                           </div><!-- ts-speaker-popup-content end-->
                        </div><!-- col end-->
                     </div><!-- row end-->
                  </div><!-- popup end-->
               </div> <!-- col end-->
               <div class="col-lg-2 col-md-6">
                  <div class="ts-speaker">
                     <div class="speaker-img">
                        <img class="img-fluid" src="{{asset('img/image4.jpeg')}}" alt=""  style="height: 250px;">
                        <a href="#popup_2"  class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
                                    <i class="fas fa-plus"></i>
                                </a>
                     </div>
                     <div class="ts-speaker-info">
                        <h3 class="ts-title"><a href="#">Navonaya Brahmachari</a></h3>
                        <p>
                           CSCE, 2nd year
                        </p>
                        
                     </div>
                  </div>
                  <!-- popup start-->
                  <div id="popup_2" class="container ts-speaker-popup mfp-hide">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-img">
                              <img src="{{asset('img/image4.jpeg')}}" alt="">
                           </div>
                        </div><!-- col end-->
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-content">
                              <h3 class="ts-title">Navonaya Brahmachari</h3>
                              <span class="speakder-designation">Internship profile : Business Development and Technical Associate, Campus Ambassador</span>
                              <h5 class="session-name">
                                 Innolate Technologies Pvt. Ltd.
                              </h5>
                              <p>
                                 During previous Icamp , I bagged an internship. Through the internship, I learnt how to understand the mindset of the customers and develop software based on it. The  advertisement  and marketing strategies that are implemented in industries in real time. Apart from this, I also got to interact and increase my network
                              </p>
                              
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h5>Duration</h5>
                                       <span>
                                                   May 1st week to July end
                                                   </span>
                                       
                                    </div>
                                 </div>
                                 
                              
                              </div>
                              
                           </div><!-- ts-speaker-popup-content end-->
                        </div><!-- col end-->
                     </div><!-- row end-->
                  </div><!-- popup end-->
               </div> <!-- col end-->
               <div class="col-lg-2 col-md-6">
                  <div class="ts-speaker">
                     <div class="speaker-img">
                        <img class="img-fluid" src="{{asset('img/image3.jpeg')}}" alt=""  style="height: 250px;">
                        <a href="#popup_3" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
                                    <i class="fas fa-plus"></i>
                                </a>
                     </div>
                     <div class="ts-speaker-info">
                        <h3 class="ts-title"><a href="#">Rahul Mondal</a></h3>
                        <p>
                           IT, 3rd year
                        </p>
                     </div>
                  </div>
                  <!-- popup start-->
                  <div id="popup_3" class="container ts-speaker-popup mfp-hide">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-img">
                              <img src="{{asset('img/image3.jpeg')}}" alt="">
                           </div>
                        </div><!-- col end-->
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-content">
                              <h3 class="ts-title">Rahul Mondal</h3>
                              <span class="speakder-designation">Internship profile : Design and creative intern</span>
                              <h5 class="session-name">
                                 Thinkzone
                              </h5>
                              <p>
                                 I started the paid internship of design and creativity intern of 2 months in ThinkZone.
It was a lot of fun working in ThinkZone. I designed a lot of things like their main platform for them and shot a documentary about the rural education. During the internship period I gathered a lot of experiences and had  loads of fun.
                              </p>
                              
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Duration</h4>
                                       <span>
                                                         2 months
                                                   </span>
                                       
                                    </div>
                                 </div>
                                 
                              </div>
                              
                           </div><!-- ts-speaker-popup-content end-->
                        </div><!-- col end-->
                     </div><!-- row end-->
                  </div><!-- popup end-->
               </div> <!-- col end-->
               <div class="col-lg-2 col-md-6">
                  <div class="ts-speaker">
                     <div class="speaker-img">
                        <img class="img-fluid" src="{{asset('img/image1.jpeg')}}" alt=""  style="height: 250px;">
                        <a href="#popup_4" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
                                    <i class="fas fa-plus"></i>
                                </a>
                     </div>
                     <div class="ts-speaker-info">
                        <h3 class="ts-title"><a href="#">Harshit Raj</a></h3>
                        <p>
                           IT, 2nd year
                        </p>
                     </div>
                  </div>
                  <!-- popup start-->
                  <div id="popup_4" class="container ts-speaker-popup mfp-hide">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-img">
                              <img src="{{asset('img/image1.jpeg')}}" alt="">
                           </div>
                        </div><!-- col end-->
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-content">
                              <h3 class="ts-title">Harshit Raj</h3>
                              <span class="speakder-designation">Internship profile : Marketing</span>
                              <h5 class="session-name">
                                 Estacha communication
                              </h5>
                              <p>
                                 During this period of time I have learnt various skills for digital marketing and content writing. The concerned person who assigned the work to me was very helpful. This gave me a good experience in digital marketing and social media marketing and also helped me increase my knowledge level to a great extent.
                              </p>
                              
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Duration</h4>
                                       <span>
                                                         1st May'18 to 30th July'18
                                                   </span>
                                       
                                    </div>
                                 </div>
                                 
                              </div>
                              
                           </div><!-- ts-speaker-popup-content end-->
                        </div><!-- col end-->
                     </div><!-- row end-->
                  </div><!-- popup end-->
               </div> <!-- col end-->
               <div class="col-lg-2 col-md-6">
                  <div class="ts-speaker">
                     <div class="speaker-img">
                        <img class="img-fluid" src="{{asset('img/image5.jpeg')}}" alt=""  style="height: 250px;">
                        <a href="#popup_5" class="view-speaker  ts-image-popup" data-effect="mfp-zoom-in">
                                    <i class="fas fa-plus"></i>
                                </a>
                     </div>
                     <div class="ts-speaker-info">
                        <h3 class="ts-title"><a href="#">Meraj Ahmed</a></h3>
                        <p>
                           CSSE, 2nd year
                        </p>
                     </div>
                  </div>
                  <!-- popup start-->
                  <div id="popup_5" class="container ts-speaker-popup mfp-hide">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-img">
                              <img src="{{asset('img/image5.jpeg')}}" alt="">
                           </div>
                        </div><!-- col end-->
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-content">
                              <h3 class="ts-title">Meraj Ahmed</h3>
                              <span class="speakder-designation">Internship profile : Content writer</span>
                              <h5 class="session-name">
                                 Moodcafe
                              </h5>
                              <p>
                                 Moodcafe was the platform where my career started in the corporate world. Apart from enhancing my knowledge in my domain, I learnt a lot of things, as in work culture, taking responsibilities, etc. The 2 months were one heck of a journey for me.
                              </p>
                              
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Duration</h4>
                                       <span>
                                                         5th May'18 to 10th July'18
                                                   </span>
                                       
                                    </div>
                                 </div>
                                 
                              </div>
                              
                           </div><!-- ts-speaker-popup-content end-->
                        </div><!-- col end-->
                     </div><!-- row end-->
                  </div><!-- popup end-->
               </div> <!-- col end-->
               
               <div class="col-lg-1"></div>
            </div><!-- row end-->
         </div><!-- container end-->

         <!-- shap img-->
         <div class="speaker-shap">
            <img class="shap1" src="{{asset('img/shap/home_speaker_memphis1.png')}}" alt="">
            <img class="shap2" src="{{asset('img/shap/home_speaker_memphis2.png')}}" alt="">
            <img class="shap3" src="{{asset('img/shap/home_speaker_memphis3.png')}}" alt="">
         </div>
         <!-- shap img end-->
      </section>
      <!-- ts speaker end-->

      <section class="ts-event-outcome">
         <div class="container">
            <div class="row">
               <div class="col-lg-4">
                  <div class="">
                     <div class="outcome-content ts-exp-content">
                        <h2 class="column-title">
                           
                           Learn new things and
                           grow your connections
                        </h2>
                        <p class="text-white">
                           Internship Camp is KIIT E-Cell's initiative to help students get interesting internship opportunity. With the help and guidance of KIIT Deemed to be University and KIIT Training and Placement Cell, through I-Camp, KIIT E-Cell provides students a chance to explore career opportunities that they won't come across in their academic careers, expanding their horizons in every possible way. <br>
                        </p>
                        <a href="#" class="btn">Register</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="outcome-content">
                     <div class="outcome-img overlay">
                        <img class="" src="{{asset('img/about/learn_img.jpg')}}" alt="">
                     </div>
                     <h3 class="img-title text-white">Learn Things</h3>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="outcome-content">
                     <div class="outcome-img overlay">
                        <img class="" src="{{asset('img/about/connect_img.jpg')}}" alt="">
                     </div>
                     <h3 class="img-title text-white">Connect People</h3>
                  </div>
               </div>

            </div>
         </div>
      </section>



      <!-- Questionaries-->
      <!-- ts experience start-->
      <section class="ts-schedule" id="questionnaires">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 mx-auto">
                  <h2 class="section-title">
                     
                     Questionnaires
                  </h2>
                  
               </div><!-- col end-->

            </div><!-- row end-->
            <div class="row">
               <div class="col-lg-12">
                  <div class="tab-content schedule-tabs">
                        <div role="tabpanel" class="tab-pane active" id="date1">
                           <div class="schedule-listing">
                              <div class="schedule-slot-time">
                                 <span> Q 1. </span>
                              </div>
                              <div class="schedule-slot-info">
                                 
                                 <div class="schedule-slot-info-content" >
                                    <h3 class="schedule-slot-title"> I had registered using COMBO code during e-summit. Do I need to create an account here as well?
                                    </h3>
                                    <p>No, you can directly login to I-Camp portal using your E-Summit credentials. If you are facing issues, kindly mail your queries to: icamp2019@gmail.com </p>
                                 </div>
                                 <!--Info content end -->
                              </div><!-- Slot info end -->
                           </div>
                           <!--schedule-listing end -->
                           <div class="schedule-listing">
                              <div class="schedule-slot-time">
                                 <span> Q 2.</span>
                              </div>
                              <div class="schedule-slot-info">
                                
                                 <div class="schedule-slot-info-content" >
                                    <h3 class="schedule-slot-title">I have updated my profile and also paid the amount. I am unable to select companies.
                                    </h3>
                                    <p>The company selection process is not yet activated from our end. Please wait for the company selection process to begin.</p>
                                 </div>
                                 <!--Info content end -->
                              </div><!-- Slot info end -->
                           </div>
                           <!--schedule-listing end -->
                           <div class="schedule-listing">
                              <div class="schedule-slot-time">
                                 <span> Q 3. </span>
                              </div>
                              <div class="schedule-slot-info">
                                 
                                 <div class="schedule-slot-info-content" >
                                    <h3 class="schedule-slot-title">I am from first year and have no knowledge on how to make a resume.
                                    </h3>
                                    <p>We at KIIT E-Cell are always present for your help. For information on how to make a resume and prepare for Internship Camp, please drop us a mail at icamp2019@gmail.com </p>
                                 </div>
                                 <!--Info content end -->
                              </div><!-- Slot info end -->
                           </div>
                           <!--schedule-listing end -->
                           <div class="schedule-listing">
                              <div class="schedule-slot-time">
                                 <span> Q 4. </span>
                              </div>
                              <div class="schedule-slot-info">
                                 
                                 <div class="schedule-slot-info-content" >
                                    <h3 class="schedule-slot-title">I had earlier paid 900 INR for E-Summit only. However, I also want to avail Internship Camp at a discounted price.
                                    </h3>
                                    <p>Yes, you can register at a discounted price. Sadly, we aren’t accepting online payments for discounted registrations. Please make a offline payment at any of our registration desks or reach us at: 9439526981 so that we can assist you</p>
                                 </div>
                                 <!--Info content end -->
                              </div><!-- Slot info end -->
                           </div>
                           <!--schedule-listing end -->
   
                           <div class="schedule-listing">
                              <div class="schedule-slot-time">
                                 <span> Q 5. </span>
                              </div>
                              <div class="schedule-slot-info">
                                 
                                 <div class="schedule-slot-info-content" >
                                    <h3 class="schedule-slot-title"> Is there a limit to selection of companies?

                                    </h3>
                                    <p>Yes, each student will be allowed to sit for interview in four companies. This is done to facilitate equal participation and smooth flow of the Internship Camp.</p>
                                 </div>
                                 <!--Info content end -->
                              </div><!-- Slot info end -->
                           </div>
                           <!--schedule-listing end -->

                           <div class="morequestions" style="display:none;">
                           <div class="schedule-listing">
                              <div class="schedule-slot-time">
                                 <span> Q 6. </span>
                              </div>
                              <div class="schedule-slot-info">
                                 
                                 <div class="schedule-slot-info-content" >
                                    <h3 class="schedule-slot-title"> Can I opt out of a company and select another after I have made my company selection?


                                    </h3>
                                    <p> No, once you opt-in to sit for a company, your information along with your resume are sent to the company. Hence, please be careful while chasing your companies.</p>
                                 </div>
                                 <!--Info content end -->
                              </div><!-- Slot info end -->
                           </div>
                           <!--schedule-listing end -->
                           <div class="schedule-listing">
                              <div class="schedule-slot-time">
                                 <span> Q 7. </span>
                              </div>
                              <div class="schedule-slot-info">
                                 
                                 <div class="schedule-slot-info-content" >
                                    <h3 class="schedule-slot-title"> What is the duration of Internship and the stipend amount?


                                    </h3>
                                    <p> You can find the duration and stipend amount of all companies during the company selection process.
</p>
                                 </div>
                                 <!--Info content end -->
                              </div><!-- Slot info end -->
                           </div>
                           <!--schedule-listing end -->

                           <div class="schedule-listing">
                              <div class="schedule-slot-time">
                                 <span> Q 8. </span>
                              </div>
                              <div class="schedule-slot-info">
                                 
                                 <div class="schedule-slot-info-content" >
                                    <h3 class="schedule-slot-title">  I have successfully paid the registration fees and yet my payment status remains pending.

                                    </h3>
                                    <p> For any technical glitches with payment and account approval, please reach us at: <a href="mailto:techies@ecell.org.in">techies@ecell.org.in</a>
</p>
                                 </div>
                                 <!--Info content end -->
                              </div><!-- Slot info end -->
                           </div>
                           <!--schedule-listing end -->

                           <div class="schedule-listing">
                              <div class="schedule-slot-time">
                                 <span> Q 9. </span>
                              </div>
                              <div class="schedule-slot-info">
                                 
                                 <div class="schedule-slot-info-content" >
                                    <h3 class="schedule-slot-title">  My query is not listed here

                                    </h3>
                                    <p> If you have additional queries, please contact us here at <a href="mailto:techies@ecell.org.in">https://ecell.org.in/contact</a>
</p>
                                 </div>
                                 <!--Info content end -->
                              </div><!-- Slot info end -->
                           </div>
                           <!--schedule-listing end -->
                           </div>


                           <div class="schedule-listing-btn">
                              <a class="btn showmore" style="color:white;">Show More</a>
                           </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="date2">
                           <div class="schedule-listing">
                              <div class="schedule-slot-time">
                                 <span> 02.30 - 03.30 PM</span>
                                 Workshop
                              </div>
                              <div class="schedule-slot-info">
                                 <a href="#">
                                                       <img class="schedule-slot-speakers" src="{{asset('img/speakers/speaker5.jpg')}}" alt="">
                                                   </a>
                                 <div class="schedule-slot-info-content">
                                    <h3 class="schedule-slot-title">Marketing Matters!
                                       <strong>@ Johnsson Agaton</strong>
                                    </h3>
                                    <p>How you transform your business as
                                       technology, consumer, habits industry dynamics change? Find out from
                                       those leading the charge. How you transform </p>
                                 </div>
                                 <!--Info content end -->
                              </div><!-- Slot info end -->
                           </div>
                           <!--schedule-listing end -->
                           <div class="schedule-listing">
                              <div class="schedule-slot-time">
                                 <span> 03.30 - 04.30 PM</span>
                                 Workshop
                              </div>
                              <div class="schedule-slot-info">
                                 <a href="#">
                                                           <img class="schedule-slot-speakers" src="{{asset('img/speakers/speaker6.jpg')}}" alt="">
                                                       </a>
                                 <div class="schedule-slot-info-content">
                                    <h3 class="schedule-slot-title">Reinventing Experiences
                                       <strong>@ Fredric Martinsson</strong>
                                    </h3>
                                    <p>How you transform your business as
                                       technology, consumer, habits industry dynamics change? Find out from
                                       those leading the charge. How you transform </p>
                                 </div>
                                 <!--Info content end -->
                              </div><!-- Slot info end -->
                           </div>
                           <!--schedule-listing end -->
                           <div class="schedule-listing">
                              <div class="schedule-slot-time">
                                 <span> 04.30 - 05.30 PM</span>
                                 Workshop
                              </div>
                              <div class="schedule-slot-info">
                                 <a href="#">
                                                               <img class="schedule-slot-speakers" src="{{asset('img/speakers/speaker7.jpg')}}" alt="">
                                                           </a>
                                 <div class="schedule-slot-info-content">
                                    <h3 class="schedule-slot-title">Cultures of Creativity
                                       <strong>@ Hall  Building</strong>
                                    </h3>
                                    <p>How you transform your business as
                                       technology, consumer, habits industry dynamics change? Find out from
                                       those leading the charge. How you transform </p>
                                 </div>
                                 <!--Info content end -->
                              </div><!-- Slot info end -->
                           </div>
                           <!--schedule-listing end -->
                           <div class="schedule-listing">
                              <div class="schedule-slot-time">
                                 <span> 05.30 - 06.30 PM</span>
                              </div>
                              <div class="schedule-slot-info">
   
                                 <div class="schedule-slot-info-content">
                                    <h3 class="schedule-slot-title">Lunch Break
                                       <strong>@ Agaton Johnsson</strong>
                                    </h3>
                                    <a href="#">
                                                               <img  src="{{asset('img/schedule_lunch.png')}}" alt="">
                                                            </a>
                                 </div>
                                 <!--Info content end -->
                              </div><!-- Slot info end -->
                           </div>
                           <!--schedule-listing end -->
   
                           <div class="schedule-listing">
                              <div class="schedule-slot-time">
                                 <span> 06.30 - 07.30 PM</span>
                                 Workshop
                              </div>
                              <div class="schedule-slot-info">
                                 <a href="#">
                                                    <img class="schedule-slot-speakers" src="{{asset('img/speakers/speaker8.jpg')}}" alt="">
                                                               </a>
                                 <div class="schedule-slot-info-content">
                                    <h3 class="schedule-slot-title">Human Centered Design
                                       <strong>@ Henrikon Rebecca</strong>
                                    </h3>
                                    <p>How you transform your business as
                                       technology, consumer, habits industry dynamics change? Find out from
                                       those leading the charge. How you transform </p>
                                 </div>
                                 <!--Info content end -->
                              </div><!-- Slot info end -->
                           </div>
                           <!--schedule-listing end -->
                           <div class="schedule-listing-btn">
                              <a href="#" class="btn">More Details</a>
                           </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="date3">
                           <div class="schedule-listing">
                              <div class="schedule-slot-time">
                                 <span> 07.30 - 11.30 PM</span>
                                 Workshop
                              </div>
                              <div class="schedule-slot-info">
                                 <a href="#">
                                                     <img class="schedule-slot-speakers" src="{{asset('img/speakers/speaker1.jpg')}}" alt="">
                                                 </a>
                                 <div class="schedule-slot-info-content">
                                    <h3 class="schedule-slot-title">Marketing Matters!
                                       <strong>@ Fredric Martinsson</strong>
                                    </h3>
                                    <p>How you transform your business as
                                       technology, consumer, habits industry dynamics change? Find out from
                                       those leading the charge. How you transform </p>
                                 </div>
                                 <!--Info content end -->
                              </div><!-- Slot info end -->
                           </div>
                           <!--schedule-listing end -->
                           <div class="schedule-listing">
                              <div class="schedule-slot-time">
                                 <span> 9.30 - 10.30 AM</span>
                                 Workshop
                              </div>
                              <div class="schedule-slot-info">
                                 <a href="#">
                                                         <img class="schedule-slot-speakers" src="{{asset('img/speakers/speaker2.jpg')}}" alt="">
                                                     </a>
                                 <div class="schedule-slot-info-content">
                                    <h3 class="schedule-slot-title">Reinventing Experiences
                                       <strong>@ Melisa Lundryn</strong>
                                    </h3>
                                    <p>How you transform your business as
                                       technology, consumer, habits industry dynamics change? Find out from
                                       those leading the charge. How you transform </p>
                                 </div>
                                 <!--Info content end -->
                              </div><!-- Slot info end -->
                           </div>
                           <!--schedule-listing end -->
                           <div class="schedule-listing">
                              <div class="schedule-slot-time">
                                 <span> 10.30 - 11.30 AM</span>
                                 Workshop
                              </div>
                              <div class="schedule-slot-info">
                                 <a href="#">
                                                             <img class="schedule-slot-speakers" src="{{asset('img/speakers/speaker3.jpg')}}" alt="">
                                                         </a>
                                 <div class="schedule-slot-info-content">
                                    <h3 class="schedule-slot-title">Cultures of Creativity
                                       <strong>@ Johnsson Agaton</strong>
                                    </h3>
                                    <p>How you transform your business as
                                       technology, consumer, habits industry dynamics change? Find out from
                                       those leading the charge. How you transform </p>
                                 </div>
                                 <!--Info content end -->
                              </div><!-- Slot info end -->
                           </div>
                           <!--schedule-listing end -->
                           <div class="schedule-listing launce">
                              <div class="schedule-slot-time">
                                 <span> 11.30 - 12.30 PM</span>
                              </div>
                              <div class="schedule-slot-info">
   
                                 <div class="schedule-slot-info-content">
                                    <h3 class="schedule-slot-title">Lunch Break
                                       <strong>@ Rebecca Henrikon</strong>
                                    </h3>
                                    <a href="#">
                                                             <img  src="{{asset('img/schedule_lunch.png')}}" alt="">
                                                          </a>
                                 </div>
                                 <!--Info content end -->
                              </div><!-- Slot info end -->
                           </div>
                           <!--schedule-listing end -->
   
                           <div class="schedule-listing">
                              <div class="schedule-slot-time">
                                 <span> 12.30 - 01.30 PM</span>
                                 Workshop
                              </div>
                              <div class="schedule-slot-info">
                                 <a href="#">
                                                  <img class="schedule-slot-speakers" src="{{asset('img/speakers/speaker4.jpg')}}" alt="">
                                                             </a>
                                 <div class="schedule-slot-info-content">
                                    <h3 class="schedule-slot-title">Human Centered Design
                                       <strong>@ Agaton Johnsson</strong>
                                    </h3>
                                    <p>How you transform your business as
                                       technology, consumer, habits industry dynamics change? Find out from
                                       those leading the charge. How you transform </p>
                                 </div>
                                 <!--Info content end -->
                              </div><!-- Slot info end -->
                           </div>
                           <!--schedule-listing end -->
                           <div class="schedule-listing-btn">
                              <a href="#" class="btn">More Details</a>
                           </div>
                        </div>
   
                     </div>
               </div>
            </div>
         </div><!-- container end-->
      </section>
      <!-- ts experience end-->

      <!-- ts pricing start-->
      <section class="ts-pricing" style="background-image: url({{asset('img/pricing/ticket_bg.jpg')}})" id="pricing"> 
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <h2 class="section-title white">
                     
                     Pricing Plans
                  </h2>
               </div><!-- section title end-->
            </div><!-- col end-->
            <!-- row end-->
            <div class="row">
            <div class="col-lg-4">
            </div>
               <div class="col-lg-4">
                  <div class="ts-pricing-item active">
                     <div class="ts-pricing-header">
                        <i class="fas fa-rupee-sign"></i>
                        <h2 class="ts-pricing-name">Icamp Only</h2>
                        <h3 class="ts-pricing-price">
                           <img class="currency" src="{{asset('img/pricing/dollar.png')}}" alt="">
                           <span>Rs. 515</span>
                        </h3>
                     </div>
                     <p>
                        Participants who can only appear for internship camp 2019
                     </p>
                     
                  </div>
               </div><!-- col end-->
               <<div class="col-lg-4">
            </div>
               
            </div>
         </div><!-- container end-->
         <div class="speaker-shap">
            <img class="shap2" src="{{asset('img/shap/pricing_memphis1.png')}}" alt="">
         </div>
      </section>
      <!-- ts pricing end-->

      


      <!-- ts footer area start-->
      <div class="footer-area">

        

         <!-- footer start-->
         <footer class="ts-footer" style="margin-top:60px;">
            <div class="container" style="height:10px;">
               <div class="row">
                  <div class="col-lg-8 mx-auto">
                     
                     <div class="ts-footer-social text-center mb-30" style="margin-top:-180px;">
                           <img src="{{asset('img/icamp-logo.png')}}" alt="" style="height:70px;">
                        <ul style="margin-top:40px;">
                           <li>
                              <a href="https://www.facebook.com/kiitecell/"><i class="fab fa-facebook-f"></i></a>
                           </li>
                           <li>
                              <a href="https://twitter.com/kiit_ecell"><i class="fab fa-twitter"></i></a>
                           </li>
                           <li>
                              <a href="https://www.linkedin.com/company/13346906/"><i class="fab fa-linkedin"></i></a>
                           </li>
                           <li>
                              <a href="https://www.instagram.com/ecell_kiit/"><i class="fab fa-instagram"></i></a>
                           </li>
                        </ul>
                     </div>
                     <!-- footer social end-->
                    
                     <div class="copyright-text text-center">
                        <p>Copyright � 2018 KIIT E-Cell. All Rights Reserved.</p>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!-- footer end-->

         <div class="BackTo">
            <a href="#" class="fa fa-angle-up" aria-hidden="true"></a>
      </div>
      </div>
      <!-- ts footer area end-->




      <!-- Javascript Files
            ================================================== -->
      <!-- initialize jQuery Library -->
      <script src="{{asset('js/jquery.js')}}"></script>

      <script src="{{asset('js/popper.min.js')}}"></script>
      <!-- Bootstrap jQuery -->
      <script src="{{asset('js/bootstrap.min.js')}}"></script>
      <!-- Counter -->
      <script src="{{asset('js/jquery.appear.min.js')}}"></script>
      <!-- Countdown -->
      <script src="{{asset('js/jquery.jCounter.js')}}"></script>
      <!-- magnific-popup -->
      <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
      <!-- carousel -->
      <script src="{{asset('js/owl.carousel.min.js')}}"></script>
      <!-- Waypoints -->
      <script src="{{asset('js/wow.min.js')}}"></script>
      <!-- isotop -->
      <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>

      <!-- Template custom -->
      <script src="{{asset('js/main.js')}}"></script>

   </div>
   <!-- Body inner end -->

   <script>
   var i=0;
   $('.showmore').click(function(){
      if(i==0){
         $('.morequestions').slideDown();
         $('.showmore').html("Show Less");
         i++;
      }
      else{
         $('.morequestions').slideUp();
         $('.showmore').html("Show More");
         i--;
      }
   })



   
   </script>
   <script>
      $(document).ready(function(){
 let scroll_link = $('.scroll');

  //smooth scrolling -----------------------
  scroll_link.click(function(e){
      e.preventDefault();
      let url = $('body').find($(this).attr('href')).offset().top;
      $('html, body').animate({
        scrollTop : url
      },700);
      $(this).parent().addClass('active');
      $(this).parent().siblings().removeClass('active');
      return false;	
   });
});
   </script>
</body>



</html>

@endsection