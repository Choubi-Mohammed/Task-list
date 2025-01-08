@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Edit Task</h2>
    <form action="{{ route('tasks.update', $task->id) }}" method="post" class="needs-validation" novalidate>
        @csrf
        @method('PUT')

        <!-- Title -->
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" value="{{ $task->title }}" class="form-control" required>
            <div class="invalid-feedback">
                Please provide a title for the task.
            </div>
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="5">{{ $task->description }}</textarea>
        </div>

        <!-- Status -->
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" class="form-select" required>
                <option value="0" {{ $task->status == 0 ? 'selected' : '' }}>Non Complete</option>
                <option value="1" {{ $task->status == 1 ? 'selected' : '' }}>Complete</option>
            </select>
            <div class="invalid-feedback">
                Please select a status.
            </div>
        </div>

        <!-- Due Date -->
        <div class="mb-3">
            <label for="due_date" class="form-label">Due Date</label>
            <input type="date" name="due_date" value="{{ $task->due_date }}" class="form-control" required>
            <div class="invalid-feedback">
                Please provide a due date.
            </div>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</div>

<!-- Optional: JavaScript for Bootstrap Validation -->
<script>
    (function () {
        'use strict'
        const forms = document.querySelectorAll('.needs-validation')
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>
@endsection
