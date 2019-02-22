<?php
/**
 * Created by PhpStorm.
 * User: afolabiabass
 * Date: 16/02/2019
 * Time: 1:09 PM
 */

namespace App\Http\Requests\Clients;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ClientRequest
 * @package App\Http\Requests\Clients
 */
class ClientRequest extends FormRequest
{
    protected $rules = [
    ];

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
     * @return array
     */
    public function rules()
    {
        switch ($this->method()) {
            case 'GET':
            case 'DELETE':
                return [];
                break;
            case 'POST':
                return [
                    'name' => 'required',
                ];
                break;
            case 'PUT':
                return [
                    'name' => 'required',
                ];
            case 'PATCH':
            default:
                break;
        }

        return $this->rules;
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Client name is required',
        ];
    }
}
