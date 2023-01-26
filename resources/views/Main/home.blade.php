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
            <li><a href="{{ route('logout') }}"><i class="fa-solid fa-arrow-right-from-bracket"></i>Logout</a></li>
        </ul>
    </div>
    <div class="container">
        <br><br><br><br>
        @if (session('loginError'))
            <div class="alert alert-danger">
                {{ session('loginError') }}
            </div>
        @endif
        <h5>Penjelasan singkat</h5>
        <div class="Box">
            <ul>
                <li>Terdapat 6 menu navigasi dengan fungsi berbeda</li>
                <li>Menu Home adalah halaman awal yang anda lihat saat ini</li>
                <li>Menu User hanya dapat diakses oleh admin</li>
                <li>Menu Kegiatan dapat diakses oleh semua pengguna</li>
                <li>Menu Kegiatan Approval dapat diakses oleh staff dan admin</li>
                <li>Menu Kegiatan Done dapat diakses oleh staff dan admin</li>
                <li>Menu log Out dapat diakses oleh semua pengguna</li>
            </ul>
        </div>
        <h5>Penjelasan mendalam</h5>
        <div class="Box">
            <p>Pada menu user, kegiatan dan kegiatan done terdapat fungsi tambah edit serta hapus.
                Pada setiap menu akan menampilkan data yang berhubungan sama menu itu.
                Contoh menu user menampilkan daftar user yang telah terdaftar pada sistem.
                Menu yang berbeda mungkin butuh akses yang berbeda juga demi menjamin keamanan data.
                Pada dasarnya setiap user hanya bisa mendapat hak akses dasar saja.
                Jika anda ingin hak akses lebih tinggi untuk mengakses lebih banyak menu anda hanya dapat mendapatkanya,
                jika sudah mendapatkan izin dari admin.
            </p>
        </div>
        <h5>Anggota dan jobdesk</h5>
        <div class="Box">
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
