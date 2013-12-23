<?php
/**
 * @license http://www.opensource.org/licenses/mit-license.php MIT (see the LICENSE file)
 */

namespace Interop\Container;

/**
 * Containers implementing this interface will call the "parent" container if they do not have
 * an entry associated with the requested identifier.
 * Containers implementing this interface can therefore communicate both ways with other containers:
 *  - they can provide entries to other containers (through the ReadableContainerInterface interface)
 *  - they can consume entries from other containers (because of the ParentAwareContainerInterface interface)
 */
interface ParentAwareContainerInterface
{
    /**
     * Sets the parent container associated to that container. This container will call
     * the parent container as a fallback no entry is associated with the current identifier. 
     * 
     * @param ReadableContainerInterface $container
     */
    public function setParentContainer(ReadableContainerInterface $container);
}
