<?php session_start();
if (empty($_SESSION)) 
{
	header('location:../index.php?msg=hahaha_voce_nao_disse_a_palavra_magica'); // referĂȘncia ao filme "Jurassic Park" 
}