<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;                         // Factories are used in testing or seeding to quickly generate fake users
use Illuminate\Database\Eloquent\Attributes\Fillable;       // These are attribute helpers
use Illuminate\Database\Eloquent\Attributes\Hidden;         
use Illuminate\Database\Eloquent\Factories\HasFactory;      // HasFactory is a traitb : Allows you to use model factories to create test data
use Illuminate\Foundation\Auth\User as Authenticatable;     // This gives your model login, password, and authentication features
use Illuminate\Notifications\Notifiable;                    // Notifiable is a trait : Lets your User receive notifications, like emails, SMS, or Slack messages

#[Fillable(['name', 'email', 'password'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
