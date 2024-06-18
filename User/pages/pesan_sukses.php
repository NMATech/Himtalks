<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Himtalks</title>

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
            <ul class="flex justify-end gap-[10px] pr-3">
                <li>
                    <h1 class="text-white font-[Righteous] text-3xl">HIMTALKS</h1>
                </li>
                <li><a href="home.php" class="text-white text-3xl hover:font-bold">Home</a></li>
                <li><a href="about.php" class="text-white text-3xl hover:font-bold">About</a></li>
            </ul>
        </div>
        <div class="flex items-center ml-[50px] mt-[6em]">
            <div>
                <img src="../assets/2.png" alt="">
            </div>
            <div class="w-[40%]">
                <h1 class="text-[#B6FFFA] text-5xl">Pesan Anonym</h1>
                <p class="text-white text-justify text-2xl mt-[5px]">pesan anda telah tersimpan.</p>
                <div class="w-full flex items-center mt-[20px]">
                    <a href="home.php" class="">
                        <div class="bg-[#B6FFFA] rounded-full px-8 py-2">
                            <h1 class="text-[#687EFF] text-xl hover:bg-[#dfdfdf]">Lanjut</h1>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>