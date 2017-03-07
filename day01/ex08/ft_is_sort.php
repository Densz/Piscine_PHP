#!/usr/bin/php
<?php
/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   ft_is_sort.php                                     :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: dzheng <dzheng@student.42.fr>              +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2017/03/07 17:11:23 by dzheng            #+#    #+#             */
/*   Updated: 2017/03/07 17:11:27 by dzheng           ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

function	ft_is_sort($tab) 
{
	$prev = array_shift($tab);
	foreach ($tab as $value)
	{
		if (strcmp($prev, $value) > 0)
			return (FALSE);
		$prev = $value;
	}
	return (TRUE);
}
?>