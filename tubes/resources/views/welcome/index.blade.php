@extends('welcome')

@section('hero')
<section>
    <div class="content">
        <div class="info">
          <h2>Aplikasi pemesanan akomodasi<br><span>Penerbangan dan pemesanan hotel</span></h2>
          <p>Bersama <span><img src="{{asset('assets\img\Asikjuga.png')}}" height="60" max-width="100%"/></span> liburan anda akan menjadi "ASIK JUGA"</p>
          <a href="{{ route('data-penumpang.create') }}" class="info-btn">Pesan Sekarang</a>
        </div>
    </div>
</section>
@endsection
