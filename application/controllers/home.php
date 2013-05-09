<?php

class Home_Controller extends Base_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function action_index()
	{
		$this->data['title'] = 'Home';
		return View::make('index', $this->data);
	}

	public function action_portfolio()
	{
		$this->data['title'] = 'Portfolio';
		return View::make('portfolio', $this->data);
	}

	public function action_lab()
	{
		$this->data['title'] = 'Lab';
		return View::make('lab', $this->data);
	}
}