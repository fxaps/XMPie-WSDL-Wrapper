<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\PlanUtils_SSP;

class ArrayOfPlanFilter implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PlanFilter[] $PlanFilter
     */
    protected $PlanFilter = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PlanFilter[]
     */
    public function getPlanFilter()
    {
      return $this->PlanFilter;
    }

    /**
     * @param PlanFilter[] $PlanFilter
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\PlanUtils_SSP\ArrayOfPlanFilter
     */
    public function setPlanFilter(array $PlanFilter = null)
    {
      $this->PlanFilter = $PlanFilter;
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
      return isset($this->PlanFilter[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PlanFilter
     */
    public function offsetGet($offset)
    {
      return $this->PlanFilter[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PlanFilter $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PlanFilter[] = $value;
      } else {
        $this->PlanFilter[$offset] = $value;
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
      unset($this->PlanFilter[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PlanFilter Return the current element
     */
    public function current()
    {
      return current($this->PlanFilter);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PlanFilter);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PlanFilter);
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
      reset($this->PlanFilter);
    }

    /**
     * Countable implementation
     *
     * @return PlanFilter Return count of elements
     */
    public function count()
    {
      return count($this->PlanFilter);
    }

}
