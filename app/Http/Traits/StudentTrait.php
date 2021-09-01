<?php

namespace App\Http\Traits;

trait StudentTrait {
    public function getGender() {
        $genders = ["male" => "Male", "female" => "Female", "others" => "Others"];
        return $genders;
    }

    public function getTeachers() {
        $genders = ["kate" => "Kate", "max" => "Max", "tom" => "Tom"];
        return $genders;
    }

    public function getTerms() {
        $terms = ["one" => "One", "two" => "Two", "three" => "Three"];
        return $terms;
    }

    public function getSubjects() {
        $subjects = ["maths" =>"Maths", "science"=>"Science", "history"=>"History"];
        return $subjects;
    }
}