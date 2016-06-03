<?php namespace App\Http\Requests;

class ScreenSearchForm extends Request
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
                    'screen' => 'required|exits:dtb_cinemas,id'
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
