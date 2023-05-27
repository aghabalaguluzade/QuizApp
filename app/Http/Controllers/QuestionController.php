<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use App\Models\Questions;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Quiz $quiz)
    {
        $quiz->load('questions');
        $questions = $quiz->questions()->latest()->paginate(10);
        return view('admin.question.questionList', compact('questions','quiz'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Quiz $quiz)
    {
        $quiz = Quiz::find($quiz->id);
        return view('admin.question.questionCreate', compact('quiz'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(QuestionRequest $request, Quiz $quiz)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $directory = 'uploads/questions/';
            $img_name = Str::slug($request->question) . '.' . $image->getClientOriginalExtension();
            $image->store($directory, 'public');
            $questionData = array_merge($request->validated(), ['image' => $img_name]);
        } else {
            $questionData = $request->validated();
        }
        
        $question = $quiz->questions()->create($questionData);        

        return redirect()->back()->with($question ? 'success' : 'error', true);
    }

    /**
     * Display the specified resource.
     */
    public function show(Questions $questions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Questions $questions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Questions $questions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Questions $questions)
    {
        //
    }
}
