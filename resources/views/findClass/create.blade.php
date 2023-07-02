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
            <div class="mt-4">
                <form action="{{ route('store-class') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label  class="form-label">Enter Name Of Place</label>
                        <input type="text" class="form-control" aria-describedby="emailHelp" name="name" placeholder="">
                        <span class="text-danger">
                            @error('name')
                                * {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="">
                     
                        <label  class="form-label">Enter Description Of Place Below</label>
                        <textarea class="form-control " placeholder="" id="floatingTextarea2" style="height: 200px"
                            name="description"></textarea>
                        <span class="text-danger">
                            @error('description')
                                * {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3 mt-4">
                        <label  class="form-label">Enter image of place</label>
                        <input class="form-control " type="file" id="formFile" name="picture" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </main>

    {{ csrf_field() }}
@endsection
