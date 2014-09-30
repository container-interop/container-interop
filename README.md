# Container Interoperability

[![Latest Stable Version](https://poser.pugx.org/container-interop/container-interop/v/stable.png)](https://packagist.org/packages/container-interop/container-interop)

The *container-interop* group is aimed at identifying and standardising features in *container* objects to achieve interopererability. Container objects include service locators, dependency injection containers, etc.

We produce standards in the shape of PHP interfaces or recommendations which projects that *provide* containers can follow.

The highest goal is to enable PHP applications and projects that *use* containers to depend on common interfaces instead of specific implementations.

This facilitates a high-level of interoperability and flexibility that allows users to consume *any* container implementation that can be adapted to these interfaces.

The work done in this project is not officially endorsed by the [PHP-FIG](http://www.php-fig.org/), but it is being worked on by members of PHP-FIG and other good developers. We adhere to the spirit and ideals of PHP-FIG, and hope this project will pave the way for one or more future PSRs.

## Installation

You can install this package through Composer:

```json
{
    "require": {
        "container-interop/container-interop": "~1.0"
    }
}
```

The packages adheres to the [SemVer](http://semver.org/) specification, and there will be full backward compatibility
between minor versions.

## Standards

### Accepted

- [`ContainerInterface`](src/Interop/Container/ContainerInterface.php).
[Meta Document](docs/ContainerInterface.md).
Describes the interface of a container that exposes methods to read its entries.
- [*Delegate lookup*](docs/delegate_lookup.md).
Describes the ability for a container to delegate the lookup of its dependencies to a third-party container. This 
feature is important to allow several containers to work together in a single application.

### Proposed

No standard is currently under discussion.

## Compatible projects

### `ContainerInterface`

- [Acclimate](https://github.com/jeremeamia/acclimate-container)
- [dcp-di](https://github.com/estelsmith/dcp-di)
- [Mouf](https://mouf-php.com)
- [Njasm Container](https://github.com/njasm/container)
- [PHP-DI](http://php-di.org)
- [PimpleInterop](https://github.com/moufmouf/pimple-interop)
- [XStatic](https://github.com/jeremeamia/xstatic)

### *Delegate lookup*

- [PHP-DI](http://php-di.org)
- [PimpleInterop](https://github.com/moufmouf/pimple-interop)

## Workflow

Everyone is welcome to join and contribute.

The general workflow looks like this:

1. Someone opens a GitHub issue or pull request to suggest a new standard
1. Feedback is gathered
1. If the standard contains PHP code, it is added to a development branch and released as an alpha version so that the interface can be experimented with
1. Discussions and edits ensue until the standard is deemed stable by a general consensus
1. A new minor version of the package is released containing the new standard

We try to not break BC by creating new interfaces and standards instead of editing existing ones.

Standards can take any form: PHP interface, recommendation…
