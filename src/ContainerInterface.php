<?php
/**
 * @license http://www.opensource.org/licenses/mit-license.php MIT (see the LICENSE file)
 */

namespace Interop\Container;

use Interop\Container\Exception\ContainerException;
use Interop\Container\Exception\NotFoundException;

/**
 * Describes the interface of a container that exposes methods to read its entries.
 */
interface ContainerInterface
{
    /**
     * Retrieves an item from the container by its identifier.
     *
     * @param string $id The identifier or name of the item provided by the container.
     *
     * @throws NotFoundException  The item requested from the container is not found.
     * @throws ContainerException There was an error retrieving the item.
     *
     * @return mixed The item or service provided by the container.
     */
    public function get($id);

    /**
     * Determines if the container can provide an item with the given identifier.
     *
     * @param string $id The identifier or name of the item provided by the container.
     *
     * @return bool Whether or not the item can be provided.
     */
    public function has($id);
}
