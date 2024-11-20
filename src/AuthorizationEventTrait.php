<?php

declare(strict_types=1);

namespace Axleus\Authorization;

use Mezzio\Authentication\UserInterface;
use Psr\Http\Message\ServerRequestInterface;

trait AuthorizationEventTrait
{
    public function setRole(string $role): self
    {
        $this->setParam('role', $role);
        return $this;
    }

    public function getRole(): ?string
    {
        return $this->getParam('role');
    }

    public function setRequest(ServerRequestInterface $request): self
    {
        $this->setParam('request', $request);
        return $this;
    }

    public function getRequest(): ?ServerRequestInterface
    {
        return $this->getParam('request');
    }

    public function setUser(UserInterface $userInterface): self
    {
        $this->setParam('userInterface', $userInterface);
        return $this;
    }

    public function getUser(): ?UserInterface
    {
        return $this->getParam(
            'userInterface',
            $this->request?->getAttribute(UserInterface::class)
        );
    }
}
