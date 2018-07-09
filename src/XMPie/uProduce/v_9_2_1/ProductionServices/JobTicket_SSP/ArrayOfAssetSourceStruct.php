<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP;

class ArrayOfAssetSourceStruct implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AssetSourceStruct[] $AssetSourceStruct
     */
    protected $AssetSourceStruct = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AssetSourceStruct[]
     */
    public function getAssetSourceStruct()
    {
      return $this->AssetSourceStruct;
    }

    /**
     * @param AssetSourceStruct[] $AssetSourceStruct
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP\ArrayOfAssetSourceStruct
     */
    public function setAssetSourceStruct(array $AssetSourceStruct = null)
    {
      $this->AssetSourceStruct = $AssetSourceStruct;
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
      return isset($this->AssetSourceStruct[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AssetSourceStruct
     */
    public function offsetGet($offset)
    {
      return $this->AssetSourceStruct[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AssetSourceStruct $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AssetSourceStruct[] = $value;
      } else {
        $this->AssetSourceStruct[$offset] = $value;
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
      unset($this->AssetSourceStruct[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AssetSourceStruct Return the current element
     */
    public function current()
    {
      return current($this->AssetSourceStruct);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AssetSourceStruct);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AssetSourceStruct);
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
      reset($this->AssetSourceStruct);
    }

    /**
     * Countable implementation
     *
     * @return AssetSourceStruct Return count of elements
     */
    public function count()
    {
      return count($this->AssetSourceStruct);
    }

}
