@extends('layouts.appInner')
@section('content')

    <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">

        <div class="row">
            <div class="col-lg-12 my-auto">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <h5 class="mb-5" style="color:red">Select A Template</h2>
                        </div>
                    </div>

                    <div class="resume-item d-flex flex-column flex-md-row mb-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="feature-item">
                                    <img src="img/template1.jpg">
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="feature-item">
                                    <img src="img/template1.jpg">
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="feature-item">
                                    <img src="img/template1.jpg">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="resume-item d-flex flex-column flex-md-row mb-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="feature-item">
                                    <img src="img/template1.jpg">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="feature-item">
                                    <img src="img/template1.jpg">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="feature-item">
                                    <img src="img/template1.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-grey pull-right" href="{{route('picture')}}">Next</a>
                </div>
            </div>
        </div>
    </section>
@endsection