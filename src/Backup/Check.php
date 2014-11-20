<?php
namespace phpbu\Backup;

use phpbu\App\Result;
use phpbu\Backup\Target;

/**
 * Check
 *
 * @package    phpbu
 * @subpackage Backup
 * @author     Sebastian Feldmann <sebastian@phpbu.de>
 * @copyright  2014 Sebastian Feldmann <sebastian@phpbu.de>
 * @license    http://www.opensource.org/licenses/BSD-3-Clause  The BSD 3-Clause License
 * @link       http://www.phpbu.de/
 * @since      Class available since Release 1.0.0
 */
interface Check
{
    /**
     * Checks the created backup.
     *
     * @param  Target $target
     * @param  string $value
     * @return boolean
     */
    public function pass(Target $target, $value, Result $result);
}
