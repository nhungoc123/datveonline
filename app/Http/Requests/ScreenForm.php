<?php namespace App\Http\Requests;

class ScreenForm extends Request
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
                    'decription' => 'max:2000',
                    'total_seat' => 'required|integer|max:200',
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
