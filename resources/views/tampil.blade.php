@extends('layouts.app')

@section('content')
<h3 class="m-5 text-center">Data Buku Pada {{$book_schools[0]->schools->name}}</h3>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
      <div>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah Buku
        </button>
        @include('create')
      </div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Buku</th>
                <th scope="col">Nama Sekolah</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
                <tbody>
                   @foreach($book_schools as $row)
                    <tr>
                    <th scope="row">{{++$i}}</th>
                    <td>{{$row->books->name}}</td>
                    <td>{{$row->schools->name}}</td>
                    <td>
                        <a href="{{route('delete.pivot',['book_schools' => $row->id])}}" type="button" class="btn btn-danger">Hapus</a>
                        <button  type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal{{$row->id}}">Edit</button>
                        @include('edit')
                    </td>
                    </tr>
                   @endforeach
            </tbody>
            </table>
            </div>
        </div>
</div>
@endsection
