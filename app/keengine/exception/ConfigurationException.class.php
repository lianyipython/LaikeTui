<?php

// +---------------------------------------------------------------------------+
// | This file is part of the core package.                                    |
// | Copyright (c) laiketui.com                                                |
// |                                                                           |
// | For the full copyright and license information, please view the LICENSE   |
// | file that was distributed with this source code. You can also view the    |
// | LICENSE file online at http://www.laiketui.com                            |
// +---------------------------------------------------------------------------+

/**
 * ConfigurationException is thrown when the framework finds an error in a
 * configuration setting.
 *
 * @package    laiketui
 * @subpackage exception
 *
 * @author ketter (ketter@laiketui.com)
 * @since  3.0.0
 */
class ConfigurationException extends MojaviException
{

    // +-----------------------------------------------------------------------+
    // | CONSTRUCTOR                                                           |
    // +-----------------------------------------------------------------------+

    /**
     * Class constructor.
     *
     * @param string The error message.
     * @param int    The error code.
     *
     * @author ketter (ketter@laiketui.com)
     * @since  3.0.0
     */
    public function __construct ($message = null, $code = 0)
    {

        parent::__construct($message, $code);

        $this->setName('ConfigurationException');

    }

}

?>