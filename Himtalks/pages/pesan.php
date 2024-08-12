<?php
include_once ('../connect/connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Himtalks | Pesan Anonym</title>

    <style>
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
                <img src="../assets/3.png" alt="" class="w-[130px]">
                <h1 class="text-white text-center text-xl">Pesan Anonym</h1>
            </div>
            <ul class="flex justify-end gap-[10px] pr-3">
                <li>
                    <h1 class="text-white font-[Righteous] text-3xl">HIMTALKS</h1>
                </li>
                <li><a href="home.php" class="text-white text-3xl hover:font-bold">Home</a></li>
                <li><a href="about.php" class="text-white text-3xl hover:font-bold">About</a></li>
            </ul>
        </div>
        <div class="flex items-center gap-[30px] w-full mt-[3em] md:mt-[5em]">
            <div class="w-full md:w-[50%] ml-[5px] md:ml-[50px] p-2">
                <div class="md:hidden w-max flex justify-center items-center gap-[10px] mt-[-40px]">
                    <img src="../assets/3.png" alt="" class="w-[130px]">
                    <h1 class="text-white text-center text-xl">Pesan Anonym</h1>
                </div>
                <form action="../function/pesan_process.php" method="post" id="messageForm">
                    <div class="flex flex-col md:flex-row gap-[5px] md:gap-[160px]">
                        <div class="flex flex-col">
                            <label for="from" class="text-white">Dari</label>
                            <input type="text" name="from" id="from" class="p-2 rounded-full">
                        </div>

                        <div class="flex flex-col">
                            <label for="to" class="text-white">Untuk</label>
                            <input type="text" name="to" id="to" class="p-2 rounded-full" required>
                        </div>
                    </div>

                    <div class="flex flex-col mt-[20px]">
                        <label for="kategori" class="text-white">Kategori Pesan :</label>
                        <select name="kategori" id="kategori" class="rounded-full p-1" required>
                            <option value="Kritik/Saran" class="rounded-full">Kritik atau Saran</option>
                            <option value="Pesan Biasa" class="rounded-full">Pesan Biasa</option>
                        </select>
                    </div>

                    <div class="flex flex-col mt-[20px]">
                        <label for="pesan" class="text-white">Pesan</label>
                        <textarea class="h-[200px] rounded-xl p-2" name="pesan" id="pesan" required></textarea>
                    </div>

                    <button type="button" onclick="showModal()"
                        class="bg-[#B6FFFA] text-[#687EFF] px-8 py-2 rounded-full mt-3" name="">Submit</button>

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
        </div>

    </div>


    <script>
        function showModal() {
            document.body.classList.add('modal-active');
        }

        function hideModal() {
            document.body.classList.remove('modal-active');
        }

        function submitForm() {
            document.getElementById('messageForm').submit();
        }
    </script>
</body>

</html>