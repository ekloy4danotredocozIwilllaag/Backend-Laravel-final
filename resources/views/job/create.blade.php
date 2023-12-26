
@extends('pages.base')

@section('content')
    <h1>Create new Job</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('job/create')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="user_id">Select User</label>
                  <select class="form-select" name="user_id" id="user_id">
                     <option hidden="true">Select User</option>
                     <option selected disabled>Select User</option>
                     @foreach ($users as $userId => $user)
                         <option value="{{$userId}}">{{$user}}</option>
                     @endforeach
                  </select>
                  @error('user_id')
                      <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="status">Status</label>
                    <input class="form-control" type="text" name="status">
                    @error('status')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group mt-2">
                    <label for="occupation">Occupation</label>
                    <input class="form-control" type="text" name="occupation">
                    @error('occupation')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                  <div class="form-group my-3 d-grid d-md-flex justify-content-end">
                    <button class="btn btn-primary me-md-2 mt-2" type="submit">
                        Add Job</button>
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