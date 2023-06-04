<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'due_date',
        'description',
        'user_id',
        'category_id',
    ];

    // Relacionamento com a tabela de Usuário
    public function user(){
        return $this->belongsTo(User::class);
    }

    // Relacionamento com a tabela de Categoria
    public function category(){
        return $this->belongsTo(Category::class);
    }

}
