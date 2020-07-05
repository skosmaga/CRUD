<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestionModel;

class QuestionController extends Controller
{
  public function create(){
    return view('question.form');
  }
  public function store (Request $request){
    $new_question = QuestionModel::save($request->all());
    return redirect('/questions');
  }
  public function index(){
    $questions = QuestionModel::get_all();

    return view('question.index');
  }
}
