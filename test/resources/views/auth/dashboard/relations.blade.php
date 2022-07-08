@extends('dashboard')

@section('content')
<div class="col-md-9 col-lg-10 main bg-light">
    <h1 class="display-2 hidden-xs-down">
        Relasi
    </h1>
    <a id="features"></a>
    <div class="row mb-3">
        <div class="col-lg-9 col-md-8">
            @foreach ($user as $u)
                <div class="card mb-3" style="max-width: 18rem;">
                    <div class="card-header">{{ $u->name }}</div>
                    <div class="card-body">
                        @foreach ($u->pemesanan as $p)
                            <div class="card mb-3" style="max-width: 18rem;">
                                <p class="card-header">{{ $p->jenis_akomodasi }}</p>
                                <div class="card-body">
                                    @foreach ($p->penerbangan as $pp)
                                        <h5 class="card-title">{{ $pp->nama_penerbangan }}</h5>
                                        <p class="card-text">Daftar Penumpang : </p>
                                        @foreach ($pp->data_penumpang as $dp)
                                            @if ($dp->penerbangan_id != null)
                                                <p class="card-text">{{  $dp->nama_penumpang }}</p>
                                            @endif
                                        @endforeach
                                    @endforeach
                                    @foreach ($p->perhotelan as $ph)
                                        <h5 class="card-title">{{ $ph->nama_hotel }}</h5>
                                        <p class="card-text">Daftar pemesan : </p>
                                        @foreach ($ph->data_penumpang as $dph)
                                            @if ($dph->perhotelan_id != null)
                                                <p class="card-text">{{  $dph->nama_penumpang }}</p>
                                            @endif
                                        @endforeach
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!--/row-->
    <a id="more"></a>
    <!--/row-->
    <a id="flexbox"></a>
    <!--/main col-->
</div>
@endsection
