<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\RegulationCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\RegulationCategoryRequest;

class RegulationCategoryController extends Controller
{
    public function index()
    {
        $categories = RegulationCategory::latest()->get();
        return view('dashboard.RegulationCategory.index', compact('categories'));
    }

    public function create()
    {
        return view('dashboard.RegulationCategory.create');
    }

    public function store(RegulationCategoryRequest $request)
    {
        $data = $request->validated();

        RegulationCategory::create($data);
        return redirect()->route('admin.regulationCategories.index')->with('success', transWord('تم اضافه قسم اللوائح والسياسات بنجاح'));
    }

    public function edit($id)
    {
        $category = RegulationCategory::findOrFail($id);
        return view('dashboard.RegulationCategory.edit', compact('category'));
    }

    public function update(RegulationCategoryRequest $request, $id)
    {
        RegulationCategory::findOrFail($id)->update($request->validated());

        return redirect()->route('admin.regulationCategories.index')->with('success', transWord('تم تعديل قسم اللوائح والسياسات بنجاح'));
    }

    public function destroy($id)
    {

        $category = RegulationCategory::findOrFail($id);

        $category->delete();
        return response()->json(['message' => transWord('تم الحذف بنجاح')]);
    }

    public function show(){
        return redirect()->route('admin.regulationCategories.index');
    }
}
