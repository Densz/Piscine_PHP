#!/usr/bin/php
<?php
/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   do_op.php                                          :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: dzheng <dzheng@student.42.fr>              +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2017/03/09 11:45:20 by dzheng            #+#    #+#             */
/*   Updated: 2017/03/09 11:54:04 by dzheng           ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

function epur_str($string)
{
	$epur_str = trim(preg_replace('/[\s\t]+/', ' ', $string));
	return ($epur_str);
}

if ($argc <= 1 || $argc > 4)
	return (FALSE);
else
{
	unset($argv[0]);
	$str = implode(" ", $argv);
	$str = epur_str($str);
	$tab = explode(" ", $str);
	if ($tab[1] == "+")
		$result = $tab[0] + $tab[2];
	else if ($tab[1] == "-")
		$result = $tab[0] - $tab[2];
	else if ($tab[1] == "/")
		$result = $tab[0] / $tab[2];
	else if ($tab[1] == "*")
		$result = $tab[0] * $tab[2];
	else if ($tab[1] == "%")
		$result = $tab[0] % $tab[2];
	echo $result;
}
?>