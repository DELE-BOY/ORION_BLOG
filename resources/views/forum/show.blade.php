@extends('layouts.app')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2>Forum</h2>
                <p>Upload your questions. </p>
            </div>
        </div><!-- End Breadcrumbs -->

        <div class="col mt-5">
            <div class="container g-3">

                <br>
                <h4>
                    <strong> Question: </strong>{{ $forum->questions }}
                </h4>
                <br>

                {{-- Comentario del resto de los participantes --}}
                <div class="">
                    @foreach ($answer as $answers)
                        <div class="row mt-3">
                            <div class="col">




                                <div class="card" style="width: 69rem;">
                                    <div class="card-header">
                                        <b>{{ $answers->user->username }}</b>
                                    </div>
                                    <div class="card-body">
                                        <blockquote class="blockquote mb-0">
                                            <p class="card-text">
                                                <strong>Answer: </strong> {{ $answers->answer }}
                                            </p>
                                        </blockquote>

                                        @if (Auth::user()->id == $answers->user_id)
                                          
                                            <form action="{{ route('deleteAnswer', $answers->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-danger">
                                                    Delete
                                                </button>
                                                @method('DELETE')

                                            </form>
                                        @endif
                                    </div>
                                </div>







                            </div>
                        </div>
                    @endforeach
                </div>

                <br>
                <form action="{{ route('storeAnswer') }}" method="post">
                    @csrf
                    <div class="
                        col-md-6">

                        <textarea class="form-control" name="answer" rows="3" placeholder="Insert comment"></textarea>
                        <span class="text-danger">
                            @error('answer')
                                * {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <br>
                    <br>
                    <input name="forum_id" type="hidden" value="{{ $forum->id }}">
                    <div class="col-4 mb-4">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>





    </main><!-- End #main -->
@endsection
