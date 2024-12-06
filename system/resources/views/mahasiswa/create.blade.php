<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data Mahasiswa</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Form Tambah Data Mahasiswa</h5>
            </div>
            <div class="card-body">
                <form action="{{ url('mahasiswa/create') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nim">Nim</label>
                            <input type="text" id="nim" name="nim" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="jurusan_id">Id Jurusan</label>
                            <input type="text" id="jurusan_id" name="jurusan_id" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                                <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="password">Password</label>
                            <input type="text" id="password" name="password" class="form-control">
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
