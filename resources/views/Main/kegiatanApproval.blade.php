<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kegiatan Approval</title>
    <link rel="stylesheet" href="{{ asset('css/Tampilan.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"
        integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
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
    <div class="container">
        <table class="table table-hover table-striped table-bordered">
            <thead class="Thead">
                <tr>
                    <th>No</th>
                    <th>Id</th>
                    <th>Pembuat Id</th>
                    <th>KegiatanId</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kegiatanApproval as $item => $i)
                    <tr>
                        <td>{{ $item + 1 }}</td>
                        <td>{{ $i->Id }}</td>
                        <td>{{ $i->user->Id }}</td>
                        <td>{{ $i->kegiatan->Id }}</td>
                        <td>{{ $i->TglMulai }}</td>
                        <td>{{ $i->TglSelesai }}</td>
                        <td>{{ $i->Status }}</td>
                        <td>
                            <a href="{{ route('kegiatanApproval') }}/{{ $i->Id }}/getEditKegiatanApproval" class="ButtonS"><i class="fa-regular fa-pen-to-square"></i>Edit</a>
                            <a href="javascript:void(0)" class="ButtonH" data-id="{{ $i->Id }}"><i class="fa-solid fa-trash"></i>Hapus</a>
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

            $('.ButtonH').click(function(e) {
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
                            url: "{{ route('kegiatanApproval') }}/" + $(this).data('Id') +
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
