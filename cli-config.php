<?php
/**
 * @link http://www.thaiyii.com
 * 2020-02-05 10:43
 * @copyright Copyright (c) 2020 served
 * @author Prawee Wongsa <prawee@hotmail.com>
 * @license MIT
 */
use Doctrine\ORM\Tools\Console\ConsoleRunner;
require_once 'bootstrap.php';

return ConsoleRunner::createHelperSet($entity_manager);
