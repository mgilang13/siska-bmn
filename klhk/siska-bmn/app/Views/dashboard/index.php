<?= $this->extend('layout/template') ?>

<?= $this->section('mainContent'); ?>
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Kendaraan</h4>
            </div>
            <div class="card-body">
              10
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="far fa-newspaper"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Pajak < 1 bulan</h4>
            </div>
            <div class="card-body">
              42
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-warning">
            <i class="far fa-file"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Pajak < 2 bulan</h4>
            </div>
            <div class="card-body">
              3
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-success">
            <i class="fas fa-circle"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Kendaraan Aman</h4>
            </div>
            <div class="card-body">
              47
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 col-md-12 col-12 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4>Data Kendaraan Terakhir</h4>
            <div class="card-header-action">
              <a href="/kendaraan" class="btn btn-primary">View All</a>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table table-striped mb-0">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nomor Polisi</th>
                    <th>Tanggal Bayar Pajak</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1. </td>
                    <td class="font-weight-600">
                      B 1234 PQW
                      <div class="table-links">
                        Jenis Kendaraan: <a href="#">Roda Empat</a>
                        <div class="bullet"></div>
                        <a href="#">View</a>
                      </div>
                    </td>
                    <td>
                      <a href="#" class="font-weight-600">
                        12 November 2022
                      </a>
                    </td>
                    <td>
                      <div class="badge badge-success">Aman</div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 col-12 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4>Aktifitas Terakhir</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled list-unstyled-border">
              <li class="media">
                <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-1.png" alt="avatar">
                <div class="media-body">
                  <div class="float-right text-primary">Now</div>
                  <div class="media-title">B 1234 PQW</div>
                  <span class="text-small text-muted">Pajak berhasil diperpanjang</span>
                </div>
              </li>
            </ul>
            <div class="text-center pt-1 pb-1">
              <a href="/kendaraan" class="btn btn-primary btn-lg btn-round">
                View All
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?= $this->endSection(); ?>

<?= $this->section('spesific-js'); ?>
<!-- Page Specific JS File -->
<script src="/assets/js/page/index-0.js"></script>
<?= $this->endSection(); ?>