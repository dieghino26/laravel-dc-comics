<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|unique:movies',
            'description' => 'nullable',
            'thumb' => 'nullable|url:http,https',
            'price' => 'required|string',
            'series' => 'string',
            'sale_date' => 'nullable|date',
            'type' => 'string',
            'artists' => 'string',
            'writers' => 'string',
        ];
    }

    public function messages(): array
    {

        $data = $this->all();
        
        return [
            'title.required' => 'Il campo Titolo è obbligatorio',
            'title.unique' => "Esiste già questo nome {$data['title']}",
            'price.required' => 'Il campo Prezzo è obbligatorio ',
            'string' => 'Il campo è obbligatorio',
        ];
    }
}