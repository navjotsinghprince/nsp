<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Constants\UserConstants;

class NavjotController extends ResponseController
{

	#It will return user Information
	public function GetUser(Request $request)
	{
		$User = User::with('Profile', 'Service')->first();
		if ($User) {
			return $this->actionSuccess(UserConstants::USER_DATA_FOUND, $User);
		} else {
			return $this->notFound(UserConstants::USER_DATA_NOT_FOUND);
		}
	}
}
