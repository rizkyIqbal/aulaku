<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="css/home.css">
    <title>Home</title>
</head>

<body>
    <header>
        <img class="logo" src="Aula.ku.png" alt="logo aulaku" width="150px">
        <nav>
            <ul class="nav_links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Histori</a></li>
                <li><a href="#">Tambah Tempat</a></li>
            </ul>
        </nav>
        <a class="cta" href="#"><button>Login</button></a>
    </header>
    <div class="jumbotron">
        <img class="iklan" src="iklan.png" alt="iklan">
        <img class="iklan" src="iklan2.png" alt="iklan">
        <div class="container">
            <div class="title">Pencarian Aula</div>
            <form action="#">
                <div class="user-details">
                    <div class="input-boxs">
                        <span class="details">Lokasi Aula</span>
                        <input type="text" placeholder="Malang, Jawa Timur" required>
                    </div>
                    <div class="input-box">
                        <span class="details">tanggal Penyewaan</span>
                        <input type="date" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Tanggal Selesai</span>
                        <input type="date" required>
                    </div>
                </div>
                <a class="cta" href="#"><button>Cari Aula</button></a>
            </form>
        </div>
        <br><br><br><br>
        <div class="row row-cols-1 row-cols-sm-3 g-4">
            <div class="col">
                <div class="card">
                    <img src="4957155.jpg" class="card-img-top" alt="..." height="386px">
                    <div class="card-body ">
                        <h5 class="text-center ">Memudahkan anda untuk menyewa Aula</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="17626.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="text-center ">Menyewakan aula lebih gampang!</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="20943965.jpg" class="card-img-top" alt="..." height="386px">
                    <div class="card-body">
                        <h5 class="text-center ">Lebih praktis digunakan</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="iklan.js"></script>
</body>

</html>