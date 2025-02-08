<?php

namespace App\DataFixtures;

use App\Entity\Book;
use App\Entity\Review;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $hasher;

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }

    public function load(ObjectManager $manager): void
    {
        for($i=0; $i<5; $i++){
            $user = new User();
            $user->setEmail('user'.$i.'@gmail.com');
            $user->setPassword($this->hasher->hashPassword($user, '123456'));
            $user->setRoles(['ROLE_USER']);
            $manager->persist($user);
        }
        $manager->flush();


         for ($i=0; $i <60; $i++){
            $book = new Book();
            $book->setTitle('Book '.$i);
            $book->setAuthor('Author '.$i);
            $book->setPages($i);
            $book->setSummary('Summary '.$i);
            $book->setGenre('Genre '.$i);
            $user = $manager->getRepository(User::class)->find('1');
            $book->setCreatedBy($user);
            $manager->persist($book);
        }
        $manager->flush();


        for ($i=0; $i <10; $i++) {
            $review = new Review();
            $review->setReviewText('Review '.$i);
            $user = $manager->getRepository(User::class)->find('1');
            $review->setReviewer($user);
            $book = $manager->getRepository(Book::class)->find('59');
            echo "Processing review for book:".$book->getId()."\n";
            $review->setBook($book);
            $manager->persist($review);

        }

        $manager->flush();

    }
}
