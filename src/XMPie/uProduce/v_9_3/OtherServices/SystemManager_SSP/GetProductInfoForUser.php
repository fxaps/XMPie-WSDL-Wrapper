<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\SystemManager_SSP;

class GetProductInfoForUser
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
     * @var string $inUserId
     */
    protected $inUserId = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inUserId
     */
    public function __construct($inUsername = null, $inPassword = null, $inUserId = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inUserId = $inUserId;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\SystemManager_SSP\GetProductInfoForUser
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\SystemManager_SSP\GetProductInfoForUser
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInUserId()
    {
      return $this->inUserId;
    }

    /**
     * @param string $inUserId
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\SystemManager_SSP\GetProductInfoForUser
     */
    public function setInUserId($inUserId)
    {
      $this->inUserId = $inUserId;
      return $this;
    }

}
