<?php
require_once '../layout/_top.php';
?>
    <div class="hero min-h-screen" style="background-image: url(https://images.unsplash.com/20/cambridge.JPG?q=80&w=2047&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D); ">
        <div class="hero-content flex-col lg:flex-row-reverse text-white">
            <img src="https://img.daisyui.com/images/stock/photo-1635805737707-575885ab0820.jpg" class="max-w-sm rounded-lg shadow-2xl" />
            <div class="bg-gray-800 px-10 py-5 rounded-box opacity-80">
                <h1 class="text-5xl font-bold">Selamat Datang</h1>
                <p class="text-xl">Website Accer High School</p>
                <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                <button class="btn text-white font-bold">Lihat lainnya !</button>
            </div>
        </div>
    </div>

    <div class="w-full grid items-center justify-center gap-5 min-h-screen">
        <h1 class="text-white text-center font-bold text-3xl py-10">&mdash;  Berita dan Acara &mdash; </h1>
        <div class="flex items-center justify-center gap-5 flex-wrap overflow-hidden" data-aos="fade-up">

        <?php
            include '../../helper/connection.php';

            $sql = "SELECT * FROM informations";
            $query = mysqli_query($connection, $sql);

            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>

            <div class="flex items-center gap-5 max-w-lg">
                <img src="../Admin/uploads/<?php echo $data["image"] ?>" class="rounded-lg shadow-2xl" />
                <div>
                    <h1 class="text-3xl font-bold"><?php echo $data["title"] ?></h1>
                    <p class="py-6"><?php echo $datap["description"] ?></p>
                    <button class="btn text-white font-bold">Selengkapnya !</button>
                </div>
        <?php
            $no++;
            }
            echo "</div>";
            echo "</div>";

        ?>

        </div>

        <span class="flex items-center justify-center my-10">
            <div class="join">
                <button class="join-item btn btn-lg">1</button>
                <button class="join-item btn btn-lg btn-active">2</button>
                <button class="join-item btn btn-lg">3</button>
                <button class="join-item btn btn-lg">4</button>
            </div>
        </span>
    </div>

<?php
    require_once '../layout/_bottom.php';
?>