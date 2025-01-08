@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Create Task</h2>
    <form action="{{ route('tasks.store') }}" method="post" class="needs-validation" novalidate>
        @csrf

        <!-- Title -->
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" id="title" name="title" class="form-control" required>
            <div class="invalid-feedback">
                Please provide a title for the task.
            </div>
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea id="description" name="description" class="form-control" rows="5"></textarea>
        </div>

        <!-- Status -->
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select id="status" name="status" class="form-select" required>
                <option value="0">Non Complete</option>
                <option value="1">Complete</option>
            </select>
            <div class="invalid-feedback">
                Please select a status.
            </div>
        </div>

        <!-- Due Date -->
        <div class="mb-3">
            <label for="due_date" class="form-label">Due Date</label>
            <input type="date" id="due_date" name="due_date" class="form-control" required>
            <div class="invalid-feedback">
                Please provide a due date.
            </div>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Create</button>
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
