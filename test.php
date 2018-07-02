<?php
$whats =   getcwd();

	function tesx($gambar, $lokasi, $qualiti) {

		$info = getimagesize($gambar);

		if ($info['mime'] == 'image/jpeg') 
			$image = imagecreatefromjpeg($gambar);

		elseif ($info['mime'] == 'image/gif') 
			$image = imagecreatefromgif($gambar);

		elseif ($info['mime'] == 'image/png') 
			$image = imagecreatefrompng($gambar);

		imagejpeg($image, $lokasi, $qualiti);

		return $lokasi;
	}
$dir = ".";

$a  = glob($whats.'/*.{jpeg,gif,png,jpg}', GLOB_BRACE);
$dir =  $whats."/";



for ($i=0; $i <count($a) ; $i++) { 
	$gambar = $a[$i];
	$namafile = str_replace($dir, '', $gambar);

	 $d = tesx($gambar, $dir.'/small-'.$namafile, 50);
	 echo $i.' . '.$d."\n";
}

?>
