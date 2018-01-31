@extends('layouts.appInner')
@section('content')
    <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="row">
            <div class="col-lg-12 my-auto">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <h5 class="mb-5" style="color:red">UPLOAD A PICTURE</h2>
                        </div>
                    </div>
                    <a class="btn btn-grey pull-left" href="{{route('template')}}">Previous</a>
                    <a class="btn btn-grey pull-right" href="{{route('caption')}}">Next</a>
                </div>
            </div>
        </div>
    </section>
@endsection('content')
   