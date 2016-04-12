<?php 

/**
* 
*/
class HTML_Helper
{

	public function print_table($arr){ ?>
		<table>
			<thead>
				<?php foreach ($arr[0] as $key => $value) { ?>
					<th><?= $key; ?></th>
				<?php }; ?>
			</thead>
			<tbody>
				<?php for ($i = 0; $i < count($arr); $i++) { ?>
					<tr>
					<?php foreach ($arr[$i] as $key => $value) { ?>
							<td><?= $value ?></td>
					<?php } ?>
					</tr>
				<?php }; ?>
			</tbody>
		</table>
		<?php
	}
	public function print_select($name, $arr){ ?>
		<select name="<?= $name; ?>">
			<?php for($i = 0; $i < count($arr); $i ++){ ?>
			<option value="<?= $arr[$i] ?>"><?= $arr[$i] ?></option>
			<?php } ?>
		</select>
	<?php }
}

$names = [
	array('first_name' => 'Michael', 'last_name' => 'Choi', 'nick_name' => 'Sensei'),
	array('first_name' => 'Mike', 'last_name' => 'Hannon', 'nick_name' => 'Chill'),
	array('first_name' => 'Minh', 'last_name' => 'Nugyen', 'nick_name' => 'Max'),
	array('first_name' => 'Jeff', 'last_name' => 'Hedfors', 'nick_name' => 'JeffSquared'),
	array('first_name' => 'Elena', 'last_name' => 'Saygo', 'nick_name' => 'Sensaygo'),
	array('first_name' => 'Edgar', 'last_name' => 'Grepo', 'nick_name' => 'Physio')
	];
$table = new HTML_Helper();
$table-> print_table($names);

$states = ["CA", "WA", "UT", "TX", "AZ", "NY"];
$select = new HTML_Helper();
$select-> print_select('state', $states);

 ?>