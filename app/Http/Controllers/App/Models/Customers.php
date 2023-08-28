<?php
namespace App\Models;
use Illuminate\Support\Facades\Auth;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as AuthenticatableUser;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable implements Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'fullname', 'address', 'phone', 'city', 'email', 'password', 'comment', 'gender',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    // Implement methods required by the Authenticatable interface
    public function getAuthIdentifierName()
    {
        return 'id'; // Assuming 'id' is the primary key column name
    }

    public function getAuthIdentifier()
    {
        return $this->{$this->getAuthIdentifierName()};
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return $this->{$this->getRememberTokenName()};
    }

    public function setRememberToken($value)
    {
        $this->{$this->getRememberTokenName()} = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }
}

