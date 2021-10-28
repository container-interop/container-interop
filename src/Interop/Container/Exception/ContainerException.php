<?php
/**
 * @license http://www.opensource.org/licenses/mit-license.php MIT (see the LICENSE file)
 */

namespace Interop\Container\Exception;

use Psr\Container\ContainerExceptionInterface as PsrContainerException;

class_alias(PsrContainerException::class, ContainerException::class);
