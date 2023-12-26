
@extends('pages.base')

@section('content')

<table class="table table-bordered table-striped table-sm">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{url('/student/create')}}" class="btn btn-primary me-md-2" type="button">
            Add new Job
        </a>
      </div>
    <thead>
      <th>id</th>
      <th>full_name</th>
      <th>course</th>
      <th>year</th>
    </thead>
    <tbody>
        @foreach ($students as $student)
            <tr>
              <td>{{ $student->id }}</td>
              <td>{{ $student->user->full_name}}</td>
              <td>{{ $student->course}}</td>
              <td>{{ $student->year}}</td>
                 <td><a href="{{url('/students/'.$student->id)}}" class="btnn btn-primary text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                          </svg></a></td>
                          <td>
                            <form action="{{ url('/students/' . $student->id) }}" method="post" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
                            </form>
                          </td>
            </tr>
        @endforeach
    </tbody>
</table>

<style>
    /* Add your custom styles here */
    .table-container {
        margin: 20px;
    }

    .table {
        width: 100%;
        margin-bottom: 1rem;
        background-color: #f3f4f6;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .table th,
    .table td {
        padding: 1.2rem;
        text-align: left;
    }

    .table thead th {
        background-color: #4caf50;
        color: white;
        border-bottom: 2px solid #ddd;
    }

    .table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .table tbody tr:hover {
        background-color: #e0e0e0;
    }

    .status-active {
        color: #28a745;
        font-weight: bold;
    }

    .status-inactive {
        color: #dc3545;
        font-weight: bold;
    }
</style>

@endsection