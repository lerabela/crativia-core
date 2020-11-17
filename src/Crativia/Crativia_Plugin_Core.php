<?php

namespace Crativia; 

class Crativia_Plugin_Core{

    /**
     * Method is reposible for plugin activation
     */
    public static function activate(){

        echo "Hello World";

    }

    /**
     * Method provide plugin cleanup logic, when deactivation is requested 
     */
    public static function deactivate(){


    }

}