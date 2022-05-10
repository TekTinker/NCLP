<?php

namespace NCLP\Http\Controllers;

use Illuminate\Http\Request;
use NCLP\User;
use Validator;
use JWTFactory;
use JWTAuth;
use Illuminate\Support\Facades\Auth;
use Response;

class APIAuthController extends Controller
{
	public function login(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'email' => 'required|string|email|max:255',
			'password'=> 'required'
		]);
		if ($validator->fails()) {
			return response()->json($validator->errors());
		}
		$credentials = $request->only('email', 'password');
		try {
			if (! $token = JWTAuth::attempt($credentials)) {
				return response()->json(['error' => 'invalid_credentials'], 401);
			}
		} catch (JWTException $e) {
			return response()->json(['error' => 'could_not_create_token'], 500);
		}
		$user = auth()->user();
		return response()->json([
			'token' => $token,
			'status' => 'Success',
			'id' => $user->id,
			'user' => $user->name,
			'email' => $user->email
		]);
	}



}
