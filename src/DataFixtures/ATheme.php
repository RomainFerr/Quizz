<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ATheme extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $theme = new \App\Entity\Theme();
        $theme->setLibelle('Manga');
        $this->addReference('theme1',$theme);
        $manager->persist($theme);

        $theme2 = new \App\Entity\Theme();
        $theme2->setLibelle('Comics');
        $this->addReference('theme2',$theme2);
        $manager->persist($theme2);


        $manager->flush();


    }
}
