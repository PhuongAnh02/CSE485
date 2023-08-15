<?php

class Employee
{
    private $EmployeeID;
    private $Name;
    private $Address;
    private $Salary;

    public function __construct($EmployeeID, $Name, $Address, $Salary)
    {
        $this->EmployeeID = $EmployeeID;
        $this->Name = $Name;
        $this->Address = $Address;
        $this->Salary = $Salary;
    }

    /**
     * Get the value of EmployeeID
     */
    public function getEmployeeID()
    {
        return $this->EmployeeID;
    }

    /**
     * Set the value of EmployeeID
     *
     * @return self
     */
    public function setEmployeeID($EmployeeID)
    {
        $this->EmployeeID = $EmployeeID;
        return $this;
    }

    /**
     * Get the value of Name
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Set the value of Name
     *
     * @return self
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * Get the value of Address
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * Set the value of Address
     *
     * @return self
     */
    public function setAddress($Address)
    {
        $this->Address = $Address;
        return $this;
    }

    /**
     * Get the value of Salary
     */
    public function getSalary()
    {
        return $this->Salary;
    }

    /**
     * Set the value of Salary
     *
     * @return self
     */
    public function setSalary($Salary)
    {
        $this->Salary = $Salary;
        return $this;
    }
}
