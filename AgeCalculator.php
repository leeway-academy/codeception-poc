<?php

class AgeCalculator
{
    private DateTimeInterface $lastDate;

    public function __construct(DateTimeInterface $lastDate)
    {
        $this->lastDate = $lastDate;
    }

    public function getAge(DateTimeInterface $birthday) : int
    {
        return $this->lastDate->diff($birthday)->y;
    }
}