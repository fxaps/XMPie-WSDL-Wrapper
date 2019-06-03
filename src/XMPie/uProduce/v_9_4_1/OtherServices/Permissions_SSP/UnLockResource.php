<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\Permissions_SSP;

class UnLockResource
{

    /**
     * @var string $inUsername
     */
    protected $inUsername = null;

    /**
     * @var string $inPassword
     */
    protected $inPassword = null;

    /**
     * @var string $inResourceType
     */
    protected $inResourceType = null;

    /**
     * @var string $inResourceID
     */
    protected $inResourceID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inResourceType
     * @param string $inResourceID
     */
    public function __construct($inUsername = null, $inPassword = null, $inResourceType = null, $inResourceID = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inResourceType = $inResourceType;
      $this->inResourceID = $inResourceID;
    }

    /**
     * @return string
     */
    public function getInUsername()
    {
      return $this->inUsername;
    }

    /**
     * @param string $inUsername
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\Permissions_SSP\UnLockResource
     */
    public function setInUsername($inUsername)
    {
      $this->inUsername = $inUsername;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPassword()
    {
      return $this->inPassword;
    }

    /**
     * @param string $inPassword
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\Permissions_SSP\UnLockResource
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInResourceType()
    {
      return $this->inResourceType;
    }

    /**
     * @param string $inResourceType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\Permissions_SSP\UnLockResource
     */
    public function setInResourceType($inResourceType)
    {
      $this->inResourceType = $inResourceType;
      return $this;
    }

    /**
     * @return string
     */
    public function getInResourceID()
    {
      return $this->inResourceID;
    }

    /**
     * @param string $inResourceID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\Permissions_SSP\UnLockResource
     */
    public function setInResourceID($inResourceID)
    {
      $this->inResourceID = $inResourceID;
      return $this;
    }

}
