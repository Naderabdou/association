<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\CommitteeCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\CommitteeRequest;

class CommitteesCategoryController extends Controller
{
    public function index()
    {
        $categories = CommitteeCategory::latest()->get();
        return view('dashboard.CommitteesCategory.index', compact('categories'));
    }

    public function create()
    {
        return view('dashboard.CommitteesCategory.create');
    }

    public function store(CommitteeRequest $request)
    {
        $data = $request->validated();

        CommitteeCategory::create($data);
        return redirect()->route('admin.CommitteesCategory.index')->with('success', transWord('تم اضافه قسم اللجنه بنجاح'));
    }

    public function edit($id)
    {
        $category = CommitteeCategory::findOrFail($id);
        return view('dashboard.CommitteesCategory.edit', compact('category'));
    }

    public function update(CommitteeRequest $request, $id)
    {
       CommitteeCategory::findOrFail($id)->update($request->validated());

        return redirect()->route('admin.CommitteesCategory.index')->with('success', transWord('تم تعديل قسم اللجنه بنجاح'));
    }

    public function destroy($id)
    {

        $category = CommitteeCategory::findOrFail($id);

        $category->delete();
        return response()->json(['message' => transWord('تم الحذف بنجاح')]);
    }

    public function show(){
        return redirect()->route('admin.CommitteesCategory.index');
    }
}
