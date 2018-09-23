<?php 

namespace App\Http\Controllers;
use App\Expert;

/**
 * 
 */
class PagesController extends Controller
{
	
	public function getIndex()
	{
		# process data or params
		# talk to model
		# recieve data from the model
		# compile or process data from the model if need be
		# pass the data to the correct view
		return view('pages.welcome');
	}

	public function getAbout()
	{
		$first = 'Timothy';
		$last = 'Werunga';

		$fullname = $first ." ".$last;
		$email = 'timteddy@outlook.com';
		#using arrays
		$data =[];
		$data['email'] = $email;
		$data['fullname'] = $fullname;

		#normal way of passing data into the view
		#return view('pages.about')-withFullname($fullname)->withEmail($email);
		return view('pages.about')->withData($data);
	}

	public function getContact()
	{
		return view('pages.contact');
	}

	public function getFeatured()
	{
		$experts = Expert::orderBy('created_at','desc')->limit(12)->get();
		return view('pages.featured')->withExperts($experts);
	}
}









