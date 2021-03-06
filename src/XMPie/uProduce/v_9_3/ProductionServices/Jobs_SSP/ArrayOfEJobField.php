<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Jobs_SSP;

class ArrayOfEJobField implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var EJobField[] $EJobField
     */
    protected $EJobField = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EJobField[]
     */
    public function getEJobField()
    {
      return $this->EJobField;
    }

    /**
     * @param EJobField[] $EJobField
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Jobs_SSP\ArrayOfEJobField
     */
    public function setEJobField(array $EJobField = null)
    {
      $this->EJobField = $EJobField;
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
      return isset($this->EJobField[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return EJobField
     */
    public function offsetGet($offset)
    {
      return $this->EJobField[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param EJobField $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->EJobField[] = $value;
      } else {
        $this->EJobField[$offset] = $value;
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
      unset($this->EJobField[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return EJobField Return the current element
     */
    public function current()
    {
      return current($this->EJobField);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->EJobField);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->EJobField);
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
      reset($this->EJobField);
    }

    /**
     * Countable implementation
     *
     * @return EJobField Return count of elements
     */
    public function count()
    {
      return count($this->EJobField);
    }

}
