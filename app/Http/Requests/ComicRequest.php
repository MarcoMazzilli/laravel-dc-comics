<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:2',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required',
            'series' => 'required',
            'sale_date' => 'required|date_format:Y-m-d',
            'type' => 'required',
            'artists' => 'required',
            'writers' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è un campo obbligatiorio',
            'title.min' => 'Il titolo deve contenere min. :min caratteri',
            'description.required' => 'la descrizione è un campo obbligatiorio',
            'thumb.required' => 'la thumb è un campo obbligatiorio',
            'price.required' => 'Il prezzo è un campo obbligatiorio',
            'series.required' => 'La serie è un campo obbligatiorio',
            'sale_date.required' => 'La data è un campo obbligatorio',
            'sale_date.date_format' => 'Inserire la data in formato yyyy-mm-dd',
            'artists.required' => 'L\'artista è un campo obbligatiorio',
            'writers.required' => 'Lo scrittore è un campo obbligatiorio'
        ];
    }
}
