<?php
require_once '../layout/_top.php';
?>

<div class="text-sm breadcrumbs bg-black opacity-50 pt-20 pb-3 text-white ps-5">
    <ul>
        <li><a>Beranda</a></li> 
        <li><a>Tentang Sekolah</a></li> 
    </ul>
</div>

<div class="relative min-h-screen py-10 bg-cover bg-center" style="background-image: url(https://images.unsplash.com/20/cambridge.JPG?q=80&w=2047&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);">
    <!-- Overlay dengan opacity -->
    <div class="absolute inset-0 bg-black opacity-80"></div>
    
    <!-- Konten dengan opacity penuh -->
    <div class="relative z-10">
        <h1 class="text-center font-bold text-3xl pb-10">Sejarah Berdirinya Accer High School</h1>

        <div class="flex flex-col items-center justify-center pt-12">
        <img src="https://images.unsplash.com/20/cambridge.JPG?q=80&w=2047&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
            class="w-[700px] h-auto rounded-lg shadow-lg" alt="Accer High School" data-aos="zoom-out">
        <p class="pt-20 w-3/5 text-center">
            Berdiri sejak 13 mei 2024 pukul 14:30 wib sleman Yogyakarta, karena Sebagian besar negara memiliki system Pendidikan formal yang wajib, tapi kita beda karna sistem kita di buat dengan terstruktur oleh pimpinan yang awokawk dan sedikit ibadah atau jarang jarang.  
            Kata sekolah ini berasal dari Bahasa sendiri : ACCER memiliki arti ( Akademi Cerdas Cermat yang Efektif dan Rajin), dimana Ketika itu sekolah adalah kegiatan pada waktu luang bagi anak anak di tengah tengah kegiatan utama mereka, yaitu beribadah, mengaji, bermain, dan menghabiskan Waktu untuk menikmati masa masa remaja.
        </p>
        </div>
    </div>
</div>

<div class="py-10">
    <h1 class="text-center font-bold text-3xl pb-10">&mdash; Accer High School Event &mdash;</h1>

    <div class="flex justify-center items-center gap-5 px-10 flex-wrap">
        <div class="card w-96 shadow-xl bg-gray-800 opacity-80 text-white" data-aos="zoom-out">
            <div class="card-body ">
                <h2 class="text-3xl font-bold text-center mb-5">
                    Januari
                </h2>
                <span class="flex items-center justify-center flex-col min-h-[5rem]">

                <?php
                    include '../../helper/connection.php';
        
                    $sql = "SELECT * FROM events where event_date like '%Januari%'";
                    $query = mysqli_query($connection, $sql);
        
                    $no = 1;
        
                    if(mysqli_num_rows($query) == 0){
                        echo "<span class='min-h-[5rem] flex items-center justify-center'>
                        <h1 class='text-center text-lg font-semibold'>Tidak Ada Event</h1>
                        </span>";
                    }
        
                    while($data = mysqli_fetch_array($query)){
                ?>
                <h1 class="text-center"><?php echo $data["name"]?></h1>

                <?php
                    }
                ?>
                </span>
            </div>
        </div>
        
        <div class="card w-96 shadow-xl bg-gray-800 opacity-80 text-white" data-aos="zoom-out">
            <div class="card-body ">
                <h2 class="text-center text-3xl font-bold mb-5">
                    Febuari
                </h2>
                <span class="flex items-center justify-center flex-col min-h-[5rem]">
                <?php
                    include '../../helper/connection.php';
        
                    $sql = "SELECT * FROM events where event_date like '%Febuari%'";
                    $query = mysqli_query($connection, $sql);
        
                    $no = 1;
        
                    if(mysqli_num_rows($query) == 0){
                        echo "<span class='min-h-[5rem] flex items-center justify-center'>
                        <h1 class='text-center text-lg font-semibold'>Tidak Ada Event</h1>
                        </span>";
                    }
        
                    while($data = mysqli_fetch_array($query)){
                ?>
                    <h1 class="text-center"><?php echo $data["name"]?></h1>

                <?php
                    }
                ?>
                </span>
            </div>
        </div>
        
        <div class="card w-96 shadow-xl bg-gray-800 opacity-80 text-white" data-aos="zoom-out">
            <div class="card-body ">
                <h2 class="text-center text-3xl font-bold mb-5">
                    Maret
                </h2>
                <span class="flex items-center justify-center flex-col min-h-[5rem]">
                <?php
                    include '../../helper/connection.php';
        
                    $sql = "SELECT * FROM events where event_date like '%Maret%'";
                    $query = mysqli_query($connection, $sql);
        
                    $no = 1;
        
                    if(mysqli_num_rows($query) == 0){
                        echo "<span class='min-h-[5rem] flex items-center justify-center'>
                        <h1 class='text-center text-lg font-semibold'>Tidak Ada Event</h1>
                        </span>";
                    }
        
                    while($data = mysqli_fetch_array($query)){
                ?>
                    <h1 class="text-center"><?php echo $data["name"]?></h1>

                <?php
                    }
                ?>
                </span>
            </div>
        </div>
        
        <div class="card w-96 shadow-xl bg-gray-800 opacity-80 text-white" data-aos="zoom-out">
            <div class="card-body ">
                <h2 class="text-center text-3xl font-bold mb-5">
                    April
                </h2>
                <span class="flex items-center justify-center flex-col min-h-[5rem]">
                <?php
                    include '../../helper/connection.php';
        
                    $sql = "SELECT * FROM events where event_date like '%April%'";
                    $query = mysqli_query($connection, $sql);
        
                    $no = 1;
        
                    if(mysqli_num_rows($query) == 0){
                        echo "<span class='min-h-[5rem] flex items-center justify-center'>
                        <h1 class='text-center text-lg font-semibold'>Tidak Ada Event</h1>
                        </span>";
                    }
        
                    while($data = mysqli_fetch_array($query)){
                ?>
                    <h1 class="text-center"><?php echo $data["name"]?></h1>

                <?php
                    }
                ?>
                </span>
            </div>
        </div>
        
        <div class="card w-96 shadow-xl bg-gray-800 opacity-80 text-white" data-aos="zoom-out">
            <div class="card-body ">
                <h2 class="text-center text-3xl font-bold mb-5">
                    Mei
                </h2>
                <span class="flex items-center justify-center flex-col min-h-[5rem]">
                <?php
                    include '../../helper/connection.php';
        
                    $sql = "SELECT * FROM events where event_date like '%Mei%'";
                    $query = mysqli_query($connection, $sql);
        
                    $no = 1;
        
                    if(mysqli_num_rows($query) == 0){
                        echo "<span class='min-h-[5rem] flex items-center justify-center'>
                        <h1 class='text-center text-lg font-semibold'>Tidak Ada Event</h1>
                        </span>";
                    }
        
                    while($data = mysqli_fetch_array($query)){
                ?>
                    <h1 class="text-center"><?php echo $data["name"]?></h1>

                <?php
                    }
                ?>
                </span>
            </div>
        </div>
        
        <div class="card w-96 shadow-xl bg-gray-800 opacity-80 text-white" data-aos="zoom-out">
            <div class="card-body ">
                <h2 class="text-center text-3xl font-bold mb-5">
                    Juni
                </h2>
                <span class="flex items-center justify-center flex-col min-h-[5rem]">
                <?php
                    include '../../helper/connection.php';
        
                    $sql = "SELECT * FROM events where event_date like '%Juni%'";
                    $query = mysqli_query($connection, $sql);
        
                    $no = 1;
        
                    if(mysqli_num_rows($query) == 0){
                        echo "<span class='min-h-[5rem] flex items-center justify-center'>
                        <h1 class='text-center text-lg font-semibold'>Tidak Ada Event</h1>
                        </span>";
                    }
        
                    while($data = mysqli_fetch_array($query)){
                ?>
                    <h1 class="text-center"><?php echo $data["name"]?></h1>

                <?php
                    }
                ?>
                </span>
            </div>
        </div>
        
        <div class="card w-96 shadow-xl bg-gray-800 opacity-80 text-white" data-aos="zoom-out">
            <div class="card-body ">
                <h2 class="text-center text-3xl font-bold mb-5">
                    Juli
                </h2>
                <span class="flex items-center justify-center flex-col min-h-[5rem]">
                <?php
                    include '../../helper/connection.php';
        
                    $sql = "SELECT * FROM events where event_date like '%Juli%'";
                    $query = mysqli_query($connection, $sql);
        
                    $no = 1;
        
                    if(mysqli_num_rows($query) == 0){
                        echo "<span class='min-h-[5rem] flex items-center justify-center'>
                        <h1 class='text-center text-lg font-semibold'>Tidak Ada Event</h1>
                        </span>";
                    }
        
                    while($data = mysqli_fetch_array($query)){
                ?>
                    <h1 class="text-center"><?php echo $data["name"]?></h1>

                <?php
                    }
                ?>
                </span>
            </div>
        </div>
        
        <div class="card w-96 shadow-xl bg-gray-800 opacity-80 text-white" data-aos="zoom-out">
            <div class="card-body ">
                <h2 class="text-center text-3xl font-bold mb-5">
                    Agustus
                </h2>
                <span class="flex items-center justify-center flex-col min-h-[5rem]">
                <?php
                    include '../../helper/connection.php';
        
                    $sql = "SELECT * FROM events where event_date like '%Juni%'";
                    $query = mysqli_query($connection, $sql);
        
                    $no = 1;
        
                    if(mysqli_num_rows($query) == 0){
                        echo "<span class='min-h-[5rem] flex items-center justify-center'>
                        <h1 class='text-center text-lg font-semibold'>Tidak Ada Event</h1>
                        </span>";
                    }
        
                    while($data = mysqli_fetch_array($query)){
                ?>
                    <h1 class="text-center"><?php echo $data["name"]?></h1>

                <?php
                    }
                ?>
                </span>
            </div>
        </div>
        
        <div class="card w-96 shadow-xl bg-gray-800 opacity-80 text-white" data-aos="zoom-out">
            <div class="card-body ">
                <h2 class="text-center text-3xl font-bold mb-5">
                    September
                </h2>
                <span class="flex items-center justify-center flex-col min-h-[5rem]">
                <?php
                    include '../../helper/connection.php';
        
                    $sql = "SELECT * FROM events where event_date like '%September%'";
                    $query = mysqli_query($connection, $sql);
        
                    $no = 1;
        
                    if(mysqli_num_rows($query) == 0){
                        echo "<span class='min-h-[5rem] flex items-center justify-center'>
                        <h1 class='text-center text-lg font-semibold'>Tidak Ada Event</h1>
                        </span>";
                    }
        
                    while($data = mysqli_fetch_array($query)){
                ?>
                    <h1 class="text-center"><?php echo $data["name"]?></h1>

                <?php
                    }
                ?>
                </span>
            </div>
        </div>
        
        <div class="card w-96 shadow-xl bg-gray-800 opacity-80 text-white" data-aos="zoom-out">
            <div class="card-body ">
                <h2 class="text-center text-3xl font-bold mb-5">
                    Oktober
                </h2>
                <span class="flex items-center justify-center flex-col min-h-[5rem]">
                <?php
                    include '../../helper/connection.php';
        
                    $sql = "SELECT * FROM events where event_date like '%Oktober%'";
                    $query = mysqli_query($connection, $sql);
        
                    $no = 1;
        
                    if(mysqli_num_rows($query) == 0){
                        echo "<span class='min-h-[5rem] flex items-center justify-center'>
                        <h1 class='text-center text-lg font-semibold'>Tidak Ada Event</h1>
                        </span>";
                    }
        
                    while($data = mysqli_fetch_array($query)){
                ?>
                    <h1 class="text-center"><?php echo $data["name"]?></h1>

                <?php
                    }
                ?>
                </span>
            </div>
        </div>
        
        <div class="card w-96 shadow-xl bg-gray-800 opacity-80 text-white" data-aos="zoom-out">
            <div class="card-body ">
                <h2 class="text-center text-3xl font-bold mb-5">
                    November
                </h2>
                <span class="flex items-center justify-center flex-col min-h-[5rem]">
                <?php
                    include '../../helper/connection.php';
        
                    $sql = "SELECT * FROM events where event_date like '%November%'";
                    $query = mysqli_query($connection, $sql);
        
                    $no = 1;
        
                    if(mysqli_num_rows($query) == 0){
                        echo "<span class='min-h-[5rem] flex items-center justify-center'>
                        <h1 class='text-center text-lg font-semibold'>Tidak Ada Event</h1>
                        </span>";
                    }
        
                    while($data = mysqli_fetch_array($query)){
                ?>
                    <h1 class="text-center"><?php echo $data["name"]?></h1>

                <?php
                    }
                ?>
                </span>
            </div>
        </div>
        
        <div class="card w-96 shadow-xl bg-gray-800 opacity-80 text-white" data-aos="zoom-out">
            <div class="card-body ">
                <h2 class="text-center text-3xl font-bold mb-5">
                    Desember
                </h2>
                <span class="flex items-center justify-center flex-col min-h-[5rem]">
                <?php
                    include '../../helper/connection.php';
        
                    $sql = "SELECT * FROM events where event_date like '%Desember%'";
                    $query = mysqli_query($connection, $sql);
        
                    $no = 1;
        
                    if(mysqli_num_rows($query) == 0){
                        echo "<span class='min-h-[5rem] flex items-center justify-center'>
                        <h1 class='text-center text-lg font-semibold'>Tidak Ada Event</h1>
                        </span>";
                    }
        
                    while($data = mysqli_fetch_array($query)){
                ?>
                    <h1 class="text-center"><?php echo $data["name"]?></h1>

                <?php
                    }
                ?>
                </span>
            </div>
        </div>
        
    </div>
</div>

<?php
require_once '../layout/_bottom.php';
?>