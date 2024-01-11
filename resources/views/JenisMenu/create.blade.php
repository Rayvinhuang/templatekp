@extends('layout.main')
@section('title', 'Tambah Jenis Menu')

@section('content')
    <form class="forms-sample" method="POST" action="{{ route("jenisMenu.store")}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputUsername1">Nama Jenis Menu</label>
            <input type="text" class="form-control" name="namaJenis" placeholder="Masukan Nama Jenis">
            @error('namaJenis')
                <label class="text-danger">{{ $message }} </label>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <a href="{{ url('jenisMenu')}}" class="btn btn-light">Batal</button>
    </form>
@endsection
