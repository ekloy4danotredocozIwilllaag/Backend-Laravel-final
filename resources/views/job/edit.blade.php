@extends('pages.base')

@section('content')

<div class="row">
    <div class="col-md-5 mx-auto" style="border: 1px solid; border-radius: 10px;">
        <h1 style="color: black">EDIT Job</h1>

        <form action="{{url('/job/'.$job->id)}}" method="POST">
            @csrf
            {{-- @method('PUT') Use the PUT method for updates --}}
            <div class="form-group">
                <label for="user_id">Selected User</label>
                <input type="text" name="full_name" id="full_name" class="form-control" value="{{ $job->user->full_name }}" readonly>
                <input type="hidden" name="user_id" value="{{ $job->user_id }}">
            </div>
          
            <div class="form-group mt-2">
                <label for="status">Status</label>
                <input type="text" name="status" class="form-control" value="{{ old('status', $job->status) }}" >

                @error('status')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="occupation">Occupation</label>
                <input type="text" name="occupation" class="form-control" value="{{ old('occupation', $job->occupation) }}" >

                @error('occupation')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
       
            <button type="submit" class="btn btn-primary mt-3">Edit Job</button>
        </form>
    </div>
</div>

@endsection
