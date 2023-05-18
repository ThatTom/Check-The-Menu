<?= $this->extend('included') ?>

<?= $this->section('content') ?>
    <!-- Header-->
    <header class="py-5">
        <div class="container px-lg-5">
            <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                <form>
                    <div class="row">
                        <div class="form-group col-6">
                            <label class="mb-3" for="keywordentry">Business Name</label>
                            <input type="text" name="businessname" class="form-control" id="keywordentry" value="<?php echo urldecode($data['businessname']); ?>">
                        </div>
                        <div class="form-group col-6">
                            <label class="mb-3" for="keywordentry">Town</label>
                            <input type="text" name="town" class="form-control" id="keywordentry" value="<?php echo urldecode($data['town']); ?>">
                        </div>
                    </div>
                    <div class="form-group mt-4 form-check-inline btn-group col-12">
                        <input type="checkbox" class="btn-check" value="1" name="celery" id="celery" autocomplete="off" <?php if($data['celery'] == 1) { echo "checked"; } ?>>
                        <label class="btn btn-outline-success" for="celery">Celery</label><br>

                        <input type="checkbox" class="btn-check" value="1" name="gluten" id="gluten" autocomplete="off" <?php if($data['gluten'] == 1) { echo "checked"; } ?>>
                        <label class="btn btn-outline-success" for="gluten">Gluten</label><br>

                        <input type="checkbox" class="btn-check" value="1" name="crustaceans" id="crustaceans" autocomplete="off" <?php if($data['crustaceans'] == 1) { echo "checked"; } ?>>
                        <label class="btn btn-outline-success" for="crustaceans">Crustaceans</label><br>

                        <input type="checkbox" class="btn-check" value="1" name="eggs" id="eggs" autocomplete="off" <?php if($data['eggs'] == 1) { echo "checked"; } ?>>
                        <label class="btn btn-outline-success" for="eggs">Eggs</label><br>

                        <input type="checkbox" class="btn-check" value="1" name="fish" id="fish" autocomplete="off"<?php if($data['fish'] == 1) { echo "checked"; } ?>>
                        <label class="btn btn-outline-success" for="fish">Fish</label><br>

                        <input type="checkbox" class="btn-check" value="1" name="lupin" id="lupin" autocomplete="off" <?php if($data['lupin'] == 1) { echo "checked"; } ?>>
                        <label class="btn btn-outline-success" for="lupin">Lupin</label><br>

                        <input type="checkbox" class="btn-check" value="1" name="milk" id="milk" autocomplete="off" <?php if($data['milk'] == 1) { echo "checked"; } ?>>
                        <label class="btn btn-outline-success" for="milk">Milk</label><br>
                    </div>

                    <div class="form-group mt-4 form-check-inline btn-group col-12">
                        <input type="checkbox" class="btn-check" value="1" name="molluscs" id="molluscs" autocomplete="off" <?php if($data['molluscs'] == 1) { echo "checked"; } ?>>
                        <label class="btn btn-outline-success" for="molluscs">Molluscs</label><br>

                        <input type="checkbox" class="btn-check" value="1" name="mustard" id="mustard" autocomplete="off" <?php if($data['mustard'] == 1) { echo "checked"; } ?>>
                        <label class="btn btn-outline-success" for="mustard">Mustard</label><br>

                        <input type="checkbox" class="btn-check" value="1" name="nuts" id="nuts" autocomplete="off" <?php if($data['nuts'] == 1) { echo "checked"; } ?>>
                        <label class="btn btn-outline-success" for="nuts">Nuts</label><br>

                        <input type="checkbox" class="btn-check" value="1" name="peanuts" id="peanuts" autocomplete="off" <?php if($data['peanuts'] == 1) { echo "checked"; } ?>>
                        <label class="btn btn-outline-success" for="peanuts">Peanuts</label><br>

                        <input type="checkbox" class="btn-check" value="1" name="sesameseeds" id="sesameseeds" autocomplete="off" <?php if($data['sesameseeds'] == 1) { echo "checked"; } ?>>
                        <label class="btn btn-outline-success" for="sesameseeds">Sesame Seeds</label><br>

                        <input type="checkbox" class="btn-check" value="1" name="soya" id="soya" autocomplete="off" <?php if($data['soya'] == 1) { echo "checked"; } ?>>
                        <label class="btn btn-outline-success" for="soya">Soya</label><br>

                        <input type="checkbox" class="btn-check" value="1" name="sulphurdioxide" id="sulphurdioxide" autocomplete="off" <?php if($data['sulphurdioxide'] == 1) { echo "checked"; } ?>>
                        <label class="btn btn-outline-success" for="sulphurdioxide">Sulphur Dioxide</label><br>
                    </div>
                    <div class="row mt-4">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block col-12">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </header>
    <!-- Page Content-->
    <section class="">
        <div class="container mb-5 text-center">
            <h1><?php echo count($results); ?> Restaraunts Found</h1>
        </div>
        <div class="container px-lg-5 mb-5">
            <div class="row">
            <?php
            foreach ($results as $row) 
            {
            ?>
                <div class="col-lg-4 mb-5">
                    <div class="card h-100 shadow border-0">
                        <img class="card-img-top" src="https://dummyimage.com/600x350/ced4da/6c757d" alt="...">
                        <div class="card-body p-4">
                            <a class="text-decoration-none link-dark" href="/directory/<?php echo $row->RestarauntID;?>"><h5 class="card-title mb-3"><?php echo $row->RestarauntName;?></h5></a>
                            <div class="badge <?php if($row->RestarauntCelery=="1") { echo "bg-success"; } else { echo "bg-danger"; } ?> bg-gradient rounded-pill mb-2">Celery</div>
                            <div class="badge <?php if($row->RestarauntGluten=="1") { echo "bg-success"; } else { echo "bg-danger"; } ?> bg-gradient rounded-pill mb-2">Gluten</div>
                            <div class="badge <?php if($row->RestarauntCelery=="1") { echo "bg-success"; } else { echo "bg-danger"; } ?> bg-gradient rounded-pill mb-2">Crustaceans</div>
                            <div class="badge <?php if($row->RestarauntCelery=="1") { echo "bg-success"; } else { echo "bg-danger"; } ?> bg-gradient rounded-pill mb-2">Eggs</div>
                            <div class="badge <?php if($row->RestarauntCelery=="1") { echo "bg-success"; } else { echo "bg-danger"; } ?> bg-gradient rounded-pill mb-2">Fish</div>
                            <div class="badge <?php if($row->RestarauntCelery=="1") { echo "bg-success"; } else { echo "bg-danger"; } ?> bg-gradient rounded-pill mb-2">Lupin</div>
                            <div class="badge <?php if($row->RestarauntCelery=="1") { echo "bg-success"; } else { echo "bg-danger"; } ?> bg-gradient rounded-pill mb-2">Milk</div>
                            <div class="badge <?php if($row->RestarauntCelery=="1") { echo "bg-success"; } else { echo "bg-danger"; } ?> bg-gradient rounded-pill mb-2">Molluscs</div>
                            <div class="badge <?php if($row->RestarauntCelery=="1") { echo "bg-success"; } else { echo "bg-danger"; } ?> bg-gradient rounded-pill mb-2">Mustard</div>
                            <div class="badge <?php if($row->RestarauntCelery=="1") { echo "bg-success"; } else { echo "bg-danger"; } ?> bg-gradient rounded-pill mb-2">Tree Nuts</div>
                            <div class="badge <?php if($row->RestarauntCelery=="1") { echo "bg-success"; } else { echo "bg-danger"; } ?> bg-gradient rounded-pill mb-2">Peanuts</div>
                            <div class="badge <?php if($row->RestarauntCelery=="1") { echo "bg-success"; } else { echo "bg-danger"; } ?> bg-gradient rounded-pill mb-2">Sesame Seeds</div>
                            <div class="badge <?php if($row->RestarauntCelery=="1") { echo "bg-success"; } else { echo "bg-danger"; } ?> bg-gradient rounded-pill mb-2">Soya</div>
                            <div class="badge <?php if($row->RestarauntCelery=="1") { echo "bg-success"; } else { echo "bg-danger"; } ?> bg-gradient rounded-pill mb-2">Sulphur Dioxide</div>
                            <p class="card-text mb-2"><?php echo $row->RestarauntAddress1 . "<br>" . $row->RestarauntAddress2 . "<br>" . $row->RestarauntTown . "<br>" . $row->RestarauntCounty . "<br>" . $row->RestarauntPostcode;?></p>
                            <p class="card-text mb-0">Website: <a href="<?php echo $row->RestarauntWebsite; ?>" target="_blank"><?php echo $row->RestarauntWebsite; ?></a> <br> Telephone: <a href="tel:<?php echo $row->RestarauntPhone; ?>"><?php echo $row->RestarauntPhone; ?></a></p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>