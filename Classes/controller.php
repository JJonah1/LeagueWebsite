<?php

    class Controller{  
      
        private $request = null;  
        private $template = '';  
      
        /** 
         * Konstruktor, erstellet den Controller. 
         * 
         * @param Array $request Array aus $_GET & $_POST. 
         */  
        public function __construct($request){  
            $this->request = $request;  
            $this->template = !empty($request['view']) ? $request['view'] : 'default';  
        }  
      
        /** 
         * Methode zum anzeigen des Contents. 
         * 
         * @return String Content der Applikation. 
         */  
        public function display(){  
            $view = new View();  
            switch($this->template){  
                default:   
                    $view->setTemplate('summonerProfil');   
            }  
            return $view->loadTemplate();  
        }  
    }  
