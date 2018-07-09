<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP;

class ArrayOfAssetSourceParameter implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AssetSourceParameter[] $AssetSourceParameter
     */
    protected $AssetSourceParameter = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AssetSourceParameter[]
     */
    public function getAssetSourceParameter()
    {
      return $this->AssetSourceParameter;
    }

    /**
     * @param AssetSourceParameter[] $AssetSourceParameter
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP\ArrayOfAssetSourceParameter
     */
    public function setAssetSourceParameter(array $AssetSourceParameter = null)
    {
      $this->AssetSourceParameter = $AssetSourceParameter;
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
      return isset($this->AssetSourceParameter[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AssetSourceParameter
     */
    public function offsetGet($offset)
    {
      return $this->AssetSourceParameter[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AssetSourceParameter $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AssetSourceParameter[] = $value;
      } else {
        $this->AssetSourceParameter[$offset] = $value;
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
      unset($this->AssetSourceParameter[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AssetSourceParameter Return the current element
     */
    public function current()
    {
      return current($this->AssetSourceParameter);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AssetSourceParameter);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AssetSourceParameter);
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
      reset($this->AssetSourceParameter);
    }

    /**
     * Countable implementation
     *
     * @return AssetSourceParameter Return count of elements
     */
    public function count()
    {
      return count($this->AssetSourceParameter);
    }

}
