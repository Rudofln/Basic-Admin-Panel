				<?php
				try {
					$db = new PDO('mysql:host=localhost;dbname=panel','root','');
                    $db->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");
				} catch (PDOException $e) {
					$e->getMessage();
				}
				?>