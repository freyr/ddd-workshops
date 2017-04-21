<?php
declare(strict_types = 1);

namespace TSwiackiewicz\AwesomeApp\Application\User\Command;

use TSwiackiewicz\AwesomeApp\DomainModel\User\UserLogin;

/**
 * Class EnableUserCommand
 * @package TSwiackiewicz\AwesomeApp\Application\User\Command
 */
class EnableUserCommand implements UserCommand
{
    /**
     * @var UserLogin
     */
    private $login;

    /**
     * EnableUserCommand constructor.
     * @param UserLogin $login
     */
    public function __construct(UserLogin $login)
    {
        $this->login = $login;
    }

    /**
     * @return UserLogin
     */
    public function getLogin(): UserLogin
    {
        return $this->login;
    }
}