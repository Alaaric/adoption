<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;
use DateTimeImmutable;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager ): void
    {
        $admin = new User();

        $admin->setCreationDate(new DateTimeImmutable());
        $admin->setFirstname("jean");
        $admin->setLastname("mich");
        $admin->setEmail("jean@mich.com");
        $hashedpassword = $this->passwordHasher->hashPassword($admin, "test");
        $admin->setPassword($hashedpassword);
        $admin->setIsAdmin(true);
        $this->addReference("admin", $admin);

        $manager->persist($admin);

        $user1 = new User();
        
        $user1->setCreationDate(new DateTimeImmutable());
        $user1->setFirstname("mich");
        $user1->setLastname("much");
        $user1->setEmail("mich@much.com");
        $hashedpassword = $this->passwordHasher->hashPassword($user1, "test");
        $user1->setPassword($hashedpassword);
        $user1->setIsAdmin(false);
        $this->addReference("user1", $user1);

        $manager->persist($user1);

        $user2 = new User();
        
        $user2->setCreationDate(new DateTimeImmutable());
        $user2->setFirstname("place");
        $user2->setLastname("holder");
        $user2->setEmail("place@holder.com");
        $hashedpassword = $this->passwordHasher->hashPassword($user2, "test");
        $user2->setPassword($hashedpassword);
        $user2->setIsAdmin(false);
        $this->addReference("user2", $user2);

        $manager->persist($user2);

        $manager->flush();
    }
}
