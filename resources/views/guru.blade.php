@extends('layouts.admin')

@section('main-content')
 <!-- Page Wrapper -->
  <div id="wrapper">

    
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

       
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Guru</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Guru SyariHub</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                  	<tr>
                      <th>Nama Lengkap</th>
                      <th>Kontak WA</th>
                      <th>Tanggal Lahir</th>
                      <th>Alamat</th>
                      <th>Pendidikan Terakhir</th>
                      <th>Email</th>
                      <th>Jumlah Khatam</th>
                      <th>Hafalan</th>
                      <th>Pengalaman</th>
                      <th>Metode Yang Dipakai</th>
                      <th>Pekerjaan</th>
                      <th>Jumlah Murid</th>
                      <th>Nomor Rekening</th>
                      <th>Kafalah</th>
                      <th>Foto</th>
                      <th>Ubah</th>
                    </tr>
                  </thead>
               
                  	<tbody>
                  		@foreach($guru as $g)
							<tr>
								<td>{{ $g->nama_lengkap }}</td>
								<td>{{ $g->kontak_wa }}</td>
								<td>{{ $g->tanggal_lahir }}</td>
								<td>{{ $g->alamat }}</td>
								<td>{{ $g->pendidikan_terakhir }}</td>
								<td>{{ $g->email }}</td>
								<td>{{ $g->jumlah_khatam }}</td>
								<td>{{ $g->hafalan }}</td>
								<td>{{ $g->pengalaman }}</td>
								<td>{{ $g->metode }}</td>
								<td>{{ $g->pekerjaan }}</td>
								<td>{{ $g->jumlah_murid }}</td>
								<td>{{ $g->nomor_rekening }}</td>
								<td>{{ $g->kafalah }}</td>
								<td>{{ $g->foto }}</td>
								<td>
									<a href="#">Edit</a>
									|
									<a href="#">Hapus</a>
								</td>
							</tr>
						@endforeach
                  	</tbody>
                </table>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

@endsection