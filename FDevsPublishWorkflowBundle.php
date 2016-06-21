<?php

namespace FDevs\Bridge\PublishWorkflow;

use FDevs\Bridge\PublishWorkflow\DependencyInjection\FDevsPublishWorkflowExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class FDevsPublishWorkflowBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function createContainerExtension()
    {
        return new FDevsPublishWorkflowExtension();
    }
}
