<?php

define('CANCEL_START_APP', TRUE);

require __DIR__ . '/../index.php';

function adminer_object() {

	class CustomAdminer extends Adminer {

		private $container;

		function __construct($container)
		{
			$this->container = $container;
		}

	    function name() {
	        return $this->container->parameters['adminer']['title'];
	    }

	    function permanentLogin() {
	        // key used for permanent login
	        return "deffe14570379796dc52f7983ea286ba";
	    }

	    function credentials() {
			return array(
				$this->container->parameters['database']['host'],
				$this->container->parameters['database']['user'],
				$this->container->parameters['database']['password'],
			);
	    }

	    function database() {
	        return $this->container->parameters['database']['dbname'];
	    }

	    function login($login, $password) {
			$credentials = $this->container->parameters['adminer']['credentials'];
	        return $login == $credentials['username'] && $password == $credentials['password'];
	    }

	    function tableName($tableStatus) {
	        // tables without comments would return empty string and will be ignored by Adminer
	        return h($tableStatus["Comment"]);
	    }

	    function fieldName($field, $order = 0) {
	        // only columns with comments will be displayed and only the first five in select
	        return ($order <= 5 && !ereg('_(md5|sha1)$', $field["field"]) ? h($field["comment"]) : "");
	    }

	}

    return new CustomAdminer($GLOBALS['container']);
}

include __DIR__ . '/editor.php';