<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/Tampilan.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"
        integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
        crossorigin="anonymous">
</head>

<body>
    <div class="LoginBox">
        <h5>Register</h5><br>
        <form action="{{ route('register')}}" method="POST">
            @csrf
            <div class="mb-3 row">
                <label for="id">Id</label>
                <input type="text" class="Textbox" name="id" id="id">
            </div>
            <div class="mb-3 row">
                <label for="username">Username</label>
                <input type="text" class="Textbox" name="username" id="username">
            </div>
            <div class="mb-3 row">
                <label for="password">Password</label>
                <input type="password" class="Textbox" name="password" id="password">
            </div>
            <div class="mb-3 row">
                <label for="email">Email</label>
                <input type="email" class="Textbox" name="email" id="email">
            </div>
            <div class="mb-3 row">
                <label for="hakAkses">HakAkses</label>
                <select class="Textbox" name="hakAkses" id="hakAkses">
                    <option value="Lv3">Lv3</option>
                </select>
            </div>
            <button type="submit" class="ButtonS">Daftar</button>
        </form>
    </div>
</body>

</html>
