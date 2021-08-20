<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Hidehalo\Nanoid\Client;
use Hidehalo\Nanoid\GeneratorInterface;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();

        $client = new Client();
        $nanoid = $client->generateId($size = 21, $mode = Client::MODE_DYNAMIC);

        return User::create([
            '__id' => $nanoid,
            'name' => $input['name'],
            'avatar' => $input['avatar'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
