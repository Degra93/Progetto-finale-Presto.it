<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable =['title','body','price'];

    public function category()
 {
    return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    // settaggio del valore vero o farlo dell'accettazione annuncio
    public function setAccepted($value){
        $this->is_accepted=$value;
        $this->save();
        return true;
    }

    public static function daRevisionare(){
        return Announcement::where('is_accepted',null)->count();
        
    }
}
