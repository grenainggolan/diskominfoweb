@extends('frontend\layout\kerangka')
@section('content')

<section class="page-header padding">
  <div class="anim-elements">
      <div class="anim-element"></div>
      <div class="anim-element"></div>
      <div class="anim-element"></div>
      <div class="anim-element"></div>
      <div class="anim-element"></div>
  </div>
<div class="container">
  <div class="page-content text-center">
      <h2>Permintaan Data Statistik</h2>
      <p>Multipurpose Saas Startup HTML Template.</p>
  </div>
</div>
</section><!--/. page-header -->

<section class="tophic-team bd-bottom padding">
  <div class="col-md-12">
    <h3>Formulir Permohonan Data Statistik</h3>
  </div>
  <div class="col-md-12">
    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
  </div>
<div class="col-lg-12 sm-padding">
  <div class="contact-form">
          <form action="contact.php" method="post" id="ajax_form" class="form-horizontal">
              <div class="form-group colum-row row">
                  <div class="col-sm-6">
                      <span>Nama Pemohon :</span>
                      <input type="text" id="nama_pemohon" name="nama_pemohon" class="form-control" placeholder="Nama Pemohon" required>
                  </div>
                  <div class="col-sm-6">
                      <span>NIP :</span>
                      <input type="number" id="nip" name="nip" class="form-control" placeholder="NIP" required>
                </div>
              </div>
              <div class="form-group row">
                  <div class="col-sm-6">
                      <span>Perangkat Daerah :</span>
                      <input type="text" id="nama_opd" name="nama_opd" class="form-control" placeholder="Nama OPD" required>
                  </div>
                  <div class="col-sm-6">
                      <span>Tujuan Permintaan Data :</span>
                      <input type="text" id="tujuan" name="tujuan" class="form-control" placeholder="Tujuan Permintaan" required>
                  </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-6">
                  <span>Upload Surat Permohonan :</span>
                  <input type="file" id="file_surat" name="file_surat" class="form-control" placeholder="Surat Permohonan" required>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                  <button id="submit" class="default-btn btn-blue" type="submit">Ajukan Permohonan</button>
                </div>
              </div>
              <div id="form-messages" class="alert" role="alert"></div>
          </form>
      </div>
</div>
 </section><!--/. tophic-team -->

@endsection