@include('_header', ['title' => 'Student Details'])
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Student Details</h1>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to list</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-3"><strong>Full name</strong></div>
                <div class="col-md-9">{{ $student->prenom }} {{ $student->nom }}</div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3"><strong>Email</strong></div>
                <div class="col-md-9">{{ $student->email }}</div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3"><strong>Birth date</strong></div>
                <div class="col-md-9">{{ $student->date_naissance }}</div>
            </div>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('students.edit', $student) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('students.destroy', $student) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
    </div>
</div>
