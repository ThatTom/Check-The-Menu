<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Modern Business - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url(); ?>/assets/css/styles.css" rel="stylesheet" />
        
        <?php
        $db = \Config\Database::connect();
        $builder = $db->table('restaraunts');
        $builder->where('RestarauntID', $restarauntid);
        $query = $builder->get();
        $results = $query->getRow();
        ?>
     </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Responsive navbar-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-lg-5">
                    <a class="navbar-brand" href="/">Check The Menu</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" aria-current="page" href="/">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="about">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="blog">Blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <section class="py-3 text-center">
                <button onclick="history.back()" class="btn btn-block btn-primary col-8">Back to Directory</button>
            </section>
            <!-- Page Content-->
            <section class="">
                <div class="container">
                    <div class="text-center mb-5">
                        <h1 class="fw-bolder"><?php echo $results->RestarauntName; ?></h1>
                        Average Rating: <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        <div class="row text-center mt-2"><div class="col-12">GF <i class="bi-twitter"></i> DF <i class="bi-twitter"></i> NF <i class="bi-twitter"></i></div></div>
                    </div>
                    <div class="row text-center">
                        <div class="col-6">
                            <div class="card border-0 bg-light h-100">
                                <div class="card-body p-4 py-lg-5">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="text-center">
                                            <div class="h6 fw-bolder">Need More Information!</div>
                                            <p class="text-muted mb-4">
                                                Contact The Restaraunt
                                                <br />
                                                <a href="">Website</a>
                                                <a href="">Call Restaraunt</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid col-6">
                            <div class="map-responsive">
                                <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=<?php echo $results->RestarauntAddress1.",".$results->RestarauntAddress2.",".$results->RestarauntTown.",".$results->RestarauntCounty.",".$results->RestarauntPostcode;?>" width="600" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-12">
                            <!-- FAQ Accordion 1-->
                            <h2 class="fw-bolder mb-3">Account &amp; Billing</h2>
                            <div class="accordion mb-5" id="accordionExample">
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingOne"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Accordion Item #1</button></h3>
                                    <div class="accordion-collapse collapse show" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>This is the first item's accordion body.</strong>
                                            It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the
                                            <code>.accordion-body</code>
                                            , though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingTwo"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Accordion Item #2</button></h3>
                                    <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>This is the second item's accordion body.</strong>
                                            It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the
                                            <code>.accordion-body</code>
                                            , though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingThree"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Accordion Item #3</button></h3>
                                    <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>This is the third item's accordion body.</strong>
                                            It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the
                                            <code>.accordion-body</code>
                                            , though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Your Website 2022</div></div>
                    <div class="col-auto">
                        <a class="link-light small" href="#!">Privacy</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Terms</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo base_url(); ?>/assets/js/scripts.js"></script>
    </body>
</html>
