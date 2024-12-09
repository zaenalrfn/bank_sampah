@php
    $role = Auth::user()->role;
@endphp
<x-layout>
    <div class="container mt-5">
        <h1>Edit Pengguna</h1>

        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}"
                    class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">edit</button>
            @if ($role === 'admin')
                <h1>tambah admin pengguna</h1>
            @endif
        </form>
    </div>
</x-layout>
