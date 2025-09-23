<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Arial', sans-serif; background-color: #f4f7f6; }
        .hero-section { background-color: #007bff; color: white; padding: 50px 0; text-align: center; }
        .card { margin-top: 20px; box-shadow: 0 4px 8px rgba(0,0,0,0.05); border: none; }
        .card-header { background-color: #343a40; color: white; font-weight: bold; }
        .footer { margin-top: 50px; padding: 20px 0; background-color: #e9ecef; text-align: center; }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/profil-mahasiswa">Profil Mahasiswa</a>
        </div>
    </nav>

    <section class="hero-section">
        <div class="container">
           <h1>Selamat Datang, {{ $name }}!</h1>
        </div>
    </section>

    <section class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-header">Data Diri</div>
                    <div class="card-body">
                        <p><strong>Umur:</strong> {{ $my_age }} tahun</p>
                        <p><strong>Semester Saat Ini:</strong> {{ $current_semester }}</p>
                        <div class="alert alert-info mt-3"><strong>Pesan:</strong> {{ $motivation_message }}</div>

                        <h5 class="mt-4">Daftar Hobi:</h5>
                        <ul class="list-group list-group-flush mb-3">
                            @foreach ($hobbies as $hobi)
                                <li class="list-group-item">{{ $hobi }}</li>
                            @endforeach
                        </ul>

                        <h5 class="mt-4">Target Studi:</h5>
                        <p><strong>Target Wisuda:</strong> {{ $tgl_harus_wisuda }}</p>
                        <p><strong>Sisa Waktu:</strong> <span class="badge text-bg-danger">{{ $time_to_study_left }} hari lagi</span></p>
                        <p><strong>Cita-cita:</strong> {{ $future_goal }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container"><p>&copy; {{date('Y')}} {{ $name }}</p></div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
