<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\RecipientTable_SSP;

class ArrayOfFieldMappingInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var FieldMappingInfo[] $FieldMappingInfo
     */
    protected $FieldMappingInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FieldMappingInfo[]
     */
    public function getFieldMappingInfo()
    {
      return $this->FieldMappingInfo;
    }

    /**
     * @param FieldMappingInfo[] $FieldMappingInfo
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\RecipientTable_SSP\ArrayOfFieldMappingInfo
     */
    public function setFieldMappingInfo(array $FieldMappingInfo = null)
    {
      $this->FieldMappingInfo = $FieldMappingInfo;
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
      return isset($this->FieldMappingInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return FieldMappingInfo
     */
    public function offsetGet($offset)
    {
      return $this->FieldMappingInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param FieldMappingInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->FieldMappingInfo[] = $value;
      } else {
        $this->FieldMappingInfo[$offset] = $value;
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
      unset($this->FieldMappingInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return FieldMappingInfo Return the current element
     */
    public function current()
    {
      return current($this->FieldMappingInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->FieldMappingInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->FieldMappingInfo);
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
      reset($this->FieldMappingInfo);
    }

    /**
     * Countable implementation
     *
     * @return FieldMappingInfo Return count of elements
     */
    public function count()
    {
      return count($this->FieldMappingInfo);
    }

}
