@extends('layout.main')
@section('title', 'Update Customer')

@section('content')
                    <form class="forms-sample" method="POST" action="{{ route("customer.update", $customer->id)}}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                        <div class="form-group">
                            <label for="exampleInputUsername1">Nama Customer</label>
                            <input type="text" class="form-control" name="namaCustomer" placeholder="Nama Customer" value="{{$customer->namaCustomer}}">
                            @error('namaCustomer')
                                <label class="text-danger">{{ $message }} </label>
                            @enderror
                        </div>
                        <div class="form-group">
                          <label for="exampleInputUsername1">Nomor Telepon</label>
                          <input type="text" class="form-control" name="noTelp" placeholder="Nomor Telepon" value="{{ $customer->noTelp}}">
                          @error('noTelp')
                              <label class="text-danger">{{ $message }} </label>
                          @enderror
                        </div>
                        <div class="form-group">
                            <label>Jenis Membership</label>
                            <select name="membership_id" class="form-control">
                                <option value="">Pilih Jenis Membership</option>
                                @foreach ($membership as $item)
                                    <option value="{{ $item->id }}"
                                        @if (old('membership_id', $customer->membership_id) == $item['id'])
                                            selected
                                        @endif
                                        >{{ $item-> jenisMembership }}
                                    </option>
                                @endforeach
                            </select>
                            @error('membership_id')
                                <label class="text-danger">{{ $message }} </label>
                            @enderror
                          </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{ url('customer')}}" class="btn btn-light">Batal</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
