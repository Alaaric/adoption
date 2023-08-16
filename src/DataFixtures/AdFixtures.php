<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Ads;
use DateTimeImmutable;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class AdFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $ad1 = new Ads();

        $ad1->setCreationDate(new DateTimeImmutable());
        $ad1->setPhoto("chat1.jpg");
        $ad1->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tempor nec feugiat nisl pretium fusce id. Morbi tristique senectus et netus et malesuada fames. Integer quis auctor elit sed vulputate mi sit. Leo a diam sollicitudin tempor id eu nisl nunc.");
        $ad1->setName("chat1");
        $ad1->setAge(1);
        $ad1->setUser($this->getReference("admin"));

        $manager->persist($ad1);

        $ad2 = new Ads();

        $ad2->setCreationDate(new DateTimeImmutable());
        $ad2->setPhoto("chat2.jpg");
        $ad2->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tempor nec feugiat nisl pretium fusce id. Morbi tristique senectus et netus et malesuada fames. Integer quis auctor elit sed vulputate mi sit. Leo a diam sollicitudin tempor id eu nisl nunc.");
        $ad2->setName("chat2");
        $ad2->setAge(1);
        $ad2->setUser($this->getReference("user1"));

        $manager->persist($ad2);

        $ad3 = new Ads();

        $ad3->setCreationDate(new DateTimeImmutable());
        $ad3->setPhoto("chat3.jpg");
        $ad3->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tempor nec feugiat nisl pretium fusce id. Morbi tristique senectus et netus et malesuada fames. Integer quis auctor elit sed vulputate mi sit. Leo a diam sollicitudin tempor id eu nisl nunc.");
        $ad3->setName("chat3");
        $ad3->setAge(1);
        $ad3->setUser($this->getReference("admin"));

        $manager->persist($ad3);

        $ad4 = new Ads();

        $ad4->setCreationDate(new DateTimeImmutable());
        $ad4->setPhoto("chat4.jpg");
        $ad4->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tempor nec feugiat nisl pretium fusce id. Morbi tristique senectus et netus et malesuada fames. Integer quis auctor elit sed vulputate mi sit. Leo a diam sollicitudin tempor id eu nisl nunc.");
        $ad4->setName("chat4");
        $ad4->setAge(1);
        $ad4->setUser($this->getReference("user2"));

        $manager->persist($ad4);

        $ad5 = new Ads();

        $ad5->setCreationDate(new DateTimeImmutable());
        $ad5->setPhoto("chat5.jpg");
        $ad5->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tempor nec feugiat nisl pretium fusce id. Morbi tristique senectus et netus et malesuada fames. Integer quis auctor elit sed vulputate mi sit. Leo a diam sollicitudin tempor id eu nisl nunc.");
        $ad5->setName("chat5");
        $ad5->setAge(1);
        $ad5->setUser($this->getReference("user2"));

        $manager->persist($ad5);

        $ad6 = new Ads();

        $ad6->setCreationDate(new DateTimeImmutable());
        $ad6->setPhoto("chat6.jpg");
        $ad6->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tempor nec feugiat nisl pretium fusce id. Morbi tristique senectus et netus et malesuada fames. Integer quis auctor elit sed vulputate mi sit. Leo a diam sollicitudin tempor id eu nisl nunc.");
        $ad6->setName("chat6");
        $ad6->setAge(1);
        $ad6->setUser($this->getReference("user1"));

        $manager->persist($ad6);

        $ad7 = new Ads();

        $ad7->setCreationDate(new DateTimeImmutable());
        $ad7->setPhoto("chat7.jpg");
        $ad7->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tempor nec feugiat nisl pretium fusce id. Morbi tristique senectus et netus et malesuada fames. Integer quis auctor elit sed vulputate mi sit. Leo a diam sollicitudin tempor id eu nisl nunc.");
        $ad7->setName("chat7");
        $ad7->setAge(1);
        $ad7->setUser($this->getReference("user1"));

        $manager->persist($ad7);

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [UserFixtures::class];
    }
}
