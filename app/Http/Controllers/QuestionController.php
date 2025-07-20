<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function lessons(){

        return view('lessons');
    }


    public function exam(Request $request){
        $unit = $request->input('unit');
        $lesson = $request->input('lesson');
        $type = $request->input('type');
        $questions = Question::where('unit', $unit)
                     ->where('lesson', $lesson)
                     ->where('type', $type)
                     ->get();
        session(['exam_question_ids' => $questions->pluck('id')->toArray()]);
        return view('exam' , ['qs'=>$questions]);
    }



    public function examFun(Request $request){

        $questionIds = session('exam_question_ids', []);

        $questions = Question::whereIn('id', $questionIds)->get();

        $score = 0;
        $total = count($questions);
        $answers = [];
        $examCode = '';

        foreach ($questions as $question) {
            $qid = $question->id;
            $correct = $question->tans;
            $userAnswer = $request->input("q$qid");
            $examCode = 'unit' . $question->unit . '_les' . $question->lesson;

            if ($userAnswer == $correct) {
                $score++;
            }

            $answers[] = [
                'qtext' => $question->qtext,
                '1'=> $question->ans1,
                '2'=> $question->ans2,
                '3'=> $question->ans3,
                '4'=> $question->ans4,
                'userAnswer' => $userAnswer,
                'correctAnswer' => $correct,
            ];
        }
        $percentage = ($score / $total) * 100;
        $user = Auth::user();
        $user->$examCode = $percentage;
        $user->save();

        return view('exam_result', compact('percentage', 'answers'));
    }

}
