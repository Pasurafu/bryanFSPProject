<?php

include 'koneksi.php'; 


$page = $_POST['page']; 
$ceritaPerhalaman = 4; 


$offset = ($page - 1) * $ceritaPerhalaman;



$query ="SELECT * FROM notMyCerita LIMIT ?, ?";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='story'>";
        echo "<h3>" . $row['judulCerita'] . "</h3>";
        echo "<p>" . $row['isiParagraf'] . "</p>";
        echo "</div>";
    }
} else {
    
    echo "No Stories left";
}

mysqli_close($conn);
?>