<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/register" method="POST">
        @csrf
        <label for="name">Nama</label>
        <input type="text" name="name" placeholder="Nama">
        <br/>
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Email">
        <br/>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Register</button>
    </form>
    <a href="/login">Sudah punya akun?</a>
</body>
</html>
