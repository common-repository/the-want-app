<?php

/*
	Plugin Name: The Want App
	Plugin URI: https://thewantapp.com/become-a-partner/
	Description: Creates a 'Want' button that drives traffic and sales by linking to a social wishlist on Facebook. No new accounts necessary for you or your visitors - it's automagically built directly into Facebook's Timeline!
	Version: 1.1.1
	Author: Nikita Logachev
	Author URI: http://entreprenik.com/
	License: GPL2

	Copyright 2012  The Want App  (email : contact@thewantapp.com)
	
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

	add_shortcode('thewantapp', 'thewantapp');
	
	function thewantapp($atts) {
		
		$data = 
		array_map('trim',
			array_map('rawurlencode',
				shortcode_atts(
					array(
						'url'=>get_permalink(),
						'theme'=>'light',
						'referrer'=>site_url(),
						'image'=>'',
						'title'=>'',
						'from'=>'button-wp'
					),
					$atts
				)
			)
		);
		
		if ($data['title'] === '' || $data['image'] === '') {
			return;
		} else {
			
			$query = '';
			foreach ($data as $key=>$value) {
				$query .= $key . '=' . $value . '&';
			}
			$query = substr($query, 0, -1);
			
			$dimensions = (preg_match('/box/',$data['theme'])) ? 'width="51" height="62"' : 'width="90" height="20"';
			
			return '<iframe src="https://api.thewantapp.com/button.php?' . $query . '" ' . $dimensions . ' border="0" style="background: transparent;border:0px;margin:0px;padding:0px;outline:none"></iframe>';
			
		}
		
	}

?>