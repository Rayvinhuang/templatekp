@extends('layout.main')
@section('title', 'update Membership')

@section('content')
<form class="forms-sample" method="POST" action="{{ route("membership.update", $membership->id)}}"
    enctype="multipart/form-data">
    @csrf
    @method('patch')
        <div class="form-group">
            <label for="exampleInputUsername1">Nama Membership</label>
            <input type="text" class="form-control" name="jenisMembership" placeholder="Masukan Nama Jenis" value="{{$membership->jenisMembership}}">
            @error('jenisMembership')
                <label class="text-danger">{{ $message }} </label>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <a href="{{ url('membersihp')}}" class="btn btn-light">Batal</button>
      </form>
</div>
</div>
</div>
</div>
@endsection
