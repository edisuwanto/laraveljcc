@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-8">
                <div class="card my-3">
                    <div class="card-body">
                        <form action="/student" method="POST">
                            @csrf
                            <div class="form-group">
                              <label for="">Nama Depan</label>
                              <input type="text" class="form-control" name="nama_depan">
                            </div>
                            <div class="form-group">
                              <label for="">Nama Belakang</label>
                              <input type="text" class="form-control" name="nama_belakang">
                            </div>
                            <div class="form-group">
                              <label for="">Alamat</label>
                              <input type="text" class="form-control" name="alamat">
                            </div>
                            

                            <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection