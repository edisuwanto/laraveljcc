@extends("layouts.master")

@section("content")
<div class="container">
<div class="row my-5">
        @forelse ($students as $student)    
        <div class="col-md-3 mt-2">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">{{$student->nama_depan}}</h4>
                <h5 class="card-title">{{$student->nama_belakang}}</h5>
                <p class="card-text">{{$student->alamat}}</p>
                
              </div>
            </div>
        </div>
        @empty
            <p>no data</p>
        @endforelse
      </div>
</div>
@endsection