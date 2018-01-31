@extends('layouts.appInner')
@section('content')

<section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
    <div class="row">
        <div class="col-lg-12 my-auto">
            <div class="container-fluid">
                <div class="row">
                     <div class="col-lg-4">
                        <h5 class="mb-5" style="color:red">SELECT A CAPTION</h2>
                    </div>
                </div>
                    <a class="btn btn-grey pull-left" href="{{route('picture')}}">Previous</a>
                    <a class="btn btn-grey pull-right" type="button" data-toggle="modal" data-target="#modalContactForm">Next</a>
            </div>
        </div>
    </div>
</section>

    <!-- MODAL-->
    <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog cascading-modal" role="document">
            <div class="modal-content">
                <div class="modal-header light-blue darken-3 white-text">
                    <h4 class="title" style="color: aliceblue"><i class="fa fa-pencil"></i> Contact form</h4>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body mb-0">
                    <div class="md-form form-sm">
                        <i class="fa fa-envelope prefix"></i>
                        <input id="name" type="text" class="form-control">
                        <label>Your name</label>
                    </div>

                    <div class="md-form form-sm">
                        <i class="fa fa-lock prefix"></i>
                        <input id="mail" type="email" class="form-control">
                        <label>Your email</label>
                    </div>

                    <div class="md-form form-sm">
                        <i class="fa fa-share-square-o prefix"></i>
                        <input type="text" id="form21" class="form-control">
                        <label>Share on Social Media</label>
                    </div>

                    <div class="text-center mt-1-half">
                        <button id="send" class="btn btn-info mb-2">Send <i class="fa fa-send ml-1"></i></button>
                    </div>

                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- /MODAL -->

@endsection
@section('pagejs')
     <script src="{{ asset('js/main.js') }}"></script>
@endsection

