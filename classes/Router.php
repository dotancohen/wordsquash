<?php


class Router {

	public static function route()
	{
		$path = $_SERVER['REQUEST_URI'];


		// Only get static information from the database, do not send any parameters to the database.

		// Get a list of cpts / authors / taxonomies / anything else that could be in the first position of ~/foo/bar

		// Then get a list of slugs and IDs for that whatever.

		// Find the id of the post / author / etc matching the slug

		// Request from the DB with the only parameter sent intval($id);

		// Load the appropriate page just like Wordpress would: single-cpt.php -> single.php -> index.php





	}
}
