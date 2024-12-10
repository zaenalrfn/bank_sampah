<x-layout>
    <div class="container">
        <h2>Riwayat Setoran Sampah</h2>

        @if ($wasteSubmissions->isEmpty())
            <p>Belum ada riwayat setoran.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Tanggal Setoran</th>
                        <th>Jumlah Sampah</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($wasteSubmissions as $submission)
                        <tr>
                            <td>{{ $submission->created_at->format('d-m-Y') }}</td>
                            <td>{{ $submission->weight }} kg</td>
                            <td>{{ $submission->status }}</td>
                            <td>
                                <!-- Aksi untuk melihat detail atau lainnya -->
                                <a href="" class="btn btn-info">Lihat
                                    Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</x-layout>
