<?php

namespace FDevs\Bridge\PublishWorkflow\Doctrine\Mongodb;

use FDevs\PublishWorkflow\PublishableReadInterface;

class PublishableFilter extends AbstractFilter
{
    /**
     * {@inheritdoc}
     */
    protected function getQuery()
    {
        $filter = [];
        try {
            $publishable = $this->getParameter('publishable');
            if (is_bool($publishable)) {
                $filter = ['publishable' => $publishable];
            }
        } catch (\InvalidArgumentException $e) {
        }

        return $filter;
    }

    /**
     * {@inheritdoc}
     */
    protected function getInterface()
    {
        return PublishableReadInterface::class;
    }
}
