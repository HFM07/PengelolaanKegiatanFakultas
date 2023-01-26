<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/Tampilan.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"
        integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="Menu">
        <ul>
            <li><i class="fa-solid fa-house"></i><a href="/Main/home">Home</a></li>
            <li class="Dropdown"><a href="javascript:void(0)" class="DropButton"><i
                        class="fa-solid fa-user"></i>User</a>
                <div class="Dropdown-content">
                    <a href="/Main/user">Daftar User</a>
                    <a href="/Tambah/TambahUser">Tambah User</a>
                </div>
            </li>
            <li class="Dropdown"><a href="javascript:void(0)" class="DropButton"><i
                        class="fa-regular fa-calendar-plus"></i>Kegiatan</a>
                <div class="Dropdown-content">
                    <a href="/Main/kegiatan">Daftar Kegiatan</a>
                    <a href="/Tambah/TambahKegiatan">Tambah Kegiatan</a>
                </div>
            </li>
            <li class="Dropdown"><a href="javascript:void(0)" class="DropButton"><i
                        class="fa-regular fa-calendar-check"></i>Kegiatan Approval</a>
                <div class="Dropdown-content">
                    <a href="/Tambah/TambahKegiatanApproval">Tambah Kegiatan Approval</a>
                </div>
            </li>
            <li class="Dropdown"><a href="javascript:void(0)" class="DropButton"><i
                        class="fa-solid fa-calendar-week"></i>Kegiatan Done</a>
                <div class="Dropdown-content">
                    <a href="/Main/kegiatanDone">Daftar Kegiatan Done</a>
                    <a href="/Tambah/TambahKegiatanDone">Tambah Kegiatan Done</a>
                </div>
            </li>
            <li><a href="{{ route('logout') }}"><i class="fa-solid fa-arrow-right-from-bracket"></i>Log Out</a></li>
        </ul>
    </div>
    <div class="container">
        <br><br><br><br>
        @if (session('loginError'))
            <div class="alert alert-danger">
                {{ session('loginError') }}
            </div>
        @endif
        <div class="Box">
            <h5>Detail Jobdesk:</h5>
            <ul>
                <li>M. Dzaki Lingga sebagai Backend</li>
                - Mengurus controller
                <li>Fauzan Nur Aziz sebagai Frontend</li>
                - Mengurus login dan register serta menu home <br>
                - Mengurus logut <br>
                - Mengurus menu edit pada setiap bagian <br>
                - Mengurus hak akses
                <li>Habib Fauzan Mahardika sebagai Backend dan Frontend</li>
                - Mengurus kesalahan dan kekurangan pada Frontend dan Backend <br>
                - Mengurus tampilan website <br>
                - Mengurus migration, model dan routes <br>
                - Mengurus hak akses
                <li>Julia Utami Endtia Putri sebagai Frontend</li>
                - Mengurus menu utama pada setiap bagian
                <li>Muara Bagdja Al Masdoek sebagai Frontend</li>
                - Mengurus menu tambah pada setiap bagian
            </ul>
        </div>
    </div>
</body>

</html>
