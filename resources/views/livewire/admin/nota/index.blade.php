<div>
    <div class="row">
        <div class="col-md-12 stretch-card">

            @if (session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h3>Daftar Nota
                        <a href="{{url('admin/kategori/tambah')}}" class="btn btn-primary btn-md float-end" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Nota</a>
                    </h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="recent-purchases-listing" class="table">
                          <thead>
                            <tr>
                                <th>No. Pesanan</th>
                                <th>Nama Pemesan</th>
                                <th>Barang</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Tanggal Acara</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>3642</td>
                                <td>Siska</td>
                                <td>Marsya Bag Medium</td>
                                <td>24</td>
                                <td>1.392.000</td>
                                <td>15 November 2023</td>
                                <td>DP</td>
                                <td>
                                    <a href="#" class="btn btn-success">Edit</a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    <div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
