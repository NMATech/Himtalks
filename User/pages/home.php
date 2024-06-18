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
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Righteous&display=swap"
        rel="stylesheet">
</head>

<body class="bg-[#687EFF] font-[Poppins]">
    <div class="flex flex-col w-full h-[100vh] p-3">
        <div class="mt-[30px]">
            <ul class="flex justify-end gap-[10px] pr-3">
                <li>
                    <h1 class="text-white font-[Righteous] text-3xl">HIMTALKS</h1>
                </li>
                <li><a href="#" class="text-sky-300 text-3xl">Home</a></li>
                <li><a href="about.php" class="text-white text-3xl hover:font-bold">About</a></li>
            </ul>
        </div>
        <div class="flex justify-around items-center gap-[30px] w-full mt-[5em]">
            <div class="w-max">
                <div>
                    <img src="../assets/2.png" alt="" class="w-[490px] h-[300px] object-fit">
                </div>
                <h1 class="text-white text-center text-xl">Pesan Anonym</h1>
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
                <h1 class="text-white text-center text-xl">Songfess</h1>
                <div class="w-full flex justify-center items-center mt-[20px]">
                    <a href="songfess.php" class="">
                        <div class="bg-white rounded-full px-8 py-2">
                            <h1 class="text-[#687EFF] text-xl hover:bg-[#dfdfdf]">Masuk</h1>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>