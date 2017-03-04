#!/usr/bin/php
<?php
/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   oddeven.php                                        :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: dzheng <dzheng@student.42.fr>              +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2017/03/04 16:43:03 by dzheng            #+#    #+#             */
/*   Updated: 2017/03/04 16:43:05 by dzheng           ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

while (42)
{
	echo "Entrez un nombre: ";
	$stdin = new SplFileObject('php://stdin');
	$number = $stdin->current();
	$number = rtrim($number, "\n");
	if (is_numeric($number))
	{
		if ($number % 2 == 0)
			echo "Le chiffre $number est Pair\n";
		else
			echo "Le chiffre $number est Impair\n";
	}
	else
		echo "'$number' n'est pas un chiffre\n";
	if ($number == "^D")
	{
		echo "\n";
		exit (0);
	}
}
?>