<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\PlanUtils_SSP;

class ArrayOfPlanDataSource implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PlanDataSource[] $PlanDataSource
     */
    protected $PlanDataSource = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PlanDataSource[]
     */
    public function getPlanDataSource()
    {
      return $this->PlanDataSource;
    }

    /**
     * @param PlanDataSource[] $PlanDataSource
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\PlanUtils_SSP\ArrayOfPlanDataSource
     */
    public function setPlanDataSource(array $PlanDataSource = null)
    {
      $this->PlanDataSource = $PlanDataSource;
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
      return isset($this->PlanDataSource[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PlanDataSource
     */
    public function offsetGet($offset)
    {
      return $this->PlanDataSource[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PlanDataSource $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PlanDataSource[] = $value;
      } else {
        $this->PlanDataSource[$offset] = $value;
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
      unset($this->PlanDataSource[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PlanDataSource Return the current element
     */
    public function current()
    {
      return current($this->PlanDataSource);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PlanDataSource);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PlanDataSource);
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
      reset($this->PlanDataSource);
    }

    /**
     * Countable implementation
     *
     * @return PlanDataSource Return count of elements
     */
    public function count()
    {
      return count($this->PlanDataSource);
    }

}
