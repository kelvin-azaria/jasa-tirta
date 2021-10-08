<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreRideLeaderboardRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'position'                   => 'required|numeric|max:10',
            'participant_name'           => 'required|string|max:255',
            'participant_gender'         => 'required|string',
            'participant_work_unit'      => 'required|string|max:255',
            'activity_date'              => 'required|date',
            'activity_length'            => 'required',
            'activity_duration'          => 'required|numeric',
            'strava_activity_url_1'      => 'required|string|max:255',
            'strava_activity_url_2'      => 'nullable|string|max:255',
        ];
    }
}
