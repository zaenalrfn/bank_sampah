<x-layout>
    <h1>Daftar Setoran Sampah</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tipe Sampah</th>
                <th>Berat</th>
                <th>Waktu Setor</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $number = 1 + ($wasteSubmissions->currentPage() - 1) * $wasteSubmissions->perPage();
            @endphp
            @foreach ($wasteSubmissions as $submission)
                <tr>
                    <td>{{ $number++ }}</td>
                    <td>{{ $submission->user->name }}</td>
                    <td>{{ $submission->waste_type }}</td>
                    <td>{{ $submission->weight }} kg</td>
                    <td>{{ $submission->deposit_time }}</td>
                    <td>{{ ucfirst($submission->status) }}</td>
                    <td>
                        <!-- Tombol untuk buka modal -->
                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                            data-bs-target="#statusModal{{ $submission->id }}">Update
                            Status</button>

                        <!-- Tombol Hapus -->
                        <form action="{{ route('waste-submission.destroy', $submission->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                <!-- Modal untuk Update Status -->
                @if (isset($submission))
                    <div class="modal fade" id="statusModal{{ $submission->id }}" tabindex="-1"
                        aria-labelledby="statusModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <form action="{{ route('waste-submission.update', $submission->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="statusModalLabel">Update Status Setoran Sampah</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select name="status" id="status" class="form-control">
                                                <option value="pending"
                                                    {{ $submission->status == 'pending' ? 'selected' : '' }}>
                                                    Pending</option>
                                                <option value="completed"
                                                    {{ $submission->status == 'completed' ? 'selected' : '' }}>
                                                    Completed</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Update Status</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                @endif
            @endforeach
        </tbody>
    </table>
    <!-- Pagination Links -->
    <div class="d-flex justify-content-end">
        {{ $wasteSubmissions->links('pagination::bootstrap-5') }}
    </div>
    </div>



</x-layout>
