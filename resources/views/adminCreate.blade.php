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
        <label for="name">Nama</label>
        <input type="text" value="" placeholder="nama" id="name">
        <label for="email">Email</label>
        <input type="email" placeholder="email@gmail.com" id="email">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <button type="submit">Submit</button>
    </form>
</body>
</html>