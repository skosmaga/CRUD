<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnswerModel;

class AnswerController extends Controller
{
    public function create(){
      return view('answer.form');
    }
    public function store (Request $request){
      dd($request->all());
      $new_question=AnswerModel::save($request->all());
      return redirect('answer');
    }
    public function index(){
      $questions=AnswerModel::get_all();

      return view('answer.index');
    }
}
