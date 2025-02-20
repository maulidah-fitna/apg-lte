<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Landing page APPASI.">
    <title>Landing Page | APPASI</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Arial', sans-serif;
            background-color: 17153B;
            line-height: 1.6;
        }

        /* Header */
        header {
            background: linear-gradient(135deg, #8E24AA,#21867a);
            color: #fff;
            padding: 80px 20px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        
           
            
        

        header h1 {
            font-size: 48px;
            margin-bottom: 10px;
        }

        header p {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .cta-button{
           
            padding: 12px 24px;
            background-color: #7700ff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .custom-button:hover {
            background-color: #cc5200;
        }

            
        
        .cta-button:hover {
            background-color: #cc5200;
        }
        .hero {
            display: flex; /* Menjadikan elemen dalam hero berjajar */
            align-items: center; /* Menyusun elemen secara vertikal */
            justify-content: space-between; /* Memberi jarak antara teks dan gambar */
            padding: 50px;
            height: 100vh;
            background: linear-gradient(135deg, #7B1FA2, #00838F); /* Warna background */
            color: white;
            text-align: left;
        }

        .hero-text {
            max-width: 50%;
        }

        .hero h1 {
            font-size: 50px;
            font-weight: bold;
            margin-bottom: 15px;
            font-family: sans-serif;
        }

        .hero p {
            font-size: 25px;
        }

        .hero-image {
            width: 800px; /* Atur ukuran gambar */
            height: auto;
        }
        .image-container {
            position: relative;
            width: 350px;
            height: 350px;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden; /* Membuat efek gambar masuk ke dalam lingkaran */
        }

/* Lingkaran di belakang gambar */
        .circle-bg {
            position: absolute;
            width: 350px;
            height: 350px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            z-index: 1;
        }

/* Gambar masuk ke dalam lingkaran */
        .hero-image {
            position: relative;
            width: 650px; /* Bisa lebih besar dari lingkaran untuk efek masuk */
            height: auto;
            background: rgba(255, 255, 255, 0.2); /* Warna putih transparan */
            z-index: 2; /* Pastikan gambar di atas lingkaran */
            clip-path: circle(50% at center); /* Efek gambar masuk ke dalam lingkaran */
        }
        .hero {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 50px;
            height: 100vh;
            background: linear-gradient(135deg, #7B1FA2, #00838F);
            color: white;
            text-align: center;
        }


        .navbar {
            background: #333;
            color: white;
            padding: 15px 0;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .container {
            width: 90%;
            margin: 0 auto;
            max-width: 1200px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-links {
            list-style: none;
            display: flex;
        }

        .nav-links li {
            margin: 0 15px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-size: 16px;
        }

        .nav-links a:hover {
            color: #ddd;
        }
        
        .halo {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 80px 20px;
            text-align: center;
        }

        .haloo img {
            max-width: 500px;
            border-radius: 10px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            margin-left: 40px;
        }

        .halo-text {
            max-width: 600px;
        }

        .halo h2 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #333;
        }

        .halo p {
            font-size: 18px;
            color: #666;
            margin-bottom: 30px;
        }
        .halo {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .halo img {
            width: 500px;
            border-radius: 10px;
        }


        /* Features */
        .features {
            background: linear-gradient(135deg, #8E24AA,#21867a);
            padding: 80px 20px;
            text-align: center;
        }

        .features h2 {
            font-size: 36px;
            margin-bottom: 40px;
            color: #333;
            color: #fff
        }
        .features p{
            font-size: 30px;
            margin-bottom: 40px;
            color: #ddd;

        }

        .feature-items {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .feature-item {
            width: 30%;
            background-color: #f2f2f2;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }

        .feature-item:hover {
            transform: translateY(-10px);
        }

        .feature-item h3 {
            font-size: 24px;
            margin-bottom: 15px;
            color: #ff6600;
        }

        .feature-item p {
            font-size: 16px;
            color: #666;
        }
        

        /* Testimonials */
        .testimonials {
            background-color: #f8f8f8;
            padding: 80px 20px;
            text-align: center;
        }

        .testimonials h2 {
            font-size: 36px;
            margin-bottom: 40px;
            color: #333;
        }

        .testimonial-slider {
            display: flex;
            justify-content: center;
            overflow: hidden;
        }

        .testimonial {
            width: 60%;
            margin: 0 15px;
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .testimonial p {
            font-size: 16px;
            color: #666;
            margin-bottom: 15px;
        }

        .testimonial h3 {
            font-size: 18px;
            color: #333;
        }

        /* About Us Section */
        .about-us {
            background-color: #fff;
            padding: 80px 20px;
            text-align: center;
        }

        .about-us h2 {
            font-size: 36px;
            margin-bottom: 40px;
            color: #333;
        }

        .about-us p {
            font-size: 18px;
            color: #666;
            max-width: 800px;
            margin: 0 auto 30px;
        }

        .team {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        .team-member {
            width: 250px;
            margin-bottom: 20px;
            text-align: center;
        }

        .team-member img {
            width: 100%;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .team-member h3 {
            font-size: 20px;
            color: #333;
        }

        .team-member p {
            font-size: 16px;
            color: #666;
        }
        .panduan h2{
            text-align: center;
            height: 80px;

        }
        .panduan p{
            text-align: center;
            height: 200px;

        }
       

        .button-container {
  text-align: center;
  margin-top: -10px !important; /* Naikkan tombol lebih dekat ke teks */
}

.button {
  display: inline-block;
  background-color: #6a0dad; /* Warna ungu */
  color: white;
  padding: 5px 16px !important; /* Kurangi padding agar teks lebih naik */
  text-decoration: none;
  border-radius: 8px !important; /* Lebih smooth */
  font-size: 16px !important; /* Ukuran teks sedikit lebih besar */
  font-weight: bold;
  border: none;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
  box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.15);
  position: relative;
  top: -100px !important; /* Paksa tombol lebih naik */
}

.button:hover {
  background-color: #5a009d !important;
  transform: translateY(-3px) !important; /* Efek hover */
}


        /* Footer */
        footer {
            background-color: #1a1a1ac5;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        footer p {
            font-size: 14px;
        }

        footer a {
            color: #ff6600;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <section class="hero">
   
        <div class="hero-text">
            <h1>Selamat datang di APPASI</h1>
            <p>Kelola Data Absensi Sekolah Secara Aman Dan Efisien Dengan Aplikasi Absensi.</p>
        </div>
        <img src="images/siswa.png" alt="Ilustrasi Siswa" class="hero-image">
       
    </section>
    <nav class="navbar">
        <div class="container">
            <h1 class="logo">APPASI</h1>
            <ul class="nav-links">
                <li><a href="#features">Fitur</a></li>
                <li><a href="#about-us">Tim</a></li>
                <li><a href="#testimonials">Testimoni</a></li>
                <li><a href="#panduan">panduan</a></li>
            </ul>
        </div>
    </nav>
    

<section class="halo">
    <div class="halo-text">
        <h2>Inovasi yang Membantu Proses Absensi Anda</h2>
        <p>dapat menyimpan database absensi siswa secara aman dan evisien, komprehensif untuk seluruh siswa,serta mudah dalam perekapan data kehadiran selama tahun ajaran berjalan.</p>
        <a href="login.php" class="cta-button">Sign in</a>
    </div>
    <img src="images/absen.png" alt="absen">
</section>

<section id="features"  class="features">
    <h2>Fitur Utama </h2>
    <p>Kami juga memiliki beberapa fitur utama:</p>
    <div class="feature-items">
        <div class="feature-item">
            <h3>Rekab Otomatis</h3>
            <p>sekarang tidak perlu repot-repot merekap absensi, karena dengan fitur unggulan ini absen otomatis direkap.</p>
        </div>
        <div class="feature-item">
            <h3>Efisien & Cepat</h3>
            <p>Proses apsensi apel yang lebih optimal dengan teknologi kami.</p>
        </div>
        <div class="feature-item">
            <h3>Apsensi Online</h3>
            <p>Bisa diakses dimanapun menggunakan internet.</p>
        </div>
       <div class="feature-item">
            <h3>Data Absen Aman</h3>
            <p>Data absen hanya dapat diedit oleh Admin saja.</p>
        </div>
       
      
    </div>
</section>

<section id="testimonials"   class="testimonials">
    <h2>Apa Kata Pengguna Kami?</h2>
    <div class="testimonial-slider">
        <div class="testimonial">
            <p>" ini benar-benar membantu kami mengabsen lebih cepat dan efisien. Kami sangat puas!"</p>
            <h3>Dwi Ratna, S.Kom</h3>
        </div>
        <div class="testimonial">
            <p>"Sangat mudah digunakan dan memiliki fitur luar biasa. Ini sangat menguntungkan bagi Sekolah kami."</p>
            <h3> Ipnu Masyaid, S.Kom</h3>
        </div>
    </div>
</section>

<section id ="about-us"  class="about-us">
    <h2>Tim kami</h2>
    <p>Kami adalah tim yang berfokus pada inovasi dan kualitas. Kami berkomitmen penuh untuk mempermudah proses pengabsenan .</p>
    <div class="team">
        <div class="team-member">
            <img src="images/spiderman-removebg-preview.png" alt="Team Member">
            <h3>M.Fadhil Al Fakhri</h3>
            <p>Pembuat Dokumentasi.</p>
        </div>
        <div class="team-member">
            <img src="images/Duck.png" alt="Team Member">
            <h3>Maulidah Fitri</h3>
            <p>pembuat Laporan.</p>
        </div>
        <div class="team-member">
            <img src="images/hijab.png" alt="Team Member">
            <h3>Najma Faricha</h3>
            <p>Back End.</p>
        </div>
        <div class="team-member">
            <img src="images/Thomas.png" alt="Team Member">
            <h3>M.Fatih Fuady</h3>
            <p>Back End.</p>
        </div>
        <div class="team-member">
            <img src="images/ig.png" alt="Team Member">
            <h3>Raafi Hafidz Wardono</h3>
            <p>Front End.</p>
        </div>
        <div class="team-member">
            <img src="images/gumbal.png" alt="Team Member">
            <h3>Arif Nur Rahman</h3>
            <p>Front End.</p>
        </div>
    </div>
</section>
<section id="panduan"    class="panduan">
    <h2>Cara Menggunakan Aplikasi</h2>
    <p>kami juga menyediakan panduan penggunaan aplikasi untuk mempermudah pengguna dalam menggunakan aplikasi ini.</p>   
    <div class="button-container">
    <a target="blank" href="https://alfachree.github.io/Appasi/" class="button">Pelajari Lebih Lanjut</a>
  </div>
</div>
</section>





<footer>
    <p>&copy; 2025 Aplikasi pengabsenan. Semua hak dilindungi. </a></p>
</footer>

</body>
</html>