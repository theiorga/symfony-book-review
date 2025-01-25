<?php

namespace App\Security\Voter;

use App\Entity\Review;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class ReviewVoter extends Voter
{
    public const EDIT = 'edit';
    public const DELETE = 'delete';

    private Security $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    protected function supports(string $attribute, $subject): bool
    {
        return in_array($attribute, [self::EDIT, self::DELETE]) && $subject instanceof Review;
    }

    protected function voteOnAttribute(string $attribute, $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();

        // Ensure the user is logged in
        if (!$user) {
            return false;
        }

        // Ensure the subject is a Review
        if (!$subject instanceof Review) {
            return false;
        }

        // Check if the logged-in user is the reviewer
        return $subject->getReviewer() === $user;
    }
}