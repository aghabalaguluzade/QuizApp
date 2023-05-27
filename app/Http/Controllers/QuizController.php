<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuizRequest;
use App\Models\Quiz;
use Carbon\Carbon;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quizzes = Quiz::latest()->paginate(5);
        return view('admin.quiz.quizList', compact('quizzes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.quiz.quizCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(QuizRequest $request)
    {
        $validatedData = $request->validated();

        Quiz::create($validatedData);
        return redirect()->route('quizzes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Quiz $quiz)
    {
        return view('admin.quiz.quizShow', compact('quiz'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quiz $quiz)
    {
        return view('admin.quiz.quizEdit', compact('quiz'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(QuizRequest $request, Quiz $quiz)
    {
        $quiz->update($request->validated());
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quiz $quiz)
    {
        $quiz->delete();
        return response()->noContent();
    }
    
}
