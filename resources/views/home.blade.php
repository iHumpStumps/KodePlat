@extends('layouts.app')

@section('content')
<div class="card-group">
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{title}}</h5>
      <p class="card-information">{{information}}</p>
    </div>
    {{-- <img src="..." class="card-img-bottom" alt="..."> --}}
    <div class="card-footer">
      <small class="text-muted">{{address}}, {{year}}</small>
    </div>
  </div>
</div>

@endsection
