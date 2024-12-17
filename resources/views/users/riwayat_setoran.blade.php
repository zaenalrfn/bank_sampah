<x-layout :title="['title' => 'Riwayat Setoran']">
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
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#detail{{ $submission->id }}">
                                    Detail
                                </button>

                            </td>
                            <!-- Modal detail riwayat -->
                            <div class="modal fade" id="detail{{ $submission->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                {{ $submission->user->name }}</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h6>{{ $submission->created_at->format('d-m-Y') }}</h6>
                                            <h6>{{ $submission->weight }} kg</h6>
                                            <h6>{{ $submission->status }}</h6>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</x-layout>
