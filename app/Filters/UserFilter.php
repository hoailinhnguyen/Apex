<?php


namespace App\Filters;


class UserFilter extends Filter
{
    /**
     * @param $name
     * @return mixed
     */
    public function name($name)
    {
        return $this->query->whereLike('user_name', $name);
    }
}
