<?php
/**
 * Youtube Controller 
 **/
class YoutubeController extends AppController {

	public $uses = array(
		'Youtube.YoutubeVideo',
	);

	public $components = array(
		'Apis.Oauth' => 'youtube'
	);

	public function connect() {
		$this->Oauth->connect();
	}

	public function youtube_callback() {
		$this->Oauth->callback();
	}

	public function index() {
		$data = $this->YoutubeVideo->find('all', array(
			'fields' => 'uploads'
		));
		debug($data);
		die;
	}
}
