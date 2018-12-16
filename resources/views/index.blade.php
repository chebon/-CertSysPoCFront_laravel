<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Webpixels">

    <title>Record.Id</title>

    <!-- Favicon -->
    <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.gnavbar-navoogleapis.com/css?family=Nunito:300,400,600,700,800">

    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-pro/css/all.min.css">



    <!-- Theme CSS -->
    <link rel="stylesheet" href="../assets/css/theme.min.css">


</head>

<body>


<header class="header-transparent" id="header-main">

    <!-- Main navbar -->

    <nav style=" display: none; " class="navbar navbar-main navbar-expand-lg navbar-sticky navbar-transparent navbar-dark bg-dark" id="navbar-main">
        <div class="container">
            <a class="navbar-brand mr-lg-5" href="../index.html">
                <img alt="Image placeholder" src="../assets/img/brand/white.png" style="height: 50px;">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar-main-collapse">
                <ul class="navbar-nav align-items-lg-center">
                    <li class="nav-item ">
                        <a class="nav-link" href="../index.html">Overview</a>
                    </li>
                    <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-arrow py-0">
                            <div class="list-group">
                                <a href="../pages/pages-landing.html" class="list-group-item list-group-item-action">
                                    <div class="media d-flex align-items-center">
                                        <img alt="Image placeholder" src="../assets/img/icons/dusk/svg/browser-window.svg" class="img-saturate" style="width: 50px;">
                                        <div class="media-body ml-3">
                                            <h6 class="mb-1">Landing Pages</h6>
                                            <p class="mb-0">A great point to start from.</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="../pages/pages-secondary.html" class="list-group-item list-group-item-action">
                                    <div class="media d-flex align-items-center">
                                        <img alt="Image placeholder" src="../assets/img/icons/dusk/svg/ios-photos.svg" class="img-saturate" style="width: 50px;">
                                        <div class="media-body ml-3">
                                            <h6 class="mb-1">Secondary Pages</h6>
                                            <p class="mb-0">Build your website with these demos.</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="../pages/pages-account.html" class="list-group-item list-group-item-action">
                                    <div class="media d-flex align-items-center">
                                        <img alt="Image placeholder" src="../assets/img/icons/dusk/svg/maintenance.svg" class="img-saturate" style="width: 50px;">
                                        <div class="media-body ml-3">
                                            <h6 class="mb-1">Account Pages</h6>
                                            <p class="mb-0">Account management made easy.</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="../pages/pages-shop.html" class="list-group-item list-group-item-action">
                                    <div class="media d-flex align-items-center">
                                        <img alt="Image placeholder" src="../assets/img/icons/dusk/svg/in-progress.svg" class="img-saturate" style="width: 50px;">
                                        <div class="media-body ml-3">
                                            <h6 class="mb-1">Shop Pages</h6>
                                            <p class="mb-0">Explore the full ecommerce website flow.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../docs/alerts.html" role="button">Components</a>
                    </li>
                </ul>

                <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../docs/introduction.html" target="_blank">Docs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../docs/changelog.html" target="_blank">Changelog</a>
                    </li>
                    <li class="nav-item mr-0">
                        <a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" target="_blank" class="nav-link d-lg-none">Purchase now</a>
                        <a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" target="_blank" class="btn btn-sm btn-white btn-circle btn-icon d-none d-lg-inline-flex">
                            <span class="btn-inner--icon"><i class="far fa-shopping-cart"></i></span>
                            <span class="btn-inner--text">Purchase now</span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

</header>





<main>







    <!-- Spotlight -->
    <section id="app" class="slice slice-lg bg-cover bg-size--cover" style="background-image: url(../assets/img/backgrounds/img-10.jpg);">
        <span class="mask bg-gradient-dark opacity-3"></span>
        <div class="container pt-lg pb-lg-md">
            <div class="row justify-content-center">
                <div class="col-lg-9" style="margin-top: 30px;">
                    <form id="verify_results" action="/results" method="post">
                        @csrf
                        <div class="form-group bg-white rounded px-2 py-2 shadow">
                            <div class="row">
                                <div class="col-8 col-md-9">
                                    <div class="input-group input-group-transparent shadow-none">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text border-0"><i class="far fa-search"></i></span>
                                        </div>
                                        <input  type="text" id="student_name"  name="fullname" class="form-control border-0 shadow-none" placeholder="Full names">
                                        <input  id="admission_number" type="text" name="admission_number" class="form-control border-0 shadow-none" placeholder="admission number">
                                    </div>
                                </div>
                                <div id="action-2"  class="col-4 col-md-3">
                                    <button type="submit" class="btn btn-block btn-primary" >
                                        <span class="d-block d-md-none"><i class="far fa-search"></i></span>
                                        <span class="d-none d-md-block">Verify</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    @if(isset($error))
                        <div style=" background: #fff;">
                            <p style="text-align: center;margin-top: 0px;color: #cc1818;">{{$error}}</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="slice" id="sct-topics" style="display: none">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="list-group list-group-space">




                        <a href="#" class="list-group-item list-group-item-action d-flex flex-column flex-md-row align-items-center px-5 py-4 text-center text-md-left">
                            <div class="mr-md-5 mb-4 mb-md-0">
                                <i class="fas fa-address-book fa-4x text-muted"></i>
                            </div>
                            <div class="list-group-content">
                                <h5 id="student_name_respo" class="h6">Student Full Names</h5>
                                <div class="media d-flex align-items-center">
                                    <div>
                                        <span class="avatar avatar-sm bg-primary"><i class="far fa-envelope-open"></i></span>
                                    </div>
                                    <div>
                                        <div class="media-body pl-2">
                                            <small id ='course_taken' class="d-block">Course Taken: </small>
                                            <small id ='grade' class="d-block">Overal Grade</small>
                                            <small  id="study_period" class="d-block text-muted">Study Period</small>
                                            <small id="institution_name" class="d-block text-muted">Institution Name</small>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Code</th>
                                <th scope="col">Description</th>
                                <th scope="col">Cf</th>
                                <th scope="col">Grade</th>
                            </tr>
                            </thead>
                            <tbody id="unit_content">

                            </tbody>
                        </table>


                    </div>



                </div>
            </div>
        </div>
    </section>

    <section id="sct_page_examples" class="slice">
        <div class="container">
            <div class="row" id="transcript_container">






            </div>
        </div>
    </section>

    <div class="modal modal-danger fade" id="modal_5" tabindex="-1" role="dialog" aria-labelledby="modal_5" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_title_6">Student Transript</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="py-3 text-center">
                        <i class="fas fa-file-alt fa-4x"></i>
                        <table class="table table-hover table-cards align-items-center">
                            <thead>
                            <tr>
                                <th scope="col">Unit Name</th>
                                <th scope="col">Score</th>
                            </tr>
                            </thead>
                            <tbody id="transcript_unit">

                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</main>


<footer style=" display: none; " class="footer footer-dark bg-gradient-primary">
    <div class="container">
        <div class="row pt-md">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <a href="../index.html">
                    <img src="../assets/img/brand/white.png" alt="Footer logo" style="height: 70px;">
                </a>
                <p class="text-sm">A unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.</p>
            </div>
            <div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0">
                <h6 class="heading mb-3">Account</h6>
                <ul class="list-unstyled">
                    <li><a href="../pages/account-profile.html">Profile</a>
                    </li>
                    <li><a href="../pages/account-settings.html">Settings</a>
                    </li>
                    <li><a href="../pages/account-billing.html">Billing</a>
                    </li>
                    <li><a href="../pages/account-notifications.html">Notifications</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                <h6 class="heading mb-3">About</h6>
                <ul class="list-unstyled text-small">
                    <li><a href="#">Services</a>
                    </li>
                    <li><a href="#">Contact</a>
                    </li>
                    <li><a href="#">Careers</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2 col-sm-4 mb-5 mb-lg-0">
                <h6 class="heading mb-3">Company</h6>
                <ul class="list-unstyled">
                    <li><a href="#">Terms</a>
                    </li>
                    <li><a href="#">Privacy</a>
                    </li>
                    <li><a href="#">Support</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row align-items-center justify-content-md-between py-4 mt-4 delimiter-top">
            <div class="col-md-6">
                <div class="copyright text-sm font-weight-bold text-center text-md-left">
                    &copy; 2018 <a href="https://webpixels.io/" class="font-weight-bold" target="_blank">Webpixels</a>. All rights reserved.
                </div>
            </div>
            <div class="col-md-6">
                <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="https://dribbble.com/webpixels" target="_blank">
                            <i class="fab fa-dribbble"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="https://instagram.com/webpixelsofficial" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/webpixels" target="_blank">
                            <i class="fab fa-github"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://facebook.com/webpixels" target="_blank">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>


<!-- Core -->
<script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/in-view/dist/in-view.min.js"></script>





<!-- Theme JS -->

<script src="../assets/js/theme.min.js"></script>

<!-- Project scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.15.2/axios.js"></script>
<script type = "text/javascript" src = "https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script type = "text/javascript" src = "../assets/js/main.js"></script>


</body>

</html>
