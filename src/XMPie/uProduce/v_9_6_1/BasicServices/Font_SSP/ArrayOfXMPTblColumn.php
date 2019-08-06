<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP;

class ArrayOfXMPTblColumn implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var XMPTblColumn[] $XMPTblColumn
     */
    protected $XMPTblColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return XMPTblColumn[]
     */
    public function getXMPTblColumn()
    {
      return $this->XMPTblColumn;
    }

    /**
     * @param XMPTblColumn[] $XMPTblColumn
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\ArrayOfXMPTblColumn
     */
    public function setXMPTblColumn(array $XMPTblColumn = null)
    {
      $this->XMPTblColumn = $XMPTblColumn;
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
      return isset($this->XMPTblColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return XMPTblColumn
     */
    public function offsetGet($offset)
    {
      return $this->XMPTblColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param XMPTblColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->XMPTblColumn[] = $value;
      } else {
        $this->XMPTblColumn[$offset] = $value;
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
      unset($this->XMPTblColumn[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return XMPTblColumn Return the current element
     */
    public function current()
    {
      return current($this->XMPTblColumn);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->XMPTblColumn);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->XMPTblColumn);
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
      reset($this->XMPTblColumn);
    }

    /**
     * Countable implementation
     *
     * @return XMPTblColumn Return count of elements
     */
    public function count()
    {
      return count($this->XMPTblColumn);
    }

}
