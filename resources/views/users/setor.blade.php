<x-layout :title="['title' => 'Setor']">
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Setor Sampah</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="container mt-5">
            <h1>Setor Sampah</h1>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <!-- Form Setor Sampah -->
            <form action="{{ route('waste-submission.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="waste_type" class="form-label">Jenis Sampah (organik/anorganik)</label>
                    <input type="text" name="waste_type" id="waste_type" class="form-control"
                        placeholder="Masukkan jenis sampah" required>
                </div>

                <div class="mb-3">
                    <label for="weight" class="form-label">Berat Sampah (kg)</label>
                    <input type="number" name="weight" id="weight" class="form-control" step="0.01"
                        placeholder="Masukkan berat sampah" required>
                </div>

                <div class="mb-3">
                    <label for="deposit_time" class="form-label">Tanggal setor</label>
                    <input type="date" name="deposit_time" id="deposit_time" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Kirim Setoran</button>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>

</x-layout>
