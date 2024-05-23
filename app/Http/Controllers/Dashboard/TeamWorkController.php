<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\TeamWorkRequest;
use App\Models\TeamWork;
use Egulias\EmailValidator\Warning\TLD;
use Illuminate\Http\Request;

class TeamWorkController extends Controller
{
    public function index()
    {
        $teams = TeamWork::latest()->get();
        return view('dashboard.teams.index', compact('teams'));
    }

    public function create()
    {
        return view('dashboard.teams.create');
    }

    public function store(TeamWorkRequest $request)
    {

        $data = $request->validated();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('teams', 'public');
        }
        TeamWork::create($data);
        return redirect()->route('admin.teams.index')->with('success', transWord('Team Member Created Successfully'));
    }

    public function edit($id)
    {
        $team = TeamWork::findOrFail($id);

        return view('dashboard.teams.edit', compact('team'));
    }
    public function update(TeamWorkRequest $request, $id)
    {
        $team = TeamWork::findOrFail($id);
        $data = $request->validated();
        if ($request->hasFile('image')) {
            if ($team->image) {
                Storage::disk('public')->delete($team->image);
            }
            $data['image'] = $request->file('image')->store('teams', 'public');
        }
        $team->update($data);

        return redirect()->route('admin.teams.index')->with('success', transWord('Team Member Updated Successfully'));
    }

    public function destroy($id)
    {

        $team = TeamWork::findOrFail($id);
        if ($team->icon) {
            Storage::disk('public')->delete($team->icon);
        }
        $team->delete();
        return response()->json(['message' => transWord('تم الحذف بنجاح')]);
    }

    public function show()
    {
        return redirect()->route('admin.teams.index');
    }
}
