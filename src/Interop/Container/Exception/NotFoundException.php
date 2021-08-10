<?php
/**
 * @license http://www.opensource.org/licenses/mit-license.php MIT (see the LICENSE file)
 */

namespace Interop\Container\Exception;

use Psr\Container\NotFoundExceptionInterface as PsrNotFoundException;

class_alias(PsrNotFoundException::class, NotFoundException::class);
