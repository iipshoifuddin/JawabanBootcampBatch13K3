1. Jawaban :

			Kegunaan JSON dari project nomer satu adalah untuk menampilkan data dari sutu variabel / inputan menjadi data yang berformat JSON, setelah menjadi format tersebut kita dapat menggunakannya dalam berbagai platform.

2. TesterNo 1 - 5 menggunakan tester online 	Tester Online : http://phptester.net/






3. Jawaban Soal No6 (dijalankan dengan aplikasi xampp v3.2.3)

<b>Perintah SQL
	
	SELECT tb_cashier.name AS cashier, tb_product.name AS product, tb_category.name AS category, tb_product.price AS price FROM tb_product LEFT JOIN (tb_category, tb_cashier) ON (tb_category.id=tb_product.id_category AND tb_cashier.id=tb_product.id_cashier) WHERE 1

	(menggunakan MariDB)
<b>

<b>6.1 Halaman Utama:
![Demo 1](https://raw.githubusercontent.com/iipshoifuddin/JawabanBootcampBatch13K3/master/Soalno6/ScreenShoot/01.%20Tampil.PNG)

<b>6.2 Tambah:
![Demo 1](https://raw.githubusercontent.com/iipshoifuddin/JawabanBootcampBatch13K3/master/Soalno6/ScreenShoot/02.%20Tambah.PNG)

<b>6.3 Input:
![Demo 1](https://raw.githubusercontent.com/iipshoifuddin/JawabanBootcampBatch13K3/master/Soalno6/ScreenShoot/03.%20Input.PNG)

<b>6.4 Pop UP Tambah:
![Demo 1](https://raw.githubusercontent.com/iipshoifuddin/JawabanBootcampBatch13K3/master/Soalno6/ScreenShoot/04.%20PopUP.PNG)

<b>6.5 Edit:
![Demo 1](https://raw.githubusercontent.com/iipshoifuddin/JawabanBootcampBatch13K3/master/Soalno6/ScreenShoot/05.%20Edit.PNG)

<b>6.6 Poop UP Edit:
![Demo 1](https://raw.githubusercontent.com/iipshoifuddin/JawabanBootcampBatch13K3/master/Soalno6/ScreenShoot/06.%20PoopUPEdit.PNG)

<b>6.7 Hapus:
![Demo 1](https://raw.githubusercontent.com/iipshoifuddin/JawabanBootcampBatch13K3/master/Soalno6/ScreenShoot/07.%20Hapus.PNG)

<b>6.8 Poop Up Hapus:
![Demo 1](https://raw.githubusercontent.com/iipshoifuddin/JawabanBootcampBatch13K3/master/Soalno6/ScreenShoot/08.%20PoopUPHapus.PNG)
