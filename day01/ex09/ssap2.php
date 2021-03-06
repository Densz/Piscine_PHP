#!/usr/bin/php
<?php
/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   ssap2.php                                          :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: dzheng <dzheng@student.42.fr>              +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2017/03/07 18:03:19 by dzheng            #+#    #+#             */
/*   Updated: 2017/03/07 18:03:23 by dzheng           ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

##
## NEED TO DOUBLE CHECK BEFORE PUSHING
## REFAIRE BEAUCOUP DE TEST
##

function epur_str($string)
{
	$epur_str = trim(preg_replace('/\s\s+/', ' ', $string));
	return ($epur_str);
}

if ($argc <= 1)
	return (FALSE);
else
{
	unset($argv[0]);
	$str = implode(" ", $argv);
	$str = epur_str($str);
	$tab = explode(" ", $str);
	foreach ($tab as $elem)
	{
		if (is_numeric($elem))
			$tab_num[] = $elem;
		else if (ctype_alpha($elem))
			$tab_char[] = $elem;
		else
			$tab_special_char[] = $elem;
	}
	sort($tab_num, SORT_STRING);
	sort($tab_char, SORT_STRING | SORT_FLAG_CASE);
	sort($tab_special_char, SORT_STRING | SORT_FLAG_CASE);
	$print = array_merge((array)$tab_char, (array)$tab_num, (array)$tab_special_char);
	foreach ($print as $elem)
		echo "$elem\n";
}
?>