<?php

namespace App\Http\Requests;

class UpdateComplexRequest extends Request
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
	 * @return array
	 */
	public function rules()
	{
		return [
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'gallery_id' => 'required'
		];
	}

}
