<?php
    require_once '../../helper/connection.php';
    require_once '../Layout/Admin/_top.php';
?>

    <!-- Page content here -->
    <div class="grid items-center ps-[20rem] pt-[7rem]">
        <div role="tablist" class="tabs tabs-bordered">
            <!-- phone -->
            <input type="radio" name="my_tabs_1" role="tab" class="tab" aria-label="Number" />
            <div role="tabpanel" class="tab-content p-5">

                <span class="flex items-center justify-between mb-5">
                    <!-- ADD PHONE -->
                    <div class="flex gap-2 items-center justify-center">
                        <h1 class="text-2xl font-bold">Number</h1>
                        <button class="btn btn-sm text-white mt-1"  onclick="document.getElementById('number_add_modal').showModal()"><i class="bx bx-plus-circle"></i></button>
                    </div>
                    <!-- END ADD PHONE -->

                    <!-- SEARCH -->
                    <label class="input input-bordered flex items-center gap-2 bg-white me-10 shadow-md text-black">
                        <input type="text" class="grow" placeholder="Search" />
                        <i class="bx bx-search"></i>
                    </label>
                    <!-- END SEARCH -->
                </span>

                <div class="overflow-x-scroll border rounded-box shadow-md me-10">
                    <table class="table">
                        <!-- head -->
                        <thead class="text-black text-lg">
                            <tr>
                                <th>No</th>
                                <th>Role</th>
                                <th>Number</th>
                                <th>Default</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-black">

                                <tr>
                                    <th>
                                        <span class="text-sm">
                                            1
                                        </span>
                                    </th>
                                    <td>
                                            <div>
                                                <div class="text-sm opacity-50 font-semibold">Humas</div>
                                            </div>
                                        </div>
                                    <td>0895800715580</td>
                                    <td class="flex gap-1 items-center">
                                        <label>
                                            <input type="checkbox" class="checkbox" />
                                        </label>
                                        <p class="mb-2">
                                            Yes
                                        </p>
                                    </td>
                                    <th>
                                        <span class="flex items-center justify-center gap-1">
                                            <button class="btn btn-sm bg-black text-white border-none text-lg" onclick="document.getElementById('update_modal').showModal()"><i class="bx bx-edit"></i></button>
                                            <a class="btn btn-sm bg-red-500 text-white border-none text-lg" href="./informationCRUD/delete.php?information_id=<?php echo $data['information_id']?>" ><i class="bx bx-trash"></i></a>
                                        </span> 
                                    </th>
                                </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>
            
            <!-- email -->
            <input type="radio" name="my_tabs_1" role="tab" class="tab" aria-label="Email" checked />
                <div role="tabpanel" class="tab-content p-5">

                    <span class="flex items-center justify-between mb-5">
                        <!-- ADD EMAIL -->
                        <div class="flex gap-2 items-center justify-center">
                            <h1 class="text-2xl font-bold">Email</h1>
                            <button class="btn btn-sm text-white mt-1" onclick="document.getElementById('email_add_modal').showModal()"><i class="bx bx-plus-circle"></i></button>
                        </div>
                        <!-- END ADD EMAIL -->

                        <!-- SEARCH -->
                        <label class="input input-bordered flex items-center gap-2 bg-white me-10 shadow-md text-black">
                            <input type="text" class="grow" placeholder="Search" />
                            <i class="bx bx-search"></i>
                        </label>
                        <!-- END SEARCH -->
                    </span>

                    <div class="overflow-x-scroll border rounded-box shadow-md me-10">
                        <table class="table">
                            <!-- head -->
                            <thead class="text-black text-lg">
                                <tr>
                                    <th>No</th>
                                    <th>Email</th>
                                    <th>Default</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-black">
        
                                    <tr>
                                        <th>
                                            <span class="text-sm">1</span>
                                        </th>
                                        <td></td>
                                        <td class="flex gap-1 items-center">
                                            <label>
                                                <input type="checkbox" class="checkbox" />
                                            </label>
                                            <p class="mb-2">
                                                Yes
                                            </p>
                                        </td>
                                        <th>
                                            <span class="flex items-center justify-center gap-1">
                                                <button class="btn btn-sm bg-black text-white border-none text-lg" onclick="document.getElementById('address_add_modal').showModal()"><i class="bx bx-edit"></i></button>
                                                <a class="btn btn-sm bg-red-500 text-white border-none text-lg" href="./informationCRUD/delete.php?information_id=<?php echo $data['information_id']?>" ><i class="bx bx-trash"></i></a>
                                            </span> 
                                        </th>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
                
                <!-- address -->
                <input type="radio" name="my_tabs_1" role="tab" class="tab" aria-label="Address" />
                <div role="tabpanel" class="tab-content p-5">

                    <span class="flex items-center justify-between mb-5">
                        <!-- ADD ADDRESS -->
                        <div class="flex gap-2 items-center justify-center">
                            <h1 class="text-2xl font-bold">Address</h1>
                            <button class="btn btn-sm text-white mt-1" onclick="document.getElementById('address_add_modal').showModal()"><i class="bx bx-plus-circle"></i></button>
                        </div>
                        <!-- END ADD ADDRESS -->

                        <!-- SEARCH -->
                        <label class="input input-bordered flex items-center gap-2 bg-white me-10 shadow-md text-black">
                            <input type="text" class="grow" placeholder="Search" />
                            <i class="bx bx-search"></i>
                        </label>
                        <!-- END SEARCH -->
                    </span>
                    
                    <div class="overflow-x-scroll border rounded-box shadow-md me-10">
                        <table class="table">
                            <!-- head -->
                            <thead class="text-black text-lg">
                                <tr>
                                    <th>No</th>
                                    <th>Address</th>
                                    <th>Default</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-black">
        
                                    <tr>
                                        <th>
                                            <span class="text-sm">1</span>
                                        </th>
                                        <td></td>
                                        <td class="flex gap-1 items-center">
                                            <label>
                                                <input type="checkbox" class="checkbox" />
                                            </label>
                                            <p class="mb-2">
                                                Yes
                                            </p>
                                        </td>
                                        <th>
                                            <span class="flex items-center justify-center gap-1">
                                                <button class="btn btn-sm bg-black text-white border-none text-lg" onclick="document.getElementById('update_modal').showModal()"><i class="bx bx-edit"></i></button>
                                                <a class="btn btn-sm bg-red-500 text-white border-none text-lg" href="./informationCRUD/delete.php?information_id=<?php echo $data['information_id']?>" ><i class="bx bx-trash"></i></a>
                                            </span> 
                                        </th>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                
                </div>
        </div>
    </div>

        <!-- MODAL NUMBER -->
        <dialog id="number_add_modal" class="modal">
            <form action="./informationCRUD/create.php" class="mb-10 border w-[40rem] shadow-md py-5 px-10 mt-4 rounded-box bg-gray-100 modal-box text-black" enctype="multipart/form-data" method="POST">
                    <h1 class="text-2xl font-bold text-black">Add Number</h1>
        
                    <span class="grid gap-2 mt-5">
                            <select class="select select-bordered w-full bg-white">
                                <option disabled selected>Pilih Role</option>
                                <option>Humas</option>
                                <option>Pengajaran</option>
                            </select>
                            <div class="flex flex-col">
                                <label for="number" class="text-lg font-semibold text-black">Number</label>
                                <input type="number" name="number" id="number" class="input input-bordered bg-white" placeholder="Enter number" required />
                            </div>
                        
                    </span>
                    <div class="flex justify-end mt-4">
                        <button class="btn text-white w-36" type="sumbit">Save</button>
                    </div>
            </form>

            <form method="dialog" class="modal-backdrop">
                    <button>close</button>
            </form>
        </dialog>
        <!-- END MODAL NUMBER -->

        <!-- MODAL EMAIL -->
        <dialog id="email_add_modal" class="modal">
            <form action="./informationCRUD/create.php" class="mb-10 border w-[40rem] shadow-md py-5 px-10 mt-4 rounded-box bg-gray-100 modal-box text-black" enctype="multipart/form-data" method="POST">
                    <h1 class="text-2xl font-bold text-black">Add Email</h1>
        
                    <span class="flex flex-col mt-5">
                                <label for="email" class="text-lg font-semibold text-black">Email</label>
                                <input type="email" name="email" id="email" class="input input-bordered bg-white" placeholder="Enter email" required />
                    </span>
                    <div class="flex justify-end mt-4">
                        <button class="btn text-white w-36" type="sumbit">Save</button>
                    </div>
            </form>

            <form method="dialog" class="modal-backdrop">
                    <button>close</button>
            </form>
        </dialog>
        <!-- END MODAL EMAIL -->
        
        <!-- MODAL EMAIL -->
        <dialog id="address_add_modal" class="modal">
            <form action="./informationCRUD/create.php" class="mb-10 border w-[40rem] shadow-md py-5 px-10 mt-4 rounded-box bg-gray-100 modal-box text-black" enctype="multipart/form-data" method="POST">
                    <h1 class="text-2xl font-bold text-black">Add Address</h1>
        
                    <span class="flex flex-col mt-5">
                                <label for="address" class="text-lg font-semibold text-black">Address</label>
                                <input type="text" name="address" id="address" class="input input-bordered bg-white" placeholder="Enter address" required />
                    </span>
                    <div class="flex justify-end mt-4">
                        <button class="btn text-white w-36" type="sumbit">Save</button>
                    </div>
            </form>

            <form method="dialog" class="modal-backdrop">
                    <button>close</button>
            </form>
        </dialog>
        <!-- END MODAL EMAIL -->


<?php
    include '../Layout/Admin/_bottom.php';
?>