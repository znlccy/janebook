<?php

namespace App;

class Article extends BaseModel
{
    /* 不可以注入的字段 */
    //protected $guarded;

    /* 可以注入数据 */
    protected $fillable = ['title', 'content'];
}
