<?php

declare(strict_types=1);

namespace Axleus\Authorization;

use Mezzio\Authentication\UserInterface;
use Psr\Http\Message\ServerRequestInterface;

interface AuthorizationEventInterface
{
    public function setRole(string $role): self;
    public function getRole(): ?string;
    public function setRequest(ServerRequestInterface $request): self;
    public function getRequest(): ?ServerRequestInterface;
    public function setUser(UserInterface $userInterface): self;
    public function getUser(): ?UserInterface;
}
