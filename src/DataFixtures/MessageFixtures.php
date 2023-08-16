<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Messages;
use DateTimeImmutable;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Faker\Factory;

class MessageFixtures extends Fixture implements DependentFixtureInterface
{
    const USERS = ["admin", "user1", "user2"];

    public function load(ObjectManager $manager): void
    {


        $faker = Factory::create();
        for ($i = 0; $i < 10; $i++) {

            $receiver = random_int(0, 2);
            $sender = random_int(0, 2);

            while ($sender === $receiver) {
                $sender = random_int(0, 2);
            }

            $message = new Messages();

            $message->setCreationDate(new DateTimeImmutable());
            $message->setContent($faker->paragraphs(1, true));

            $message->setSenderId($this->getReference(self::USERS[$sender]));
            $message->setReceiverId($this->getReference(self::USERS[$receiver]));
            $manager->persist($message);
        }


        $manager->flush();
    }
    public function getDependencies(): array
    {
        return [UserFixtures::class];
    }
}
