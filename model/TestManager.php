<?php

namespace MVC\Testimonials;

require_once ('Manager.php');

class TestimonialManager extends \MVC\Manager\Manager {

    public function getTestimonials() 
    {

        $bdd = $this->connection();
        $requete = $bdd->query('SELECT * FROM testimonials');

        return $requete;
    }

    public function postTestimonials($note, $message) {

        $bdd = $this->connection();
        $requete = $bdd->prepare('INSERT INTO testimonials(note, content) VALUES(?, ?)');
        $result = $requete->execute([$note, $message]);

        return $result;
    }

}