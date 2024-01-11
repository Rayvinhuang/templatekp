@extends('layout.main')
@section('title', 'Tambah Customer')

@section('content')
    <form class="forms-sample" method="POST" action="{{ route("customer.store")}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Makanan</label>
            <select name="makanan_id" class="form-control">
                <option value="">Pilih Menu Makanan</option>
                @foreach ($makanan as $item)
                <option value="{{ $item->id }}">{{ $item-> namaMembership }}</option>
                @endforeach
            </select>
            @error('makanan_id')
            <label class="text-danger">{{ $message }} </label>
            @enderror
        </div>

        <div class="form-group">
            <label>Minuman</label>
            <select name="minuman_id" class="form-control">
                <option value="">Pilih Minuman</option>
                @foreach ($minuman as $item)
                <option value="{{ $item->id }}">{{ $item-> namaMinuman }}</option>
                @endforeach
            </select>
            @error('minuman_id')
            <label class="text-danger">{{ $message }} </label>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputUsername1">Jumlah</label>
            <input type="text" class="form-control" name="jumlah" placeholder="Jumlah">
            @error('jumlah')
                <label class="text-danger">{{ $message }} </label>
            @enderror
            </div>

        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <a href="{{ url('pemesanan')}}" class="btn btn-light">Batal</button>
    </form>
@endsection
