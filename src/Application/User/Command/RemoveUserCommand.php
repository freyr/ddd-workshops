<?php
declare(strict_types=1);

namespace TSwiackiewicz\AwesomeApp\Application\User\Command;

use TSwiackiewicz\AwesomeApp\SharedKernel\User\UserId;

/**
 * Class RemoveUserCommand
 * @package TSwiackiewicz\AwesomeApp\Application\User\Command
 */
class RemoveUserCommand implements UserCommand
{
    /**
     * @var UserId
     */
    private $userId;

    /**
     * RemoveUserCommand constructor.
     * @param UserId $userId
     */
    public function __construct(UserId $userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return UserId
     */
    public function getUserId(): UserId
    {
        return $this->userId;
    }
}