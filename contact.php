<?php

/**
* 
*/
class Contact //extends AnotherClass
{
	
	function __construct($json=null)
	{

		if (func_num_args() == 1)
		{

			$json_object = json_decode($json);

			$this->_setName($json_object->{'name'});
			$this->_setId($json_object->{'id'});
			$this->_setObs($json_object->{'obs'});
            $this->_setCustomerid($json_object->{'customerid'});

			if (!$this->is_valid()) {
				die ('Invalid Contact.');
			}
		} 
	}


	private $name;
	private $id;
	private $obs;
    private $customerid;

	public function is_valid()
	{
		$valid = TRUE;

		if ($this->getName() == null) $valid = FALSE;

		return $valid;
	}


	public function save()
	{
		if ($this->getId() == null or $this->getId() == '') {
			return "insert into contacts (name, obs,customerid) values ('".$this->getName()."','".$this->getObs()."','".$this->getCustomerid()."')";
		} else {
			return "update contacts set name='".$this->getName()."', obs='".$this->getObs()."', customerid='".$this->getCustomerid()."' where id = '".$this->getId()."'";
		}
		
	}


    /**
     * Gets the value of name.
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the value of name.
     *
     * @param mixed $name the name
     *
     * @return self
     */
    private function _setName($name)
    {
        $this->name = $name;

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