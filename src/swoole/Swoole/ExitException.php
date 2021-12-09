<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole IDE Helper.
 * @link     https://www.swoole.co.uk
 * @contact  hello@swoole.co.uk
 * @license  https://github.com/openswoole/library/blob/master/LICENSE
 */
namespace Swoole;

class ExitException extends \Swoole\Exception
{
    private $flags;

    private $status;

    /**
     * @return mixed
     */
    public function getFlags()
    {
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
    }
}
