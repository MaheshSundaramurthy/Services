<?php

namespace Ds\Bundle\ServiceBundle\DataFixtures\ORM;

use Ds\Bundle\ServiceBundle\Entity\Service;
use Ds\Component\Migration\Fixture\ORM\ResourceFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Class LoadServiceData
 */
class LoadServiceData extends ResourceFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $fixtures = $this->parse(__DIR__.'/../../Resources/data/{server}/services.yml');

        foreach ($fixtures as $fixture) {
            $entity = new Service();
            $entity->setUuid($fixture['uuid']);
            $entity->setOwner($fixture['owner']);
            $entity->setOwnerUuid($fixture['ownerUuid']);
            $entity->setTitle($fixture['title']);
            $entity->setDescription($fixture['description']);
            $entity->setPresentation($fixture['presentation']);

            $manager->persist($entity);
            $manager->flush();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 0;
    }
}
