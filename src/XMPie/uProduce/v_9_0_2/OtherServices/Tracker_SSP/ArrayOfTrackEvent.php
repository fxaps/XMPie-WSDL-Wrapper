<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\Tracker_SSP;

class ArrayOfTrackEvent implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TrackEvent[] $TrackEvent
     */
    protected $TrackEvent = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TrackEvent[]
     */
    public function getTrackEvent()
    {
      return $this->TrackEvent;
    }

    /**
     * @param TrackEvent[] $TrackEvent
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\Tracker_SSP\ArrayOfTrackEvent
     */
    public function setTrackEvent(array $TrackEvent = null)
    {
      $this->TrackEvent = $TrackEvent;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->TrackEvent[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TrackEvent
     */
    public function offsetGet($offset)
    {
      return $this->TrackEvent[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TrackEvent $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TrackEvent[] = $value;
      } else {
        $this->TrackEvent[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->TrackEvent[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TrackEvent Return the current element
     */
    public function current()
    {
      return current($this->TrackEvent);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TrackEvent);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TrackEvent);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->TrackEvent);
    }

    /**
     * Countable implementation
     *
     * @return TrackEvent Return count of elements
     */
    public function count()
    {
      return count($this->TrackEvent);
    }

}
