@php
    $role = Auth::user()->role;
@endphp
<x-layout>
    <h1>Selamat Datang di Dashboard</h1>
    <p>Pilih menu di sebelah kiri untuk melanjutkan.</p>
    <div class="row mt-4">
        @if ($role === 'admin')
            <!-- Example Cards -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Artikel</h5>
                        <p class="card-text">10 Artikel</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Setoran Sampah</h5>
                        <p class="card-text">500 Kg</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pengguna Terdaftar</h5>
                        <p class="card-text">50 Orang</p>
                    </div>
                </div>
            </div>
        @endif
        @if ($role === 'user')
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Riwayat setoran kamu</h5>
                        <p class="card-text">50</p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</x-layout>
