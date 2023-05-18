<?php
if (isset($_GET['page'])) {

	switch ($_GET['page']) {
		case 'nakes':
			require_once 'app/nakes/views/index.php';
			break;
		case 'tambah-nakes':
			require_once 'app/nakes/views/create.php';
			break;
		case 'edit-nakes':
			require_once 'app/nakes/views/edit.php';
			break;
		case 'hapus-nakes':
			require_once 'app/nakes/proses/delete.php';
			break;
		case 'pasien':
			require_once 'app/pasien/views/index.php';
			break;
		case 'tambah-pasien':
			require_once 'app/pasien/views/create.php';
			break;
		case 'edit-pasien':
			require_once 'app/pasien/views/edit.php';
			break;
		case 'hapus-pasien':
			require_once 'app/pasien/proses/delete.php';
			break;
		case 'diagnosa':
			require_once 'app/diagnosa/views/index.php';
			break;
		case 'tambah-diagnosa':
			require_once 'app/diagnosa/views/create.php';
			break;
		case 'edit-diagnosa':
			require_once 'app/diagnosa/views/edit.php';
			break;
		case 'hapus-diagnosa':
			require_once 'app/diagnosa/proses/delete.php';
			break;
		case 'apoteker':
			require_once 'app/apoteker/views/index.php';
			break;
		case 'tambah-apoteker':
			require_once 'app/apoteker/views/create.php';
			break;
		case 'edit-apoteker':
			require_once 'app/apoteker/views/edit.php';
			break;
		case 'hapus-apoteker':
			require_once 'app/apoteker/proses/delete.php';
			break;
		case 'rekam-medis':
			require_once 'app/rekam-medis/views/index.php';
			break;
		case 'tambah-rekam-medis':
			require_once 'app/rekam-medis/views/create.php';
			break;
		case 'edit-rekam-medis':
			require_once 'app/rekam-medis/views/edit.php';
			break;
		case 'hapus-rekam-medis':
			require_once 'app/rekam-medis/proses/delete.php';
			break;
		case 'rekap':
			require_once 'app/rekap/views/index.php';
			break;
		case 'profil':
			require_once 'app/profil/views/index.php';
			break;
		case 'jadwal':
			require_once 'app/jadwal/views/index.php';
			break;
			
		}
} else {
	require_once 'app/dashboard/views/index.php';
}
