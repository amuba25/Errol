@extends('layouts.index')
@section('content')
@foreach($ar_barang as $br)
<div class="card" style="width: 18rem;">
    @php
    if(!empty($br->foto)){
    @endphp
        <img src="{{ asset('images')}}/{{ $br->foto }}" width="100%"/>
    @php
    } else {
    @endphp
        <img src="{{ asset('images')}}/noimages.png" width="100%"/>
    @php
    }
    @endphp
    <div class="card-body">
        @foreach($ar_barang as $brg)
      <h5 class="card-title">{{$brg->kat}}</h5>
      <p class="card-text">{{$brg->nama}}</p>
      
      @endforeach
    </div>
  </div>
  <br/>
  <a class="btn btn-warning" href="{{ url('/barang')}}">Kembali</a>
@endforeach
@endsection