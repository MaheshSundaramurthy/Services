<?php

namespace Ds\Bundle\ServiceBundle\DataFixtures\ORM;

use Ds\Bundle\ServiceBundle\Entity\Category;
use Ds\Bundle\ServiceBundle\Repository\ServiceRepository;
use Ds\Component\Migration\Fixture\ORM\ResourceFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Class LoadCategoryData
 */
class LoadCategoryData extends ResourceFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $fixtures = $this->parse(__DIR__.'/../../Resources/data/{server}/categories.yml');

        foreach ($fixtures as $fixture) {
            $category = new Category();
            $category->setUuid($fixture['uuid']);
            $category->setOwner($fixture['owner']);
            $category->setOwnerUuid($fixture['ownerUuid']);
            $category->setTitle($fixture['title']);
            $category->setDescription($fixture['description']);
            $category->setPresentation($fixture['presentation']);

            $manager->persist($category);
            $serviceRepo = $manager->getRepository('DsServiceBundle:Service');

            foreach ($fixture['services'] as $serviceUuid) {
                $service = $serviceRepo->findOneBy(['uuid' => $serviceUuid]);
                $category->addService($service);
            }

            $manager->persist($category);
            $manager->flush();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 1;
    }
}
