<?php 
	$string = file_get_contents("../upload/place/place-1.json");
	$place_one = json_decode($string, true);
	$mx = 0;
	foreach ($place_one as $k => $v) {
		$data['code'] = $v['code'];
		$data['name_vi'] = $v['name'];
		$data['name_en'] = $func->changeTitleAlias($v['name']);
		$data['alias_vi'] = $func->changeTitle($v['name']);
		$data['alias_en'] = $func->changeTitle($v['name']);
		$data['createdAt'] = $d->now();
		$data['status'] = 'hienthi';
		$data['numb'] = $mx+1;
		$id_city = $d->insert('place_citys', $data);
		if ($id_city) {

			$dist = $v['district'];
			foreach ($dist as $k1 => $v1) {
				$data1['id_city'] = $id_city;
				$data1['code'] = $v1['pre'];
				$data1['name_vi'] = $v1['name'];
				$data1['name_en'] = $func->changeTitleAlias($v1['name']);
				$data1['alias_vi'] = $func->changeTitle($v1['name']);
				$data1['alias_en'] = $func->changeTitle($v1['name']);
				$data1['createdAt'] = $d->now();
				$data1['status'] = 'hienthi';
				$data1['numb'] = $k1+1;
				$id_dist = $d->insert('place_dists', $data1);
				if ($id_dist) {

					$ward = $v1['ward'];
					foreach ($ward as $k2 => $v2) {
						$data2['id_city'] = $id_city;
						$data2['id_dist'] = $id_dist;
						$data2['code'] = $v2['pre'];
						$data2['name_vi'] = $v2['name'];
						$data2['name_en'] = $func->changeTitleAlias($v2['name']);
						$data2['alias_vi'] = $func->changeTitle($v2['name']);
						$data2['alias_en'] = $func->changeTitle($v2['name']);
						$data2['createdAt'] = $d->now();
						$data2['status'] = 'hienthi';
						$data2['numb'] = $k2+1;
						$id_ward = $d->insert('place_wards', $data2);
					}

					$street = $v1['street'];
					foreach ($street as $k3 => $v3) {
						$data3['id_city'] = $id_city;
						$data3['id_dist'] = $id_dist;
						$data3['code'] = $v3['pre'];
						$data3['name_vi'] = $v3['name'];
						$data3['name_en'] = $func->changeTitleAlias($v3['name']);
						$data3['alias_vi'] = $func->changeTitle($v3['name']);
						$data3['alias_en'] = $func->changeTitle($v3['name']);
						$data3['createdAt'] = $d->now();
						$data3['status'] = 'hienthi';
						$data3['numb'] = $k3+1;
						$id_street = $d->insert('place_streets', $data3);
					}

				}
			}
			$mx++;
		}
	}
	echo count($place_one);
	echo '--------'
	echo 'success';
	die;
?>