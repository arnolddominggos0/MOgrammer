<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Question;
use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class KuisController extends Controller
{
    function getQuestionsByCategory($category) {
        $questions = Question::select('questions.id', 'questions.pertanyaan', 'questions.jawaban_id', 'questions.kategori_id')->join('categories', 'questions.kategori_id', '=', 'categories.id')
            ->where('categories.namaKategori', $category)
            ->get();
    
        foreach ($questions as $question) {
            $options = Option::where('pertanyaan_id', $question->id)->get();
            $question['options'] = $options;    
        }
    
        return $questions;
    }

    function saveResult(Request $request){
        $validator = Validator::make($request->all(), [
            'userId' => 'required',
            'skor' => 'required',
            'kategori_id' => 'required',
        ]);

        if ($validator->fails()) {
            // Validation failed. Return the error messages.
            return response()->json($validator->errors(), 422);
        }

        try {
            $skor = $request->skor;
            $kategori_id = $request->kategori_id;
            $userId = $request->userId;

            $result = new Result();
            $result->userId = $userId;
            $result->skor = $skor;
            $result->kategori_id = $kategori_id;
            $result->save();

            return response()->json(['success' => 'Result saved successfully'], 201);
        } catch (\Throwable $th) {
            return response()->json($th, 500);
        }
        
    }
}