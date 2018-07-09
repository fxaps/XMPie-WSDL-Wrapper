<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Asset_SSP;

class ArrayOfXMPTbl implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var XMPTbl[] $XMPTbl
     */
    protected $XMPTbl = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return XMPTbl[]
     */
    public function getXMPTbl()
    {
      return $this->XMPTbl;
    }

    /**
     * @param XMPTbl[] $XMPTbl
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Asset_SSP\ArrayOfXMPTbl
     */
    public function setXMPTbl(array $XMPTbl = null)
    {
      $this->XMPTbl = $XMPTbl;
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
      return isset($this->XMPTbl[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return XMPTbl
     */
    public function offsetGet($offset)
    {
      return $this->XMPTbl[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param XMPTbl $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->XMPTbl[] = $value;
      } else {
        $this->XMPTbl[$offset] = $value;
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
      unset($this->XMPTbl[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return XMPTbl Return the current element
     */
    public function current()
    {
      return current($this->XMPTbl);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->XMPTbl);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->XMPTbl);
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
      reset($this->XMPTbl);
    }

    /**
     * Countable implementation
     *
     * @return XMPTbl Return count of elements
     */
    public function count()
    {
      return count($this->XMPTbl);
    }

}
