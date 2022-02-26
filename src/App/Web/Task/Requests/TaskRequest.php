<?php


namespace App\Web\Task\Requests;


use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'task' => ['required', 'string'],
            'category' => ['required', 'string']
        ];
    }
}
