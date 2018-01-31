
@extends('layouts.app')
@section('content')


<body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <img class="img-fluid img-profile mx-auto mb-2" src="img/logo.jpg" alt="">
        <br /> <br />
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link js-scroll-trigger" href="#about">A Template</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#experience">A Picture</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#education">A Caption</a>
                </li>
                <li> <br /><br />
                    <a class="btn btn-danger" href="index.html">Back Home</a>
                </li>
            </ul>


        </div>

        <a class="navbar-brand js-scroll-trigger" href="#page-top">

            <span class="d-block d-lg-none">Children Matter</span>
        </a>
        <button class="navbar-toggler " style="background-color:black" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>

    <!-- <div class="container-fluid p-0"> -->
    <!-- <img src="img/template.jpg" /> -->

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
                    <a class="btn btn-grey pull-right" href="picture.html">Next</a>
                </div>
            </div>
        </div>
    </section>


    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/resume.min.js"></script>

</body>

</html>