<?php

/**
* 
*/
class Customer //extends AnotherClass
{
	
	function __construct($json=null)
	{

		if (func_num_args() == 1)
		{

			$json_object = json_decode($json);

			$this->_setId($json_object->{'id'});
            $this->_setMainContact($json_object->{'mainContact'});
            $this->_setMainPhone($json_object->{'mainPhone'});
            $this->_setMainAddress($json_object->{'mainAddress'});            

			// if (!$this->is_valid()) {
			// 	die ('Invalid Customer.');
			// }
		} 
	}


	//private $name;
	private $id;
	private $mainContact;
    private $mainPhone;
    private $mainAddress;

	public function is_valid()
	{
		$valid = TRUE;

		if ($this->getMainContact() == null) $valid = $valid&&FALSE;
        if ($this->getMainPhone() == null) $valid = $valid&&FALSE;
        if ($this->getMainAddress() == null) $valid = $valid&&FALSE;
		return $valid;
	}


	public function save()
	{
		if ($this->getId() == null or $this->getId() == '') {
			return "insert into Customers (mainContact, mainPhone, mainAddress) values ('".$this->getMainContact()."','".$this->getMainPhone()."','".$this->getMainAddress()."')";
		} else {
			return "update Customers set mainContact='".$this->getMainContact()."', mainPhone='".$this->getMainPhone()."', mainAddress='".$this->getMainAddress()."' where id = '".$this->getId()."'";
		}
		
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
     * Gets the value of mainContact.
     *
     * @return mixed
     */
    public function getMainContact()
    {
        return $this->mainContact;
    }

    /**
     * Sets the value of mainContact.
     *
     * @param mixed $mainContact the main contact
     *
     * @return self
     */
    private function _setMainContact($mainContact)
    {
        $this->mainContact = $mainContact;

        return $this;
    }

    /**
     * Gets the value of mainPhone.
     *
     * @return mixed
     */
    public function getMainPhone()
    {
        return $this->mainPhone;
    }

    /**
     * Sets the value of mainPhone.
     *
     * @param mixed $mainPhone the main phone
     *
     * @return self
     */
    private function _setMainPhone($mainPhone)
    {
        $this->mainPhone = $mainPhone;

        return $this;
    }

    /**
     * Gets the value of mainAddress.
     *
     * @return mixed
     */
    public function getMainAddress()
    {
        return $this->mainAddress;
    }

    /**
     * Sets the value of mainAddress.
     *
     * @param mixed $mainAddress the main address
     *
     * @return self
     */
    private function _setMainAddress($mainAddress)
    {
        $this->mainAddress = $mainAddress;

        return $this;
    }
}

?>