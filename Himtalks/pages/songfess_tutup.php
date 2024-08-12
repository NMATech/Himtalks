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

        #cardJamKerja,
        #cardLibur {
            margin: 0;
            /* Remove margin */
            padding: 0;
            /* Remove padding */
        }

        /* Check for any pseudo-element that might be taking space */
        #cardJamKerja::before,
        #cardJamKerja::after,
        #cardLibur::before,
        #cardLibur::after {
            content: none;
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
        <div class="flex flex-col md:flex-row items-center md:ml-[50px] p-2" id="cardLibur">
            <div>
                <img src="../assets/1.png" alt="">
            </div>
            <div class="w-full md:w-[40%]">
                <h1 class="text-white text-4xl">Songfess</h1>
                <p class="text-white text-justify text-xl mt-[5px]">Mohon maaf fitur Songfess hanya bisa diakses setiap
                    hari jumat jam 09.00 pagi sampai malam minggu jam 21.00. Songfess yang
                    dikirimkan lewat dari jam 21.00 akan di upload pada malam minggu selanjutnya.</p>
            </div>
        </div>
    </div>
</body>

</html>