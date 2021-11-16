<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $faker=Factory::create();
//for account
        for($i=0; $i<300; $i++){
            $account=new Account();

            $account->setUsername($faker->username);
            $account->setEmail($faker->email);
            $account->setParola($faker->parola);
            $account->setDatebirthAcc($faker->datebirth_acc);

            $manager->persist($account);

        }
//for employee
        for($i=0; $i<16; $i++){
            $employee=new Employee();


            $account->setUsername($faker->username);
            $account->setEmail($faker->email);
            $account->setParola($faker->parola);
            $account->setDatebirthAcc($faker->datebirth_acc);

            $manager->persist($employee);

        }
//for clients
        for($i=0; $i<200; $i++){
            $client=new Client();

            $account->setUsername($faker->username);
            $account->setEmail($faker->email);
            $account->setParola($faker->parola);
            $account->setDatebirthAcc($faker->datebirth_acc);

            $manager->persist($client);
        }

        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
