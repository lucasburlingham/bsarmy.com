<?php

/*

For admins to manage users.
Shows a table of all users with their attributes.

TODO: Add pagination, search, sorting, delete, edit, etc.

*/



// Import what we need for interacting with the database
$file_path = $_SERVER['DOCUMENT_ROOT'] . '/includes/db_templates.php';

if (file_exists($file_path)) {
    require_once($file_path);
} else {
    echo "Error: The file does not exist at path: $file_path";
}

// Import what we need for general page functionality, eg. session management 
$file_path = $_SERVER['DOCUMENT_ROOT'] . '/includes/beforeIncludes.php';

if (file_exists($file_path)) {
    require_once($file_path);
} else {
    echo "Error: The file does not exist at path: $file_path";
}



?>
<!DOCTYPE html>
<html lang="en">

<head>

	<title>Manage Users</title>

	<!-- Use includes to insert snippets of code that will be reused in every page -->
	<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/headIncludes.php'; ?>
</head>

<body>
	<!-- The navbar won't change so insert it for a more consistant exprience -->
	<!-- TODO: figure out how to pass the active page to make it aria accessable -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php'; ?>

	<div class="table-responsive">
		<table class="table container table-hover">
			<thead>
				<tr>
					<?php 
					$column = array('#', 'Last Login', 'Username', 'Name', 'Bio', 'Permissions', 'Reputation');

					foreach ($column as $item) {
						echo '<th scope="col">' . $item . '</th>';
					}
				?>
				</tr>
			</thead>
			<tbody>
				<tr>
					<?php

				$userList = json_decode(get_all_users());

				// Get the total number of users
				$total = count($userList);
				
				// Output a row for each user
				foreach ($userList as $user) {
					echo '<tr>';
					// Output a column for each user attribute
					foreach ($user as $item) {
						if ($item === null || $item === '') {
							$item = '<span class="text-muted">N/A</span>';
						} else if ($item === 1) {
							$item = 'Yes';
						}

						// if $item is an epoch time, convert it to a human readable date
						if(strlen($item) === 10) {
							// 	Fri, 15 Sep 2023 20:52:35
							$item = date('D, j M Y H:i:s', $item);
						};
						
						echo '<td>' . $item . '</td>';
					}
					echo '</tr>';
				}
				?>
				</tr>
				<tr>
					<td colspan="7">Total Users: <?php echo $total; ?></td>
				</tr>
			</tbody>
		</table>
	</div>
</body>