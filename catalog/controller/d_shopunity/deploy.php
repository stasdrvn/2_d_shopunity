<?php
class ControllerDShopunityDeploy extends Controller {

	public function index() {

		//nothing
	}

	/*
	 *	Bitbucket diploy script
	 */
	public function bitbucket() {

		$user = '';
		if(isset($this->request->get['user'])){
			$user = $this->request->get['user'];
		}
		$pass = '';
		if(isset($this->request->get['pass'])){
			$pass = $this->request->get['pass'];
		}
		$repo = '';
		if(isset($this->request->get['repo'])){
			$repo = $this->request->get['repo'];
		}
		$branch = '';
		if(isset($this->request->get['branch'])){
			$branch = $this->request->get['branch'];
		}
		$owner = '';
		if(isset($this->request->get['owner'])){
			$owner = $this->request->get['owner'];
		}

		new Deploy($user, $pass, $repo, str_replace("catalog/", "", DIR_APPLICATION), $branch, $owner);
	}

	/*
	 *	Github diploy script
	 */
	public function github(){

		$user = '';
		if(isset($this->request->get['user'])){
			$user = $this->request->get['user'];
		}
		$repo = '';
		if(isset($this->request->get['repo'])){
			$repo = $this->request->get['repo'];
		}
		$branch = '';
		if(isset($this->request->get['branch'])){
			$branch = $this->request->get['branch'];
		}
		new GitHub_Deploy($user, $repo, str_replace("catalog/", "", DIR_APPLICATION), $branch );
	}

}