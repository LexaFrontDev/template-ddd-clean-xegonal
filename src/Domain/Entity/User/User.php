<?php

namespace App\Domain\Entity\User;

use App\Domain\Entity\ValueObject\User\EmailAddress;
use App\Domain\Entity\ValueObject\User\Password;
use App\Domain\Entity\ValueObject\User\Username;
use App\Domain\Security\Permission\PermissionInterface;
use App\Domain\Security\RoleEnum;

class User
{
    private int $id;
    private Username $username;
    private EmailAddress $email;
    private Password $password;
    private RoleEnum $role;

    public function getId(): int
    {
        return $this->id;
    }

    public function getUsername(): Username
    {
        return $this->username;
    }

    public function setUsername(Username $username): void
    {
        $this->username = $username;
    }

    public function getEmail(): EmailAddress
    {
        return $this->email;
    }

    public function setEmail(EmailAddress $email): void
    {
        $this->email = $email;
    }

    public function getPassword(): Password
    {
        return $this->password;
    }

    public function setPassword(Password $password): void
    {
        $this->password = $password;
    }

    public function getRole(): RoleEnum
    {
        return $this->role;
    }

    public function setRole(RoleEnum $role): void
    {
        $this->role = $role;
    }

    /**
     * @return array<int, PermissionInterface>
     */
    public function getPermissions(): array
    {
        return $this->role->getPermissions();
    }
}