<?php

    class employees
    {
        public $empid;
        public $empname;

        function setEmpId($empid) {
            $this->empid = $empid;
        }

        function getEmpId() {
            return $this->empid;
        }

        function setEmpName($empname) { 
            $this->empname = $empname;
        }

        function getEmpName() {
            return $this->empname;
        }
    }

    // instantiating the employees class

    $emps = new employees();
    $emps->setEmpId(1);
    $emps->setEmpName("Dinesh Chauhan");
    echo "EmployeeID: ".$emps->getEmpId()."<br/>";
    echo "Employee Name: ".$emps->getEmpName()."<br/>";
?>