#!/usr/bin/php
<?php
/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   rostring.php                                       :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: dzheng <dzheng@student.42.fr>              +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2017/03/07 16:25:13 by dzheng            #+#    #+#             */
/*   Updated: 2017/03/07 16:35:34 by dzheng           ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

function epur_str($string)
{
	$epur_str = trim(preg_replace('/\s\s+/', ' ', $string));
	return ($epur_str);
}

if ($argc <= 1)
	return (FALSE);
else
{
	$string = epur_str($argv[1]);
	$tab = explode(" ", $string);
	if (count($tab) == 1)
		echo "$tab[0]";
	else
	{
		$tmp_word = $tab[0];
		unset($tab[0]);
		echo (implode(" ", $tab));
		echo " ";
		echo "$tmp_word";
	}
}

//\n a la fin ou pas ????



?>