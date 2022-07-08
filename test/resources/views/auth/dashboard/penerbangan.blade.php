@extends('dashboard')

@section('content')
<div class="col-md-9 col-lg-10 main bg-light">
    <h1 class="display-2 hidden-xs-down">
        Penerbangan
    </h1>
    <a id="features"></a>
    <div class="row mb-3">
        <div class="col-lg-9 col-md-8">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Id</th>
                            <th>Nama Penerbagan</th>
                            <th>Jumlah Penumpang</th>
                            <th>Asal Keberangkatan</th>
                            <th>Tujuan Keberangkatan</th>
                            <th>Tanggal Keberangkatan</th>
                            <th>Kelas Penerbangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penerbangan as $p)
                            <tr>
                                <td>{{ $p->id_penerbangan }}</td>
                                <td>{{ $p->nama_penerbangan }}</td>
                                <td>{{ $p->jumlah_penumpang }}</td>
                                <td>{{ $p->asal_keberangkatan }}</td>
                                <td>{{ $p->tujuan_keberangkatan }}</td>
                                <td>{{ $p->tanggal_keberangkatan }}</td>
                                <td>{{ $p->kelas_penerbangan }}</td>
                                <td>action</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/row-->
    <a id="more"></a>
    <!--/row-->
    <a id="flexbox"></a>
    <!--/main col-->
</div>
@endsection
