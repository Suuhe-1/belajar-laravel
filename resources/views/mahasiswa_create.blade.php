@extends('layout', ['title' => 'Form Mahasiswa'])
@section('content1')
<div class="card col-lg-8 m-auto mt-4">
    <div class="card-body">
        <h2 class="card-title">Form Masiswa</h2>
        <div class="row align-items-center m-auto">
            <form action="/mahasiswa" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Mahasiswa</label>
                    <input type="text" class="form-control @error ('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                    <span class="text-danger">{{ $errors->first('nama') }}</span>

                </div>
                <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="numeric" class="form-control @error ('nim') is-invalid @enderror" id="nim" name="nim" value="{{ old('nim') }}">
                    <span class="text-danger">{{ $errors->first('nim') }}</span>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
