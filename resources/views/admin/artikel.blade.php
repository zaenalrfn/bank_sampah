<x-layout :title="['title' => 'Artikel']">
    <h1>Artikel</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <!-- Tombol Create -->
    <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#createModal">Tambah artikel</button>

    <!-- Table -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Penulis</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $nomor = 1 + ($articles->currentPage() - 1) * $articles->perPage();
            @endphp
            @foreach ($articles as $article)
                <tr>
                    <td>{{ $nomor++ }}</td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->category }}</td>
                    <td>{{ $article->author }}</td>
                    <td>
                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                            data-bs-target="#updateModal{{ $article->id }}"><i class="bi bi-pencil-square"></i></button>
                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                            data-bs-target="#deleteModal{{ $article->id }}"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>

                <!-- Update Modal -->
                <div class="modal fade" id="updateModal{{ $article->id }}" tabindex="-1"
                    aria-labelledby="updateModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="updateModalLabel">Edit artikel</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('article.update', $article->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Judul</label>
                                        <input type="text" name="title" class="form-control"
                                            value="{{ $article->title }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="category" class="form-label">Kategori</label>
                                        <input type="text" name="category" class="form-control"
                                            value="{{ $article->category }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="author" class="form-label">Penulis</label>
                                        <input type="text" name="author" class="form-control"
                                            value="{{ $article->author }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="content" class="form-label">Content</label>
                                        <input id="x{{ $article->id }}" type="hidden" name="content"
                                            value=" {{ $article->content }}">
                                        <trix-editor input="x{{ $article->id }}"></trix-editor>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Update artikel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Delete Modal -->
                <div class="modal fade" id="deleteModal{{ $article->id }}" tabindex="-1"
                    aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">Hapus artikel</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('article.destroy', $article->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <div class="modal-body">
                                    Yakin ingin menghapus artikel :
                                    "<strong>{{ $article->title }}</strong>"?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </tbody>
    </table>
    <!-- Pagination Links -->
    <div class="d-flex justify-content-end">
        {{ $articles->links('pagination::bootstrap-5') }}
    </div>
    </div>



    <!-- Create Modal -->
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createModalLabel">Tambah artikel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('article.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul</label>
                            <input type="text" name="title" class="form-control"
                                placeholder="Enter article title" required>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Kategori</label>
                            <input type="text" name="category" class="form-control" placeholder="Enter category"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="author" class="form-label">Penulis</label>
                            <input type="text" name="author" class="form-control"
                                placeholder="Enter author name" required>
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <input id="xcontent" type="hidden" name="content">
                            <trix-editor input="xcontent"></trix-editor>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Tambah artikel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- <script>
        let editorInstance;

        $('#createModal').on('shown.bs.modal', function() {
            if (!editorInstance) {
                ClassicEditor
                    .create(document.querySelector('#content'))
                    .then(editor => {
                        editorInstance = editor;
                    })
                    .catch(error => {
                        console.error(error);
                    });
            } else {
                editorInstance.setData(''); // Reset content if CKEditor already initialized
            }
        });

        $('#createModal').on('hidden.bs.modal', function() {
            if (editorInstance) {
                editorInstance.destroy()
                    .then(() => {
                        editorInstance = null;
                    })
                    .catch(error => {
                        console.error(error);
                    });
            }
        });



        document.querySelector('form').addEventListener('submit', function() {
            const textarea = document.querySelector('#content');
            if (textarea.style.display === 'none') {
                textarea.value = 'Default content';
            }
        });
    </script> --}}
</x-layout>
