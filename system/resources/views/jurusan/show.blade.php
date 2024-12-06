<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Data Jurusan</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: Arial, sans-serif;
        }
        .card {
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }
        .card-header {
            background: linear-gradient(90deg, #28a745, #218838);
            color: white;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
        }
        .card-body {
            font-size: 18px;
            padding: 2rem;
        }
        .detail-item {
            margin-bottom: 1.5rem;
        }
        .detail-item i {
            color: #28a745;
            margin-right: 10px;
        }
        .btn-primary {
            font-size: 16px;
            font-weight: 600;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <i class="fas fa-university"></i> Detail Jurusan
        </div>
        <div class="card-body">
            <div class="detail-item">
                <h5><i class="fas fa-graduation-cap"></i> Nama Jurusan:</h5>
                <p>{{ $jurusan->Nama_jurusan }}</p>
            </div>
            <div class="detail-item">
                <h5><i class="fas fa-code-branch"></i> Kode Jurusan:</h5>
                <p>{{ $jurusan->Kode_jurusan }}</p>
            </div>
            <div class="detail-item">
                <h5><i class="fas fa-user-tie"></i> Nama Kajur:</h5>
                <p>{{ $jurusan->Nama_kajur }}</p>
            </div>
            <a href="{{ url('jurusan') }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Kembali</a>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html>
