<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;

class noticecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $notices = Notice::orderBy('id', 'DESC')->get();
        return view("notice.index", compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $notices = Notice::get();
        return view('notice.create', compact('notices'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'addfile' => 'required|mimes:jpeg,png,jpg|max:2048'
        ]);
        $imageName = time() . '.' . $request->addfile->extension();
        $request->addfile->move(public_path('images'), $imageName);
        $ntcs = new Notice();
        $ntcs->title = $request['title'];
        $ntcs->content = $request['description'];
        $ntcs->filename = $imageName;
        $success = $ntcs->save();
        if ($success) {
            return redirect()->route('notice.index')->with('success', 'You have successfully upload image.');
        } else {
            return redirect()->route('notice.index')->with('error', 'Sorry');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = Notice::find($id);
        //dd($data['filename']);
        return view('notice.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = Notice::find($id);
        return view('notice.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //dd($request->all());
        $request->validate([
            'addfile' => 'nullable|mimes:jpeg,png,jpg|max:2048', // Update validation rules based on your requirements
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        // Retrieve the existing notice record
        $data = Notice::find($id);

        if (!$data) {
            // Handle the case where the record is not found
            abort(404);
        }

        // Update fields based on request data
        $data->title = $request['title'];
        $data->content = $request['description'];

        // Handle file upload if a new file is provided
        if ($request->hasFile('addfile')) {
            // Delete the existing file if needed
            //  Storage::delete('path_to_existing_file/' . $data->filename);

            // Store the new file
            // $filename = time() . '.' . $request['addfile']->getClientOriginalExtension();
            // $request->file('addfile')->storeAs('', $filename, 'public');

            // Update the filename in the database
            //  $data->filename = $filename;
        }

        // Save the changes
        $data->save();

        // Redirect or return a response as needed
        return redirect()->route('notice.index')->with('success', 'Notice updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = Notice::find($id);

        $success = $data->delete();
        return redirect()->route('notice.index');


    }
}
