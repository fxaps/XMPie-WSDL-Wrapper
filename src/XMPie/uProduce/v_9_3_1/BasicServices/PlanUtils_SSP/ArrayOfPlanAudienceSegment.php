<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP;

class ArrayOfPlanAudienceSegment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PlanAudienceSegment[] $PlanAudienceSegment
     */
    protected $PlanAudienceSegment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PlanAudienceSegment[]
     */
    public function getPlanAudienceSegment()
    {
      return $this->PlanAudienceSegment;
    }

    /**
     * @param PlanAudienceSegment[] $PlanAudienceSegment
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\ArrayOfPlanAudienceSegment
     */
    public function setPlanAudienceSegment(array $PlanAudienceSegment = null)
    {
      $this->PlanAudienceSegment = $PlanAudienceSegment;
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
      return isset($this->PlanAudienceSegment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PlanAudienceSegment
     */
    public function offsetGet($offset)
    {
      return $this->PlanAudienceSegment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PlanAudienceSegment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PlanAudienceSegment[] = $value;
      } else {
        $this->PlanAudienceSegment[$offset] = $value;
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
      unset($this->PlanAudienceSegment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PlanAudienceSegment Return the current element
     */
    public function current()
    {
      return current($this->PlanAudienceSegment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PlanAudienceSegment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PlanAudienceSegment);
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
      reset($this->PlanAudienceSegment);
    }

    /**
     * Countable implementation
     *
     * @return PlanAudienceSegment Return count of elements
     */
    public function count()
    {
      return count($this->PlanAudienceSegment);
    }

}
