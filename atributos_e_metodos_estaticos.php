<?php

	class Exemplo {
		public static $atributo1 = 'Eu sou um atributo estático';
		public $atributo2 = 'Eu sou um atributo normal';

		public static function metodo1() {
			echo 'Eu sou um método estático';
		}

		public function metodo2() {
			echo 'Eu sou um método normal';
		}
	}

	//$x = new Exemplo();
	/*
	echo Exemplo::$atributo1;
	echo '<br />';
	Exemplo::metodo1();
	*/
	echo Exemplo::metodo1();

	//echo $x->atributo2;