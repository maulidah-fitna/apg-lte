<head>
    <link rel="stylesheet" href="style-tambah-user.css">
</head>

<div class="dashboard">
    <!-- Notifikasi muncul di sini (di depan form) -->
    <div id="notification" class="notification"></div>


    <div class="header">Tambah User OSIS</div>
    <div class="container">
      <h2>Form Tambah User</h2>
      <form action="?hal=user-insert" id="userForm" method="post">
        <div class="form-group">
          <label for="nama">Nama:</label>
          <input type="text" id="nama" name="nama" placeholder="Masukkan nama" required>
        </div>
        <div class="form-group">
          <label for="kelas">Kelas:</label>
          <input type="text" id="kelas" name="kelas" placeholder="Masukkan kelas" required>
        </div>
        <div class="form-group">
          <label for="osis_divisi">Divisi OSIS:</label>
          <input type="text" id="osis_divisi" name="osis_divisi" placeholder="Masukkan Divisi OSIS" required>
        </div>
        <div class="form-group">
          <label for="username">Username Baru:</label>
          <input type="text" id="username" name="username" placeholder="Masukkan Username Baru" required>
        </div>
        <div class="form-group">
          <label for="password">Password Baru:</label>
          <input type="text" id="password" name="password" placeholder="Masukkan Password Baru" required>
        </div>
        <div class="btn-container">
          <button class="btn" onclick="goBack()">Batal</button>
          <input type="submit" class="btn"></button>
        </div>
      </form>
    </div>
  </div>

  <script>
    function goBack() {
      window.history.back();
    };

    function tambahUser() {
        // Ambil nilai dari setiap input field
        const nama = document.getElementById("nama").value.trim();
        const kelas = document.getElementById("kelas").value.trim();
        const osisDivisi = document.getElementById("osis_divisi").value.trim();
        const username = document.getElementById("username").value.trim();
        const password = document.getElementById("password").value.trim();
  
        // Pastikan semua field telah diisi
        if (nama && kelas && osisDivisi && username && password) {
          // Buat konten notifikasi dengan pesan dan data
          const notificationContent = `
            <p>User berhasil ditambahkan!</p>
            <p><strong>Nama:</strong> ${nama}</p>
            <p><strong>Kelas:</strong> ${kelas}</p>
            <p><strong>Osis Divisi:</strong> ${osisDivisi}</p>
            <p><strong>Osis Divisi:</strong> ${username}</p>
            <p><strong>Osis Divisi:</strong> ${passwrod}</p>
          `;
          // Tampilkan notifikasi di depan form
          const notif = document.getElementById("notification");
          notif.innerHTML = notificationContent;
          notif.style.display = "block";
  
          // Sembunyikan notifikasi setelah 3 detik
          setTimeout(function() {
            notif.style.display = "none";
          }, 3000);
  
          // Reset form setelah berhasil menyimpan
          document.getElementById("userForm").reset();
        } else {
          alert("Harap isi semua field!");
        }else{
        echo "Tidak Dapat Menyimpan Data!<br>";
        echo mysqli_error();
      }  
    }
    
  </script>