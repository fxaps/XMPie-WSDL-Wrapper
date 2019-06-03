<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\PlanUtils_SSP;

class ArrayOfPlanDataTable implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PlanDataTable[] $PlanDataTable
     */
    protected $PlanDataTable = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PlanDataTable[]
     */
    public function getPlanDataTable()
    {
      return $this->PlanDataTable;
    }

    /**
     * @param PlanDataTable[] $PlanDataTable
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\PlanUtils_SSP\ArrayOfPlanDataTable
     */
    public function setPlanDataTable(array $PlanDataTable = null)
    {
      $this->PlanDataTable = $PlanDataTable;
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
      return isset($this->PlanDataTable[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PlanDataTable
     */
    public function offsetGet($offset)
    {
      return $this->PlanDataTable[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PlanDataTable $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PlanDataTable[] = $value;
      } else {
        $this->PlanDataTable[$offset] = $value;
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
      unset($this->PlanDataTable[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PlanDataTable Return the current element
     */
    public function current()
    {
      return current($this->PlanDataTable);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PlanDataTable);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PlanDataTable);
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
      reset($this->PlanDataTable);
    }

    /**
     * Countable implementation
     *
     * @return PlanDataTable Return count of elements
     */
    public function count()
    {
      return count($this->PlanDataTable);
    }

}
