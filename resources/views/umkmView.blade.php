<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>view</h1>
    <thead>

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
</body>
</html>