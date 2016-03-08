<?php

namespace FDevs\Bridge\PublishWorkflow\Voter;

use FDevs\PublishWorkflow\PublishWorkflow;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

abstract class AbstractPublishWorkflowVoter extends Voter
{
    const VIEW = 'VIEW';
    const VIEW_ANONYMOUS = 'VIEW_ANONYMOUS';

    /** @var PublishWorkflow */
    protected $publishWorkflow;

    /** @var \DateTime */
    protected $currentTime;

    /**
     * AbstractPublishWorkflowVoter constructor.
     *
     * @param PublishWorkflow $publishWorkflow
     */
    public function __construct(PublishWorkflow $publishWorkflow)
    {
        $this->publishWorkflow = $publishWorkflow;
        $this->currentTime = new \DateTime();
    }

    /**
     * {@inheritdoc}
     */
    protected function supports($attribute, $subject)
    {
        return in_array($attribute, [self::VIEW, self::VIEW_ANONYMOUS]) && $this->supportsInterface($subject);
    }

    /**
     * @param mixed $subject
     *
     * @return bool
     */
    abstract protected function supportsInterface($subject);
}
