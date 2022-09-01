<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Evenement;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $product = new Evenement();
        $product->setName('Japan Expo');
        $product->setPrice(18);
        $product->setDatedebut( new \DateTime('2022-11-18'));
        $product->setDatefin(new \DateTime('2022-11-21'));
        $manager->persist($product);

        $product = new Evenement();
        $product->setName('Paris Manga');
        $product->setPrice(35);
        $product->setDatedebut( new \DateTime('2022-12-03'));
        $product->setDatefin(new \DateTime('2022-12-04'));
        $manager->persist($product);


        $product = new Evenement();
        $product->setName('Gamescon');
        $product->setPrice(27);
        $product->setDatedebut( new \DateTime('2023-04-25'));
        $product->setDatefin(new \DateTime('2023-04-30'));
        $manager->persist($product);

        $manager->flush();
    }
}
