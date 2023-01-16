<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kegiatan Done</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="alert alert-success text-center" role="alert">
            <h1>
                Data Kegiatan Done
            </h1>
        </div>
        <a href="{{ route('kegiatan_done.create') }}" class="btn btn-primary mb-4">Tambah KegiatanDone</a>
        <table class="table table-hover table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Id</th>
                    <th>Kegiatan Id</th>
                    <th>Pengevaluasi Id</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Bukti Terlaksana</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kegiatan_done as $item => $i)
                    <tr>
                        <td>{{ $item + 1 }}</td>
                        <td>{{ $i->Id }}</td>
                        <td>{{ $i->kegiatan->Id }}</td>
                        <td>{{ $i->user->Username }}</td>
                        <td>{{ $i->TglMulai }}</td>
                        <td>{{ $i->TglSelesai }}</td>
                        <td>{{ $i->BuktiTerlaksana }}</td>
                        <td>
                            <a href="{{ route('kegiatan_done') }}/{{ $i->Id }}/edit" class="btn btn-warning">Edit</a>
                            <a href="javascript:void(0)" class="btn btn-danger" data-id="{{ $i->Id }}">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js"
        integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.btn-danger').click(function(e) {
                e.preventDefault();
                var data = $(this).data('Id');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                        $.ajax({
                            type: "DELETE",
                            url: "{{ route('kegiatan_done') }}/" + $(this).data('Id') +
                                "/hapus",
                            success: function(response) {
                                location.reload();
                            }
                        });
                    }
                })
            })
        });
    </script>
</body>
</html>
