<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;

class Item extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'title',
        'category_id',
        'description',
        'price',
        'user_id'
    ];

    public function toSearchableArray() {
        $category = $this->category;
        $array = [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'category' => $this->category_id,
        ];

        return $array;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function setAccepted($value) {
        $this->is_accepted = $value;
        $this->save();
        return true;
    }

    public static function toBeRevisionedCount() {
        return Item::where('is_accepted', null)->count();
    }
}
