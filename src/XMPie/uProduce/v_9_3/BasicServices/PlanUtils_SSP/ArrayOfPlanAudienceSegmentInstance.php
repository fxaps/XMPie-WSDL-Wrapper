<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\PlanUtils_SSP;

class ArrayOfPlanAudienceSegmentInstance implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PlanAudienceSegmentInstance[] $PlanAudienceSegmentInstance
     */
    protected $PlanAudienceSegmentInstance = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PlanAudienceSegmentInstance[]
     */
    public function getPlanAudienceSegmentInstance()
    {
      return $this->PlanAudienceSegmentInstance;
    }

    /**
     * @param PlanAudienceSegmentInstance[] $PlanAudienceSegmentInstance
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\PlanUtils_SSP\ArrayOfPlanAudienceSegmentInstance
     */
    public function setPlanAudienceSegmentInstance(array $PlanAudienceSegmentInstance = null)
    {
      $this->PlanAudienceSegmentInstance = $PlanAudienceSegmentInstance;
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
      return isset($this->PlanAudienceSegmentInstance[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PlanAudienceSegmentInstance
     */
    public function offsetGet($offset)
    {
      return $this->PlanAudienceSegmentInstance[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PlanAudienceSegmentInstance $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PlanAudienceSegmentInstance[] = $value;
      } else {
        $this->PlanAudienceSegmentInstance[$offset] = $value;
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
      unset($this->PlanAudienceSegmentInstance[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PlanAudienceSegmentInstance Return the current element
     */
    public function current()
    {
      return current($this->PlanAudienceSegmentInstance);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PlanAudienceSegmentInstance);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PlanAudienceSegmentInstance);
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
      reset($this->PlanAudienceSegmentInstance);
    }

    /**
     * Countable implementation
     *
     * @return PlanAudienceSegmentInstance Return count of elements
     */
    public function count()
    {
      return count($this->PlanAudienceSegmentInstance);
    }

}
