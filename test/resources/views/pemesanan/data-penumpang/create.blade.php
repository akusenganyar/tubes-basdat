@extends('pemesanan')

@section('create-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Pemesan') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('data-penumpang.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="nama_penumpang" class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="nama_penumpang" type="text" class="form-control @error('nama_penumpang') is-invalid @enderror" name="nama_penumpang" value="{{ old('nama_penumpang') }}" required autocomplete="nama_penumpang" autofocus>

                                @error('nama_penumpang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="NIK" class="col-md-4 col-form-label text-md-end">{{ __('NIK') }}</label>

                            <div class="col-md-6">
                                <input id="NIK" type="number" class="form-control @error('NIK') is-invalid @enderror" name="NIK" value="{{ old('NIK') }}" required autocomplete="NIK">

                                @error('NIK')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="usia" class="col-md-4 col-form-label text-md-end">{{ __('Usia') }}</label>

                            <div class="col-md-6">
                                <input id="usia" type="number" class="form-control @error('usia') is-invalid @enderror" name="usia" value="{{ old('usia') }}" required autocomplete="usia">

                                @error('usia')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="domisili" class="col-md-4 col-form-label text-md-end">{{ __('Domisili') }}</label>

                            <div class="col-md-6">
                                <input id="domisli" type="text" class="form-control @error('domisili') is-invalid @enderror" name="domisili" value="{{ old('domisili') }}" required autocomplete="domisili">

                                @error('domisili')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="no_hp" class="col-md-4 col-form-label text-md-end">{{ __('Nomor Hp') }}</label>

                            <div class="col-md-6">
                                <input id="no_hp" type="number" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ old('no_hp') }}" required autocomplete="no_hp">

                                @error('no_hp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Data Pemesan Siap') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
