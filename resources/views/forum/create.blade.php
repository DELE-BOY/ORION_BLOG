@extends('layouts.app')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2>Forum</h2>
                <p>Upload your question. </p>
            </div>
        </div><!-- End Breadcrumbs -->
        <div class="container mt-4">


            <form action="{{ route('store') }}" method="POST" >
                @csrf

                <div class=" mb-4">
               
                    <label for="question " class="mb-3">Ask Question</label>
                    <textarea class="form-control " placeholder="Enter Question" id="floatingTextarea2" style="height: 100px"
                        name="questions"></textarea>
                    <span class="text-danger">
                        @error('questions')
                            * {{ $message }}
                        @enderror
                    </span>
                 
                </div>
          

                <button type="submit" class="btn btn-primary mb-4">Submit</button>
                
                
            </form>
        </div>
    </main><!-- End #main -->

    {{ csrf_field() }}
@endsection
