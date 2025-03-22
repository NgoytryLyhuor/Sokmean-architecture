<?php

namespace App\Http\Controllers;

use App\Models\QuestionAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QuestionAnswerController extends Controller
{
    /**
     * Store a newly created question answer in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        QuestionAnswer::create([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        return redirect()->back()
            ->with('success', 'Question and Answer created successfully.');
    }

    /**
     * Show the form for editing all question answers.
     */

    public function edit(Request $request)
    {
        $id = $request->input('id');
        $questionAnswers = QuestionAnswer::find($id);

        if ($questionAnswers) {
            return response()->json([
                'status' => 'success',
                'data' => $questionAnswers
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Record not found.'
            ]);
        }
    }

    /**
     * Update the specified question answer in storage.
     */
    public function update(Request $request, $id)
    {
        $questionAnswer = QuestionAnswer::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $questionAnswer->update([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        return redirect()->back() ->with('success', 'Question and Answer updated successfully.');
    }

    /**
     * Remove the specified question answer from storage.
     */
    public function destroy($id)
    {
        $questionAnswer = QuestionAnswer::findOrFail($id);
        $questionAnswer->delete();

        return response()->json(['message' => 'Question and Answer deleted successfully.']);
    }
}
