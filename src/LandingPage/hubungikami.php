<?php
require_once '../layout/_top.php';
?>

<div class="py-20 grid gap-10">
    <span class="w-full h-48 bg-black flex items-center justify-center" style="background-image: url(https://images.unsplash.com/20/cambridge.JPG?q=80&w=2047&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D); background-position: center;">
        <div class="bg-black w-full h-[100%] opacity-50 flex items-center justify-center">
            <h1 class="text-center text-4xl font-bold text-white">Hubungi Kami</h1>
        </div>
    </span>


        <span class="flex items-center justify-center gap-5">
            <div class="relative bg-gray-800 h-[15rem] w-[20rem] p-5 rounded-box grid" data-aos ="zoom-out">
                <div class="py-2 px-3 rounded-full bg-gray-900 absolute -top-1 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex items-center justify-center">
                    <i class="bx bx-map text-4xl"></i>
                </div>
                <h1 class="text-center font-bold py-2 text-xl">Alamat</h1>    
                <p><span class="font-semibold">Kampus 1</span> : <br/> Jl. Kusuma No. 75 Bumirejo Kebumen 54316</p>
                <p><span class="font-semibold">Kampus 2</span> : <br/> Jl. HM Sarbini No. 129 Kebumen</p>
            </div>

            <div class="relative bg-gray-800 h-[15rem] w-[20rem] p-5 rounded-box grid" data-aos ="zoom-out">
                <div class="py-2 px-3 rounded-full bg-gray-900 absolute -top-1 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex items-center justify-center">
                    <i class="bx bx-phone text-4xl"></i>
                </div>
                
                <h1 class="text-center font-bold py-2 text-xl">Nomer Telepon</h1>    

                <span class="text-center">
                <?php 
                    include "../../helper/connection.php";

                    $sql = "SELECT * FROM phones WHERE `isDefault` = 1 LIMIT 3";
                    
                    $query = mysqli_query($connection, $sql);
                    
                    if(mysqli_fetch_array($query)){

                        while($data = mysqli_fetch_array($query)){
                ?>
                    <p><span class="font-semibold"><?php echo $data["username"]?></span> : <?php echo $data["number"]?></p>
                <?php 
                        }
                    }else{
                ?>
                    <span class="text-center mt-20">
                        <p><span class="font-semibold">Tidak Ada DATA</p>
                    </span>

                <?php 
                    }
                ?>
                </span>
            </div>

            <div class="relative bg-gray-800 h-[15rem] w-[20rem] p-5 rounded-box grid" data-aos ="zoom-out">
                <div class="py-2 px-3 rounded-full bg-gray-900 absolute -top-1 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex items-center justify-center">
                    <i class="bx bx-envelope text-4xl"></i>
                </div>

                <h1 class="text-center font-bold py-2 text-xl">Email</h1>    
                <p><span class="font-semibold">Kampus 1</span> : <br/> Jl. Kusuma No. 75 Bumirejo Kebumen 54316</p>
                <p><span class="font-semibold">Kampus 2</span> : <br/> Jl. HM Sarbini No. 129 Kebumen</p>
            </div>
        </span>

        <!-- FORM MASUKAN -->
        <span class="mt-5">
            <h1 class="font-bold  text-3xl text-center">&mdash; Form Kontak &mdash; </h1>
            <span class="flex items-center justify-center">
                <form action="" class="w-3/4 py-10 items-center justify-center " data-aos ="zoom-out">
                    <div class="mx-auto w-1/2">
        
                        <div class="grid gap-5">
                            <span class="flex gap-2 w-full">
                                <span class="grow">
                                    <label for="content" class="text-lg font-semibold ">Nama</label>
                                    <label class="input input-bordered flex items-center gap-2 bg-white grow">
                                        <input required type="text" class="grow" placeholder="Nama" name="nama" id="nama" />
                                    </label>
                                </span>
            
                                <span class="grow">
                                    <label for="content" class="text-lg font-semibold ">Nomor</label>
                                    <label class="input input-bordered flex items-center gap-2 bg-white grow">
                                        <input required type="number" class="grow" placeholder="Nomor" name="nomor" id="nomor" />
                                    </label>
                                </span>
                            </span>
        
                            <span class="flex gap-2 w-full">
                                <span class="grow">
                                    <label for="content" class="text-lg font-semibold ">Email</label>
                                    <label class="input input-bordered flex items-center gap-2 bg-white grow">
                                        <input required type="email" class="grow" placeholder="Email" name="email" id="email" />
                                    </label>
                                </span>
        
                                <span class="grow">
                                    <label for="content" class="text-lg font-semibold ">Subject</label>
                                    <label class="input input-bordered flex items-center gap-2 bg-white grow">
                                        <input required type="text" class="grow" placeholder="Subject" name="subject" id="subject" />
                                    </label>
                                </span>
                            </span>
        
                            <div class="flex flex-col">
                                <label for="content" class="text-lg font-semibold ">Pesan</label>
                                <textarea name="message" id="content" class="input input-bordered bg-white h-40 py-1" placeholder="Tulis Pesan" required></textarea>
                            </div>
        
                            <div class=" flex items-center justify-end gap-2 w-full">
                                <button class="btn px-10 text-white bg-green-600 hover:bg-green-900" type="submit" name="submit">Kirim</button> 
                            </div>
                        </div>
                    </div>
                </form>
            </span>
        </span>
        <!-- END FORM MASUKAN -->
</div>


<?php
    require_once '../layout/_bottom.php';
?>