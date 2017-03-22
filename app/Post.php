<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
class Post extends Model
{
//    use Searchable;
    protected $fillable = [
        'title', 'tag', 'content','user_id',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    /**
     * Get index name。
     *
     * @return string
     */
//    public function searchableAs()
//    {
//        return 'posts_index';
//    }
}
