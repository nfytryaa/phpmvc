<?php  

class About {
	public function index ($name = 'Asa', $pekerjaan = 'Musisi')
	{
		echo "Halo, nama saya $name, saya adalah seorang $pekerjaan";
	}
	public function page()
	{
		echo 'About/page'
	}
}