<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" Paragraf="width=device-width, initial-scale=1.0">
    <Title>Home Page</Title>

    <link rel="stylesheet" href="device.css"> 
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> 
</head>
<body>
<div class="pcContainer">


    <div class="cContainer">

<h2>Ceritaku</h2>
<div id="ceritakuContainer">

    <div class="cerita">
        <h3>Judul </h3>
        <p>Paragraf </p>
    </div>
    <div class="cerita">
        <h3>Judul </h3>
        <p>Paragraf </p>
    </div>
</div>
<button onclick="loadMoreCeritaku()">Tampilkan Cerita Selanjutnya</button>

<h2>Kumpulan Cerita</h2>
<div id="kumpulanCeritaContainer">

    <div class="cerita">
        <h3>Judul </h3>
        <p>Paragraf </p>
    </div>
    <div class="cerita">
        <h3>Judul </h3>
        <p>Paragraf </p>
    </div>
</div>
<button onclick="loadMoreKumpulanCerita()">Tampilkan Cerita Selanjutnya</button>
</div>

</div>
<div class="tabletContainer">

   
    <div class="cContainer">

<h2>Ceritaku</h2>
<div id="ceritakuContainer">
    
    <div class="cerita">
        <h3>Judul </h3>
        <p>Paragraf </p>
    </div>
    <div class="cerita">
        <h3>Judul </h3>
        <p>Paragraf </p>
    </div>
</div>
<button onclick="loadMoreCeritaku()">Tampilkan Cerita Selanjutnya</button>


<h2>Kumpulan Cerita</h2>
<div id="kumpulanCeritaContainer">
    
    <div class="cerita">
        <h3>Judul </h3>
        <p>Paragraf </p>
    </div>
    <div class="cerita">
        <h3>Judul </h3>
        <p>Paragraf </p>
    </div>
</div>
<button onclick="loadMoreKumpulanCerita()">Tampilkan Cerita Selanjutnya</button>
</div>

</div>
<div class="phoneContainer"> 
    <div class="cContainer">

<h2>Ceritaku</h2>
<div id="ceritakuContainer">

    <div class="cerita">
        <h3>Judul </h3>
        <p>Paragraf </p>
    </div>
    <div class="cerita">
        <h3>Judul </h3>
        <p>Paragraf </p>
    </div>
</div>
<button onclick="loadMoreCeritaku()">Tampilkan Cerita Selanjutnya</button>


<h2>Kumpulan Cerita</h2>
<div id="kumpulanCeritaContainer">

    <div class="cerita">
        <h3>Judul </h3>
        <p>Paragraf </p>
    </div>
    <div class="cerita">
        <h3>Judul </h3>
        <p>Paragraf </p>
    </div>
</div>
<button onclick="loadMoreKumpulanCerita()">Tampilkan Cerita Selanjutnya</button>
</div>

</div>
<script>
    let ceritakuPage = 1; 
    const ceritakuContainer = $('#ceritakuContainer');

    function loadMoreCeritaku() {
        $.ajax({
            url: 'ajaxCerita.php',
            type: 'POST',
            data: { page: ceritakuPage },
            success: function (data) {
                ceritakuContainer.append(data); 
                ceritakuPage++;
            }
        });
    }

    let kumpulanCeritaPage = 1;
    const kumpulanCeritaContainer = $('#kumpulanCeritaCont');

    function loadMoreKumpulanCerita() {
        $.ajax({
            url: 'ajaxMoreCerita.php',
            type: 'POST',
            data: { page: kumpulanCeritaPage },
            success: function (data) {
                kumpulanCeritaContainer.append(data); 
                kumpulanCeritaPage++;
            }
        });
    }
</script>

</body>
</html>
