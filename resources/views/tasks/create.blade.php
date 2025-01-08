@extends('layouts.app')
@section('content')
<h2>Create Task</h2>
<form action="{{route('tasks.store')}}" method="post">
@csrf
<label for="title">Title</label>
<input type="text" id="title" name="title" required>
<label for="description">Description</label>
<textarea id="description" name="description" cols="30" rows="10"></textarea>
<label for="status">Status</label>
<select id="status" name="status" required>
    <option value="0">Non Complete</option>
    <option value="1">Complete</option>
</select>
<label for="due_date">Due Date</label>
<input type="date" id="due_date" name="due_date" required>
<button type="submit">Create</button>
</form>
    
@endsection