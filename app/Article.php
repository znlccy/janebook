<?php

namespace App;

class Article extends BaseModel
{
    /* 不可以注入的字段 */
    //protected $guarded;

    /* 可以注入数据 */
    /*protected $fillable = ['title', 'content', 'user_id'];*/

    /* 关联用户 */
    public function user() {
        return $this->belongsTo('\App\User');
    }

    /* 关联评论 */
    public function comments() {
        return $this->hasMany('\App\Comment')->orderBy('created_at', 'desc');
    }

    /* 和用户关联 */
    public function zan($user_id) {
        return $this->hasOne('\App\Zan')->where('user_id', $user_id);
    }

    public function zans() {
        return $this->hasMany('\App\Zan');
    }
}
