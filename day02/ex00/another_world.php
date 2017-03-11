#!/usr/bin/php
<?php
/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   another_world.php                                  :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: dzheng <dzheng@student.42.fr>              +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2017/03/09 16:20:23 by dzheng            #+#    #+#             */
/*   Updated: 2017/03/09 16:22:01 by dzheng           ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

function epur_str($string)
{
	$epur_str = trim(preg_replace('/[\s\t]+/', ' ', $string));
	return ($epur_str);
}

if ($argc <= 1)
	return (FALSE);
else
{
	$str = epur_str($argv[1]);
	echo "$str\n";
}

?>