<?php
namespace Src;

class Request {
    
    /**
     * @var string
     */
    private $type;

    
    /**
     * @var string
     */
    private $url;

    
    /**
     * @var array
     */
    private $params;
    

    public function __construct() {

        $this->type = $_SERVER['REQUEST_METHOD'];

        $this->url = $_SERVER['REQUEST_URI'];
        
        if($this->type == 'POST' ) {
            $this->params = $_POST;
        } else if($this->type == 'GET' ) {
            $this->params = $_GET;
        }

    }

}