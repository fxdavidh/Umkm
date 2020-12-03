<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>
                <div>{{$error}}</div>
            </div>
        @endforeach
    @endif

    <form action="{{route('updateUmkm', ['id' => $umkmUpdate->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div>
            <label for="owner">Nama</label>
            <input type="text" value="{{$umkmUpdate->owner}}" name="owner" placeholder="nama">
        </div>
        <div>
            <label for="idNumber">idNumber</label>
            <input type="text" value="{{$umkmUpdate->idNumber}}" name="idNumber" placeholder="idNumber">
        </div>
        <div>
            <label for="dob">dob</label>
            <input type="date" value="{{$umkmUpdate->dob}}" name="dob" placeholder="dob">
        </div>
        <div>
            <label for="title">title</label>
            <input type="text" value="{{$umkmUpdate->title}}" name="title" placeholder="title">
        </div>
        <div>
            <label for="field">field</label>
            <input type="text" value="{{$umkmUpdate->field}}" name="field" placeholder="field">
        </div>
        <div>
            <label for="description">description</label>
            <input type="text" value="{{$umkmUpdate->description}}" name="description" placeholder="description">
        </div>
        <div>
            <label for="address">address</label>
            <input type="text" value="{{$umkmUpdate->address}}" name="address" placeholder="address">
        </div>
        <div>
            <label for="district">district</label>
            <input type="text" value="{{$umkmUpdate->district}}" name="district" placeholder="district">
        </div>
        <div>
            <label for="number">number</label>
            <input type="text" value="{{$umkmUpdate->number}}" name="number" placeholder="number">
        </div>
        {{-- <div>
            <label for="image">image</label>
            <input type="file" value="{{asset('storage/'.$umkmUpdate -> image)}}" name="image">
        </div> --}}
        <div>
            <label for="verified">verified</label>
            <input type="text" value="{{$umkmUpdate->verified}}" name="verified" placeholder="verified">
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>