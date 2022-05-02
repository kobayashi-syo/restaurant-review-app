<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    public function getSexTextAttribute()
    {
        switch ($this->attributes['sex']) {
            case 1:
                return '男性';
            case 2:
                return '女性';
        }
    }

    public function getAgeTextAttribute()
    {
        switch ($this->attributes['age']) {
            case 1:
                return '10代以下';
            case 2:
                return '20代';
            case 3:
                return '30代';
            case 4:
                return '40代';
            case 5:
                return '50代';
            case 6:
                return '60代以上';
        }
    }

    public function getMailSentTextAttribute()
    {
        switch ($this->attributes['mail-sent']) {
            case 1:
                return '許可する';
            case null:
                return '許可しない';
        }
    }

    public function getReviewTextAttribute()
    {
        switch ($this->attributes['review']) {
            case 1:
                return '⭐️';
            case 2:
                return '⭐️⭐️';
            case 3:
                return '⭐️⭐️⭐️';
            case 4:
                return '⭐️⭐️⭐️⭐️';
            case 5:
                return '⭐️⭐️⭐️⭐️⭐️';
        }
    }
}
