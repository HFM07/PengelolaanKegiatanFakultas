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
                    <div class="mb-3 row">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name='username' id="username">
                    </div>
                </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <input type="password" class="form-control" name='password' id="password">
                    </div>
                </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <input type="email" class="form-control" name='email' id="email">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
            </div>
        </form>
    </body>
</html>
