<?php

namespace FDevs\Bridge\PublishWorkflow\Voter;

use FDevs\PublishWorkflow\PublishTimeReadInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

class PublishTimeVoter extends AbstractPublishWorkflowVoter
{
    /**
     * {@inheritdoc}
     */
    protected function supportsInterface($subject)
    {
        return $subject instanceof PublishTimeReadInterface;
    }

    /**
     * {@inheritdoc}
     */
    protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
    {
        return $this->publishWorkflow->isPublishStart($subject, $this->currentTime) && $this->publishWorkflow->isPublishNotEnd($subject, $this->currentTime);
    }
}
