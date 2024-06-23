<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentClass;
use App\Http\Resources\ClassResource;
use Illuminate\Database\Eloquent\Builder;
use App\Http\Requests\StoreStudentClassRequest;
use App\Http\Requests\UpdateStudentClassRequest;

class StudentClassController extends Controller
{
    public function index()
    {
        $classQuery = StudentClass::select('id', 'name', 'created_at', 'updated_at');

        $classQuery = $this->applySearch($classQuery, request('search'));

        return inertia('Class/Index', [
            'classes' => ClassResource::collection(
                $classQuery->paginate(15)
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
        return inertia('Class/Create');
    }

    public function store(StoreStudentClassRequest $request)
    {
        StudentClass::create($request->validated());

        return redirect()->route('classes.index');
    }

    public function edit(StudentClass $class)
    {
        return inertia('Class/Edit', [
            'class' => ClassResource::make($class),
        ]);
    }

    public function update(UpdateStudentClassRequest $request, StudentClass $class)
    {
        $class->update($request->validated());

        return redirect()->route('classes.index');
    }

    public function destroy(StudentClass $class)
    {
        $class->delete();

        return redirect()->route('classes.index');
    }
}
