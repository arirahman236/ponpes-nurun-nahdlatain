@extends('layouts.admin')

    @section('content_admin')
    @parent
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Berita</h1>
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
                      <th>Isi</th>
                      <th>Kategori</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($berita as $berita)
                        <tr>
                            <th>{{$loop->iteration}}</th>
                            <td><a href="{{ route('beritas.edit',['berita'=>$berita->id]) }}">{{$berita->judul}}</a></td>
                            <td>{{$berita->gambar}}</td>
                            <td>{{$berita->isi}}</td>
                            <td>{{$berita->kategori}}</td>
                            <td>
                                <form action="{{route('beritas.destroy', $berita->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="" name="delete" data-name="{{ $berita->judul }}" class="btn btn-danger btn-sm btnAction delete-confirm" type="submit" role="button"><i class="fas fa-trash"></i></button>
                              </form>
                            </td>
                        </tr>
                    @empty
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
        <!-- Modal Tambah -->
        <div id="tambahModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <form class="form-horizontal" action="{{ route('kategoris.store') }}" method="POST" enctype="multipart/form-data">
                <!-- Modal content-->
                @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                        <h4 class="modal-title">Tambah Data </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="inputPassword3" class="control-label">Judul</label>
                                <input type="text" name="judul"  class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul') }}" required placeholder="Masukkan Judul" >
                                @error('judul')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="control-label">Gambar</label>
                                <input type="file" class="form-control-file" id="gambar" name="gambar">
                                    @error('gambar')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="control-label">Kategori</label>
                                <input type="text" name="nama_kategori"  class="form-control @error('nama_kategori') is-invalid @enderror" id="nama_kategori" name="nama_kategori" value="{{ old('nama_kategori') }}" required placeholder="Masukkan Nama Kategori" >
                                @error('nama_kategori')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="control-label">Isi</label>
                                <input type="text" name="nama_kategori"  class="form-control @error('nama_kategori') is-invalid @enderror" id="nama_kategori" name="nama_kategori" value="{{ old('nama_kategori') }}" required placeholder="Masukkan Nama Kategori" >
                                @error('nama_kategori')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Batal</button>
                            <button type="submit" class="btn btn-warning" name="tambahData"><i class="glyphicon glyphicon-save"></i> Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Modal -->
      </div>
      <!-- End of Main Content -->
    @endsection
