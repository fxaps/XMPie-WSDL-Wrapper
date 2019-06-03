<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Asset_SSP;

class CreateFileToTempStorage
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
     * @var string $inAssetID
     */
    protected $inAssetID = null;

    /**
     * @var string $inCopyFileName
     */
    protected $inCopyFileName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAssetID
     * @param string $inCopyFileName
     */
    public function __construct($inUsername = null, $inPassword = null, $inAssetID = null, $inCopyFileName = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAssetID = $inAssetID;
      $this->inCopyFileName = $inCopyFileName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Asset_SSP\CreateFileToTempStorage
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Asset_SSP\CreateFileToTempStorage
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInAssetID()
    {
      return $this->inAssetID;
    }

    /**
     * @param string $inAssetID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Asset_SSP\CreateFileToTempStorage
     */
    public function setInAssetID($inAssetID)
    {
      $this->inAssetID = $inAssetID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInCopyFileName()
    {
      return $this->inCopyFileName;
    }

    /**
     * @param string $inCopyFileName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Asset_SSP\CreateFileToTempStorage
     */
    public function setInCopyFileName($inCopyFileName)
    {
      $this->inCopyFileName = $inCopyFileName;
      return $this;
    }

}
