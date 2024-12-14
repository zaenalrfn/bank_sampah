@php
    $role = Auth::user()->role;
@endphp
<x-layout>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <h1>Overview</h1>
    <div class="row mt-4">
        @if ($role === 'admin')
            <!-- Example Cards -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Artikel</h5>
                        <p class="card-text">{{ $totalArticles }} Artikel</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Setoran Sampah</h5>
                        <p class="card-text">{{ $totalSetoranSampah }} Kg</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pengguna Terdaftar</h5>
                        <p class="card-text">{{ $totalPengguna }} Orang</p>
                    </div>
                </div>
            </div>
        @endif
        @if ($role === 'user')
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total riwayat setoran kamu</h5>
                        @if ($totalSetoranSampahUser)
                            <p class="card-text">{{ $totalSetoranSampahUser }}</p>
                        @else
                            <p class="card-text">Kamu belum setor sampah</p>
                        @endif
                    </div>
                </div>
            </div>
        @endif
    </div>
</x-layout>
