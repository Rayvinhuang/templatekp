@extends('layout.main')
@section('title', 'Tambah Customer')

@section('content')
    <form class="forms-sample" method="POST" action="{{ route("customer.store")}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputUsername1">Nama Customer</label>
            <input type="text" class="form-control" name="namaCustomer" placeholder="Masukan Nama Customer">
            @error('namaCustomer')
                <label class="text-danger">{{ $message }} </label>
            @enderror
        </div>
        <div class="form-group">
        <label for="exampleInputUsername1">No Telepon</label>
        <input type="text" class="form-control" name="noTelp" placeholder="Masukan Nomor Telepon">
        @error('noTelp')
            <label class="text-danger">{{ $message }} </label>
        @enderror
        </div>
        <div class="form-group">
            <label>Membership</label>
            <select name="membership_id" class="form-control">
                <option value="">Pilih Membership</option>
                @foreach ($membership as $item)
                <option value="{{ $item->id }}">{{ $item-> jenisMembership }}</option>
                @endforeach
            </select>
            @error('membership_id')
            <label class="text-danger">{{ $message }} </label>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <a href="{{ url('customer')}}" class="btn btn-light">Batal</button>
    </form>
@endsection
