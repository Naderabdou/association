<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\OurPaths;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Dashboard\OurPathRequest;

class OurPathController extends Controller
{
    public function index()
    {
        $OurPaths = OurPaths::latest()->get();
        return view('dashboard.paths.index', compact('OurPaths'));
    }


    public function create()
    {
        return view('dashboard.paths.create');
    }

    public function store(OurPathRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('paths', 'public');
        }
        OurPaths::create($data);
        return redirect()->route('admin.ourPaths.index')->with('success', transWord('تم اضافه المسار بنجاح'));
    }

    public function edit($id)
    {

        $path = OurPaths::findOrfail($id);
        return view('dashboard.paths.edit', compact('path'));
    }

    public function update(OurPathRequest $request , $id){

        $data = $request->validated();
        $path = OurPaths::findOrfail($id);
        if ($request->hasFile('image')) {
            $data['image'] = $this->handleIconUpload($request, $path);
        }
        $path->update($data);
       return redirect()->route('admin.ourPaths.index')->with('success', transWord('تم تعديل المسار بنجاح'));
    }

    public function destroy($id)
    {
        $path = OurPaths::findOrfail($id);

        if ($path->image) {
            Storage::disk('public')->delete($path->image);
        }
        $path->delete();


        return response()->json(['message' => transWord('Program deleted successfully')] , 200);
    }

    public function show($id){
        return redirect()->route('admin.ourPaths.index');
    }


    private function handleIconUpload($request, $path)
{
    if ($path->image) {
        Storage::disk('public')->delete($path->image);
    }

    return $request->file('image')->store('paths', 'public');
}
}
