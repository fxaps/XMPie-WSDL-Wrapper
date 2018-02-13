<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Campaign_SSP;

class ArrayOfDocumentMapping implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DocumentMapping[] $DocumentMapping
     */
    protected $DocumentMapping = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DocumentMapping[]
     */
    public function getDocumentMapping()
    {
      return $this->DocumentMapping;
    }

    /**
     * @param DocumentMapping[] $DocumentMapping
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Campaign_SSP\ArrayOfDocumentMapping
     */
    public function setDocumentMapping(array $DocumentMapping = null)
    {
      $this->DocumentMapping = $DocumentMapping;
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
      return isset($this->DocumentMapping[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DocumentMapping
     */
    public function offsetGet($offset)
    {
      return $this->DocumentMapping[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DocumentMapping $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DocumentMapping[] = $value;
      } else {
        $this->DocumentMapping[$offset] = $value;
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
      unset($this->DocumentMapping[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DocumentMapping Return the current element
     */
    public function current()
    {
      return current($this->DocumentMapping);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DocumentMapping);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DocumentMapping);
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
      reset($this->DocumentMapping);
    }

    /**
     * Countable implementation
     *
     * @return DocumentMapping Return count of elements
     */
    public function count()
    {
      return count($this->DocumentMapping);
    }

}
