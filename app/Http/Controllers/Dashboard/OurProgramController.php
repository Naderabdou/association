<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\OurProgram;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Dashboard\OurProgramRequest;

class OurProgramController extends Controller
{
    public function index()
    {
        $ourPrograms = OurProgram::latest()->get();
        return view('dashboard.programs.index', compact('ourPrograms'));
    }


    public function create()
    {
        return view('dashboard.programs.create');
    }

    public function store(OurProgramRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('programs', 'public');
        }
        OurProgram::create($data);
        return redirect()->route('admin.ourPrograms.index')->with('success', transWord('Program created successfully'));
    }

    public function edit($id)
    {

        $Program = OurProgram::findOrfail($id);
        return view('dashboard.programs.edit', compact('Program'));
    }

    public function update(OurProgramRequest $request , $id){

        $data = $request->validated();
        $Program = OurProgram::findOrfail($id);
        if ($request->hasFile('image')) {
            $data['image'] = $this->handleIconUpload($request, $Program);
        }
        $Program->update($data);
       return redirect()->route('admin.ourPrograms.index')->with('success', transWord('Program updated successfully'));
    }

    public function destroy($id)
    {
        $Program = OurProgram::findOrfail($id);

        if ($Program->image) {
            Storage::disk('public')->delete($Program->image);
        }
        $Program->delete();


        return response()->json(['message' => transWord('Program deleted successfully')] , 200);
    }

    public function show($id){
        return redirect()->route('admin.ourPrograms.index');
    }


    private function handleIconUpload($request, $Program)
{
    if ($Program->image) {
        Storage::disk('public')->delete($Program->image);
    }

    return $request->file('image')->store('programs', 'public');
}
}
