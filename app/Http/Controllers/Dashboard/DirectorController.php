<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Director;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Dashboard\DirectorRequest;

class DirectorController extends Controller
{
    public function index()
    {
        $directors = Director::latest()->get();
        return view('dashboard.directors.index', compact('directors'));
    }


    public function create()
    {
        return view('dashboard.directors.create');
    }

    public function store(DirectorRequest $request)
    {
        $data = $request->validated();
        if($request->hasFile('image')){
            $data['image'] = $request->file('image')->store('directors', 'public');

        }
        Director::create($data);
        return redirect()->route('admin.directors.index')->with('success', transWord('Director created successfully'));
    }

    public function edit($id)
    {
        $director = Director::findOrfail($id);

        return view('dashboard.directors.edit', compact('director'));
    }

    public function update(DirectorRequest $request , $id)
     {
        $director = Director::findOrfail($id);
        $data = $request->validated();

        if($request->hasFile('image')){
            if($director->image){
                Storage::disk('public')->delete($director->image);
            }

            $data['image'] = $request->file('image')->store('directors', 'public');
        }
        $director->update($data);
        return redirect()->route('admin.directors.index')->with('success', transWord('Director updated successfully'));
    }

    public function destroy($id)
    {
        $director = Director::findOrfail($id);
        if($director->image){
            Storage::disk('public')->delete($director->image);
        }
        $director->delete();
        return response()->json(['message' => transWord('Director deleted successfully')] , 200);
    }

    public function show($id){
        return redirect()->route('admin.directors.index');
    }
}
