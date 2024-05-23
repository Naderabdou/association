<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\CommitteeMember;
use App\Models\CommitteeCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Dashboard\CommitteeMemberRequest;

class CommitteeMemberController extends Controller
{
    public function index()
    {
        $committeeMember = CommitteeMember::latest()->get();
        return view('dashboard.committeeMembers.index', compact('committeeMember'));
    }


    public function create()
    {
        $categories = CommitteeCategory::all();
        return view('dashboard.committeeMembers.create', compact('categories'));
    }

    public function store(CommitteeMemberRequest $request)
    {
        $data = $request->validated();
        if($request->hasFile('image')){
            $data['image'] = $request->file('image')->store('CommitteeMember', 'public');

        }
        CommitteeMember::create($data);
        return redirect()->route('admin.committeeMembers.index')->with('success', transWord('Committee Member added successfully'));
    }

    public function edit($id)
    {
        $categories = CommitteeCategory::all();

        $committeeMember = CommitteeMember::findOrfail($id);

        return view('dashboard.committeeMembers.edit', compact('committeeMember', 'categories'));
    }

    public function update(CommitteeMemberRequest $request , $id)
     {
        $committeeMember = CommitteeMember::findOrfail($id);
        $data = $request->validated();

        if($request->hasFile('image')){
            if($committeeMember->image){
                Storage::disk('public')->delete($committeeMember->image);
            }

            $data['image'] = $request->file('image')->store('CommitteeMember', 'public');
        }
        $committeeMember->update($data);
        return redirect()->route('admin.committeeMembers.index')->with('success', transWord('Committee Member updated successfully'));
    }

    public function destroy($id)
    {
        $committeeMember = CommitteeMember::findOrfail($id);
        if($committeeMember->image){
            Storage::disk('public')->delete($committeeMember->image);
        }
        $committeeMember->delete();
        return response()->json(['message' => transWord('Committee Member deleted successfully')] , 200);
    }

    public function show($id){
        return redirect()->route('admin.committeeMembers.index');
    }


}
