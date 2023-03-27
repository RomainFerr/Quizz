<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Question extends Fixture
{

    public function load(ObjectManager $manager): void
    {
       $question = new \App\Entity\Question();
       $question->setBonnereponse("Boruto");
       $question->setReponses(['Naruto','Sasuke','Boruto','toi']);
       $question->setTheme($this->getReference('theme1'));
       $question->setIntitule('Qui est l\'enfant de Naruto ?');
         $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setBonnereponse("Luffy");
        $question->setReponses(['Sasuke','Luffy','Zorro','Le Dev']);
        $question->setTheme($this->getReference('theme1'));
        $question->setIntitule('Qui sera le roi des pirates ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setBonnereponse("Spider-Man");
        $question->setReponses(['Dr.Strange','Super-Man','Batman','Spider-Man']);
        $question->setTheme($this->getReference('theme2'));
        $question->setIntitule('Qui a le sens de l\'araignée ?');
        $manager->persist($question);

        $manager->flush();
    }
}
