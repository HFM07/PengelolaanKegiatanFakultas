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
