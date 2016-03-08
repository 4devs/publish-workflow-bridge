<?php

namespace FDevs\Bridge\PublishWorkflow\Doctrine\Mongodb;

use FDevs\PublishWorkflow\PublishTimeReadInterface;

class PublishTimeFilter extends AbstractFilter
{
    /**
     * {@inheritdoc}
     */
    protected function getQuery()
    {
        return [
            '$and' => [
                ['$or' => [['publishStartDate' => ['$lte' => $this->getDate('publishStartDate')]], ['publishStartDate' => null]]],
                ['$or' => [['publishEndDate' => ['$gte' => $this->getDate('publishEndDate')]], ['publishEndDate' => null]]],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    protected function getInterface()
    {
        return PublishTimeReadInterface::class;
    }

    /**
     * @param string $name
     *
     * @return \DateTime|mixed
     */
    private function getDate($name)
    {
        try {
            $date = $this->getParameter($name);
            if (is_string($date)) {
                $date = new \DateTime($date);
            }
        } catch (\InvalidArgumentException $e) {
            $date = new \DateTime();
        }

        return $date;
    }
}
