<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormResultRequest;
use App\Models\FormResult;

class FormController extends Controller
{
    public function store(FormResultRequest $request) {

        $formRecord = FormResult::create($request->validated('form_result'));
        $result = $formRecord->id
            ? ['status' => 'success', 'message' => __('form_requests.success')]
            : ['status' => 'success', 'message' => __('form_requests.fail')];

        return response()->json($result);
    }
}
