<?php
session_start();

include_once ('../connect/connect.php');

if (!isset($_SESSION['admin'])) {
    header('Location: ./pages/login.php');
    exit;
}

$total = mysqli_query($db, 'SELECT COUNT(id) FROM songfess');
$songfess = mysqli_query($db, 'SELECT * FROM songfess');

$total = mysqli_fetch_assoc($total);

if (isset($_POST['logout'])) {
    // Start the session
    session_start();

    // Unset all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    // Redirect to login page or home page after destroying the session
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Himtalks | Admin</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex bg-gray-100">
    <div class="fixed bg-[#102C57] w-[20%] h-[100vh] p-2 pt-5 rounded-tr-xl rounded-br-xl">
        <h1 class="text-center font-bold text-2xl mb-5 text-white">Dashboard Himtalks</h1>

        <div class="mt-3">
            <ul class="flex flex-col gap-[20px]">
                <li>
                    <a href="../index.php">
                        <div
                            class="flex justify-start items-center pl-4 p-2 text-white rounded-tr-xl rounded-bl-xl hover:text-black hover:bg-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                            </svg>
                            <h1 class="font-bold ml-3 text-xl">Menfess</h1>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div
                            class="flex justify-start items-center pl-4 p-2 rounded-tr-xl rounded-bl-xl text-black bg-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m9 9 10.5-3m0 6.553v3.75a2.25 2.25 0 0 1-1.632 2.163l-1.32.377a1.803 1.803 0 1 1-.99-3.467l2.31-.66a2.25 2.25 0 0 0 1.632-2.163Zm0 0V2.25L9 5.25v10.303m0 0v3.75a2.25 2.25 0 0 1-1.632 2.163l-1.32.377a1.803 1.803 0 0 1-.99-3.467l2.31-.66A2.25 2.25 0 0 0 9 15.553Z" />
                            </svg>
                            <h1 class="font-bold ml-3 text-xl">Songfess</h1>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container w-[80%] ml-[17em] mx-auto p-2">
        <div class="w-full p-2 flex justify-between">
            <div class="bg-[#A3E4DB] flex flex-col w-[200px] rounded-tr-xl rounded-bl-xl p-2">
                <h1 class="text-xl text-center">Total Data Songfess</h1>
                <div class="flex justify-center items-center mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m9 9 10.5-3m0 6.553v3.75a2.25 2.25 0 0 1-1.632 2.163l-1.32.377a1.803 1.803 0 1 1-.99-3.467l2.31-.66a2.25 2.25 0 0 0 1.632-2.163Zm0 0V2.25L9 5.25v10.303m0 0v3.75a2.25 2.25 0 0 1-1.632 2.163l-1.32.377a1.803 1.803 0 0 1-.99-3.467l2.31-.66A2.25 2.25 0 0 0 9 15.553Z" />
                    </svg>
                    <h1 class="ml-3 text-2xl"><?php echo $total['COUNT(id)'] ?></h1>
                </div>
            </div>
            <div class="right-0 flex justify-center items-center">
                <form action="" method="post">
                    <button type="submit" class="bg-rose-500 px-8 py-2 rounded-xl text-white shadow-xl hover:skew-y-3"
                        name='logout'><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>

        <h1 class="font-bold text-3xl text-center mt-3 mb-3">Data Songfess</h1>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-[#A3E4DB]">
                    <tr>
                        <th
                            class="px-6 py-3 border-b-2 border-gray-200 text-left leading-4 text-gray-600 tracking-wider">
                            No</th>
                        <th
                            class="px-6 py-3 border-b-2 border-gray-200 text-left leading-4 text-gray-600 tracking-wider">
                            Pengirim</th>
                        <th
                            class="px-6 py-3 border-b-2 border-gray-200 text-left leading-4 text-gray-600 tracking-wider">
                            Instagram penerima</th>
                        <th
                            class="px-6 py-3 border-b-2 border-gray-200 text-left leading-4 text-gray-600 tracking-wider">
                            Judul Lagu</th>
                        <th
                            class="px-6 py-3 border-b-2 border-gray-200 text-left leading-4 text-gray-600 tracking-wider">
                            Menit</th>
                        <th
                            class="px-6 py-3 border-b-2 w-[5%] border-gray-200 text-left leading-4 text-gray-600 tracking-wider">
                            Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    <?php foreach ($songfess as $x): ?>
                        <tr>
                            <td class="px-6 py-4 border-b border-gray-200"><?php echo $x['id'] ?></td>
                            <td class="px-6 py-4 border-b border-gray-200"><?php echo $x['pengirim'] ?></td>
                            <td class="px-6 py-4 border-b border-gray-200"><?php echo $x['ig_penerima'] ?></td>
                            <td class="px-6 py-4 border-b border-gray-200"><?php echo $x['judul_lagu'] ?></td>
                            <td class="px-6 py-4 border-b border-gray-200"><?php echo $x['menit'] ?></td>
                            <td class="px-6 py-4 border-b border-gray-200"><a
                                    href="../function/songfess_delete.php?id=<?php echo $x['id'] ?>">
                                    <div
                                        class="bg-rose-500 flex justify-center items-center p-2 rounded-tr-xl rounded-bl-xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6 text-white">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                    </div>
                                </a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>