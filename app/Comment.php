<?php

namespace App;

class Comment extends BaseModel
{
    /* 评论所属文章 */
    public function article() {
        return $this->belongsTo('\App\Article');
    }

    /* 评论所属用户 */
    public function user() {
        return $this->belongsTo('\App\User');
    }
}
