<head>
    <link rel="stylesheet" href="style-masukan.css">
    <link rel="stylesheet" href="style-btn.css">
</head>

<body>
    <button class="back-button" onclick="goBack()">Kembali</button> 
        <script>
        // Fungsi untuk kembali ke halaman sebelumnya
            function goBack() {
            window.history.back();
        }
        </script>
    <div class="content">
    <h2>Beri kami Masukan Dong...</h2>
    <form action="" method="post">
        <div class="popup" id="popup">
            
            <label for="feedback">Tulis Disini :</label>
            <textarea id="feedback" placeholder="Beri masukan atau saran Anda di sini..."></textarea>
            <div class="submit">
                <button  onclick="submitFeedback()">✔ Kirim</button>
                <a href=""></a>
            </div>
        </div>
        </form>
    </div>
    <div class="form-controls">
        <a href="datarekap.html" class="back-btn">Kembali</a>
        </div>
    

    
    <script>
        function closePopup() {
            document.getElementById('popup').style.display = 'none';
        }

        function submitFeedback() {
            const feedback = document.getElementById('feedback').value;
            if (feedback) {
                alert("Terima kasih atas masukan Anda!");
                document.getElementById('feedback').value = ''; // Reset textarea
            } else {
                alert("Masukkan feedback sebelum mengirim.");
            }
        }
    </script>
    </script>
    </body>