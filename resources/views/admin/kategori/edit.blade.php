@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Edit Kategori
                    <a href="{{url('admin/kategori')}}" class="btn btn-primary btn-md text-white float-end">Kembali</a>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{url('admin/kategori/'.$kategori->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="mb-3">
                            <label>Nama</label>
                            <input type="text" name="nama" value="{{$kategori->nama}}"class="form-control" />
                            @error('nama')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Status</label>
                            <input type="checkbox" name="status" {{$kategori->status == '1' ? 'checked':''}}/>
                            @error('status')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
    
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary float-end">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection