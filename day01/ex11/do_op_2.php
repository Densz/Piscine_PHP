#!/usr/bin/php
<?php
/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   do_op_2.php                                        :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: dzheng <dzheng@student.42.fr>              +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2017/03/09 12:55:08 by dzheng            #+#    #+#             */
/*   Updated: 2017/03/09 13:03:09 by dzheng           ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */
function epur_str($string)
{
	$epur_str = trim(preg_replace('/\s\s+/', ' ', $string));
	return ($epur_str);
}

if ($argc <= 1)
	echo "Incorrect Parameters";
else
{
	unset($argv[0]);
	$str = epur_str($argv[1]);
	$tab = explode(" ", $str);
	foreach ($tab as $elem)
	{
		if (is_numeric($elem) == FALSE && $elem != "+" && $elem != "-" && $elem != "/" && $elem != "*" && $elem != "%")
		{
			echo "Syntax Error";
			return (FALSE);
		}
	}
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
	return (TRUE);
}

?>