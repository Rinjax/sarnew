<?php

namespace App\Managers\Calendar;

class CalendarFeedObject
{
    public $id;
    
    public $title;
    
    public $start;
    
    public $end;
    
    public $attending = [];
    
    public $url;
    
    public $colorBackground;
    
    public $colorBorder;
    
    public $colorText;
    
    public $className = [];
}