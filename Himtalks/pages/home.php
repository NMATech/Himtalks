<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Himtalks | Home</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Righteous&display=swap"
        rel="stylesheet">
</head>

<body class="bg-[#687EFF] font-[Poppins]">
    <div class="flex flex-col items-center w-full h-[100vh] p-3">
        <div class="w-full mt-[30px]">
            <ul class="flex justify-end gap-[10px] pr-3">
                <li>
                    <h1 class="text-white font-[Righteous] text-3xl">HIMTALKS</h1>
                </li>
                <li class=""><a href="#" class="text-sky-300 text-3xl">Home</a></li>
                <li><a href="about.php" class="text-white text-3xl hover:font-bold">About</a></li>
            </ul>
        </div>
        <div
            class="flex flex-col md:flex-row justify-around items-center gap-[30px] w-full md:w-3/4 mt-[3em] md:mt-[5em] p-5">
            <div class="w-max">
                <div>
                    <img src="../assets/2.png" alt="" class="w-[490px] h-[300px] object-fit">
                </div>
                <h1 class="text-white text-center text-2xl">Pesan Anonym</h1>
                <div class="w-full flex justify-center items-center mt-[20px]">
                    <a href="pesan.php" class="">
                        <div class="bg-white rounded-full px-8 py-2">
                            <h1 class="text-[#687EFF] text-xl hover:bg-[#dfdfdf]">Masuk</h1>
                        </div>
                    </a>
                </div>
            </div>
            <div class="w-max">
                <div>
                    <img src="../assets/1.png" alt="" class="w-[300px] h-[300px] object-fit">
                </div>
                <h1 class="text-white text-center text-2xl">Songfess</h1>
                <div class="w-full flex justify-center items-center mt-[20px]">
                    <a href="songfess.php" class="" id="songfess_link">
                        <div class="bg-white rounded-full px-8 py-2">
                            <h1 class="text-[#687EFF] text-xl hover:bg-[#dfdfdf]">Masuk</h1>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function updateLinkBasedOnTime() {
            const link = document.getElementById('songfess_link'); // Select the link
            const sekarang = new Date();
            const hari = sekarang.getDay(); // 0 (Minggu) - 6 (Sabtu)
            const jam = sekarang.getHours(); // 0 - 23

            // Rentang waktu jam kerja (Jumat 09:00 sampai Sabtu 21:00)
            const mulaiJamKerja = new Date();
            mulaiJamKerja.setDate(sekarang.getDate() + (5 - hari + 7) % 7); // Set ke hari Jumat
            mulaiJamKerja.setHours(9, 0, 0, 0); // Jam 09:00

            const akhirJamKerja = new Date(mulaiJamKerja);
            akhirJamKerja.setDate(mulaiJamKerja.getDate() + 1); // Set ke hari Sabtu
            akhirJamKerja.setHours(21, 0, 0, 0); // Jam 21:00

            if (sekarang >= mulaiJamKerja && sekarang <= akhirJamKerja) {
                // Dalam rentang jam kerja
                link.href = "songfess.php"
            } else {
                // Di luar jam kerja
                link.href = 'songfess_tutup.php';
            }
        }

        // Check when the page loads
        updateLinkBasedOnTime();

        // Optionally, check periodically if needed
        setInterval(updateLinkBasedOnTime, 60000); // Check every minute
    </script>
</body>

</html>