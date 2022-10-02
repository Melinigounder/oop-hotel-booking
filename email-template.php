<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>Hotel booking confirmation</title>
	</head>
	<body style="background-color:#F5F6F8;font-family:-apple-system, BlinkMacSystemFont, 'segoe ui', roboto, oxygen, ubuntu, cantarell, 'fira sans', 'droid sans', 'helvetica neue', Arial, sans-serif;box-sizing:border-box;font-size:16px;">
		<div style="background-color:#fff;margin:30px;box-sizing:border-box;font-size:16px;">
			<h1 style="padding:40px;box-sizing:border-box;font-size:24px;color:#ffffff;background-color:#2E5984;margin:0;">Hotel Reservation</h1>
			<p style="padding:40px 40px 20px 40px;margin:0;box-sizing:border-box;font-size:16px;">A guest has booked a reservation for <b><?=$arrival?><?php echo $_POST["arrival"]; ?></b> and will departure on <b><?=$departure?><?php echo $_POST["departure"]; ?></b>.</p>
			<h2 style="padding:20px 40px;margin:0;color:#394453;box-sizing:border-box;">Guest Details</h2>
			<div style="box-sizing:border-box;padding:0 40px 20px;">
				<table style="border-collapse:collapse;width:100%;">
					<tbody>
						<tr>
							<td style="padding:15px 0;text-decoration:underline;">Email</td>
							<td style="text-align:right;"><?=$email?><?php echo $_POST["email"]; ?></td>
						</tr>
						<tr>
							<td style="padding:15px 0;text-decoration:underline;">Name</td>
							<td style="text-align:right;"><?=$first_name?><?php echo $_POST["first_name"]; ?> <?=$last_name?><?php echo $_POST["last_name"]; ?></td>
						</tr>
						<tr>
							<td style="padding:15px 0;text-decoration:underline;">Phone</td>
							<td style="text-align:right;"><?=$phone?><?php echo $_POST["phone"]; ?></td>
						</tr>
						<tr>
							<td style="padding:15px 0;text-decoration:underline;">Adults</td>
							<td style="text-align:right;"><?=$adults?><?php echo $_POST["adults"]; ?></td>
						</tr>
						<tr>
							<td style="padding:15px 0;text-decoration:underline;">Children</td>
							<td style="text-align:right;"><?=$children?><?php echo $_POST["children"]; ?></td>
						</tr>
						<tr>
							<td style="padding:15px 0;text-decoration:underline;">Room Preference</td>
							<td style="text-align:right;"><?=$room_pref?><?php echo $_POST["room_pref"]; ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>