<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/Tampilan.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
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
                    <a href="/Edit/EditUser">Edit User</a>
                </div>
            </li>
            <li class="Dropdown"><a href="javascript:void(0)" class="DropButton">Kegiatan</a>
                <div class="Dropdown-content">
                    <a href="/Main/kegiatan">Daftar Kegiatan</a>
                    <a href="/Tambah/TambahKegiatan">Tambah Kegiatan</a>
                    <a href="/Edit/EditKegiatan">Edit Kegiatan</a>
                </div>
            </li>
            <li class="Dropdown"><a href="javascript:void(0)" class="DropButton">Kegiatan Approval</a>
                <div class="Dropdown-content">
                    <a href="/Main/kegiatanApproval">Daftar Kegiatan Approval</a>
                    <a href="/Tambah/TambahKegiatanApproval">Tambah Kegiatan Approval</a>
                    <a href="/Edit/EditKegiatanApproval">Edit Kegiatan Approval</a>
                </div>
            </li>
            <li class="Dropdown"><a href="javascript:void(0)" class="DropButton">Kegiatan Done</a>
                <div class="Dropdown-content">
                    <a href="/Main/kegiatanDone">Daftar Kegiatan Done</a>
                    <a href="/Tambah/TambahKegiatanDone">Tambah Kegiatan Done</a>
                    <a href="/Edit/EditKegiatanDone">Edit Kegiatan Done</a>
                </div>
            </li>
        </ul>
    </div>
    <div class="container">
    </div>
</body>
</html>
