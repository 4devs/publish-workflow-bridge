<?php

namespace FDevs\Bridge\PublishWorkflow\Voter;

use FDevs\PublishWorkflow\PublishEndReadInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

class PublishEndVoter extends AbstractPublishWorkflowVoter
{
    /**
     * {@inheritdoc}
     */
    protected function supportsInterface($subject)
    {
        return $subject instanceof PublishEndReadInterface;
    }

    /**
     * {@inheritdoc}
     */
    protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
    {
        return $this->publishWorkflow->isPublishStart($subject, $this->currentTime);
    }
}
