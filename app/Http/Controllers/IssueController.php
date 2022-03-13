<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class IssueController extends Controller
{

    public function index()
    {
        $issues = Issue::all();
        $columns = DB::getSchemaBuilder()->getColumnListing('issues');


        return view('index', ['issues' => $issues,
            'columns' => $columns]);
    }

    public function create()
    {

        return view('create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'subject' => ['string', 'required', 'max:100'],
                'description' => ['string', 'required'],
                'assignee' => ['string', 'required'],
                'status' => [ 'required'],
                'priority' => [ 'required'],
                'start_date' => ['required', 'date'],
                'due_date' => ['date', 'required']
            ]
        );

        Issue::create($validated);

        return redirect('/issues');
    }

    public function show($id)
    {

    }

    public function edit(Issue $id)
    {

        return view('edit', [
            'id' => $id
        ]);

    }


    public function update(Issue $id)
    {
        $validated = request()->validate([
            'subject' => ['string', 'required', 'max:100'],
            'description' => ['string', 'required'],
            'assignee' => ['string', 'required'],
            'status' => ['required'],
            'priority' => [ 'required'],
            'start_date' => ['required', 'date'],
            'due_date' => ['date', 'required']
        ]);

        $id->update($validated);

       return redirect('/issues');
    }


    public function destroy(Issue $id)
    {
       $id->delete();

       return redirect('/issues');
    }
}
