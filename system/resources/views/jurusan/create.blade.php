<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data Jurusan</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-success text-white">
            <h5 class="mb-0">Form Tambah Data Jurusan</h5>
        </div>
        <div class="card-body">
            <form action="{{ url('jurusan/create') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama_jurusan">Nama Jurusan</label>
                    <input type="text" id="nama_jurusan" name="nama_jurusan" class="form-control">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="kode_jurusan">Kode Jurusan</label>
                        <input type="text" id="kode_jurusan" name="kode_jurusan" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nama_kajur">Nama Kajur</label>
                        <input type="text" id="nama_kajur" name="nama_kajur" class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn btn-success">SIMPAN</button>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
