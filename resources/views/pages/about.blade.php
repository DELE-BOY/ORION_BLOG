@extends('layouts.app')
@section('content')

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2><strong><span style="color: #EEDD82">THE CREW</span></strong></h2>
        <p><strong><span style="color:goldenrod">The faces behind the face shield of ORION VIII</span></strong></p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{asset('./img/BUAMS LOGO.jpg')}}" class="img-fluid" alt="BUAMS LOGO">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>The Babcock University Association of Medical students is a student chapter of  the University's Medical school
            <p class="fst-italic">
            The mission of this association is to  make easily accesible the neccasary information and interests of the <span style="color:goldenrod">ORION VIII</span> and 
            <span style="color:royalblue">BUAMS</span> 
            students as well as anybody with an interest in joining <span style="color:royalblue">BUAMS</span>.
          <!-- <br>  We help others by inculcating our spirit of hard-work and creativity, never forgetting our principles of discipline and integrity.
 <br>It is not necessary for any club member to be a student of the department nor is knowledge of any programming language required. -->
<br>The association has covered events such as;           
            <ul> 
               <li><i class="bi bi-check-circle"></i> Trips to Ife in Osun state</li> 
               <li><i class="bi bi-check-circle"></i> Sporting Tornaments</li> 
               <li><i class="bi bi-check-circle"></i> Mediacal Outreach's and <span style="color:grey">more</span>
              </li>
            </ul> 
            </p>
            <p>
            If you have a general interest in medicine and want to join, feel free to contact the association via the public relations office and we'll include you in our mailing list so you can stay informed of upcoming events. 
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
            <span style="color: #DAA520" data-purecounter-start="0" data-purecounter-end="3000" data-purecounter-duration="1" class="purecounter">>15</span>
            <p>Crew Members</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span style="color: #DAA520" data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter">5</span>
            <p>Sponsors</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span style="color: #DAA520" data-purecounter-start="0" data-purecounter-end="16" data-purecounter-duration="1" class="purecounter">7</span>
            <p>Advisors</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
        <span style="color: #DAA520" data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter">100</span>
            <p>Annoucements</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><strong><span style="color: #EEDD82">MEET THE CREW</span></strong></h2>
          <p>Word from the executives</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{asset('img/PRESIDENT.jpg')}}" class="testimonial-img" alt="President">
                  <h3>BASUO BAMONYO</h3>
                  <h4>EXECUTIVE PRESIDENT <br> <span style="color:royalblue">BUAMS</span></h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    A healthy stomach is the source of an innovative mind, in the words of a great wiseman who shall not be named <br> Spartans Fight!
                    <br><span style="color:goldenrod">EAT|SLEEP|READ|REPEAT</span>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{asset('img/vice president.PNG')}}" class="testimonial-img" alt="Vice president">
                  <h3>ASEKHAUNO MERCY</h3>
                  <h4>VICE PRESIDENT ADMINISTRATION <br><span style="color:royalblue">BUAMS</span></h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    The key to success is establishing good relations with your collegues "IN THE MULTITUDE OF COUNSELLORS THERE IS SAFETY" 
                    <span style="color:goldenrod">PROVERBS 11:14</span> 
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{asset('img/editor in ella.jpg')}}" class="testimonial-img" alt="">
                  <h3>JONES EMMANUELLA</h3>
                  <h4>Editor-in-Chief <br><span style="color:royalblue">BUAMS</span></h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    "To truly achieve greatness in life, one must conquer self" <br>The instrumet with the most power is the pen that rewrite the past <br><span style="color:goldenrod">#Fear Men</span>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{asset('img/Assistant Editor.PNG')}}" class="testimonial-img" alt="">
                  <h3>JOHN OKAH MINICHIMSO</h3>
                  <h4>Assitant Editor <br><span style="color:royalblue">BUAMS</span></h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    The concept of Good or Evil is subjective<br> <span style="color:goldenrod">'Only the powerful write history'<br> Power is the pursuit of knowledge <br></span>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{asset('img/Member_Distinction student.jpg')}}" class="testimonial-img" alt="">
                  <h3>AKINTUNDE AKINBAYO</h3>
                  <h4>Member/Distinction Student <br><span style="color:royalblue">BUAMS</span></h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    "ALL WORK AND NO PLAY MAKES JACK A DULL BOY". <br><span style="color:goldenrod">Work hard, play women</span>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->
            
           <!-- <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{asset('img/Member_ohn.jpg')}}" class="testimonial-img" alt="">
                  <h3>LADELE JOHN</h3>
                  <h4>Member<br><span style="color:royalblue">BUAMS</span></h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    When the sun shines Ewedu paints the Eiffle tower. <br><span style="color:goldenrod">#Women are scorpions</span>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div> End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{asset('img/Member.jpg')}}" class="testimonial-img" alt="">
                  <h3>I CAN'T FIND HER NAME</h3>
                  <h4>Member <br><span style="color:royalblue">BUAMS</span></h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    How can i be a child and not break any plate <br><span style="color:goldenrod">[slams plate]<br>Break that plate</span>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->
@endsection