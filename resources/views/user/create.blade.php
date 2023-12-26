
@extends('pages.base')

@section('content')
    <h1>Create new User</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('users/create')}}" method="POST">
                @csrf
                <div class="form-group mt-2">
                    <label for="full_name">Full_name</label>
                    <input class="form-control" type="text" name="full_name">
                    @error('full_name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>
                  <div class="form-group mt-2">
                    <label for="username">Username</label>
                    <input class="form-control" type="text" name="username">
                    @error('username')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>
                  <div class="form-group mt-2">
                    <label for="email">Email</label>
                    <input class="form-control" type="text" name="email">
                    @error('email')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>
                  <div class="form-group my-3 d-grid d-md-flex justify-content-end">
                    <button class="btn btn-primary">
                        Add User</button>




                        
                  </div>
            </form>
        </div>
    </div>

    <style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #e9ecef;
    }

    h1 {
        font-size: 2.5em;
    }

    form {
        max-width: 400px;
        margin: 0 auto;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }
</style>

    


@endsection