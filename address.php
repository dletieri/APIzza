<?php

class Address //extends AnotherClass
{
	
	function __construct($json=null)
	{

		if (func_num_args() == 1)
		{

			$json_object = json_decode($json);

			$this->_setAddress($json_object->{'address'});
			$this->_setId($json_object->{'id'});
			$this->_setObs($json_object->{'obs'});
            $this->_setCustomerid($json_object->{'customerid'});

			if (!$this->is_valid()) {
				die ('Invalid Address.');
			}
		} 
	}


	private $address;
	private $id;
	private $obs;
    private $customerid;

	public function is_valid()
	{
		$valid = TRUE;

		if ($this->getaddress() == null) $valid = FALSE;

		return $valid;
	}


	public function save()
	{
		if ($this->getId() == null or $this->getId() == '') {
			return "insert into Addresses (address, obs, customerid) values ('".$this->getaddress()."','".$this->getObs()."','".$this->getCustomerid()."')";
		} else {
			return "update Addresses set address='".$this->getaddress()."', obs='".$this->getObs()."', customerid='".$this->getCustomerid()."' where id = '".$this->getId()."'";
		}
		
	}


    /**
     * Gets the value of address.
     *
     * @return mixed
     */
    public function getaddress()
    {
        return $this->address;
    }

    /**
     * Sets the value of address.
     *
     * @param mixed $address the address
     *
     * @return self
     */
    private function _setaddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param mixed $id the id
     *
     * @return self
     */
    private function _setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the value of obs.
     *
     * @return mixed
     */
    public function getObs()
    {
        return $this->obs;
    }

    /**
     * Sets the value of obs.
     *
     * @param mixed $obs the obs
     *
     * @return self
     */
    private function _setObs($obs)
    {
        $this->obs = $obs;

        return $this;
    }

    /**
     * Gets the value of address.
     *
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets the value of address.
     *
     * @param mixed $address the address
     *
     * @return self
     */
    private function _setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Gets the value of customerid.
     *
     * @return mixed
     */
    public function getCustomerid()
    {
        return $this->customerid;
    }

    /**
     * Sets the value of customerid.
     *
     * @param mixed $customerid the customerid
     *
     * @return self
     */
    private function _setCustomerid($customerid)
    {
        $this->customerid = $customerid;

        return $this;
    }
}

?>