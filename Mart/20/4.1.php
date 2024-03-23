<?php
$uname = "Xedice";
$password = "1212";
$entered_uname = "Xedice";
$entered_password = "12121";
$bnum = 1;
do {
	if ($bnum < 4) {
		if ($entered_uname == $uname && $entered_password == $password) {
			echo "#Sisteme daxil olundu!";
			break;
		} else {
			echo "$bnum: ";
			echo "Şifrə vəya istifadəçi adı səhvdir!<br>";
			$bnum++;
		}
	} else {
		echo "Hesab bloklandi!";
		break;
	}
}
while ($bnum <= 4);
?>