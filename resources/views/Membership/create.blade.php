@extends('layout.main')
@section('title', 'Tambah Membership')

@section('content')
    <form class="forms-sample" method="POST" action="{{ route("membership.store")}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputUsername1">Nama Membership</label>
            <input type="text" class="form-control" name="jenisMembership" placeholder="Masukan Jenis Membership">
            @error('jenisMembership')
                <label class="text-danger">{{ $message }} </label>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <a href="{{ url('membership')}}" class="btn btn-light">Batal</button>
    </form>
@endsection
