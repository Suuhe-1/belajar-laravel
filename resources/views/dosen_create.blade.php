@extends('layout', ['title' => 'Form Dosen'])
@section('content2')
<div class="card col-lg-8 m-auto mt-4">
    <div class="card-body">
        <h2 class="card-title">Form Dosen</h2>
        <div class="row align-items-center m-auto">
            <form action="/dosen" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Dosen</label>
                    <input type="text" class="form-control @error ('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                    <span class="text-danger">{{ $errors->first('nama') }}</span>
                </div>

                <div class="mb-3">
                    <label for="nidn" class="form-label">NIND</label>
                    <input type="numeric" class="form-control @error ('nidn') is-invalid @enderror" id="nidn" name="nidn" value="{{ old('nidn') }}">
                    <span class="text-danger">{{ $errors->first('nidn') }}</span>
                </div>

                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select form-select-sm @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin" name="jenis_kelamin">
                        <option value="" disabled selected>Pilih Jenis Kelamin</option>
                        <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                    <span class="text-danger">{{ $errors->first('jenis_kelamin') }}</span>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat">{{ old('alamat') }}</textarea>
                    <span class="text-danger">{{ $errors->first('alamat') }}</span>
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
