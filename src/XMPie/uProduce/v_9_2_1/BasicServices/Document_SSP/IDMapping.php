<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Document_SSP;

class IDMapping
{

    /**
     * @var string $OldID
     */
    protected $OldID = null;

    /**
     * @var string $NewID
     */
    protected $NewID = null;

    /**
     * @var string $OldGUID
     */
    protected $OldGUID = null;

    /**
     * @var string $NewGUID
     */
    protected $NewGUID = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getOldID()
    {
      return $this->OldID;
    }

    /**
     * @param string $OldID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Document_SSP\IDMapping
     */
    public function setOldID($OldID)
    {
      $this->OldID = $OldID;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewID()
    {
      return $this->NewID;
    }

    /**
     * @param string $NewID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Document_SSP\IDMapping
     */
    public function setNewID($NewID)
    {
      $this->NewID = $NewID;
      return $this;
    }

    /**
     * @return string
     */
    public function getOldGUID()
    {
      return $this->OldGUID;
    }

    /**
     * @param string $OldGUID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Document_SSP\IDMapping
     */
    public function setOldGUID($OldGUID)
    {
      $this->OldGUID = $OldGUID;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewGUID()
    {
      return $this->NewGUID;
    }

    /**
     * @param string $NewGUID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Document_SSP\IDMapping
     */
    public function setNewGUID($NewGUID)
    {
      $this->NewGUID = $NewGUID;
      return $this;
    }

}
