<?php

/**
* 
*/
class Relation //extends AnotherClass
{
	
	function __construct($json=null)
	{

		if (func_num_args() == 1)
		{

			$json_object = json_decode($json);

			$this->_setNumber($json_object->{'number'});
			$this->_setId($json_object->{'id'});
			$this->_setObs($json_object->{'obs'});
            $this->_setCustomerid($json_object->{'customerid'});

			if (!$this->is_valid()) {
				die ('Invalid Relation.');
			}
		} 
	}


	private $number;
	private $id;
	private $obs;

	public function is_valid()
	{
		$valid = TRUE;

		if ($this->getNumber() == null) $valid = FALSE;

		return $valid;
	}


	public function save()
	{
		if ($this->getId() == null or $this->getId() == '') {
			return "insert into relations (number, obs) values ('".$this->getNumber()."','".$this->getObs()."')";
		} else {
			return "update relations set number='".$this->getNumber()."', obs='".$this->getObs()."' where id = '".$this->getId()."'";
		}
		
	}


    /**
     * Gets the value of number.
     *
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets the value of number.
     *
     * @param mixed $number the number
     *
     * @return self
     */
    private function _setNumber($number)
    {
        $this->number = $number;

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
}

?>