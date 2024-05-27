<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job {
    public static function all():array {
        return [
            ['id' => 1 , 'title' => 'Programmer' , 'salary' => '$4,000'],
            ['id' => 2 , 'title' => 'Doctory' , 'salary' => '$8,000'],
            ['id' => 3 , 'title' => 'Teacher' , 'salary' => '$4,000'],
        ];
    }

    public static function find($id):array{

        $job = Arr::first(static::all(),fn($job) => $job['id'] == $id);
        if(!$job){
            abort(404);
        }
        return $job;
    }
}
