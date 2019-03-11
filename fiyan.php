<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'id8257272_oik'; // User Server
$db_pass = 'oik123'; // Password Server
$db_name = 'id8257272_fiyan'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}

$sql = 'Select * FROM mahasiswa';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

echo '<table>
		<thead>
			<tr>
				<th>Nim</th>
				<th>Nama</th>
				<th>Prodi</th>
			</tr>
		</thead>
		<tbody>';
		
while ($row = mysqli_fetch_array($query))
{
	echo '<tr>
			<td>'.$row['nim'].'</td>
			<td>'.$row['nama'].'</td>
			<td>'.$row['prodi'].'</td>
			
		</tr>';
}
echo '
	</tbody>
</table>';

// Apakah kita perlu menjalankan fungsi mysqli_free_result() ini? baca bagian VII
mysqli_free_result($query);

// Apakah kita perlu menjalankan fungsi mysqli_close() ini? baca bagian VII
mysqli_close($conn);