<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller {

    public function index() {
        $users = User::orderBy('id')->get();
        return response()->json($users);
    }

    public function view(User $user) {
        return response()->json($user);
    }

    // public function store(Request $request) {
    //     $fields = $request->validate([
    //         'username' => 'required',
    //         'email' => 'required|email',
    //         'full_name' => 'required',
    //     ]);

    //     // Simulate validation error
    //     $fields['email'] = 'invalid_email';

    //     // Rest of your code


    //     try {
    //         \DB::beginTransaction();

    //         $user = User::create($fields);

    //         \DB::commit();
    //     } catch (\Exception $e) {
    //         \DB::rollBack();

    //         \Log::error('Error creating user: ' . $e->getMessage());
    //         \Log::error('SQL: ' . \DB::getQueryLog());

    //         return response()->json([
    //             'status' => 'error',
    //             'message' => 'Error creating user. Check logs for details.',
    //         ], 500);
    //     }


    //     return response()->json([
    //         'status' => 'success',
    //         'message' => 'User created successfully',
    //         'user_id' => $user->id,
    //     ]);
    // }

    public function store(Request $request) {
        try {
            $fields = $request->validate([
                'username' => 'required',
                'email' => 'required|email',
                'full_name' => 'required',
            ]);

            $user = User::create($fields);

            return response()->json([
                'status' => "OK",
                'message' => 'User with ID# ' . $user->id . ' has been created'
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Handle validation errors
            return response()->json([
                'status' => 'error',
                'message' => 'Validation error',
                'errors' => $e->errors(),
            ], 422);
        } catch (\Exception $e) {
            // Handle other exceptions
            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred',
                'error' => $e->getMessage(),
            ], 500);
        }
    }



    public function update(Request $request, User $user) {
        try {
            // Validate the request data
            $fields = $request->validate([
                'username' => 'string',
                'email' => 'string',
                'full_name' => 'string',
            ]);

            // Log the received fields
            \Log::info('Received fields: ' . json_encode($fields));

            // Update the user with the validated fields
            $user->update($fields);

            // Log the successful update
            \Log::info('User with ID# ' . $user->id . ' has been updated.');

            // Return a success response
            return response()->json([
                'status' => 'OK',
                'message' => 'User with ID# ' . $user->id . ' has been updated.'
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Log validation errors
            \Log::error('Validation error: ' . json_encode($e->errors()));

            // Return a validation error response
            return response()->json([
                'status' => 'error',
                'message' => 'Validation error',
                'errors' => $e->errors(),
            ], 422);
        } catch (\Exception $e) {
            // Log other exceptions
            \Log::error('Exception: ' . $e->getMessage());

            // Return an error response
            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function destroy(User $user) {
        $details = $user->username.", ".$user->full_name;
        $user->delete();

        return response()->json([
            'status' => 'OK',
            'message' => 'The customer '. $details.  ' has been deleted.'
        ]);
    }



}


