@extends('home')
@section('content')

  <div style="padding-left: 7%;padding-top: 15px;">
    @foreach($empresas as $p)
    <div style="border: 1px solid #CCCCCC; width: 268.5px; height: 90px; float:left; margin:0 20px 20px 0;">
      <img style="width: 268.5px; height: 90px;" alt="{{ $p->razao }}" src="data:image/png;base64,{{ $p->logoppra }}" />
    </div>
    @endforeach
  </div>
@stop
