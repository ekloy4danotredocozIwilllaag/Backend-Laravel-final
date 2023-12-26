@extends('pages.base')

@section('content')

<div class="row">
    <div class="col-md-5 mx-auto" style="border: 1px solid; border-radius: 10px;">
        <h1 style="color: black">EDIT Student</h1>

        <form action="{{url('/students/'.$student->id)}}" method="POST">
            @csrf
            <div class="form-group">
               
                <div class="form-group">
                    <label for="user_id">Selected User</label>
                    <input type="text" name="full_name" id="full_name" class="form-control" value="{{ $student->user->full_name }}" readonly>
                    <input type="hidden" name="user_id" value="{{ $student->user_id }}">
                </div>
              

                @error('user_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
          
            <div class="form-group mt-2">
                <label for="course">Course</label>
                <input type="text" name="course" class="form-control" value="{{$student->course }}" required>

                @error('course')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="year">Year</label>
                <input type="text" name="year" class="form-control" value="{{$student->year}}" required>
                @error('year')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
       


            <button type="submit" class="btn btn-primary mt-3">Edit Job</button>
        </form>
    </div>
</div>

@endsection
