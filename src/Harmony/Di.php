<?php

/**
 * Di class
 *
 * PHP version 5
 *
 * This file is part Harmony Di
 *
 * Di class is responsible for return proper object with dependecies.
 * As container we are using Pimple Di.
 *
 * @category  Harmony
 * @package   Di
 * @author    ViewOne Sp. z o.o. <support@viewone.pl>
 * @copyright 2014 ViewOne Sp. z o.o.
 * @license   http://opensource.org/licenses/MIT MIT
 * @link      https://github.com/viewone
 */

namespace Harmony;

use Pimple\Container;

class Di extends Container
{

    /**
     * Get service
     *
     * Wrapper for Pimple to obtain service
     *
     * @param string $service Service name
     *
     * @access public
     * @since Method available since Release 1.0.0
     * @return mixed Service
     */
    public function get($service)
    {
        return $this[$service];
    }
}
