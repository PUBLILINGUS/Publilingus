<?php

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\Handler;

use Monolog\Logger;

/**
 * Buffers all records until a certain level is reached
 *
 * The advantage of this approach is that you don't get any clutter in your log files.
 * Only requests which actually trigger an error (or whatever your actionLevel is) will be
 * in the logs, but they will contain all records, not only those above the level threshold.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
class FingersCrossedHandler extends AbstractHandler
{
    protected $handler;
    protected $actionLevel;
    protected $buffering = true;
    protected $bufferSize;
    protected $buffer = array();

    /**
     * @param callback|HandlerInterface $handler Handler or factory callback($record, $fingersCrossedHandler).
     * @param int $actionLevel The level at which this handler is triggered.
     * @param int $bufferSize How many entries should be buffered at most, beyond that the oldest items are removed from the buffer.
     * @param Boolean $bubble
     */
    public function __construct($handler, $actionLevel = Logger::WARNING, $bufferSize = 0, $bubble = false)
    {
        $this->handler = $handler;
        $this->actionLevel = $actionLevel;
        $this->bufferSize = $bufferSize;
        $this->bubble = $bubble;
    }

    /**
     * Handles a record
     *
     * Records are buffered until one of them matches the actionLevel. From then
     * on, unless reset() is called, all records are passed to the wrapped handler.
     *
     * @param array $record Records
     * @return Boolean Whether the record was handled
     */
    public function handle(array $record)
    {
        if ($this->buffering) {
            $this->buffer[] = $record;
            if ($this->bufferSize > 0 && count($this->buffer) > $this->bufferSize) {
                array_shift($this->buffer);
            }
            if ($record['level'] >= $this->actionLevel) {
                $this->buffering = false;
                if (!$this->handler instanceof AbstractHandler) {
                    $this->handler = $this->handler($record, $this);
                }
                foreach ($this->buffer as $record) {
                    $this->handler->handle($record);
                }
                $this->buffer = array();
            }
        } else {
            $this->handler->handle($record);
        }
        return false === $this->bubble;
    }

    /**
     * Resets the state of the handler. Stops forwarding records to the wrapped handler.
     */
    public function reset()
    {
        $this->buffering = true;
    }

    /**
     * Implemented to comply with the AbstractHandler requirements. Can not be called.
     */
    public function write(array $record)
    {
        throw new \BadMethodCallException('This method should not be called directly on the FingersCrossedHandler.');
    }
}