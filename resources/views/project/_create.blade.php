@extends('layouts.app')

@section('content')
<form method="POST" action="{{route('project.store')}}">
    @csrf
    <div class="form-group">
        <label for="title">
            Titel:
        </label>
        <input type="text" class="form-control" name="title" />          
    </div>

    <div class="form-group">
        <label for="information">
            Information:
        </label>
        <input type="text" class="form-control" name="information" />          
    </div>
    
    <div class="form-group">
        <label for="metal">
            Metall:
        </label>
        <input type="text" class="form-control" name="metal" />          
    </div>
    
    <div class="form-group">
        <label for="buyer">
            Beställare:
        </label>
        <input type="text" class="form-control" name="buyer" />          
    </div>

    <div class="form-group">
        <label for="address">
            Address:
        </label>
        <input type="text" class="form-control" name="address" />          
    </div>

    <div class="form-group">
        <label for="year">
            År:
        </label>
        <input type="text" class="form-control" name="year" />          
    </div>

    <button type="submit" class="btn btn-primary-outline">Ladda upp!</button>
</form>

@endsection