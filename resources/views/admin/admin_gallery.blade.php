@extends('layouts.admin')

    @section('content_admin')
    @parent
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Gallery</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <!--<h6 class="m-0 font-weight-bold text-primary">Pegawai</h6>-->
              <div class="pull-right">
                <button class="btn btn-success" data-target="#tambahModal" data-toggle="modal">Tambah</button>
                  <!-- <a class="btn btn-info text-light" target="_blank" href="cetak-beras.html" >Print</a> -->
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Judul</th>
                      <th>Gambar</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>

                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
    @endsection
