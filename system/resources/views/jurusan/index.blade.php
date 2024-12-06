<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Jurusan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center"
                style="background-color: #28a745; color: white;">
                <h5 class="mb-0">Data Jurusan</h5>
                <a href="{{ url('jurusan/create') }}" class="btn btn-dark btn-sm">Tambah Data</a>
            </div>
            <div class="card-body p-0">
                <table class="table table-bordered table-striped mb-0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Jurusan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_jurusan as $jurusan)
                        <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $jurusan->Nama_jurusan }}</td>
                                <td>
                                    <center>
                                        <a href="{{ url('jurusan/'.$jurusan->Jurusan_id.'/show') }}" class="btn btn-secondary btn-sm">Detail</a>
                                        <a href="{{ url('jurusan/'.$jurusan->Jurusan_id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ url('jurusan/'.$jurusan->Jurusan_id.'/delete') }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus jurusan ini?')">Delete</button>
                                        </form>
                                    </center>
                                </td>

                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
