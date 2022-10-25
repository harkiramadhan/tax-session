
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
        <!--   Core JS Files   -->
        <script src="<?= base_url() ?>assets/js/core/popper.min.js"></script>
        <script src="<?= base_url() ?>assets/js/core/bootstrap.min.js"></script>
        <script src="<?= base_url() ?>assets/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="<?= base_url() ?>assets/js/plugins/smooth-scrollbar.min.js"></script>
        <script src="<?= base_url() ?>assets/js/plugins/chartjs.min.js"></script>

        <!-- Quils JS -->
        <script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
        <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>

        <script>
            var quill = new Quill('#editor', {
                theme: 'snow'
            });
        </script>

        <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
        </script>

        <!-- datatable -->
        <script>
            $(document).ready(function () {
                $('#example').DataTable();
            });
        </script>

        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="<?= base_url() ?>assets/js/argon-dashboard.min.js?v=2.0.4"></script>
    </body>

</html>