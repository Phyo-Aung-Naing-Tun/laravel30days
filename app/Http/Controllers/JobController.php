<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        return view('jobs.index', ['jobs' => Job::with('employer')->cursorPaginate(5)]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store(Request $request)
    {
        $result = $request->validate([
            'title' => 'required|min:4|max:20',
            'employer_id' => 'required',
            'salary' => 'required',
        ]);
        Job::create($result);
        return back();
    }

    public function show($id)
    {
        return view('jobs.show', ['job' => Job::find($id)]);
    }

    public function edit(Job $job){
        return view('jobs.edit',compact("job"));
    }

    public function update(Request $request, Job $job)
    {
        $result = $request->validate([
            'title' => 'required|min:4|max:20',
            'salary' => 'required',
    
        ]);
        $job->title = $result['title'];
        $job->salary = $result['salary'];
        $job->save();
        return redirect()->back();
    }

    public function destory(Job $job){
        $job->delete();
        return redirect('/jobs');
    }
}
