<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Jurusan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin-top: 5%;
        }
        .card {
            padding: 2rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            border: none;
        }
        .form-label {
            font-weight: 600;
        }
        .btn-success {
            background: #28a745;
            font-weight: bold;
            padding: 10px 20px;
        }
        .btn-secondary {
            font-weight: bold;
            padding: 10px 20px;
        }
        .btn i {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h1 class="text-center mb-4">Edit Jurusan</h1>
            <form action="{{ url('jurusan/',$jurusan->Jurusan_id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="nama_jurusan" class="form-label"><i class="fas fa-graduation-cap"></i> Nama Jurusan</label>
                    <input type="text" class="form-control" id="nama_jurusan" name="Nama_jurusan" value="{{ $jurusan->Nama_jurusan }}" required>
                </div>
                <div class="mb-4">
                    <label for="kode_jurusan" class="form-label"><i class="fas fa-code-branch"></i> Kode Jurusan</label>
                    <input type="text" class="form-control" id="kode_jurusan" name="Kode_jurusan" value="{{ $jurusan->Kode_jurusan }}" required>
                </div>
                <div class="mb-4">
                    <label for="nama_kajur" class="form-label"><i class="fas fa-user-tie"></i> Nama Kajur</label>
                    <input type="text" class="form-control" id="nama_kajur" name="Nama_kajur" value="{{ $jurusan->Nama_kajur }}" required>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
                    <a href="{{ url('jurusan') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Batal</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
