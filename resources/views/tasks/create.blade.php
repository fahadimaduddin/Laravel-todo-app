@extends('layouts.app')
@section('content')
<h1>New Task</h1>
@if($errors->any())
<div class="alert alert-danger" role="alert">
   <ul>
      @foreach($errors->all() as $error)
      <li>
         {{$error}}
      </li>
</div>
@endforeach
</ul>
@endif
<form action="/tasks" method="POST">
   @csrf
   <div class="form-group">
      <label for="description">Task Description</label>
      <input class="form-control" name="description"/>
   </div>
   <!-- @error('description')
<div class="alert alert-danger" role="alert">{{$message}}</div>
   @enderror -->
   <div class="form-group">
      <button type="submit" class="btn btn-primary">Create Task</button>
   </div>
</form>
@endsection