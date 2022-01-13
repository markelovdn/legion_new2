<?php

namespace App\Filters;

class AthleteFilter extends QueryFilter{
    public function status($id = null){
        return $this->builder->when($id, function($query) use($id){
            $query->where('status', $id);
        });
    }

    public function gender($gender = null){
        return $this->builder->when($gender, function($query) use($gender){
            $query->where('gender', $gender);
        });
    }

    public function search_field($search_string = ''){
        return $this->builder
            ->where('secondname', 'LIKE', '%'.$search_string.'%')
            ->orWhere('firstname', 'LIKE', '%'.$search_string.'%');
    }
}
