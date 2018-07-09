<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Font_SSP;

class GetProperties
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
     * @var string $inFontID
     */
    protected $inFontID = null;

    /**
     * @var ArrayOfString $inPropertiesNames
     */
    protected $inPropertiesNames = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inFontID
     * @param ArrayOfString $inPropertiesNames
     */
    public function __construct($inUsername = null, $inPassword = null, $inFontID = null, $inPropertiesNames = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inFontID = $inFontID;
      $this->inPropertiesNames = $inPropertiesNames;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Font_SSP\GetProperties
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Font_SSP\GetProperties
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInFontID()
    {
      return $this->inFontID;
    }

    /**
     * @param string $inFontID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Font_SSP\GetProperties
     */
    public function setInFontID($inFontID)
    {
      $this->inFontID = $inFontID;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInPropertiesNames()
    {
      return $this->inPropertiesNames;
    }

    /**
     * @param ArrayOfString $inPropertiesNames
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Font_SSP\GetProperties
     */
    public function setInPropertiesNames($inPropertiesNames)
    {
      $this->inPropertiesNames = $inPropertiesNames;
      return $this;
    }

}
