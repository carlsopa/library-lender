<?php

	namespace App\Http\Controllers;

	class users extends Controller
	{
		public function reviewForm{
			return view('library.users.bookReveiw');
		}

	}

?>