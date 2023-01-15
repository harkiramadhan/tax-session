
            <footer class="footer pt-3  ">
                <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        © <script>
                        document.write(new Date().getFullYear())
                        </script>
                        <span class="text-bold">Tax Session</span>
                    </div>
                    </div>
                    <div class="col-lg-6">
                    </div>
                </div>
                </div>
            </footer>
            </div>
        </main>
        <script>
            var baseUrl = '<?= site_url() ?>'
        </script>
        <!--   Core JS Files   -->
        <script src="<?= base_url('assets/js/core/popper.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/core/bootstrap.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/plugins/perfect-scrollbar.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/plugins/smooth-scrollbar.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/plugins/chartjs.min.js') ?>"></script>

        <!-- Quils JS -->
        <script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
        <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>

        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        
        <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="<?= base_url('assets/js/argon-dashboard.min.js?v=2.0.4') ?>"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

        <!-- Custom JS -->
        <script src="<?= base_url('assets/js/custom.js') ?>"></script>

        <?php 
            if(@$ajax) {
                foreach(@$ajax as $a){
                    echo "<script src='".base_url('assets/js/custom/' . $a).".js'></script>";
                }
            }
                
        ?>
        <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
        </script>

        <script>
            function previewImage() {
                var element = document.getElementById("image-preview")
                element.classList.remove("d-none")
                document.getElementById("image-preview").style.display = "block"

                var oFReader = new FileReader()
                oFReader.readAsDataURL(document.getElementById("image-source").files[0])
                oFReader.onload = function(oFREvent) {
                    document.getElementById("image-preview").src = oFREvent.target.result
                }
            }
        </script>
    </body>

</html>