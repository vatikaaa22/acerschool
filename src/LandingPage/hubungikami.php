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
            <div class="relative bg-white border h-[15rem] w-[20rem] p-5 rounded-box grid text-black">
                <div class="py-2 px-3 rounded-full bg-gray-300 border absolute -top-1 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex items-center justify-center">
                    <i class="bx bx-map text-3xl"></i>
                </div>

                <h1 class="text-center font-bold py-2 text-xl">Alamat</h1>    
                <p><span class="font-semibold">Kampus 1</span> : <br/> Jl. Kusuma No. 75 Bumirejo Kebumen 54316</p>
                <p><span class="font-semibold">Kampus 2</span> : <br/> Jl. HM Sarbini No. 129 Kebumen</p>
            </div>

            <div class="relative bg-white border h-[15rem] w-[20rem] p-5 rounded-box grid text-black">
                <div class="py-2 px-3 rounded-full bg-gray-300 border absolute -top-1 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex items-center justify-center">
                    <i class="bx bx-phone text-3xl"></i>
                </div>

                <h1 class="text-center font-bold py-2 text-xl">Nomer Telepon</h1>    
                <span class="text-center">
                    <p><span class="font-semibold">Tata Usaha</span> : 08976123518172</p>
                    <p><span class="font-semibold">Humas</span> : 08976123518172</p>
                </span>
            </div>

            <div class="relative bg-white border h-[15rem] w-[20rem] p-5 rounded-box grid text-black">
                <div class="py-2 px-3 rounded-full bg-gray-300 border absolute -top-1 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex items-center justify-center">
                    <i class="bx bx-envelope text-3xl"></i>
                </div>

                <h1 class="text-center font-bold py-2 text-xl">Email</h1>    
                <p><span class="font-semibold">Kampus 1</span> : <br/> Jl. Kusuma No. 75 Bumirejo Kebumen 54316</p>
                <p><span class="font-semibold">Kampus 2</span> : <br/> Jl. HM Sarbini No. 129 Kebumen</p>
            </div>
        </span>

        <form action="" class="w-full py-10 items-center justify-center">
            <div class="mx-auto w-1/2">
                <h1>Form Kontak</h1>

                <div class="grid gap-5">
                    <span class="flex gap-2 w-full">
                        <label class="input input-bordered flex items-center gap-2 bg-white grow">
                            <input type="text" class="grow" placeholder="Nama" name="nama" id="nama" />
                        </label>
    
                        <label class="input input-bordered flex items-center gap-2 bg-white grow">
                            <input type="text" class="grow" placeholder="Nomor" name="nomor" id="nomor" />
                        </label>
                    </span>

                    <span class="flex gap-2 w-full">
                        <label class="input input-bordered flex items-center gap-2 bg-white grow">
                            <input type="email" class="grow" placeholder="Email" name="email" id="email" />
                        </label>

                        <label class="input input-bordered flex items-center gap-2 bg-white grow">
                            <input type="text" class="grow" placeholder="Subject" name="subject" id="subject" />
                        </label>
                    </span>

                    <label class="input input-bordered gap-2 bg-white">
                        <textarea class="grow bg-white" placeholder="Pesan" name="message" id="message"></textarea>
                    </label>

                    <div class="text-white flex items-center justify-end gap-2 w-full">
                        <button class="btn w-1/2 text-white bg-green-600" type="submit" name="submit">Kirim</button> 
                    </div>
                </div>
            </div>
        </form>
</div>


<?php
require_once '../layout/_bottom.php';
?>