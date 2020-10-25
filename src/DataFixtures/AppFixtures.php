<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Auteurs;
use App\Entity\BandeDessinees;


class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $this->loadAuteurs($manager);
        $this->loadBandeDessinees($manager);


        $manager->flush();
    }

    private function loadAuteurs(ObjectManager $manager)
    {
        $auteurs=[
            ['nom_auteur' => 'Goscinny-Uderzo'],
            ['nom_auteur' => 'Roba-Rosy'],
            ['nom_auteur' => 'Herge'],
            ['nom_auteur' => 'Franquin - Delporte'],
        ];
        foreach ($auteurs as $auteur) {
            $auteur_new = new Auteurs();
            $auteur_new->setNoms($auteur['nom_auteur']);
            echo $auteur_new . "\n";
            $manager->persist($auteur_new);
            $manager->flush();
        }
    }

    private function loadBandeDessinees(ObjectManager $manager)
    {
        $bandeDessinees=[
            [ 'serie' => 'Astérix et Obélix', 'auteur_id' => 'Goscinny-Uderzo', 'titre' => 'La serpe d or', 'tome' => 'tome 1', 'dateParution' => '2005-10-09', 'prix' => '7'],
            [ 'serie' => 'Astérix et Obélix', 'auteur_id' => 'Goscinny-Uderzo', 'titre' => 'Asterix et les Goths', 'tome' => 'tome 2', 'dateParution' =>  '2011-10-10', 'prix' => '10'],
            [ 'serie' => 'Astérix et Obélix', 'auteur_id' => 'Goscinny-Uderzo', 'titre' => 'Asterix et les gladiateurs', 'tome' => 'tome 3', 'dateParution' =>  '2004-10-11', 'prix' => '5'],
            [ 'serie' => 'Astérix et Obélix', 'auteur_id' => 'Goscinny-Uderzo', 'titre' => 'Tour de Gaule d astérix', 'tome' => 'tome 4', 'dateParution' =>  '2005-09-10', 'prix' => '8'],
            [ 'serie' => 'Astérix et Obélix', 'auteur_id' => 'Goscinny-Uderzo', 'titre' => 'La zizanie', 'tome' => 'tome 15', 'dateParution' =>  '2014-09-10', 'prix' => '15'],
            [ 'serie' => 'Boule et Bill', 'auteur_id' => 'Roba-Rosy', 'titre' => '60 gags de Boule et Bill', 'tome' => 'tome 1', 'dateParution' => '2010-10-11', 'prix' => '10'],
            [ 'serie' => 'Boule et Bill', 'auteur_id' => 'Roba-Rosy', 'titre' => 'Papa maman, Boule et... moi', 'tome' => 'tome 8', 'dateParution' => '2005-10-11', 'prix' => '10'],
            [ 'serie' => 'Boule et Bill', 'auteur_id' => 'Roba-Rosy', 'titre' => 'Une vie de chien !', 'tome' => 'tome 9', 'dateParution' => '2012-10-11', 'prix' => '20'],
            [ 'serie' => 'Boule et Bill', 'auteur_id' => 'Roba-Rosy', 'titre' => 'Attention chien marrant !', 'tome' => 'tome 10', 'dateParution' => '2013-10-11', 'prix' => '10'],
            [ 'serie' => 'Boule et Bill', 'auteur_id' => 'Roba-Rosy', 'titre' => 'Jeux de Bill', 'tome' => 'tome 11', 'dateParution' => '2014-10-11', 'prix' => '20'],
            [ 'serie' => 'Tintin', 'auteur_id' => 'Herge', 'titre' => 'Tintin au pays des Soviets', 'tome' => 'tome 1', 'dateParution' => '2005-10-11', 'prix' => '10'],
            [ 'serie' => 'Tintin', 'auteur_id' => 'Herge', 'titre' => 'Tintin au Congo', 'tome' => 'tome 2', 'dateParution' => '2011-07-11', 'prix' => '10'],
            [ 'serie' => 'Tintin', 'auteur_id' => 'Herge', 'titre' => 'Tintin en Amérique', 'tome' => 'tome 3', 'dateParution' => '2012-10-11', 'prix' => '10'],
            [ 'serie' => 'Tintin', 'auteur_id' => 'Herge', 'titre' => 'Les Cigares du pharaon', 'tome' => 'tome 4', 'dateParution' => '2005-10-13', 'prix' => '20'],
            [ 'serie' => 'Tintin', 'auteur_id' => 'Herge', 'titre' => 'Le lotus bleu', 'tome' => 'tome 5', 'dateParution' => '2014-10-13', 'prix' => '20'],
            [ 'serie' => 'Gaston Lagaffe', 'auteur_id' => 'Franquin - Delporte', 'titre' => 'Gare aux gaffes', 'tome' => 'tome 1', 'dateParution' => '2010-12-03', 'prix' => '10'],
            [ 'serie' => 'Gaston Lagaffe', 'auteur_id' => 'Franquin - Delporte', 'titre' => 'Gala de gaffes', 'tome' => 'tome 2', 'dateParution' => '2012-09-06', 'prix' => '10'],
            [ 'serie' => 'Gaston Lagaffe', 'auteur_id' => 'Franquin - Delporte', 'titre' => 'Gaffes à gogo', 'tome' => 'tome 3', 'dateParution' => '2014-08-06', 'prix' => '8'],
            [ 'serie' => 'Gaston Lagaffe', 'auteur_id' => 'Franquin - Delporte', 'titre' => 'Gaffes en gros', 'tome' => 'tome 4', 'dateParution' => '2013-04-06', 'prix' => '10'],
            [ 'serie' => 'Gaston Lagaffe', 'auteur_id' => 'Franquin - Delporte', 'titre' => 'Les gaffes d un gars gonflé', 'tome' => 'tome 5', 'dateParution' => '2005-03-06', 'prix' => '8'],
        ];
        foreach ($bandeDessinees as $bandeDessinee)
        {
            $new_bandeDessinnee = new BandeDessinees();
            $new_bandeDessinnee->setSerie($bandeDessinee['serie']);
            $new_bandeDessinnee->setTitre($bandeDessinee['titre']);
            $new_bandeDessinnee->setTome($bandeDessinee['tome']);
            $new_bandeDessinnee->setPrix($bandeDessinee['prix']);
            $new_bandeDessinnee->setDateParution(\DateTime::createFromFormat('Y-m-d','2011-10-10'));

            $nom_auteur = $manager->getRepository(Auteurs::class)->findOneBy(["noms"  =>  $bandeDessinee['auteur_id']] );
            if($nom_auteur != null)
                $new_bandeDessinnee->setAuteurId($nom_auteur);
            echo $new_bandeDessinnee."\n";
            $manager->persist($new_bandeDessinnee);
            $manager->flush();
        }
    }

}
