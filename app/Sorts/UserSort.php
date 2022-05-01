<?php


namespace App\Sorts;


use App\Builders\Builder;

class UserSort extends Sort
{
    /**
     * @param $direction
     * @return Builder
     */
    public function created_at($direction): Builder
    {
        return $this->query->orderBy('created_at', $direction);
    }

    /**
     * @param $direction
     * @return Builder
     */
    public function updated_at($direction): Builder
    {
        return $this->query->orderBy('updated_at', $direction);
    }

    /**
     * @param $direction
     * @return Builder
     */
    public function name($direction): Builder
    {
        return $this->query->orderBy('user_name', $direction);
    }
}
