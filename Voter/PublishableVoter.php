<?php

namespace FDevs\Bridge\PublishWorkflow\Voter;

use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use FDevs\PublishWorkflow\PublishableReadInterface;

class PublishableVoter extends AbstractPublishWorkflowVoter
{
    /**
     * {@inheritdoc}
     */
    protected function supportsInterface($subject)
    {
        return $subject instanceof PublishableReadInterface;
    }

    /**
     * {@inheritdoc}
     */
    protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
    {
        return $subject->isPublishable();
    }
}
