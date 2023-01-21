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
            <li><a href="">About Us</a></li>
            <li><a href="">Log Out</a></li>
        </ul>
    </div>
    <h3>Tambah Kegiatan/h3>
        <form action="{{ route('kegiatanDone.tambahKegiatanDone') }}" method="POST">
            @csrf
            <div class="mb-3 row">
                <label for="Id" class="form-label text-dark">Id</label>
                <input type="text" class="Textbox text-dark" name='Id' id="Id">
            </div>
            <div class="mb-3">
                <label for="KegiatanId" class="form-label text-dark">ID Kegiatan</label>
                <select name="KegiatanId" id="KegiatanId" class="Textbox text-dark">
                    @foreach ($kegiatan as $item => $i)
                        <option value="{{ $i->Id }}">{{ $i->Id }} : {{$i->NamaKegiatan}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="PengevaluasiId" class="form-label text-dark">ID Pengevaluasi</label>
                <select name="PengevaluasiId" id="PengevaluasiId" class="Textbox text-dark">
                    @foreach ($user as $item => $i)
                        <option value="{{ $i->Username }}">{{ $i->Username }} : {{ $i->Username }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3 row">
                <label for="TglMulai" class="form-label text-dark">Tanggal Mulai</label>
                <input type="date" class="Textbox text-dark" name='TglMulai' id="TglMulai">
            </div>
            <div class="mb-3 row">
                <label for="TglSelesai" class="form-label text-dark">Tanggal Selesai</label>
                <input type="date" class="Textbox text-dark" name='TglSelesai' id="TglSelesai">
            </div>
            <div class="mb-3 row">
                <label for="bukti_terlaksana" class="form-label text-dark">Bukti Terlaksana</label>
                <input type="file" class="Textbox text-dark" name="bukti_terlaksana" id="bukti_terlaksana">
            </div>
            <button type="submit" class="ButtonS" name="submit">Simpan</button>
        </form>
</body>

</html>
=======
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kegiatan</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>

    <body>
        <h3>Tambah Kegiatan/h3>
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <a href="{{route('kegiatan')}}" class="btn btn-primary">Kembali</a>
                <form action="{{ route('kegiatan.store') }}" method="POST">
                    @csrf
                    <input type="hidden" class="form-control" name='id'  id="id">
                    <div class="mb-3 row">
                        <label for="tgl_mulai" class="col-sm-2 col-form-label">Tanggal Mulai</label>
                        <input type="date" class="form-control" name='tgl_mulai' id="tgl_mulai">
                    </div>
                </div>
                    <div class="mb-3 row">
                        <label for="tgl_selesai" class="col-sm-2 col-form-label">Tanggal Selesai</label>
                        <input type="date" class="form-control" name='tgl_selesai' id="tgl_selesai">
                    </div>
                </div>
                    <div class="mb-3 row">
                        <label for="bukti_terlaksana" class="col-sm-2 col-form-label">Bukti Terlaksana</label>
                        <input type="file" class="form-control" name="bukti_terlaksana" id="bukti_terlaksana">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="kegiatan_id" class="form-label">ID Kegiatan</label>
                    <select name="kegiatan_id" id="kegiatan_id" class="form-control">
                        @foreach ($kegiatanApproval as $item => $i)
                            <option value="{{ $i->id }}">{{ $i->kegiatan }}</option>
                        @endforeach
                    </select>
            </div>
                <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
            </div>
        </form>
    </body>
</html>
>>>>>>> bc671aca241ff3f25d2b71fd3c74266d8f5fc0a9
