<?php


namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\request;
use Illuminate\Http\Google_Client;
use Illuminate\Pagination\LengthAwarePaginator;
// require_once "HTTP/Request.php";

class search extends Controller {
	public function search($q){
		echo $q;
		$current_page = LengthAwarePaginator::resolveCurrentPage();
		echo $current_page;
		$term = $q;
		$term = str_replace(' ', '_', $term);
		$client = new \Google_Client();
		$service = new \Google_Service_Books($client);
		$params = array('maxResults'=>40);
		$results = $service->volumes->listVolumes($term,$params);
		$book_collection = collect($results);
		$current_book_page = $book_collection->forPage($current_page,10);
		$books_to_show = new LengthAwarePaginator($current_book_page,count($book_collection),10,$current_page,['path'=>LengthAwarePaginator::resolveCurrentPath()]);
		return view('library.search')->with(compact('books_to_show'));
	}
}
?>