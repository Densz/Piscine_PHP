#!/usr/bin/php
<?php
/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   loupe.php                                          :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: dzheng <dzheng@student.42.fr>              +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2017/03/09 17:59:59 by dzheng            #+#    #+#             */
/*   Updated: 2017/03/09 18:12:47 by dzheng           ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

	$file = file("page.html");
	foreach ($file as $elem)
	{
		$str = $elem;
		if (preg_match("/http:\/\/.+title=\"([A-Za-z ]+)/", $str, $test) !== FALSE)
		{
			$str = str_replace($test[1], strtoupper($test[1]), $str);
		}
		if (preg_match("/<a [^>]*>([^<]*).*<\/a>/", $str, $test) !== FALSE)
		{
			$str = str_replace($test[1], strtoupper($test[1]), $str);
		}
		echo "$str";
	}

?>