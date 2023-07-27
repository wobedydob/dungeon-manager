<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Authenticatable implements AuthenticatableContract
{

    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];

    /**
     * Create a new user and save it to the database.
     *
     * @param array $data
     * @return Builder|Model
     */
    public static function create(array $data): Model|Builder
    {
        return static::query()->create($data);
    }

}
