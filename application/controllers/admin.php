<?php

class Admin_Controller extends Base_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function action_posts()
	{
		if (Auth::check()) {
			$this->data['title'] = 'Posts';
			return View::make('admin.posts', $this->data);
		} else {
			Redirect::to('/home');
		}
	}

}