<?php

namespace FDevs\Bridge\PublishWorkflow\Voter;

use FDevs\PublishWorkflow\PublishStartReadInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

class PublishStartVoter extends AbstractPublishWorkflowVoter
{
    /**
     * {@inheritdoc}
     */
    protected function supportsInterface($subject)
    {
        return $subject instanceof PublishStartReadInterface;
    }

    /**
     * {@inheritdoc}
     */
    protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
    {
        return $this->publishWorkflow->isPublishStart($subject, $this->currentTime);
    }
}
