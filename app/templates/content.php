<?php
if (isset($_GET['page'])) {

	switch ($_GET['page']) {
		case 'profil':
			require_once 'app/profile/views/index.php';
			break;
		case 'edit_profil':
			require_once 'app/profile/views/edit_profil.php';
			break;
		case 'edit_username':
			require_once 'app/profile/views/edit_username.php';
			break;
		case 'edit_password':
			require_once 'app/profile/views/edit_password.php';	
			break;
		case 'jadwal':
			require_once 'app/jadwal/index.php';
			break;
		case 'riwayat':
			require_once 'app/riwayat_berobat/index.php';
			break;
		case 'kartu':
			require_once 'app/kartu_berobat/index.php';
			break;
	
	}
} else {
	require_once 'app/profile/views/index.php';
}
