<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('searchUmkm') }}" method="GET">
		<input type="text" name="search" placeholder="Cari Pegawai .." value="{{ old('search') }}">
		<input type="submit" value="search">
	</form>
    <h1>view</h1>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">No.KTP</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Nama UMKM</th>
                    <th scope="col">Bidang UMKM</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Kecamatan</th>
                    <th scope="col">No WA</th>
                    <th scope="col">Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($umkms as $key => $umkm)
                    @if ($umkm -> verified == 'yes')
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
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>