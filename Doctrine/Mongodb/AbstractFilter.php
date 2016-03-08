<?php

namespace FDevs\Bridge\PublishWorkflow\Doctrine\Mongodb;

use Doctrine\ODM\MongoDB\Mapping\ClassMetadata;
use Doctrine\ODM\MongoDB\Query\Filter\BsonFilter;

abstract class AbstractFilter extends BsonFilter
{
    /**
     * @return array
     */
    abstract protected function getQuery();

    /**
     * @return string
     */
    abstract protected function getInterface();

    /**
     * {@inheritdoc}
     */
    public function addFilterCriteria(ClassMetadata $class)
    {
        $filter = [];
        if ($class->reflClass->implementsInterface($this->getInterface())) {
            $filter = $this->getQuery();
        }

        return $filter;
    }
}
