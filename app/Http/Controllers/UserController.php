<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request)
    {
      $user = auth()->user();
      $user->income = $request->input('income');
      $user->save();
      return response()->json($user, 201);
    }
}
