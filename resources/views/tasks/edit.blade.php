@extends('app')
@section('content')
<h2>Edit Task</h2>
<form action="{{ route('tasks.update', $task->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="title">Title</label>
    <input type="text" name="title" value="{{ $task->title }}" required>
    <label for="description">Description</label>
    <textarea name="description" cols="30" rows="10">{{ $task->description }}</textarea>
    <label for="status">Status</label>
    <select name="status" required>
        <option value="0" {{ $task->status == 0 ? 'selected' : '' }}>Non Complete</option>
        <option value="1" {{ $task->status == 1 ? 'selected' : '' }}>Complete</option>
    </select>
    <label for="due_date">Due Date</label>
    <input type="date" name="due_date" value="{{ $task->due_date }}" required>
    <button type="submit">Edit</button>
</form>
@endsection
