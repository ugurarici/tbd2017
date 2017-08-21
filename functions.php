<?php

function selamSoyle($isim)
{
	echo 'Selam ' . $isim . '<br>';
}


function a()
{
	echo "a çalıştı<br>";


	function b()
	{
		echo "b çalıştı<br>";

		function c()
		{
			echo "c çalıştı<br>";
		}
	}
}


// selamSoyle("Uğur");
// selamSoyle("Yunus");
// selamSoyle("Eda");
// selamSoyle("Şeyma");
// selamSoyle("İrem");
// selamSoyle("Yusuf");
// selamSoyle("Bilge");

a();
b();
c();


echo time();
