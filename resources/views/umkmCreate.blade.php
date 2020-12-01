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

    <form action="{{route('createUmkm')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="owner">Nama</label>
            <input type="text" name="owner" placeholder="nama">
        </div>
        <div>
            <label for="idNumber">idNumber</label>
            <input type="text" name="idNumber" placeholder="idNumber">
        </div>
        <div>
            <label for="dob">dob</label>
            <input type="date" name="dob" placeholder="dob">
        </div>
        <div>
            <label for="title">title</label>
            <input type="text" name="title" placeholder="title">
        </div>
        <div>
            <label for="field">field</label>
            <input type="text" name="field" placeholder="field">
        </div>
        <div>
            <label for="description">description</label>
            <input type="text" name="description" placeholder="description">
        </div>
        <div>
            <label for="address">address</label>
            <input type="text" name="address" placeholder="address">
        </div>
        <div>
            <label for="district">district</label>
            <input type="text" name="district" placeholder="district">
        </div>
        <div>
            <label for="number">number</label>
            <input type="text" name="number" placeholder="number">
        </div>
        <div>
            <label for="image">image</label>
            <input type="file" name="image">
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>