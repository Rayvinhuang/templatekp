@extends('layout.main')
@section('title', 'Makanan')

@section('content')
    <form class="forms-sample" method="POST" action="{{ route("makanan.store")}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputUsername1">Nama Makanan</label>
            <input type="text" class="form-control" name="namaMakanan" placeholder="Masukan Nama Makanan">
            @error('namaMakanan')
                <label class="text-danger">{{ $message }} </label>
            @enderror
        </div>
        <div class="form-group">
            <label>Jenis Menu</label>
            <select name="jenis_id" class="form-control">
                <option value="">Pilih Jenis Menu</option>
                @foreach ($jenisMenu as $item)
                <option value="{{ $item->id }}">{{ $item-> namaJenis }}</option>
                @endforeach
            </select>
            @error('jenis_id')
            <label class="text-danger">{{ $message }} </label>
            @enderror
        </div>
        <div class="form-group">
        <label for="exampleInputUsername1">Harga</label>
        <input type="text" class="form-control" name="harga" placeholder="Masukan Harga">
        @error('harga')
            <label class="text-danger">{{ $message }} </label>
        @enderror
        </div>

        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <a href="{{ url('makanan')}}" class="btn btn-light">Batal</button>
    </form>
@endsection
