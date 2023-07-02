@extends('layouts.app')
@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
      <h2>Events</h2>
      <p>Below are some of the departmental events. </p>
    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Events Section ======= -->
  <section id="events" class="events">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-md-6 d-flex align-items-stretch">
          <div class="card">
            <div class="card-img">
              <img src="{{asset('img/BUCC EXHIBITION.jpg')}}" alt="BUCC EXHIBITION">
            </div>
            <div class="card-body">
              <h5 class="card-title"><a href="">The BUCC software exhibition</a></h5>
              <p class="fst-italic text-center">Thursday, Febuary 26th at 9:00 am</p>
              <p class="card-text">The software exhibition organized by Babcock University Computer Club, the student club of the school of computing and Engineering sciences had some software projects exhibited at the event. The theme of the exhibition was Business Technovations. The overall winner of the event was awarded with a 100 thousand naira gift prize.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 d-flex align-items-stretch">
          <div class="card">
            <div class="card-img">
              <img src="{{asset('img/DEBATE.jpg')}}" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title"><a href="">THE BUCC DEBATE</a></h5>
              <p class="fst-italic text-center">WEDNESDAY,FEBUARY 25th at 9:00 am</p>
              <p class="card-text">The debate organized by Babcock University Computer Club with the base on  NFT's (A non-fungible token) and whether the advent of NFT's has fostered an increase in the rate of intellectual theft.</p>
            </div>
          </div>
<!-- end of row one-->

        </div>
      </div>
   <!--   enter row two -->
      <div class="row">
        <div class="col-md-6 d-flex align-items-stretch">
          <div class="card">
            <div class="card-img">
              <img src="{{asset('img/BUCC EXHIBITION.jpg')}}" alt="BUCC EXHIBITION">
            </div>
            <div class="card-body">
              <h5 class="card-title"><a href="">The BUCC software exhibition</a></h5>
              <p class="fst-italic text-center">Thursday, Febuary 26th at 9:00 am</p>
              <p class="card-text">The software exhibition organized by Babcock University Computer Club, the student club of the school of computing and Engineering sciences had some software projects exhibited at the event. The theme of the exhibition was Business Technovations. The overall winner of the event was awarded with a 100 thousand naira gift prize.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 d-flex align-items-stretch">
          <div class="card">
            <div class="card-img">
              <img src="{{asset('img/DEBATE.jpg')}}" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title"><a href="">THE BUCC DEBATE</a></h5>
              <p class="fst-italic text-center">WEDNESDAY,FEBUARY 25th at 9:00 am</p>
              <p class="card-text">The debate organized by Babcock University Computer Club with the base on  NFT's (A non-fungible token) and whether the advent of NFT's has fostered an increase in the rate of intellectual theft.</p>
            </div>
          </div>
    </div>
  </section><!-- End Events Section -->

</main><!-- End #main -->

@endsection