<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    //

    public function __construct(){

        $this->middleware('auth');

    }


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

    public function update($id){


        $exam = Exam::where('id',$id)->first();

        return view('admin.exam.update')
            ->with('exam', $exam);
    }


    public function updateProceed(Request $request){
        $data = $request->input();
        unset($data['_token']);
        $data['prepared_by_user_id'] = '1';
        $data['total_attempts'] = 0;

        $id = $request->input('id');

        $updated = Exam::where('id',$id)->update($data);
        if($updated){
            return redirect(route('exam_all'));
        }
            // [
                // 'title' =>  $data['title'],
                // 'desc' =>  $data['desc']
            // ]

        //     $data
        // )



    }

    public function delete($id){

        $isDeleted = Exam::where('id', $id)->delete();
        if($isDeleted){
            return redirect(route('exam_all'));
        }else{
            echo "Data not found against id";
        }
    }

    public function all(){

        $exams = Exam::orderBy('id','desc')->get();

        return view('admin.exam.all')
        ->with('exams', $exams);

    }
}
