        <!-- FOOTER -->
        <section class="footer bg-white border-top">
            <div class="container container-extend">
                <footer class="py-5">
                    <div class="row">
                        <div class="col-5 col-md-5 mb-3">
                            <h5 class="mb-4">TAX SESSION</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet pellentesque velit. Cras aliquam pretium urna, nec faucibus nisi consectetur.</p>
                        </div>

                        <div class="col-1 col-md-1"></div>

                        <div class="col-3 col-md-3 mb-3">
                            <h5 class="mb-4">SOCIAL MEDIA</h5>
                            <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="<?= $setting->facebook ?>" class="nav-link p-0 text-muted">Facebook</a></li>
                            <li class="nav-item mb-2"><a href="<?= $setting->instagram ?>" class="nav-link p-0 text-muted">Instagram</a></li>
                            <li class="nav-item mb-2"><a href="<?= $setting->tiktok ?>" class="nav-link p-0 text-muted">Tiktok</a></li>
                            <li class="nav-item mb-2"><a href="<?= $setting->youtube ?>" class="nav-link p-0 text-muted">Youtube</a></li>
                            </ul>
                        </div>

                        <div class="col-3 col-md-3 mb-3">
                            <h5 class="mb-4">ALAMAT & KONTAK</h5>
                            <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Ruko Dynasty Walk kav 29B/15, Jln Jalur Sutera, Alam Sutera, </a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Tlp : 021 – 29213742 </a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Fax : 021 – 29213743</a></li>
                            </ul>
                        </div>

                    </div>

                </footer>
            </div>
            <div class="d-flex flex-column flex-sm-row justify-content-center py-4 text-center bg-light">
                <p class="mb-0"><?= date('Y') ?> Copyright Tax Session. All Rights Reserved.</p>
                
            </div>
        </section>
        <!-- FOOTER DONE -->

        <script>
            var baseUrl = '<?= site_url() ?>'
        </script>
        <!-- Boostrap Js -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>


        <!-- Jquery Js -->
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

        <!-- Slick Slider -->
        <script src="<?= base_url('assets/vendor/slick/slick.js') ?>"></script>
        <script src="<?= base_url('assets/vendor/slick/slick.min.js') ?>"></script>
        
        <!-- Custom Js -->
        <script src="<?= base_url('assets/js/custom-slick.js') ?>"></script>

        <?php 
            if(@$ajax) {
                foreach(@$ajax as $a){
                    echo "<script src='".base_url('assets/js/custom/' . $a).".js'></script>";
                }
            }
                
        ?>
    </body>
</html>