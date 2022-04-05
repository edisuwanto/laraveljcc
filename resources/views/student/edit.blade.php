@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-8">
                <div class="card my-3">
                    <div class="card-body">
                        <form action="/student/{{$student->id}}" method="POST">
                            @csrf
                            @method("put")
                            <div class="form-group">
                              <label for="">Nama Depan</label>
                              <input type="text" class="form-control" name="nama_depan" value="{{$student->nama_depan}}">
                            </div>
                            <div class="form-group">
                              <label for="">Nama Belakang</label>
                              <input type="text" class="form-control" name="nama_belakang" value="{{$student->nama_belakang}}">
                            </div>
                            <div class="form-group">
                              <label for="">Alamat</label>
                              <input type="text" class="form-control" name="alamat" value="{{$student->alamat}}">
                            </div>
                            

                            <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection