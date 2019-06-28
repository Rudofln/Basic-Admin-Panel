
			<?php

			if(!isset($_GET['sayfa'])){
				$_GET['sayfa'] = 'index';
				}
			switch($_GET['sayfa']){

					case 'index':
        				include 'home.php';
    				break;
                    case 'ekle':
                        include 'ekle.php';
                    break;
                    case 'yazilarim':
                        include 'yazilarim.php';
                    break;
                    case 'sil':
                        include 'sil.php';
                    break;
                    case 'mes':
                        include 'mes.php';
                    break;
                    case 'cont':
                        include 'cont.php';
                    break;
                    case 'msjsil':
                        include 'msjsil.php';
                    break;
					default:
					echo 'Lütfen sayfalarımızdan birine gidin...';
					break;
				}
			?>