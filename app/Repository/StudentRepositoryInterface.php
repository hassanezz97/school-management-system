<?php
namespace App\Repository;


interface StudentRepositoryInterface{

    // Get Add Form Student
    public function Create_Student();

    // Get Class rooms
    public function Get_classrooms($id);
    // Get Sections
    public function Get_Sections($id);
    //Store Students
    public function Store_Student($request);

}
