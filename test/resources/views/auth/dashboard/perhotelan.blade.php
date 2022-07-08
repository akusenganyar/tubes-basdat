@extends('dashboard')

@section('content')
<div class="col-md-9 col-lg-10 main bg-light">
    <h1 class="display-2 hidden-xs-down">
        Perhotelan
    </h1>
    <a id="features"></a>
    <div class="row mb-3">
        <div class="col-lg-9 col-md-8">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Id</th>
                            <th>Jenis Kamar</th>
                            <th>Jumlah Kamar</th>
                            <th>Tanggal Check In</th>
                            <th>Tanggal Check Out</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($perhotelan as $p)
                            <tr>
                                <td>{{ $p->id_perhotelan }}</td>
                                <td>{{ $p->jenis_kamar }}</td>
                                <td>{{ $p->jumlah_kamar }}</td>
                                <td>{{ $p->tanggal_check_in }}</td>
                                <td>{{ $p->tanggal_check_out }}</td>
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
