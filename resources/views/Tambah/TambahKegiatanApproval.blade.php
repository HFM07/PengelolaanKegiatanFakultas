<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kegiatan Approval</title>
    <link rel="stylesheet" href="{{ asset('css/Tampilan.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"
        integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="Menu">
        <ul>
            <li><i class="fa-solid fa-house"></i><a href="/">Home</a></li>
            <li class="Dropdown"><a href="javascript:void(0)" class="DropButton"><i class="fa-solid fa-user"></i>User</a>
                <div class="Dropdown-content">
                    <a href="/Main/user">Daftar User</a>
                    <a href="/Tambah/TambahUser">Tambah User</a>
                </div>
            </li>
            <li class="Dropdown"><a href="javascript:void(0)" class="DropButton"><i class="fa-regular fa-calendar-plus"></i>Kegiatan</a>
                <div class="Dropdown-content">
                    <a href="/Main/kegiatan">Daftar Kegiatan</a>
                    <a href="/Tambah/TambahKegiatan">Tambah Kegiatan</a>
                </div>
            </li>
            <li class="Dropdown"><a href="javascript:void(0)" class="DropButton"><i class="fa-regular fa-calendar-check"></i>Kegiatan Approval</a>
                <div class="Dropdown-content">
                    <a href="/Main/kegiatanApproval">Daftar Kegiatan Approval</a>
                    <a href="/Tambah/TambahKegiatanApproval">Tambah Kegiatan Approval</a>
                </div>
            </li>
            <li class="Dropdown"><a href="javascript:void(0)" class="DropButton"><i class="fa-solid fa-calendar-week"></i>Kegiatan Done</a>
                <div class="Dropdown-content">
                    <a href="/Main/kegiatanDone">Daftar Kegiatan Done</a>
                    <a href="/Tambah/TambahKegiatanDone">Tambah Kegiatan Done</a>
                </div>
            </li>
            <li><a href="/AboutUs"><i class="fa-solid fa-users"></i>About Us</a></li>
            <li><a href=""><i class="fa-solid fa-arrow-right-from-bracket"></i>Log Out</a></li>
        </ul>
    </div>
        <form action="{{ route('kegiatanApproval.tambahKegiatanApproval') }}" method="POST">
            @csrf
            <div class="mb-3 row">
                <label for="Id" class="form-label text-dark">Id</label>
                <input type="text" class="Textbox text-dark" name='Id' id="Id">
            </div>
            <div class="mb-3 row">
                <label for="PengevaluasiId" class="form-label text-dark">ID Pengevaluasi</label>
                <select name="PengevaluasiId" id="PengevaluasiId" class="Textbox text-dark">
                    @foreach ($user as $item => $i)
                        <option value="{{ $i->Id }}">{{ $i->Id }} : {{ $i->Username }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3 row">
                <label for="KegiatanId" class="form-label text-dark">ID Kegiatan</label>
                <select name="KegiatanId" id="KegiatanId" class="Textbox text-dark">
                    @foreach ($kegiatan as $item => $i)
                        <option value="{{ $i->Id }}">{{ $i->Id }} : {{ $i->NamaKegiatan }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3 row">
                <label for="status" class="form-label text-dark">Status</label>
                <input type="text" class="Textbox text-dark" name="status" id="status">
            </div>
            <button type="submit" class="ButtonS" name="submit">Simpan</button>
        </form>
</body>

</html>
