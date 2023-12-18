<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return 'Get all posts';
    }

    public function create(){
        return 'Create a post';
    }

    public function store(){
        return 'Store a post';
    }

    public function show($post){
        return "Show a post {$post}";
    }

    public function edit($post){
        return 'Edit a post';
    }

    public function update($post){
        return 'Update a post';
    }

    public function delete($post){
        return 'Delete a post';
    }


}
