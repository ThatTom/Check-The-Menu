<?= $this->extend('included') ?>

<?= $this->section('content') ?>
    <!-- Header-->
    <header class="py-5">
        <div class="container px-lg-5">
            <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                <div class="m-4 m-lg-5">
                    <h1 class="display-5 fw-bold">Welcome to Check The Menu</h1>
                    <p class="fs-4">We reaserch, check and verify a large number of food providers to ensure you can find somewhere close that can cater to your dietry requirments.</p>
                    <form class="mt-4" action="/directory" method="get">
                        <div class="input-group">
                            <div class="form-floating col-lg-6 col-md-12">
                                <input class="form-control" type="text" name="businessname" id="businessname" placeholder="Enter Bussiness Name"/>
                                <label for="floatingPassword">Enter Bussiness Name</label>
                            </div>
                            <div class="form-floating col-lg-6 col-md-12 mb-4">
                                <input class="form-control" type="text" name="town" id="town" placeholder="Enter Town Name"/>
                                <label for="town">Enter Town Name</label>
                            </div>

                            <div class="accordion mb-4 col-12" id="accordionExample">
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingOne"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Allergies</button></h3>
                                    <div class="accordion-collapse collapse" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                                        <div class="accordion-body">
                                        <div class="row">    
                                            <div class="col-6">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="celery" name="celery" value="1">
                                                        <label class="form-check-label" for="celery">Celery</label>
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="gluten" name="gluten" value="1">
                                                        <label class="form-check-label" for="gluten">Gluten</label>
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="crustaceans" name="crustaceans" value="1">
                                                        <label class="form-check-label" for="crustaceans">Crustaceans</label>
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="eggs" name="eggs" value="1">
                                                        <label class="form-check-label" for="eggs">Eggs</label>
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="fish" name="fish" value="1">
                                                        <label class="form-check-label" for="fish">Fish</label>
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="lupin" name="lupin" value="1">
                                                        <label class="form-check-label" for="lupin">Lupin</label>
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="milk" name="milk" value="1">
                                                        <label class="form-check-label" for="milk">Milk</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="molluscs" name="molluscs" value="1">
                                                        <label class="form-check-label" for="molluscs">Molluscs</label>
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="mustard" name="mustard" value="1">
                                                        <label class="form-check-label" for="mustard">Mustard</label>
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="nuts" name="nuts" value="1">
                                                        <label class="form-check-label" for="nuts">Nuts</label>
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="peanuts" name="peanuts" value="1">
                                                        <label class="form-check-label" for="peanuts">Peanuts</label>
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="sesameseeds" name="sesameseeds" value="1">
                                                        <label class="form-check-label" for="sesameseeds">Sesame Seeds</label>
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="soya" name="soya" value="1">
                                                        <label class="form-check-label" for="soya">Soya</label>
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="sulphurdioxide" name="sulphurdioxide" value="1">
                                                        <label class="form-check-label" for="flexSwitchCheckDefault">Sulphur Dioxide</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="btn-group col-12" role="group" aria-label="Basic example">
                            <button class="btn btn-lg btn-primary btn-block col-6" id="button-search" type="submit"><i class="bi bi-search"></i> Search Directory</button>
                            <a class="btn btn-lg btn-warning btn-block col-6 <?php if($userState != 1) { echo "disabled"; } ?>" href="/directory/favourites" <?php if($userState != 1) { echo "aria-disabled=true"; } ?>><i class="bi bi-star"></i> My Favourites</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <!-- Page Content-->
    <section class="pt-4">
        <div class="container px-lg-5">
            <!-- Page Features-->
            <div class="row gx-lg-5">
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <a href="#scroll-target"><div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-bar-chart-steps"></i></div></a>
                            <h2 class="fs-4 fw-bold">Tier System</h2>
                            <p class="mb-4">Simple grading to help you understand the options the orgnisation has</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <a href="https://www.checkthemenu.uk/about#funding"><div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-currency-pound"></i></div></a>
                            <h2 class="fs-4 fw-bold">Free for all</h2>
                            <p class="mb-4">Check The Menu is and will always be free for everyone to use and access</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <a href="#scroll-target"><div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-people-fill"></i></div></a>
                            <h2 class="fs-4 fw-bold">Community Driven</h2>
                            <p class="mb-4">Open source data keeps it updated and the most relevent for everyone</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <a href="https://www.support.checkthemenu.uk"><div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-question-lg"></i></div></a>
                            <h2 class="fs-4 fw-bold">Support</h2>
                            <p class="mb-0">Support provided by our team for the whole community</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <a href="#scroll-target"><div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-code"></i></div></a>
                            <h2 class="fs-4 fw-bold">Simple clean code</h2>
                            <p class="mb-0">We keep our dependencies up to date and squash bugs as they come!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <a href="#scroll-target"><div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-patch-check"></i></div></a>
                            <h2 class="fs-4 fw-bold">A name you trust</h2>
                            <p class="mb-0">Start Bootstrap has been the leader in free Bootstrap templates since 2013!</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Call to action-->
            <aside class="bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-2 mb-5">
                <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                    <div class="mb-4 mb-xl-0">
                        <div class="fs-3 fw-bold text-white">Check The Menu - Newsletter</div>
                        <div class="text-white-50">Sign up for our newsletter for the latest updates.</div>
                    </div>
                    <div class="ms-xl-4">
                        <div class="input-group mb-2">
                            <input class="form-control" type="text" placeholder="Email address..." aria-label="Email address..." aria-describedby="button-newsletter" />
                            <button class="btn btn-outline-light" id="button-newsletter" type="button">Sign up</button>
                        </div>
                        <div class="small text-white-50">We care about privacy, and will never share your data.</div>
                    </div>
                </div>
            </aside>
        </div>
    </section>
<?= $this->endSection() ?>