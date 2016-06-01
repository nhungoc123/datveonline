<?php namespace App\Http\Requests;

class PerformanceForm extends Request
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
                    'performance_time' => 'required|unique:dtb_performances,performance_time,'.\Request::get('performance_time')
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
