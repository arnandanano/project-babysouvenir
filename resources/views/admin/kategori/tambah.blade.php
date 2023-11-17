@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Tambah Kategori
                    <a href="{{url('admin/kategori')}}" class="btn btn-primary btn-md text-white float-end">Kembali</a>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{url('admin/kategori')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="mb-3">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" />
                            @error('nama')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Status</label>
                            <input type="checkbox" name="status" />
                            @error('status')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
    
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary float-end">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection