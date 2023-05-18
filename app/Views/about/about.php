<?= $this->extend('included') ?>

<?= $this->section('content') ?>
<!-- Header-->
<header class="py-5">
    <div class="container px-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xxl-6">
                <div class="text-center my-5">
                    <h1 class="fw-bolder mb-3">Making Eating Out Easier</h1>
                    <p class="lead fw-normal text-muted mb-4">We think everyone should be able to find food and make a
                        choice about what they want to eat instead of being told what they can and can't eat.</p>
                    <a class="btn btn-primary btn-lg" href="#scroll-target">Read our story</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- About section two-->
<section class="py-5 bg-light">
    <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0"
                    src="https://dummyimage.com/600x400/343a40/6c757d" alt="..." /></div>
            <div class="col-lg-6">
                <h2 class="fw-bolder">Growth &amp; beyond</h2>
                <p class="lead fw-normal text-muted mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto
                    est, ut esse a labore aliquam beatae expedita. Blanditiis impedit numquam libero molestiae et fugit
                    cupiditate, quibusdam expedita, maiores eaque quisquam.</p>
            </div>
        </div>
    </div>
</section>
<!-- Team members section-->
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="text-center">
            <h2 class="fw-bolder">Our team</h2>
            <p class="lead fw-normal text-muted mb-5">## TBC ##</p>
        </div>
        <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
            <div class="col mb-5 mb-5 mb-xl-0">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d"
                        alt="..." />
                    <h5 class="fw-bolder">Tom</h5>
                    <div class="fst-italic text-muted">Founder &amp; CTO</div>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Launch demo
                        modal</button>
                </div>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-5 mb-5 mb-xl-0">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d"
                        alt="..." />
                    <h5 class="fw-bolder">Danny</h5>
                    <div class="fst-italic text-muted">Founder &amp; COO</div>
                </div>
            </div>
            <div class="col mb-5 mb-5 mb-sm-0">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d"
                        alt="..." />
                    <h5 class="fw-bolder">Emma</h5>
                    <div class="fst-italic text-muted">Founder &amp; Chief Menu Checker</div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d"
                        alt="..." />
                    <h5 class="fw-bolder">Alice</h5>
                    <div class="fst-italic text-muted">Founder &amp; Media Manager</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About section one-->
<section class="py-5 bg-light" id="scroll-target">
    <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0"
                    src="https://dummyimage.com/600x400/343a40/6c757d" alt="..." /></div>
            <div class="col-lg-6">
                <h2 class="fw-bolder">Our founding</h2>
                <p class="lead fw-normal text-muted mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto
                    est, ut esse a labore aliquam beatae expedita. Blanditiis impedit numquam libero molestiae et fugit
                    cupiditate, quibusdam expedita, maiores eaque quisquam.</p>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>