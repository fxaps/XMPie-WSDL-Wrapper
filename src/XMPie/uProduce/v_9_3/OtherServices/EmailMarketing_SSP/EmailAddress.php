<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\EmailMarketing_SSP;

class EmailAddress
{

    /**
     * @var string $m_Address
     */
    protected $m_Address = null;

    /**
     * @var string $m_Display
     */
    protected $m_Display = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getM_Address()
    {
      return $this->m_Address;
    }

    /**
     * @param string $m_Address
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\EmailMarketing_SSP\EmailAddress
     */
    public function setM_Address($m_Address)
    {
      $this->m_Address = $m_Address;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_Display()
    {
      return $this->m_Display;
    }

    /**
     * @param string $m_Display
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\EmailMarketing_SSP\EmailAddress
     */
    public function setM_Display($m_Display)
    {
      $this->m_Display = $m_Display;
      return $this;
    }

}
