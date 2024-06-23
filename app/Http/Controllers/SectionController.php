<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\StudentClass;
use App\Http\Resources\ClassResource;
use App\Http\Resources\SectionResource;
use Illuminate\Database\Eloquent\Builder;
use App\Http\Requests\StoreSectionRequest;
use App\Http\Requests\UpdateSectionRequest;

class SectionController extends Controller
{
    public function index()
    {
        $sectionQuery = Section::with(['class' => function ($query) {
            $query->select('id', 'name', 'created_at', 'updated_at');
        }])->select('id', 'name', 'class_id', 'created_at', 'updated_at');

        $sectionQuery = $this->applySearch($sectionQuery, request('search'));

        return inertia('Section/Index', [
            'sections' => SectionResource::collection(
                $sectionQuery->paginate(15)
            ),
            'search' => request('search') ?? ''
        ]);
    }

    protected function applySearch(Builder $query, $search)
    {
        return $query->when($search, function ($query, $search) {
            $query->where('name', 'like', '%' . $search . '%');
        });
    }

    public function create()
    {
        $sections = SectionResource::collection(Section::select('id', 'name', 'class_id', 'created_at', 'updated_at')->get());

        return inertia('Section/Create', [
            'sections' => $sections
        ]);
    }

    public function store(StoreSectionRequest $request)
    {
        Section::create($request->validated());

        return redirect()->route('sections.index');
    }

    public function edit(Section $section)
    {
        return inertia('Section/Edit', [
            'section' => SectionResource::make($section),
        ]);
    }

    public function update(UpdateSectionRequest $request, Section $section)
    {
        $section->update($request->validated());

        return redirect()->route('sections.index');
    }

    public function destroy(Section $section)
    {
        $section->delete();

        return redirect()->route('sections.index');
    }
}
