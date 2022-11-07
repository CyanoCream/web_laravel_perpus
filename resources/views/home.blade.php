@extends('layouts.app')

@section('content')
@if (Auth::user()->role == 'admin')
<h3 class="m-5 text-center">CRUD Keseluruhan Tabel Book_Scools</h3>
<h6 class="ml-5 mr-5 mb-5 mt-1 text-center">Untuk Menampilkan data Buku tiap Sekolah Klik Nama Sekolah</h6>
<h6 class="ml-5 mr-5 mb-5 mt-1 text-center">Untuk CRUD Data Buku dan Data Sekolah Silahkan klik navbar drop down Tampil data CRUD</h6>
       
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
                    <td><a href="{{route('data.sekolah',['book_schools' => $row->id])}}" target="_blank"> {{$row->schools->name}} </a></td>
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
@elseif(Auth::user()->role == 'user')
<h5 class="m-5 text-center">Pinjam Buku</h5>
      
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
      <div>
     
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
                    <td><a href="{{route('data.sekolah',['book_schools' => $row->id])}}" target="_blank"> {{$row->schools->name}} </a></td>
                    <td>
                        <form action="{{route('create.pinjam')}}" method="post">
                            @csrf
                            <input type="hidden" value="{{$row->id}}" name="id_pinjam">
                            <button class="btn btn-success" type="submit">Pinjam</button>
                        </form>
                        </td>
                    </tr>
                   @endforeach
            </tbody>
            </table>
            </div>
        </div>
</div>

<h5 class="m-5 text-center">Buku Terpinjam</h5>
      
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
      <div>
     
      </div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Peminjam</th>
                <th scope="col">Nama Buku</th>
                <th scope="col">Nama Sekolah</th>
                 </tr>
            </thead>
                <tbody>
                    <!-- {{$pinjam}} -->
                   @foreach($pinjam as $row)
                    <tr>
                    <th scope="row">{{++$i}}</th>
                    <td>{{Auth::user()->name}}</td>
                    <td>{{$row->books->name}}</td>
                    <td><a href="{{route('data.sekolah',['book_schools' => $row->id])}}" target="_blank"> {{$row->schools->name}} </a></td>
                    <td>
                       </td>
                    </tr>
                   @endforeach
            </tbody>
            </table>
            </div>
        </div>
</div>
@endif
@endsection
