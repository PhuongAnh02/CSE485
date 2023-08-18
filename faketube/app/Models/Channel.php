<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    use HasFactory;

    protected $primaryKey = 'ChannelID'; // Khai báo khóa chính là ChannelID

    protected $fillable = [
        'ChannelName',
        'Description',
        'SubscribersCount',
        'URL',
        'created_at',
        'updated_at',
    ];

    public $timestamps = false;

    // Định nghĩa các cột ngày tháng tương ứng
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
