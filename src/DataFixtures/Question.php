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
        $question->setBonnereponse("SAO");
        $question->setReponses(['SWORDONLINE','SWAO','GGO','SAO']);
        $question->setTheme($this->getReference('theme1'));
        $question->setIntitule('Comment est abrégé Sword Art Online');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setBonnereponse("Deku");
        $question->setReponses(['Deku','Midoriya','Izuku','AllMight']);
        $question->setTheme($this->getReference('theme1'));
        $question->setIntitule('Quel est le nom de héro du personnage principal de My Hero Academia ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setBonnereponse("MHA");
        $question->setReponses(['SNK','MHA','SAO','GGO']);
        $question->setTheme($this->getReference('theme1'));
        $question->setIntitule("D'où vient le ''Plus Ultra'' ?");
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setBonnereponse("Un Bilboquet");
        $question->setReponses(['Un Sac','Un Biscuit en forme de coeur','Des Chocolats','Un Bilboquet']);
        $question->setTheme($this->getReference('theme1'));
        $question->setIntitule("Dans Love Is War, qu'offre Shirogane à Kaguya le soir de Noël ?");
        $manager->persist($question);




        $question = new \App\Entity\Question();
        $question->setBonnereponse("Spider-Man");
        $question->setReponses(['Dr.Strange','Super-Man','Batman','Spider-Man']);
        $question->setTheme($this->getReference('theme2'));
        $question->setIntitule('Qui a le sens de l\'araignée ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setBonnereponse("Thanos");
        $question->setReponses(['Iron-Man','Super-Man','Thanos','Ultron']);
        $question->setTheme($this->getReference('theme2'));
        $question->setIntitule('Qui est le méchant de Infinity War ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setBonnereponse("Ant-Man");
        $question->setReponses(['Iron-Man','Spider-Man','Shang-Shi','Ant-Man']);
        $question->setTheme($this->getReference('theme2'));
        $question->setIntitule('Qui peut se rétrécir ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setBonnereponse("Zombie");
        $question->setReponses(['Zombie','Chauve-Souris','Boule','Ant-Man']);
        $question->setTheme($this->getReference('theme2'));
        $question->setIntitule('Dans Dr.Strange 2, en quoi Dr.Strange se transforme ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setBonnereponse("Chavez");
        $question->setReponses(['Chavez','Wanda','Dr.Strange','DeadPool']);
        $question->setTheme($this->getReference('theme2'));
        $question->setIntitule('Qui ouvre des portails dans le multivers ?');
        $manager->persist($question);



        $question = new \App\Entity\Question();
        $question->setBonnereponse("SMB2");
        $question->setReponses(['SMB1','SMB2','SMB3','SMW']);
        $question->setTheme($this->getReference('theme3'));
        $question->setIntitule('Dans quel jeu est apparu Maskass ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setBonnereponse("Birdo");
        $question->setReponses(['Birdo','Yoshi','Toad','Kamek']);
        $question->setTheme($this->getReference('theme3'));
        $question->setIntitule('Qui est apparu dans SMB2 ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setBonnereponse("Une Pelleteuse");
        $question->setReponses(['Une F1','Une Boule de Flipper','Une Brouette','Une Pelleteuse']);
        $question->setTheme($this->getReference('theme3'));
        $question->setIntitule('Quel kart à Waluigi dans Mario Kart DS ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setBonnereponse("Menzie");
        $question->setReponses(['Nabille','Tilly','Menzie','RoseMary']);
        $question->setTheme($this->getReference('theme3'));
        $question->setIntitule('Qui est le/la rival(e) de Pokémon 9G ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setBonnereponse("Mimiqui");
        $question->setReponses(['Dedenne','Mimiqui','Pachirisu','Togedemaru']);
        $question->setTheme($this->getReference('theme3'));
        $question->setIntitule('Qui imite Pikachu ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setBonnereponse("Kirby");
        $question->setReponses(['Kirby','Grodoudou','Zelda','Samus']);
        $question->setTheme($this->getReference('theme3'));
        $question->setIntitule('Qui est la boule rose la plus mignonne de Nintendo ?');
        $manager->persist($question);

        $manager->flush();
    }
}
