@extends('layouts.master')

@section('content')    
<div class="container">
      <a href="/student/create" class="btn btn-primary btn-sm mt-2">
          create data
        </a>
      
    <div class="row mt-3">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Depan</th>
                    <th>Nama Belakang</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                    @php
                        $no=1;
                    @endphp
                @forelse ($students as $student)    
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$student->nama_depan}}</td>
                    <td>{{$student->nama_belakang}}</td>
                    <td>{{$student->alamat}}</td>
                    <td>
                        <form action="/student/{{$student->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="/student/{{$student->id}}/edit" class="btn btn-warning btn-sm">edit</a>
                            <input type="submit" class="btn btn-danger btn-sm" value="delete">
                        </form>
                    </td>
                </tr>
                @empty
                    <p>tidak ada data</p>
                @endforelse
            </tbody>
        </table>
    </div>
</div>


@endsection
