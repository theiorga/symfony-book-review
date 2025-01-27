<?php

namespace App\Security\Voter;

use App\Entity\Book;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class BookVoter extends Voter
{
    public const CREATE = 'create';
    public const EDIT = 'edit';
    public const DELETE = 'delete';

    private Security $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    protected function supports(string $attribute, $subject): bool
    {
        // Ensure the voter is only used for Book and the specified attributes
        return in_array($attribute, [self::CREATE, self::EDIT, self::DELETE]) && ($subject instanceof Book || $attribute === self::CREATE);
    }

    protected function voteOnAttribute(string $attribute, $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();

        // Ensure the user is logged in
        if (!$user) {
            return false;
        }

        // Logic for each attribute
        return match ($attribute) {
            self::CREATE => true,
            self::EDIT, self::DELETE => $subject->getCreatedBy() === $user,
            default => false,
        };

    }
}