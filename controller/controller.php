<?php
require_once ('model/UserManager.php');
require_once ('model/TestManager.php');

function home()
{
    $userManager = new  \MVC\Users\UserManager();
    $requete = $userManager->getUsers();

    require 'view/listView.php';
}

function testimonials()
{
    $testManager = new \MVC\Testimonials\TestimonialManager();
    $requete = $testManager->getTestimonials();

    require 'view/UserView.php';
}

function addTestimonials($note, $message){
        $testimonialManager = new \MVC\Testimonials\TestimonialManager();

        $result = $testimonialManager->postTestimonial($note, $message);

        if($result === false){
            throw new Exception("Impossible d'ajouter votre avis pour le moment.");
        }
        else{
            header('location: index.php?page=avis');
            exit();
        }

}