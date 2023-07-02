@extends('layouts.app')

@section('content')

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Find My Class</h2>
            <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit
                quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
        </div>
    </div><!-- End Breadcrumbs -->
    <div class="container">
        <h1>{{ $findClass->name }}</h1>
        <div class="container">
            <img style="width:50%" src="{{asset('images/'. $findClass->picture )}}" alt="Image" srcset="">
        </div>
        <br>
       
        
        <p>{{ $findClass->description }}</p>
    </div>
   
</main>

@endsection