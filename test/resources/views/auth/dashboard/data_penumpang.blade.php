@extends('dashboard')

@section('content')
<div class="col-md-9 col-lg-10 main bg-light">
    <h1 class="display-2 hidden-xs-down">
        Data Penumpang
    </h1>
    <a id="features"></a>
    <div class="row mb-3">
        <div class="col-lg-9 col-md-8">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Usia</th>
                            <th>Domisili</th>
                            <th>Nomor Hp</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_penumpang as $penumpang)
                            <tr>
                                <td>{{ $penumpang->id_penumpang }}</td>
                                <td>{{ $penumpang->nama_penumpang }}</td>
                                <td>{{ $penumpang->NIK }}</td>
                                <td>{{ $penumpang->usia }}</td>
                                <td>{{ $penumpang->domisili }}</td>
                                <td>{{ $penumpang->no_hp }}</td>
                                <td>action</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
