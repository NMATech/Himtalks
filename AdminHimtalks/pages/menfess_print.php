<?php
session_start();

include_once('../connect/connect.php');

if (!isset($_SESSION['admin'])) {
    header('Location: ./pages/login.php');
    exit;
}

date_default_timezone_set('Asia/Jakarta');
$date = date('m/d/Y h:i:s a', time());
$pesanBiasa = mysqli_query($db, "SELECT * FROM pesan WHERE kategori='Pesan Biasa'");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Menfess Himtalks per tanggal <?php echo $date ?></title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.dataTables.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body class="flex bg-gray-100">
    <div class="container w-[80%] mx-auto p-2">
        <div class="container w-[80%] mx-auto p-2">
            <!-- Data pesan anonym -->
            <h1 class="font-bold text-xl mt-3 mb-3">Data Pesan Anonym</h1>

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200" id="table_menfess">
                    <thead class="bg-[#A3E4DB]">
                        <tr>
                            <th
                                class="px-6 py-3 border-b-2 border-gray-200 text-left leading-4 text-gray-600 tracking-wider">
                                No</th>
                            <th
                                class="px-6 py-3 border-b-2 border-gray-200 text-left leading-4 text-gray-600 tracking-wider">
                                Waktu diKirim</th>
                            <th
                                class="px-6 py-3 border-b-2 border-gray-200 text-left leading-4 text-gray-600 tracking-wider">
                                From</th>
                            <th
                                class="px-6 py-3 border-b-2 border-gray-200 text-left leading-4 text-gray-600 tracking-wider">
                                To</th>
                            <th
                                class="px-6 py-3 border-b-2 border-gray-200 text-left leading-4 text-gray-600 tracking-wider">
                                Pesan</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <?php foreach ($pesanBiasa as $x): ?>
                            <tr>
                                <td class="px-6 py-4 border-b border-gray-200"><?php echo $x['id'] ?></td>
                                <td class="px-6 py-4 border-b border-gray-200">
                                    <?php
                                    // Buat objek DateTime dari created_at
                                    $date = new DateTime($x['created_at']);

                                    // Format tanggal dengan IntlDateFormatter
                                    $formatter = new IntlDateFormatter('id_ID', IntlDateFormatter::FULL, IntlDateFormatter::SHORT);
                                    $formatter->setPattern('EEEE, dd MMMM yyyy HH:mm');

                                    echo $formatter->format($date);
                                    ?>
                                </td>
                                <td class="px-6 py-4 border-b border-gray-200"><?php echo $x['dari'] ?></td>
                                <td class="px-6 py-4 border-b border-gray-200"><?php echo $x['untuk'] ?></td>
                                <td class="w-[50%] px-6 py-4 border-b border-gray-200"><?php echo $x['pesan'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <script>
            $(document).ready(function () {
                $('#table_menfess').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'csv', 'excel', 'pdf'
                    ]
                });
            });
        </script>

        <script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
</body>

</html>