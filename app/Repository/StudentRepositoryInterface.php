<?php
namespace App\Repository;


interface StudentRepositoryInterface{


    // Get Students
    public function Get_Student();

    // Get Add Form Student
    public function Create_Student();

    // Get Class rooms
    public function Get_classrooms($id);

    // Get Sections
    public function Get_Sections($id);

    //Store Students
    public function Store_Student($request);

    //Edit Students
    public function Edit_Student($id);

    //Update Students
    public function Update_Student($request);

    //Delete Students
    public function Delete_Student($request);

    //Show Students
    public function Show_Student($id);

    //Upload_attachment
    public function Upload_attachment($request);

    //Download_attachment
    public function Download_attachment($studentsname,$filename);

    //Delete_attachment
    public function Delete_attachment($request);


}
