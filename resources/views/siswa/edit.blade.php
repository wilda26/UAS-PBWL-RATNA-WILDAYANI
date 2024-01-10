<div class="modal fade" id="edit{{ $row['id'] }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="{{ url('/siswa/update/' . $row['id']) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Siswa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama"
                            value="{{ $row['nama'] }}">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Siswa</label>
                        <select name="jk" id="jk" class="form-select">
                            <option value="Laki-Laki" {{ $row['jk'] == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki
                            </option>
                            <option value="Perempuan" {{ $row['jk'] == 'Perempuan' ? 'selected' : '' }}>Perempuan
                            </option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat Siswa</label>
                        <input type="text" class="form-control" id="alamat" name="alamat"
                            value="{{ $row['alamat'] }}">
                    </div>
                    <div class="mb-3">
                        <label for="nohp" class="form-label">Np Hp Siswa</label>
                        <input type="text" class="form-control" id="nohp" name="nohp"
                            value="{{ $row['no_hp'] }}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </form>
</div>
