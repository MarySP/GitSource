<?php

/* 
 * Maryam Ibrahim
 * CSC 4996
 * Wayne State University
 */

namespace TodoListCSC4669\TodoClass;

use \DateTime;

final class TodoList {

    const STATUS_PENDING = "PENDING";
    const STATUS_STARTED = "STARTED";
    const STATUS_COMPLETED = "COMPLETED";
    const STATUS_LATE = "LATE";

    
    private $TaskID;
    private $createdDate;
    private $DueDate;
    private $Title;
    private $Status;


    public function __constructor() {
        $now = new DateTime();
        $this->setCreatedOn($now);
        $this->setStatus(self::STATUS_PENDING);
        $this->setDeleted(false);
    }

    public static function Statuses() {
        return [
            self::STATUS_PENDING,
            self::STATUS_STARTED,
            self::STATUS_COMPLETED,
            self::STATUS_LATE,
        ];
    }

    public function getTaskID() {
        return $this->TaskID;
    }

    public function setTaskID($TaskID) {
        $this->TaskID= (int) $TaskID;
    }

    public function getcreatedDate() {
        return $this->createdDate;
    }

    public function setcreatedDate(DateTime $createdDate) {
        $this->createdDate = $createdDate;
    }

    public function getDueDate() {
        return $this->DueDate;
    }

    public function setDueDate(DateTime $DueDate) {
        $this->DueDate = $DueDate;
    }

 
    public function getTitle() {
        return $this->Title;
    }

    public function setTitle($Title) {
        $this->Title = $Title;
    }

    public function getStatus() {
        return $this->Status;
    }

    public function setStatus($Status) {
        $this->Status = $Status;
    }

} 
