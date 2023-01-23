<?php

namespace App\DataFixtures;

use _PHPStan_980551bf2\Nette\Utils\DateTime;
use App\Entity\Book;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class BookFixtures extends Fixture implements DependentFixtureInterface
{
    public function getDependencies()
    {
        return [
            BookCategoryFixtures::class,
        ];
    }

    public function load(ObjectManager $manager)
    {
        $androidCategory = $this->getReference(BookCategoryFixtures::ANDROID_CATEGORY);
        $devicesCategory = $this->getReference(BookCategoryFixtures::DEVICES_CATEGORY);

        $book = (new Book())
            ->setTitle('C# 10 and .NET 6 for Absolute Beginners')
            ->setPublicationDate(new DateTime('2022-12-01'))
            ->setMeap(false)
            ->setAuthors(['Trevoir Williams'])
            ->setSlug('c-sharp-10-and-dot-net-6-for-absolute-beginners')
            ->setCategories(new ArrayCollection([$androidCategory, $devicesCategory]))
            ->setImage('https://images.manning.com/360/480/resize/video/0/453aa3b-40a7-485f-a5cb-839879cbb6dd/C_10_and_NET_6_for_Absolute_Beginners.png');

        $manager->persist($book);
        $manager->flush();
    }
}
