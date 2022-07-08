@extends('pemesanan')

@section('create-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Pemesan') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('pemesanan.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="jenis_akomodasi" class="col-md-4 col-form-label text-md-end">{{ __('Jenis Akomodasi') }}</label>

                            <select name="jenis_akomodasi" class="form-control custom-select">
                                <option value="">{{ __('Pilih Akomodasi') }}</option>
                                <option value="penerbangan">Penerbangan</option>
                                <option value="perhotelan">Perhotelan</option>
                            </select>
                            <div class="col-md-6">
                                @error('jenis_akomodasi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Jenis Akomodasi Siap') }}
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
