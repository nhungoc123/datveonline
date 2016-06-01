<?php namespace App\Http\Requests;

class MovieForm extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array rules
     */
    public function rules()
    {
        $arrRet = [];
        switch($this->method())
        {
            case 'GET':
                break;
                
            case 'POST':
                $arrRet = [
                    'name' => 'required|max:50',
                    'genre' => 'required|max:100',
                    'decription' => 'required|max:2000',
                    'actor' => 'required|max:100',
                    'year' => 'numeric|digits:4',
                    'durations' => 'required|numeric',
                    'trailer' => 'url|max:2000'
                ];
                break;
            
            default:
                break;
        }
        return $arrRet;
    }

    /**
     * Get the sanitized input for the request.
     *
     * @return array
     */
    public function sanitize()
    {
        return $this->all();
    }
}
