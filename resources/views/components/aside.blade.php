@php
    $role = Auth::user()->role;
@endphp

<div class="col-md-3 col-lg-2 sidebar d-flex flex-column p-3 border-end position-relative">
    <h3 class="text-center">Dashboard</h3>
    <hr>
    <ul class="nav flex-column bg-slate-800">
        <li class="nav-item">
            <a class="nav-link active" href="/home">📊 Overview</a>
        </li>
        @if ($role === 'admin')
            <li class="nav-item">
                <a class="nav-link" href="/article">✍️ Artikel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('waste-submission.index') }}">♻️ Setoran Sampah</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('users.index') }}">👤 Pengguna</a>
            </li>
        @endif
        @if ($role === 'user')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('waste-submission.setor') }}">📤 Setor</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('waste-submission.riwayat') }}">📜 Riwayat Setoran</a>
            </li>
        @endif
        <li class="nav-item">
            <a class="nav-link" href="{{ route('users.create') }}">📜 Profil</a>
        </li>
    </ul>

    <!-- Tombol Logout di pojok kiri bawah -->
    <form action="{{ route('logout') }}" method="POST" class="position-absolute bottom-0 mb-4">
        @csrf
        <button type="submit" class="btn btn-danger w-100">Logout</button>
    </form>
</div>
