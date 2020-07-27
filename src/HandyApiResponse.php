<?php


namespace Krylov123;


class HandyApiResponse
{
    /**
     * @var bool
     */
    protected $success = true;

    /**
     * @var array
     */
    protected $data = [];

    /**
     * @var array
     */
    protected $errors = [];

    /**
     * $data could be replaced with object instead of default array
     * @param $data
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    public function setSuccess($bool){
        $this->success = $bool;
        return $this;
    }

    /**
     * @return bool
     */
    public function isSuccess()
    {
        return $this->success;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param $message
     * @param $code
     * @return $this
     */
    public function addError($message, $code = null)
    {
        $this->success = false;
        $this->errors[] = ['code' => $code, 'message' => $message];
        return $this;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            "success" => $this->success,
            "errors" => $this->errors,
            "data" => $this->data
        ];
    }

}
