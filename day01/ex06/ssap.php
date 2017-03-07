#!/usr/bin/php
<?php
/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   ssap.php                                           :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: dzheng <dzheng@student.42.fr>              +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2017/03/07 15:56:50 by dzheng            #+#    #+#             */
/*   Updated: 2017/03/07 15:56:53 by dzheng           ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

if ($argc <= 1)
	return (FALSE);
else
{
	unset($argv[0]);
	$string_implode = implode(" ", $argv);
	$string = trim(preg_replace('/\s\s+/', ' ', $string_implode));
	$my_tab = explode(" ", $string);
	sort($my_tab);
	foreach ($my_tab as $elem)
		echo "$elem\n";
}
?>