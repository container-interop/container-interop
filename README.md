# Container Interoperability

The "container-interop" project attempts to achieve the interoperability of
*container* objects (service locators, dependency injection containers, etc.),
through discussions and trial, by establishing common interfaces.

If PHP projects that provide container implementations begin to adopt these
common interfaces, then PHP applications and projects that use containers can
depend on the common interfaces instead of specific implementations. This
facilitates a high-level of interoperability and flexibility that allows users
to consume *any* container implementation that be be adapted to these
interfaces.

The work done in this project is not officially endorsed by the
[PHP-FIG](http://www.php-fig.org/), but it is being worked on by members of
PHP-FIG and other good developers. We adhere to the spirit and ideals of
PHP-FIG, and hope this project will pave the way for one or more future PSRs.

## Installation

You can install this package through Composer:

```json
{
    "require": {
        "container-interop/container-interop": "1.*"
    }
}
```

The package will adhere to the [SemVer](http://semver.org/) specification.

## Available Interfaces

*None*

## Interfaces in the Works

- [`ContainerInterface`](src/Interop/Container/ContainerInterface.php): Join [the discussions](https://github.com/container-interop/container-interop/issues?labels=ContainerInterface&page=1&state=open)

## Workflow

Everyone is welcome to join and contribute.

The general workflow looks like this:

- someone opens a discussion (GitHub issue) to suggest an interface
- feedback is gathered
- the interface is added to a development branch
- we release alpha versions so that the interface can be experimented with
- discussions and edits ensue until the interface is deemed stable by a general consensus
- a new minor version of the package is released

We try to not break BC by creating new interfaces instead of editing existing ones.

While we now work on interfaces, we are open to anything that might help towards interoperability, may that be
code, best practices, …
