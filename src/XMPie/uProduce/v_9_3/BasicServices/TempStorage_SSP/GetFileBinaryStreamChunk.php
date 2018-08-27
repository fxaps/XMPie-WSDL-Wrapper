<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\TempStorage_SSP;

class GetFileBinaryStreamChunk
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
     * @var string $inFileToken
     */
    protected $inFileToken = null;

    /**
     * @var int $inOffset
     */
    protected $inOffset = null;

    /**
     * @var int $inoutCount
     */
    protected $inoutCount = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inFileToken
     * @param int $inOffset
     * @param int $inoutCount
     */
    public function __construct($inUsername = null, $inPassword = null, $inFileToken = null, $inOffset = null, $inoutCount = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inFileToken = $inFileToken;
      $this->inOffset = $inOffset;
      $this->inoutCount = $inoutCount;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\TempStorage_SSP\GetFileBinaryStreamChunk
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\TempStorage_SSP\GetFileBinaryStreamChunk
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInFileToken()
    {
      return $this->inFileToken;
    }

    /**
     * @param string $inFileToken
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\TempStorage_SSP\GetFileBinaryStreamChunk
     */
    public function setInFileToken($inFileToken)
    {
      $this->inFileToken = $inFileToken;
      return $this;
    }

    /**
     * @return int
     */
    public function getInOffset()
    {
      return $this->inOffset;
    }

    /**
     * @param int $inOffset
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\TempStorage_SSP\GetFileBinaryStreamChunk
     */
    public function setInOffset($inOffset)
    {
      $this->inOffset = $inOffset;
      return $this;
    }

    /**
     * @return int
     */
    public function getInoutCount()
    {
      return $this->inoutCount;
    }

    /**
     * @param int $inoutCount
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\TempStorage_SSP\GetFileBinaryStreamChunk
     */
    public function setInoutCount($inoutCount)
    {
      $this->inoutCount = $inoutCount;
      return $this;
    }

}
