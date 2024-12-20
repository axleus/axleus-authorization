<?php

declare(strict_types=1);

namespace Axleus\Authorization;

final class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies'             => $this->getDependencies(),
            'filters'                  => $this->getFilters(),
            'mezzio-authorization-acl' => $this->getAuthorizationConfig(),
        ];
    }

    public function getAuthorizationConfig(): array
    {
        return [
            'roles'       => [
                'Guest'         => [],
                'User'          => ['Guest'],
                'Administrator' => ['User'],
            ],
        ];
    }

    public function getDependencies(): array
    {
        return [
            'aliases'   => [
                AuthorizationInterface::class => Adapter\LaminasAcl::class,
            ],
            'factories' => [
                Adapter\LaminasAcl::class                 => Adapter\LaminasAclFactory::class,
                Middleware\AuthorizationMiddleware::class => Middleware\AuthorizationMiddlewareFactory::class,
            ],
            'listeners' => [
                AuthorizationListener::class,
            ],
        ];
    }

    public function getFilters(): array
    {
        return [
            'invokables' => [
                Filter\HttpMethodToResourcePermissionFilter::class => Filter\HttpMethodToResourcePermissionFilter::class,
            ],
        ];
    }
}
