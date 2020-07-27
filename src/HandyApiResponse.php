<?php


namespace Krylov123;


class HandyApiResponse
{
    /**
     * @var bool
     */
    protected $success = false;

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
        return (array)$this;
    }

}
