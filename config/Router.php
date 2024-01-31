<?php

class Router
{
    public function handleRequest(array $get): void{
    $pageController = new PageController();

    if (isset($get["route"]) && $get["route"] == "a-propos") {
        $pageController->about();
    } elseif (isset($get["route"]) && $get["route"] == "contact") {
        $pageController->contact();
    } elseif (!isset($get["route"])) {
        $pageController->home();
    } else {
        $pageController->notFound();
    }
    }
}