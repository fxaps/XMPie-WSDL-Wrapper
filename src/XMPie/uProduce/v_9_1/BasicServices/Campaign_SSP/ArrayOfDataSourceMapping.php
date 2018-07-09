<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Campaign_SSP;

class ArrayOfDataSourceMapping implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DataSourceMapping[] $DataSourceMapping
     */
    protected $DataSourceMapping = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DataSourceMapping[]
     */
    public function getDataSourceMapping()
    {
      return $this->DataSourceMapping;
    }

    /**
     * @param DataSourceMapping[] $DataSourceMapping
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Campaign_SSP\ArrayOfDataSourceMapping
     */
    public function setDataSourceMapping(array $DataSourceMapping = null)
    {
      $this->DataSourceMapping = $DataSourceMapping;
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
      return isset($this->DataSourceMapping[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DataSourceMapping
     */
    public function offsetGet($offset)
    {
      return $this->DataSourceMapping[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DataSourceMapping $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DataSourceMapping[] = $value;
      } else {
        $this->DataSourceMapping[$offset] = $value;
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
      unset($this->DataSourceMapping[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DataSourceMapping Return the current element
     */
    public function current()
    {
      return current($this->DataSourceMapping);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DataSourceMapping);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DataSourceMapping);
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
      reset($this->DataSourceMapping);
    }

    /**
     * Countable implementation
     *
     * @return DataSourceMapping Return count of elements
     */
    public function count()
    {
      return count($this->DataSourceMapping);
    }

}
