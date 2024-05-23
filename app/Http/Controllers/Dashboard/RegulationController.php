<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Regulation;
use App\Models\RegulationCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Dashboard\RegulationRequest;

class RegulationController extends Controller
{
    public function index()
    {
        $regulations = Regulation::latest()->get();
        return view('dashboard.regulations.index', compact('regulations'));
    }

    public function create()
    {
        $categories = RegulationCategory::all();
        return view('dashboard.regulations.create', compact('categories'));
    }

    public function store(RegulationRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('pdf')) {
            $data['pdf'] = request()->file('pdf')->store('regulations', 'public');
        }


        Regulation::create($data);

        return redirect()->route('admin.regulations.index')->with('success', transWord('تم اضافه اللوائح والسياسات بنجاح'));
    }

    public function edit($id)
    {
        $regulation = Regulation::findorFail($id);
        $categories = RegulationCategory::all();
        return view('dashboard.regulations.edit', compact('regulation', 'categories'));
    }

    public function update(RegulationRequest $request, $id)
    {
        $data = $request->validated();
        $regulation = Regulation::findorFail($id);
        if ($request->hasFile('pdf')) {
            if ($regulation->pdf) {
                Storage::disk('public')->delete($regulation->pdf);
            }
            $data['pdf'] = request()->file('pdf')->store('regulations', 'public');
        }

        $regulation->update($data);

        return redirect()->route('admin.regulations.index')->with('success', transWord('تم تعديل اللوائح والسياسات بنجاح'));
    }

    public function destroy($id)
    {
        $regulation = Regulation::findorFail($id);
        if ($regulation->pdf) {
            Storage::disk('public')->delete($regulation->pdf);
        }
        $regulation->delete();
        return response()->json(
            ['message' => transWord('تم حذف اللوائح والسياسات بنجاح')],
            200
        );
    }
}
