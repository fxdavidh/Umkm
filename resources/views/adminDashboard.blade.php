@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header ">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">No.KTP</th>
                                    <th scope="col">Nama UMKM</th>
                                    <th scope="col">Bidang UMKM</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Kecamatan</th>
                                    <th scope="col">No WA</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Verifikasi</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($umkms as $key => $umkm)
                                    <tr>
                                        <td>{{$umkm -> owner}}</td>
                                        <td>{{$umkm -> dob}}</td>
                                        <td>{{$umkm -> email}}</td>
                                        <td>{{$umkm -> idNumber}}</td>
                                        <td>{{$umkm -> title}}</td>
                                        <td>{{$umkm -> field}}</td>
                                        <td>{{$umkm -> description}}</td>
                                        <td>{{$umkm -> district}}</td>
                                        <td>{{$umkm -> number}}</td>
                                        <td><img src="{{asset('storage/'.$umkm -> image)}}" width="100px" alt="{{'image'.$key}}"></td>
                                        <td>{{$umkm -> verified}}</td>
                                        <td>
                                            <a href="{{route('showUpdate', ['id' => $umkm->id])}}" class="btn btn-success">Edit</a>
                                            <form action="{{route('umkmDelete', ['id' => $umkm->id])}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
