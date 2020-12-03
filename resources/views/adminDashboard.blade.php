@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <thead>

                    </thead>
                    <tbody>
                        @foreach ($umkms as $key => $umkm)
                            <tr>
                                <td>{{$umkm -> owner}}</td>
                                <td>{{$umkm -> idNumber}}</td>
                                <td>{{$umkm -> dob}}</td>
                                <td>{{$umkm -> title}}</td>
                                <td>{{$umkm -> field}}</td>
                                <td>{{$umkm -> description}}</td>
                                <td>{{$umkm -> address}}</td>
                                <td>{{$umkm -> district}}</td>
                                <td>{{$umkm -> number}}</td>
                                <td><img src="{{asset('storage/'.$umkm -> image)}}" width="100px" alt="{{'image'.$key}}"></td>
                                <td>{{$umkm -> verified}}</td>
                                <td>
                                    <a href="{{route('showUpdate', ['id' => $umkm->id])}}">Edit</a>
                                    <form action="{{route('umkmDelete', ['id' => $umkm->id])}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <button>Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
