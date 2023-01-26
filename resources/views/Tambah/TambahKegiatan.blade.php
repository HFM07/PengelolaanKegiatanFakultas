<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kegiatan</title>
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
                    <a href="/Main/kegiatanApproval">Daftar Kegiatan Approval</a>
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
        <form action="{{ route('kegiatan.tambahKegiatan') }}" method="POST">
            @csrf
            <div class="mb-3 row">
                <label for="Id" class="form-label text-dark">Id</label>
                <input type="text" class="Textbox text-dark" name='Id' id="Id">
            </div>
            <div class="mb-3 row">
                <label for="PembuatId" class="form-label text-dark">PembuatId</label>
                <select name="PembuatId" id="PembuatId" class="Textbox">
                    @foreach ($user as $item => $i)
                        <option value="{{ $i->id }}">{{ $i->id }} : {{ $i->username }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3 row">
                <label for="NamaKegiatan" class="form-label text-dark">Nama Kegiatan</label>
                <input type="text" class="Textbox text-dark" name='NamaKegiatan' id="NamaKegiatan">
            </div>
            <div class="mb-3 row">
                <label for="BidangKegiatan" class="form-label text-dark">Bidang Kegiatan</label>
                <input type="text" class="Textbox text-dark" name='BidangKegiatan' id="BidangKegiatan">
            </div>
            <div class="mb-3 row">
                <label for="TglMulai" class="col-sm-2 col-form-label text-dark">Tanggal Mulai</label>
                <input type="date" class="Textbox text-dark" name='TglMulai' id="TglMulai">
            </div>
            <div class="mb-3 row">
                <label for="TglSelesai" class="col-sm-2 col-form-label text-dark">Tanggal Selesai</label>
                <input type="date" class="Textbox text-dark" name='TglSelesai' id="TglSelesai">
            </div>
            <div class="mb-3 row">
                <label for="Status" class="col-sm-2 col-form-label text-dark">Status</label>
                <select class="Textbox text-dark" name="Status" id="Status">
                    <option value="Belum disetujui">Belum disetujui</option>
                    <option value="Disetujui">Disetujui</option>
                </select>
            </div>
            <button type="submit" class="ButtonS" name="submit">Simpan</button>
        </form>
    </div>
</body>

</html>
