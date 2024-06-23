<?php
require_once '../layout/_top.php';
?>
    <div class="hero min-h-screen" style="background-image: url(https://images.unsplash.com/20/cambridge.JPG?q=80&w=2047&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);" class="bg-opacity-90">
        <div class="hero-content flex-col lg:flex-row-reverse text-white">
            <img src="https://images.unsplash.com/photo-1527891751199-7225231a68dd?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="max-w-sm rounded-lg shadow-2xl" />
            <div class="bg-gray-800 px-10 py-5 rounded-box opacity-80" >
                <h1 class="text-5xl font-bold">Selamat Datang</h1>
                <p class="text-xl">Website Accer High School</p>
                <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                <button class="btn text-white font-bold">Lihat lainnya !</button>
            </div>
        </div>
    </div>

    <div class="w-full grid items-center justify-center gap-5 min-h-screen">
        <h1 class="text-white text-center font-bold text-3xl py-5 ">&mdash;  Berita dan Acara &mdash; </h1>
        <div class="flex items-center justify-center gap-5 flex-wrap overflow-hidden" data-aos="fade-up">

        <?php
            include '../../helper/connection.php';

            $sql = "SELECT * FROM informations";
            $query = mysqli_query($connection, $sql);

            $no = 1;

            if(mysqli_num_rows($query) == 0){
                echo "<span class='h-screen flex items-center justify-center'>
                <h1 class='text-center text-2xl font-bold'>Belum ada berita</h1>
                </span>";
            }

            while($data = mysqli_fetch_array($query)){
        ?>

            <div class="flex items-start gap-5 max-w-lg flex-col">
                    <span style="background-image: url(../Admin/uploads/<?php echo $data["image"] ?>); background-size: contain; background-repeat: no-repeat; background-position: center;" class="rounded-lg shadow-2xl w-[20rem] h-[10rem]"></span>
                    <h1 class="text-3xl font-bold"><?php echo $data["title"] ?></h1>
                    <p class="py-6 text-justify"><?php echo $data["description"] ?></p>
                    <a class="btn text-white font-bold" href="./berita.php">Selengkapnya !</a>    
            </div>
        <?php
            $no++;
            }
        ?>

        </div>
     
    </div>

<?php
    require_once '../layout/_bottom.php';
?>

