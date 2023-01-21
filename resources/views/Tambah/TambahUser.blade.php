<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kegiatan</title>
    <link rel="stylesheet" href="{{ asset('css/Tampilan.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="Menu">
        <ul>
            <li><a href="/">Home</a></li>
            <li class="Dropdown"><a href="javascript:void(0)" class="DropButton">User</a>
                <div class="Dropdown-content">
                    <a href="/Main/user">Daftar User</a>
                    <a href="/Tambah/TambahUser">Tambah User</a>
                </div>
            </li>
            <li class="Dropdown"><a href="javascript:void(0)" class="DropButton">Kegiatan</a>
                <div class="Dropdown-content">
                    <a href="/Main/kegiatan">Daftar Kegiatan</a>
                    <a href="/Tambah/TambahKegiatan">Tambah Kegiatan</a>
                </div>
            </li>
            <li class="Dropdown"><a href="javascript:void(0)" class="DropButton">Kegiatan Approval</a>
                <div class="Dropdown-content">
                    <a href="/Main/kegiatanApproval">Daftar Kegiatan Approval</a>
                    <a href="/Tambah/TambahKegiatanApproval">Tambah Kegiatan Approval</a>
                </div>
            </li>
            <li class="Dropdown"><a href="javascript:void(0)" class="DropButton">Kegiatan Done</a>
                <div class="Dropdown-content">
                    <a href="/Main/kegiatanDone">Daftar Kegiatan Done</a>
                    <a href="/Tambah/TambahKegiatanDone">Tambah Kegiatan Done</a>
                </div>
            </li>
            <li><a href="">About Us</a></li>
            <li><a href="">Log Out</a></li>
        </ul>
    </div>
    <form action="{{ route('user.tambahUser') }}" method="POST">
        @csrf
        <div class="mb-3 row">
            <label for="Username" class="form-label text-dark">Username</label>
            <input type="text" class="Textbox text-dark" name='Username' id="Username">
        </div>
        <div class="mb-3 row">
            <label for="Password" class="form-label text-dark">Password</label>
            <input type="Password" class="Textbox text-dark" name='Password' id="Password">
        </div>
        <div class="mb-3 row">
            <label for="Email" class="form-label text-dark">Email</label>
            <input type="Email" class="Textbox text-dark" name='Email' id="Email">
        </div>
        <div class="mb-3 row">
            <label for="HakAkses" class="form-label text-dark">Hak Akses</label>
            <input type="HakAkses" class="Textbox text-dark" name='HakAkses' id="HakAkses">
        </div>
        </div>
        <button type="submit" class="ButtonS" name="submit">Simpan</button>
    </form>
</body>

</html>
