<?php

session_start();

if (isset($_SESSION['admin'])) {
    header('Location: ../index.php');
    exit;
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'adminHimtalksKolaborasi' && $password == 'HimtikaKolaborasi2024') {
        $_SESSION['admin'] = 'adminAktif';
        header('Location: ../index.php');
        exit;
    } else {
        header('Location: ../pages/login.php?error=1');
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Himtalks | Admin Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex justify-center items-center bg-gradient-to-br from-gray-400 to-[#dfdfdf] h-[100vh]">
    <div class="w-[80%] md:w-[50%] lg:[30%] xl:w-[30%] mx-auto bg-gray-300 backdrop-blur-xl p-3">
        <div class="bg-[#102C57] p-2">
            <h1 class="font-bold text-white text-center text-xl">Login to Admin</h1>
        </div>
        <div class="bg-white border border-black">
            <form action="login.php" class="pt-[30px]" method="post">
                <div class="flex justify-center items-center p-2">
                    <div class="border border-gray-400 p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>
                    </div>
                    <div class="">
                        <input type="text"
                            class="p-1 text-black border border-gray-400 focus:outline-none placeholder:text-gray-400"
                            name="username" id="username" placeholder="Username">
                    </div>
                </div>
                <div class="flex justify-center items-center p-2">
                    <div class="border border-gray-400 p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                        </svg>
                    </div>
                    <div class="">
                        <input type="password"
                            class="p-1 text-black border border-gray-400 focus:outline-none placeholder:text-gray-400"
                            name="password" id="password" placeholder="Password">
                        <div id="togglePassword" class="absolute ml-[10em] mt-[-30px] flex items-center cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 eye-icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="w-full" id="pesanKesalahan" style="display: none">
                    <h1 class="text-rose-500 font-bold text-center">Username atau Password salah</h1>
                </div>

                <div class="w-full flex justify-center items-center mb-[10px] mt-[30px]">
                    <button type="submit" class="bg-[#102C57] px-8 py-2 rounded-xl text-white shadow-xl hover:skew-y-3"
                        name='submit'>Login</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        var urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('error')) {
            var pesanKesalahan = document.getElementById('pesanKesalahan');
            pesanKesalahan.style.display = 'block';
        }

        var togglePassword = document.getElementById('togglePassword');
        var passwordInput = document.getElementById('password');
        var eyeIcon = document.querySelector('.eye-icon');

        togglePassword.addEventListener('click', function () {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178ZM12 15a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />';
            } else {
                passwordInput.type = 'password';
                eyeIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />';
            }
        });
    </script>
</body>

</html>