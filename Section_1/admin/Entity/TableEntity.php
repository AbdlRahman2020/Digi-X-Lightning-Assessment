<?php


class TableEntity {

    public $id;
    public $Title;
    public $FName;
    public $LName;
    public $Email;
    public $Phone;
    public $Tbltyp;
    public $time;
    public $date;
    public $status;

    function __construct($id, $Title, $FName, $LName, $Email, $Phone, $Tbltyp, $time, $date, $status) {
        $this->id = $id;
        $this->Title = $Title;
        $this->FName = $FName;
        $this->LName = $LName;
        $this->Email = $Email;
        $this->Phone = $Phone;
        $this->Tbltyp = $Tbltyp;
        $this->time = $time;
        $this->date = $date;
        $this->status = $status;
    }

}
