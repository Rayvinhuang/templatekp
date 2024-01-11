@extends('layout.main')
@section('title', 'Update Minuman')

@section('content')
                    <form class="forms-sample" method="POST" action="{{ route("minuman.update", $minuman->id)}}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                        <div class="form-group">
                            <label for="exampleInputUsername1">Nama Minuman</label>
                            <input type="text" class="form-control" name="namaMinuman" placeholder="Masukan Nama Minuman" value="{{$minuman->namaMinuman}}">
                            @error('namaMinuman')
                                <label class="text-danger">{{ $message }} </label>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Jenis Menu</label>
                            <select name="jenis_id" class="form-control">
                                <option value="">Pilih Jenis Menu</option>
                                @foreach ($jenisMenu as $item)
                                <option value="{{ $item->id }}"
                                    @if (old('jenis_id', $minuman->jenis_id) == $item['id'])
                                            selected
                                            @endif
                                            >{{ $item-> namaJenis }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('jenis_id')
                                    <label class="text-danger">{{ $message }} </label>
                                    @enderror
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputUsername1">Harga</label>
                                  <input type="text" class="form-control" name="harga" placeholder="Masukan harga" value="{{ $minuman->harga}}">
                                  @error('harga')
                                      <label class="text-danger">{{ $message }} </label>
                                  @enderror
                                </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{ url('minuman')}}" class="btn btn-light">Batal</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
