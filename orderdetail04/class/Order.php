<?php


class Order
{
    protected $orderNumber;
    protected $orderDate;
    protected $status;
    protected $customerNumber;
    protected $customerName;

    public function __construct($orderNumber,$orderDate,$status,$customerNumber,$customerName)
    {
        $this->orderNumber = $orderNumber;
        $this->orderDate = $orderDate;
        $this->status = $status;
        $this->customerNumber = $customerNumber;
        $this->customerName = $customerName;
    }

    /**
     * @return mixed
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * @return mixed
     */
    public function getCustomerNumber()
    {
        return $this->customerNumber;
    }

    /**
     * @return mixed
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

}