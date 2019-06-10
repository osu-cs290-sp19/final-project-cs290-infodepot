<?php
/**
 * Generates the standard button used in the navigation bar and in other linkable areas throughout the website.
 *
 * @param string $path the URL the button should link to
 * @param string $name the name to display on the link
 * @return string
 */
function createLinkButton($path, $name) {
    return "
	<a href='$path'>
		<li>$name</li>
	</a>
	";
}
