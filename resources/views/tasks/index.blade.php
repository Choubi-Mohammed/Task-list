@extends('app')
@section('content')
<h1>Task list</h1>
<a href="{{ route('tasks.create') }}">Create Task</a>
<table>
    <thead>
        <tr>
            <th>Title</th>    
            <th>Description</th>    
            <th>Status</th>    
            <th>Due Date</th>    
            <th>Actions</th>    
        </tr> 
    </thead>  
    <tbody>
        @foreach ($tasks as $task)
        <tr>
            <td>{{ $task->title }}</td>
            <td>{{ $task->description }}</td>
            <td>{{ $task->status ? 'Complete' : 'Non Complete' }}</td>
            <td>{{ $task->due_date }}</td>
            <td>
                <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
                <form action="{{ route('tasks.destroy', $task->id) }}" method="post" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach   
    </tbody>  
</table>   
{{ $tasks->links() }} 
@endsection