<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    //
    public function create(){
        return view('admin.exam.create');
    }

    public function createProceed(Request $request){
        $data = $request->input();
        unset($data['_token']);
        $data['prepared_by_user_id'] = '1';
        $data['total_attempts'] = 0;

        // dd($data);

        Exam::create($data);
        return redirect(route('exam_all'));

    }

    public function update(){
        return view('admin.exam.update');
    }

    public function delete(){
        return view('admin.exam.delete');
    }

    public function all(){


        $exams = Exam::where('title','php')->first();
        dd($exams);

        return view('admin.exam.all');
    }
}
