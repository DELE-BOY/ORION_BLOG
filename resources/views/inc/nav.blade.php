 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top">

    <div class="announcement">
        <div class="announcement__wrapper">
            <div class="announcement__text">
                <div class="testtimonial">
                    <div class="slideshow-container">
                        <div class="mySlides fade">
                            <div>
                                <p class="annoucement-bar-text">What has a heart that doesn't beat? <!-- Answer: an artichoke. --> </p>
                            </div>
                        </div>
                        <div class="mySlides fade">
                            <div>
                                <p class="annoucement-bar-text">There will be departmental prayer session on the 20th at the large adron collider</p>
                            </div>
                        </div>
                        <div class="mySlides fade">
                            <div>
                                <p class="annoucement-bar-text"><span style="color:red;">PUBLIC NOTICE: THE WILL BE MANDATORY MEETING FOR ALL ORION VII STUDENTS IN GIDEON TROOPERS</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="container d-flex align-items-center">

         <h1 class="logo me-auto"><a href="/">ORION VIII</a></h1>
          <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/public/img/Orion logo transparent background(1).png" alt="" class="img-fluid"></a> -->

         <nav id="navbar" class="navbar order-last order-lg-0">
             <ul>
                 <li><a class="active" href="/">HOME</a></li>
                 <li><a href="{{ route('about') }}">THE CREW</a></li>
                 <li><a href="{{ route('blog') }}">NEWS</a></li>
                 <li><a href="{{ route('contact') }}">CONTACT US</a></li>
                 
                 <!-- @if (Auth::check())
                 <li><a href="{{ route('careers') }}">Careers</a></li>
                 <li><a href="{{ route('forum') }}">Forum</a></li>
                 <li><a href="{{ route('find-class') }}">Find My Class</a></li>
                     <li> <a href=""><i class='bx bxs-user-circle '>{{ Auth::user()->username }}</i></a></li>

                     <a href="{{ route('logout') }}" class="mx-4">Logout</a>
                 @endif -->

             </ul>
             <i class="bi bi-list mobile-nav-toggle"></i>
         </nav><!-- .navbar -->

         <!-- @if (!Auth::check())
             <a href="{{ route('register') }}" class="get-started-btn">Get Started</a>
         @else
         @endif -->


     </div>
 </header><!-- End Header -->
