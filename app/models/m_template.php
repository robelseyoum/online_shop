<?php 


/*  

    Template Class
    Handle all templating tasks - displaying views, alerts, errors and view data

*/

class Template {

    private $data;
    private $alert_types = array('success', 'alert', 'error');

    function __construct(){}


    /**
     * load url
     *
     * @var string
     **/
    public function load($url, $title = ''){

        if($title != ''){
            $this->set_data('page_title', $title);
        }
        require_once "$url"; 

    }

    /**
     * redirect the file
     *
     *  
     **/
    public function redirect($url){
        header("Location: $url");
        exit;
    }


    /**
     * set the data
     *
     *  
     **/
    public function set_data($name, $value, $clean=FALSE){
        
        if($clean == TRUE){
            $this->data[$name] = htmlentities($value, ENT_QUOTES);
        }else{
            $this->data[$name] = $value;
        }
    }

    //get data from the $data varialble 
    public function get_data($name, $echo = TRUE){
        if(isset($this->data[$name])){
            if($echo){
                echo $this->data[$name];
            } else {
                return $this->data[$name];
            }
        }
        return '';
    }
    

    //Get / Set alert


    //set a alert message stored in the session
    public function set_alert($value, $type = 'success'){
        $_SESSION[$type][] = $value;
    }


    //$alert_types = array('success', 'alert', 'error');

    //Return string, containing multiple list items of alerts

    public function get_alert(){
        $data = '';

        foreach($this->alert_types as $alert){
            if(isset($_SESSION[$alert]))
            {
                foreach ($_SESSION[$alert] as $value) 
                {
                   $data .= '<li class = "'.$alert.'">'.$value.'</li>';
                }
                unset($_SESSION[$alert]);
            }
        }

        echo $data;
    }
    
    








}

 ?>