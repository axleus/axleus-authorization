<?php

declare(strict_types=1);

namespace Axleus\Authorization;

use Laminas\EventManager\AbstractListenerAggregate;
use Laminas\EventManager\EventManagerInterface;
use Mezzio\Authorization\AuthorizationInterface;

final class AuthorizationListener extends AbstractListenerAggregate
{
    public function __construct(
        private AuthorizationInterface $authorizationInterface
    ) {
    }

    public function attach(EventManagerInterface $events, $priority = 1)
    {
        $this->listeners[] = $events->attach(
            LaminasRbacEvent::EVENT_AUTHORIZE_RBAC,
            [$this, 'onRbacAuthorize'],
            $priority
        );

        $this->listeners[] = $events->attach(
            LaminasAclEvent::EVENT_AUTHORIZE_ACL,
            [$this, 'onAclAuthorize'],
            $priority
        );
    }

    public function onRbacAuthorize(LaminasRbacEvent $event): bool
    {

    }

    public function onAclAuthorize(LaminasAclEvent $event): bool
    {

    }
}
