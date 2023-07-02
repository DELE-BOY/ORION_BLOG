@extends('layouts.app')
@section('content')
    <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1><span style="color: #15a7cc">To Serve & To Save</span></h1>
      <h2><strong><span style="color: #EEDD82">Tous Ensemble</span></strong><h2>
     <!-- <a href="{{route('register')}}" class="btn-get-started">Get Started</a>-->
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{ asset('img/BUAMS LOGO.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3><strong><span style="color: #DAA520">WEEKLY ACTIVITY HIGHLIGHTS</span></strong></h3>
            <p class="fst-italic">
            <span style="color: #EEDD82">
            PERSONALITY OF THE MONTH GOES TO <strong><span style="color: #15a7cc"> MADUKOMA GOOD-FORTUNE</span></strong>
            </span>
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Dr Solomon wins grant of $5000 for Stem transplant discovery</li>
              <li><i class="bi bi-check-circle"></i> ORION VIII's student discovers cure to Ebola</li>
              <li><i class="bi bi-check-circle"></i> BUSA declines Administrations vote to keep medical students on Campus</li>
              <li><i class="bi bi-check-circle"></i> MBBS for 500l students commences on 5th November,2023 </li>
              <li><i class="bi bi-check-circle"></i> MBBS for 400l students commences on 6th April</li>
              <li><i class="bi bi-check-circle"></i> Austin scores a hat-trick beating David </li>
              
            </ul>
            <p>
            <strong>
            <span style="color: #DAA520">
            For more information please contact Orion-VIII
            </span></strong>
            </p>

          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span style="color: #DAA520" data-purecounter-start="0" data-purecounter-end="3000" data-purecounter-duration="155" class="purecounter">>150</span>
            <p>Students</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span style="color: #DAA520" data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="155" class="purecounter">10</span>
            <p>Distinctions</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span  style="color: #DAA520"data-purecounter-start="0" data-purecounter-end="16" data-purecounter-duration="155" class="purecounter">>15</span>
            <p>Award Winners</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
        <span  style="color: #DAA520"data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="155" class="purecounter">∞</span>
            <p>Potential</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3><strong>FROM THE OFFICE OF THE PRESIDENT OF THE <span style="color: goldenrod;">ORION VIII</span> GRADUATING CLASS</strong>
              <br>
              <i><span style="color: goldenrod;">Basuo Bamonyo</span></i><br></h3>
              <p>
               For most of us, at an early age, we decided to pursue medicine, to make the world a better place one patient at a time, and now we are almost there, 
               To serve and to save our watch word , our motto, our motivation to get up in the morning. <br> It drives up, it pushes up and someday it will elevate us 
               <span style="color: goldenrod;">Great Orion VIII!</span>
               <br> Great!!!<br>
               <span style="color: goldenrod;">Cheers!</span>
              </p>
              <div class="text-center">
                <a href="{{route('about')}}" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4> Prof. Shotusa <br>
                    <span style="color:goldenrod;">PhD</span></h4>
                    <p><strong><span style="color:royalblue;">CHIEF MEDICAL DIRECTOR</span></strong></p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4> Prof. Shotusa <br>
                    <span style="color:goldenrod;">PhD</span></h4>
                    <p><strong><span style="color:royalblue;">CHIEF MEDICAL DIRECTOR</span></strong></p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4> Prof. Shotusa <br>
                    <span style="color:goldenrod;">PhD</span></h4>
                    <p><strong><span style="color:royalblue;">CHIEF MEDICAL DIRECTOR</span></strong></p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4> Prof. Shotusa <br>
                    <span style="color:goldenrod;">PhD</span></h4>
                    <p><strong><span style="color:royalblue;">CHIEF MEDICAL DIRECTOR</span></strong></p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4> Prof. Shotusa <br>
                    <span style="color:goldenrod;">PhD</span></h4>
                    <p><strong><span style="color:royalblue;">CHIEF MEDICAL DIRECTOR</span></strong></p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4> Prof. Shotusa <br>
                    <span style="color:goldenrod;">PhD</span></h4>
                    <p><strong><span style="color:royalblue;">CHIEF MEDICAL DIRECTOR</span></strong></p>
                  </div>
                </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

   
  

@endsection
