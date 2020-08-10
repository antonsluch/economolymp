<?php

class Order {
    private $number;
    private $customer;
    // private $customer_name;
    // private $customer_email;
    // private $customer_vk_profile_url;
    private $products = [];
    // private $product_title;
    // private $getcourse_product_title;
    // private $getcourse_group_name;
    // private $getcourse_offer_code;
    private $isPaid;
    private $total;
    private $created_at;
    private $updated_at;


    public function __construct()
    {
        
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getCustomer()
    {
        return $this->customer;
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function getIsPaid()
    {
        return $this->isPaid;
    }

    public function setIsPaid($val)
    {
        $this->isPaid = $val;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function save()
    {

    }

    public static function getOrder($number)
    {
        // return new self();
    }
}
