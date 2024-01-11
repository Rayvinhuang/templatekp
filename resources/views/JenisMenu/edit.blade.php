@extends('layout.main')
@section('title', 'Update Jenis Menu')

@section('content')
                    <form class="forms-sample" method="POST" action="{{ route("jenisMenu.update", $jenisMenu->id)}}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                        <div class="form-group">
                            <label for="exampleInputUsername1">Nama Jenis</label>
                            <input type="text" class="form-control" name="namaJenis" placeholder="Masukan Nama Jenis" value="{{$jenisMenu->namaJenis}}">
                            @error('namaJenis')
                                <label class="text-danger">{{ $message }} </label>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{ url('makanan')}}" class="btn btn-light">Batal</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
