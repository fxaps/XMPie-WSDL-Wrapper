<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Document_SSP;

class GetResourceBinaryFileStreamChunkByFileName
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
     * @var string $inDocumentID
     */
    protected $inDocumentID = null;

    /**
     * @var string $inResourceFileName
     */
    protected $inResourceFileName = null;

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
     * @param string $inDocumentID
     * @param string $inResourceFileName
     * @param int $inOffset
     * @param int $inoutCount
     */
    public function __construct($inUsername = null, $inPassword = null, $inDocumentID = null, $inResourceFileName = null, $inOffset = null, $inoutCount = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inDocumentID = $inDocumentID;
      $this->inResourceFileName = $inResourceFileName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Document_SSP\GetResourceBinaryFileStreamChunkByFileName
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Document_SSP\GetResourceBinaryFileStreamChunkByFileName
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInDocumentID()
    {
      return $this->inDocumentID;
    }

    /**
     * @param string $inDocumentID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Document_SSP\GetResourceBinaryFileStreamChunkByFileName
     */
    public function setInDocumentID($inDocumentID)
    {
      $this->inDocumentID = $inDocumentID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInResourceFileName()
    {
      return $this->inResourceFileName;
    }

    /**
     * @param string $inResourceFileName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Document_SSP\GetResourceBinaryFileStreamChunkByFileName
     */
    public function setInResourceFileName($inResourceFileName)
    {
      $this->inResourceFileName = $inResourceFileName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Document_SSP\GetResourceBinaryFileStreamChunkByFileName
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Document_SSP\GetResourceBinaryFileStreamChunkByFileName
     */
    public function setInoutCount($inoutCount)
    {
      $this->inoutCount = $inoutCount;
      return $this;
    }

}
