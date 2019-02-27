<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
class PagesController extends Controller{

    public function home() {
        $name_list = [
            'Tanvir',
            'Tanjin',
            'Toriqul',
            'Issrat'
        ];

        return view('home', [
            'names' => $name_list
        ]);
    }

    public function blog(){
        return view('blog');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function project(){
        $projects = Project::all();
        return view('projects.project', [
            'projects_list' => $projects
        ]);
    }
}
