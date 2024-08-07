<?php

namespace App\Http\Controllers\Admin\Journal;

use App\Http\Controllers\Controller;
use App\Models\Journal;
use App\Traits\CustomFunction;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    use CustomFunction;

    public function index()
    {
        $journals = Journal::all();
        return view('admin.journals.index', compact('journals'));
    }

    public function create()
    {
        return view('admin.journals.create');
    }

    public function store(Request $request)
    {
        try {
            Journal::create([
                'title' => $request->title,
                'description' => $request->description,
                'author' => $request->author,
                'created_by' => auth()->guard('admin')->id()
            ]);
            $this->getSuccess('Journal Created Successfully');
            return redirect()->route('admin.journals');
        } catch (\Exception $e) {
            $this->getError('Description  Required or all Data not Entered');
            return redirect()->route('admin.journals');
        }
    }


    public function edit($uuid)
    {
        $journal = Journal::where('uuid', $uuid)->firstOrFail();
        return view('admin.journals.edit', compact('journal'));
    }

    public function update(Request $request, $uuid)
    {
        try {
            $journal = Journal::where('uuid', $uuid)->firstOrFail();
            $journal->update([
                'title' => $request->title,
                'description' => $request->description,
                'author' => $request->author,
            ]);
            $this->getSuccess('Journal Updated Successfully');
            return redirect()->route('admin.journals');
        } catch (\Exception $e) {
            $this->getError('Description  Required or all Data not Entered');
            return redirect()->route('admin.journals');
        }
    }
}
