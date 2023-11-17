<div>
    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Hapus Kategori</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="destroyKategori">
                <div class="modal-body">
                    Apakah yakin ingin menghapus data ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Hapus Data</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    <div class="row">
        <div class="col-md-12">

            @if (session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h3>Kategori
                        <a href="{{url('admin/kategori/tambah')}}" class="btn btn-primary btn-md float-end" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Kategori</a>
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($macam_kategoris as $kategori)
                                <tr>
                                    <td>{{$kategori->id}}</td>
                                    <td>{{$kategori->nama}}</td>
                                    <td>{{$kategori->status == '1' ? 'Hidden':'Visible'}}</td>
                                    <td>
                                        <a href="{{url('admin/kategori/'.$kategori->id.'/edit')}}" class="btn btn-success">Edit</a>
                                        <a href="#" wire:click="hapusKategori({{$kategori->id}})" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div>
                        {{$macam_kategoris->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')
    <script>
    window.addEventListener('close-modal', event => {
        $("#deleteModal").modal('hide');
    });
    </script>
@endpush