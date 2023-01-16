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
                <form action="{{ route('kegiatan.tambahKegiatan') }}" method="POST">
                    @csrf
                    <div class="mb-3 row">
                        <label for="Id" class="form-label">Id</label>
                        <input type="text" class="form-control" name='Id' id="Id">
                    </div>
                    <div class="mb-3 row">
                        <label for="NamaKegiatan" class="form-label">Nama Kegiatan</label>
                        <input type="text" class="form-control" name='NamaKegiatan' id="NamaKegiatan">
                    </div>
                    <div class="mb-3 row">
                        <label for="TglMulai" class="col-sm-2 col-form-label">Tanggal Mulai</label>
                        <input type="date" class="form-control" name='TglMulai' id="TglMulai">
                    </div>
                    <div class="mb-3 row">
                        <label for="TglSelesai" class="col-sm-2 col-form-label">Tanggal Selesai</label>
                        <input type="date" class="form-control" name='TglSelesai' id="TglSelesai">
                    </div>
                    <div class="mb-3 row">
                        <label for="Status" class="col-sm-2 col-form-label">Status</label>
                        <input type="text" class="form-control" name="Status" id="Status">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
            </div>
        </form>
    </body>
</html>
