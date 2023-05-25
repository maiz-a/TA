<?php

function is_active($menu = '')
{
  if (isset($_GET['page'])) {

    if ($_GET['page'] === $menu || $_GET['page'] === 'cetak_' . $menu || $_GET['page'] === 'edit_' . $menu || $_GET['page'] === 'update'. $menu) {
      return  'active';
    }
  } else {
    if ($menu === '') {
      return 'active';
    }
  }
}
