<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Song Request Form</title>
    <style>
        .error-message {
            display: none;
            color: red;
            margin-top: 10px;
        }

        .disabled {
            background-color: gray;
            cursor: not-allowed;
        }

        .modal-active .modal {
            display: flex;
        }

        .modal-active .overlay {
            display: block;
        }
    </style>

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
    <div class="flex flex-col w-full h-[100vh] p-3">
        <div class="mt-[30px]">
            <div class="hidden md:flex absolute w-max justify-center items-center gap-[10px] mt-[-40px]">
                <img src="../assets/1.png" alt="" class="w-[130px]">
                <h1 class="text-white text-center text-xl">Songfess</h1>
            </div>
            <ul class="flex justify-end gap-[10px] pr-3">
                <li>
                    <h1 class="text-white font-[Righteous] text-3xl">HIMTALKS</h1>
                </li>
                <li><a href="home.php" class="text-white text-3xl hover:font-bold">Home</a></li>
                <li><a href="about.php" class="text-white text-3xl hover:font-bold">About</a></li>
            </ul>
        </div>
        <div class="flex items-center gap-[30px] w-full mt-[5em]" id="cardJamKerja">
            <div class="w-full md:w-[30%] ml-[5px] md:ml-[50px] p-2">
                <div class="w-max flex justify-center items-center gap-[10px] mt-[-80px]">
                    <img src="../assets/1.png" alt="" class="w-[130px]">
                    <h1 class="text-white text-center text-xl">Songfess</h1>
                </div>
                <form id="songRequestForm" action="../function/songfess_process.php" method="post"
                    class="flex flex-col gap-[20px]">
                    <div class="flex flex-col">
                        <label for="pengirim" class="text-white">Dari</label>
                        <input type="text" name="pengirim" id="pengirim" class="p-2 rounded-full">
                    </div>

                    <div class="flex flex-col">
                        <label for="ig_penerima" class="text-white">Untuk (Instagram Penerima)</label>
                        <input type="text" name="ig_penerima" id="ig_penerima" class="p-2 rounded-full"
                            placeholder="@ . . . .">
                    </div>

                    <div class="flex flex-col">
                        <label for="judul_lagu" class="text-white">Judul Lagu</label>
                        <input type="text" name="judul_lagu" id="judul_lagu" placeholder="penyanyi - judul lagu"
                            class="p-2 rounded-full">
                    </div>

                    <div class="flex flex-col">
                        <label for="menit" class="text-white">Menit</label>
                        <input type="text" name="menit" id="menit" class="p-2 rounded-full"
                            placeholder="Contoh: 02.24 - 02.49">
                        <div id="error-message" class="error-message">Format menit salah! Gunakan format 00.00 - 00.00.
                        </div>
                    </div>

                    <button type="button" onclick="showModal()" id="submit-button"
                        class="bg-[#B6FFFA] text-[#687EFF] px-8 py-2 rounded-full mt-3">Submit</button>

                    <!-- Overlay -->
                    <div class="overlay fixed inset-0 bg-black bg-opacity-50 hidden" style="display:none"></div>

                    <!-- Modal -->
                    <div class="modal fixed inset-0 hidden items-center justify-center">
                        <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                            <p class="mb-4">Kamu yakin ingin mengirim pesan tersebut?</p>
                            <div class="flex justify-center gap-4">
                                <button onclick="hideModal()"
                                    class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-400">Kembali</button>
                                <button onclick="submitForm()"
                                    class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Lanjut</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="hidden md:flex w-[60%] justify-center items-center ml-[30px]">
                <img src="../assets/songfess.png" alt="" class="w-[500px]">
            </div>
        </div>
    </div>

    <script>
        const form = document.getElementById('songRequestForm');
        const menitInput = document.getElementById('menit');
        const errorMessage = document.getElementById('error-message');
        const submitButton = document.getElementById('submit-button');
        const cardJamKerja = document.getElementById('cardJamKerja')

        function showModal() {
            document.body.classList.add('modal-active');
        }

        function hideModal() {
            document.body.classList.remove('modal-active');
        }

        function submitForm() {
            document.getElementById('messageForm').submit();
        }

        function validateTimeFormat(time) {
            const timePattern = /^\d{2}\.\d{2} - \d{2}\.\d{2}$/;
            return timePattern.test(time);
        }

        form.addEventListener('submit', function (event) {
            const menitValue = menitInput.value;

            if (!validateTimeFormat(menitValue)) {
                errorMessage.style.display = 'block';
                event.preventDefault(); // Prevent form from submitting
            } else {
                errorMessage.style.display = 'none';
            }
        });

        menitInput.addEventListener('input', function () {
            if (validateTimeFormat(menitInput.value)) {
                errorMessage.style.display = 'none';
                submitButton.disabled = false;
                submitButton.classList.remove('disabled');
            } else {
                errorMessage.style.display = 'block';
                submitButton.disabled = true;
                submitButton.classList.add('disabled');
            }
        });

        function checkJamKerja() {
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
                cardJamKerja.style.display = 'flex'
            } else {
                // Di luar jam kerja
                cardJamKerja.style.display = 'none'
            }
        }

        // checkJamKerja();

        // setInterval(() => {
        //     checkJamKerja
        // }, 6000);
    </script>
</body>

</html>