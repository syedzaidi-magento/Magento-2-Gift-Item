<?php
/**
 * Created by PhpStorm.
 * User: syedzaidi
 * Date: 7/31/19
 * Time: 2:27 PM
 */

namespace Syedzaidi\FreeItem\Block;


use Magento\Framework\View\Element\Template;

class FreeItem extends Template
{
    /**
     * @var \Magento\Customer\Model\Session
     */
    private $session;

    /**
     * FreeItem constructor.
     * @param \Magento\Customer\Model\Session $session
     * @param Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Customer\Model\Session $session,
        Template\Context $context,
        array $data = []
    ){
        parent::__construct($context, $data);
        $this->session = $session;
    }

    public function getCartItems()
   {
       $customerid = $this->session->getSessionId();

       echo "customer id: " . $customerid;
   }

}