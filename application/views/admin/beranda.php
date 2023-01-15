      <div class="row">
        <div class="col-xl-6 col-sm-12 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">TOTAL PELATIHAN</p>
                    <h3 class="font-weight-bolder mt-3 mb-0" style="font-size: 52px;">
                      <?= $pelatihan->num_rows() ?>
                    </h3>
                    <p class="mb-0">Pelatihan</p>
                  </div>
                </div>
                <div class="col-4 d-flex justify-content-end">
                  <div class="icon icon-shape bg-warning shadow-primary text-center rounded-circle">
                    <i class="fa fa-book fa-lg pb-1 opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mt-4">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">TOTAL SELURUH PESERTA</p>
                    <h3 class="font-weight-bolder mt-3 mb-0" style="font-size: 52px;">
                      <?php
                        $peserta = $this->db->select('id')->get('peserta')->num_rows();
                        echo $peserta;
                      ?>
                    </h3>
                    <p class="mb-0">Peserta</p>
                  </div>
                </div>
                <div class="col-4 d-flex justify-content-end">
                  <div class="icon icon-shape bg-warning shadow-danger text-center rounded-circle">
                    <i class="fa fa-user fa-lg pb-1 opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-12">
          <div class="card">
            <div class="card-header p-3">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">PELATIHAN BERLANGSUNG</p>
            </div>
            <div class="card-body pt-0 p-3">
              <ul class="list-group">
                <li class="list-group-item border d-flex justify-content-between ps-3 mb-3 py-3 border-radius-lg">
                  <div class="d-flex align-items-center">
                    <div class="icon icon-shape me-3 bg-gradient-dark shadow text-center">
                        <i class="fa fa-book fa-lg opacity-10" aria-hidden="true"></i>
                    </div>
                    <div class="d-flex flex-column">
                        <h6 class="mb-1 text-dark text-sm">Kelas Merapikan Jahitan yang ada di kaki</h6>
                        <span class="text-xs">
                        
                        <i class="fa fa-user me-2" aria-hidden="true"></i>250 Peserta
                        </span>
                    </div>
                  </div>
                  <div class="d-flex">
                    <a href="<?= site_url('admin/pelatihan/peserta') ?>" class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto">
                        <i class="fa fa-arrow-right fa-lg" aria-hidden="true"></i>
                    </a>
                  </div>
                </li>
                <li class="list-group-item border d-flex justify-content-between ps-3 mb-3 py-3 border-radius-lg">
                  <div class="d-flex align-items-center">
                    <div class="icon icon-shape me-3 bg-gradient-dark shadow text-center">
                        <i class="fa fa-book fa-lg opacity-10" aria-hidden="true"></i>
                    </div>
                    <div class="d-flex flex-column">
                        <h6 class="mb-1 text-dark text-sm">Kelas Merapikan Jahitan yang ada di kaki</h6>
                        <span class="text-xs">
                        
                        <i class="fa fa-user me-2" aria-hidden="true"></i>250 Peserta
                        </span>
                    </div>
                  </div>
                  <div class="d-flex">
                    <a href="<?= site_url('admin/pelatihan/peserta') ?>" class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto">
                        <i class="fa fa-arrow-right fa-lg" aria-hidden="true"></i>
                    </a>
                  </div>
                </li>
              </ul>
                <p class="mb-0 text-center">
                    <a class="mb-0 text-warning icon-move-right" href="<?= site_url('admin/pelatihan/') ?>">Tampilkan semua
                        <i class="fa fa-arrow-right ms-2" aria-hidden="true"></i>
                    </a>
                </p>
            </div>
          </div>
        </div>
      </div>