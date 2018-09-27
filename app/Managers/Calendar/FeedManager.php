<?php

namespace App\Managers\Calendar;

use App\Models\Calendar\Calendar;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class FeedManager
{
    public function getFeed($type, $start, $end)
    {
        $cal = Calendar::where('code', $type)
            ->where(function($query) use ($start, $end){
                $query->where([
                    ['start','>', $start],
                    ['start','<', $end],
                ])->orwhere([
                    ['end', '<', $end],
                    ['end', '>', $start],
                ]);
            })->with('type')->get();
        
        return $this->calFeedObject($cal);
    }

    protected function calFeedObject($cals)
    {
        $array = new Collection();

        foreach($cals as $cal){

            $calObj = new CalendarFeedObject();

            $calObj->id = $cal->id;
            $calObj->start = $cal->start;
            $calObj->end = $cal->end;
            $calObj->title = $cal->type->name;
            $calObj->url = route($cal->type->route_viewevent, ['id' => $cal->id]);

            $array->add($calObj);
        }

        return $array;
    }
}