<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeachers;
use Illuminate\Http\Request;
use App\Repository\TeacherRepositoryInterface;

class TeacherController extends Controller
{
    protected $Teacher;

    public function __construct(TeacherRepositoryInterface $Teacher)
    {
        $this->Teacher = $Teacher;
    }


    public function index()
    {
        $Teachers = $this->Teacher->getAllTeachers();
        return view('pages.Teachers.Teachers',compact('Teachers'));
    }


    public function create()
    {
        $specializations = $this->Teacher->getSpecializations();
        $genders = $this->Teacher->getGenders();
        return view('pages.Teachers.create',compact('specializations','genders'));
    }


    public function store(StoreTeachers $request)
    {
        return $this->Teacher->storeTeachers($request);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $Teachers = $this->Teacher->editTeachers($id);
        $specializations = $this->Teacher->getSpecializations();
        $genders = $this->Teacher->getGenders();
        return view('pages.Teachers.edit',compact('Teachers','specializations','genders'));
    }


    public function update(Request $request, $id)
    {
        return $this->Teacher->updateTeachers($request);
    }


    public function destroy(Request $request)
    {
        return $this->Teacher->deleteTeachers($request);
    }


}
