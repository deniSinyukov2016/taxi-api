<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackRequest;
use App\Models\Feedback;

/** @resource Feedback */
class FeedbackController extends Controller
{
    /** Store */
    public function store(FeedbackRequest $request)
    {
        return response()->json(
            Feedback::create(
                array_merge(
                    $request->only('body'),
                    ['user_id' => auth()->id()]
                )
            )
        );
    }
}
