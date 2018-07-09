<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Campaign_SSP;

class ArrayOfAssetSourceMapping implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AssetSourceMapping[] $AssetSourceMapping
     */
    protected $AssetSourceMapping = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AssetSourceMapping[]
     */
    public function getAssetSourceMapping()
    {
      return $this->AssetSourceMapping;
    }

    /**
     * @param AssetSourceMapping[] $AssetSourceMapping
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Campaign_SSP\ArrayOfAssetSourceMapping
     */
    public function setAssetSourceMapping(array $AssetSourceMapping = null)
    {
      $this->AssetSourceMapping = $AssetSourceMapping;
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
      return isset($this->AssetSourceMapping[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AssetSourceMapping
     */
    public function offsetGet($offset)
    {
      return $this->AssetSourceMapping[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AssetSourceMapping $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AssetSourceMapping[] = $value;
      } else {
        $this->AssetSourceMapping[$offset] = $value;
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
      unset($this->AssetSourceMapping[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AssetSourceMapping Return the current element
     */
    public function current()
    {
      return current($this->AssetSourceMapping);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AssetSourceMapping);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AssetSourceMapping);
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
      reset($this->AssetSourceMapping);
    }

    /**
     * Countable implementation
     *
     * @return AssetSourceMapping Return count of elements
     */
    public function count()
    {
      return count($this->AssetSourceMapping);
    }

}
