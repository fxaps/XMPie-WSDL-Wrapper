<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\TouchPoint_SSP;

class ArrayOfXMPRowField implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var XMPRowField[] $XMPRowField
     */
    protected $XMPRowField = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return XMPRowField[]
     */
    public function getXMPRowField()
    {
      return $this->XMPRowField;
    }

    /**
     * @param XMPRowField[] $XMPRowField
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\TouchPoint_SSP\ArrayOfXMPRowField
     */
    public function setXMPRowField(array $XMPRowField = null)
    {
      $this->XMPRowField = $XMPRowField;
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
      return isset($this->XMPRowField[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return XMPRowField
     */
    public function offsetGet($offset)
    {
      return $this->XMPRowField[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param XMPRowField $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->XMPRowField[] = $value;
      } else {
        $this->XMPRowField[$offset] = $value;
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
      unset($this->XMPRowField[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return XMPRowField Return the current element
     */
    public function current()
    {
      return current($this->XMPRowField);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->XMPRowField);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->XMPRowField);
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
      reset($this->XMPRowField);
    }

    /**
     * Countable implementation
     *
     * @return XMPRowField Return count of elements
     */
    public function count()
    {
      return count($this->XMPRowField);
    }

}
