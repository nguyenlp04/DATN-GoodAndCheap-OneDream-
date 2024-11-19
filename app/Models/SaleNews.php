<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleNews extends Model
{
    use HasFactory;

    protected $table = 'sale_news';
    protected $primaryKey = 'sale_new_id';
    protected $fillable = [ 'channel_id', 'user_id', 'sub_category_id', 'title', 'price','approved', 'description', 'data', 'status', 'vip_pakage_id', 'vip_start_at', 'vip_end_at', 'created_at', 'updated_at', 'is_delete',
    ];


    public function channel()
    {
        return $this->belongsTo(Channel::class, 'channel_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }



    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }
    public function images()
    {
        return $this->hasMany(Imgproduct::class, 'sale_new_id');
    }
    public function firstImage()
    {
        return $this->hasOne(Imgproduct::class, 'sale_new_id');
    }
    public function user()
    {
        return $this->hasOne(User::class, 'user_id');
    }

    public function vipPackage()
    {
        return $this->hasOne(VipPackage::class,'vip_package_id');
    }

    public function isPromoted()
    {
        $currentDate = now();
        return ($this->vip_package_id && $this->vip_start_date <= $currentDate && $this->vip_end_date >= $currentDate) ||
               ($this->channel && $this->channel->isVip());
    }
}