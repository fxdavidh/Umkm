<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/admin/create" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">Nama</label>
            <input type="text" name="name" placeholder="name">
        </div>
        <div>
            <label for="email">email</label>
            <input type="email" name="email" placeholder="email">
        </div>
        <div>
            <label for="password">password</label>
            <input type="password" name="password" placeholder="password">
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>