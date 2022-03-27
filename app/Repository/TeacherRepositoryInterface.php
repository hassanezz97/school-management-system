<?php
namespace App\Repository;


interface TeacherRepositoryInterface{

    // get all Teachers
    public function getAllTeachers();
    // get all Teachers
    public function getSpecializations();
    // get all Teachers
    public function getGenders();
    // Store Teachers
    public function storeTeachers($request);
    // Edit Teachers
    public function editTeachers($id);
    // Update Teachers
    public function updateTeachers($request);
    // Delete Teachers
    public function deleteTeachers($request);

}
