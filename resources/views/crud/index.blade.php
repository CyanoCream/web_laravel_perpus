@extends('layouts.app')

@section('content')
<h3 class="m-5 text-center">CRUD Data Buku dan Data Sekolah</h3>
<div class="m-5 p-5">
<div>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah Buku
        </button>
        @include('crud.form')
    </div>

     
        <table class="table">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Buku</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $row)
            <tr>
            <th scope="row">{{++$i}}</th>
            <td>{{$row->name}}</td>
            <td>
                <a href="{{route('delete.book',['books' => $row->id])}}" type="button" class="btn btn-danger">Hapus</a>
                <button  type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal{{$row->id}}">Edit</button>
                @include('crud.edit')
            </td>
            </tr>
            @endforeach
        </tbody>
        </table>
<div>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModall">
        Tambah Sekolah
        </button>
        @include('crud.sekolah')
    </div>
            <table class="table table-striped table-hover">
            <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Sekolah</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($schools as $row)
                        <tr>
                        <th scope="row">{{++$index}}</th>
                        <td>{{$row->name}}</td>
                        <td>
                        <a href="{{route('delete.school',['schools' => $row->id])}}" type="button" class="btn btn-danger">Delete</a>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModall{{$row->id}}">Edit</button>
                        </td>
                        </tr>
                        @include('crud.update')
                        @endforeach
                    </tbody>
            </table>
</div>
@stop