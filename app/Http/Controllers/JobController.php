<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Job;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index() {
        $jobs = Job::orderBy('id')->get();

        return response()->json($jobs);
    }

    public function view(Job $job) {
        $job->load('user');
        return response()->json($job);
    }

    public function store(Request $request, Job $job) {
        $fields = $request->validate([
            'user_id' => 'required|exists:users,id', // Fix the table name in exists rule
            'status' => 'required',
            'occupation' => 'required',
        ]);

        // Create a new job record using the Job model, not the $job parameter
        $newJob = Job::create($fields);

        return response()->json([
            'status' => 'OK',
            'message' => 'New job created with the ID# ' . $newJob->id
        ]);
    }

    public function update(Request $request, Job $job) {
        $fields = $request->validate([
            'user_id' => 'required|exists:users,id', // Fix the table name in exists rule
            'status' => 'required',
            'occupation' => 'required',
        ]);
        // return response()->json($fields);
        $job->update($fields);

        return response()->json([
            'status' => 'OK',
            'message' => 'Job with ID# ' . $job->id . ' has been updated.'
        ]);
    }

    public function destroy(Job $job) {
        $details = $job->status.", ".$job->occupation;
        $job->delete();

        return response()->json([
            'status' => 'OK',
            'message' => 'The job '. $details.  ' has been deleted.'
        ]);
    }

}

