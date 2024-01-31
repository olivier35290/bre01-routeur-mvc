<?php

class Router {
    
    public function __construct()
    {
    }
    
    public function handleRequest(array $get) : void
    {
        if (isset($get["route"]) && ($get["route"] === "a-propos"))
        {
            $aboutController = new PageController();
            $aboutController -> about();
        }
        else if (isset($get["route"]) && ($get["route"] === "contact"))
        {
            $contactController = new PageController();
            $contactController -> contact();
        }
        else if (!isset($get["route"]))
        {
            $noRouteController = new PageController();
            $noRouteController -> home();
        }
        else
        {
            $otherController = new PageController();
            $otherController -> error404();
        }
    }
    
}