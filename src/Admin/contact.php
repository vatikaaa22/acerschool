<?php
    require_once     '../../helper/connection.php';
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
                        <button class="btn btn-sm text-white mt-1" onclick="document.getElementById('add_modal').showModal()"><i class="bx bx-plus-circle"></i></button>
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
                                <th>
                                    <label>
                                        <input type="checkbox" class="checkbox" />
                                    </label>
                                </th>
                                <th>No</th>
                                <th>Name</th>
                                <th>Number</th>
                                <th>Default</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-black">

                                <tr>
                                    <th>
                                        <label>
                                            <input type="checkbox" class="checkbox" />
                                        </label>
                                    </th>
                                    <th>
                                        <span class="text-sm">1</span>
                                    </th>
                                    <td>
                                            <div>
                                                <div class="text-sm opacity-50">Humas</div>
                                            </div>
                                        </div>
                                    <td>0895800715580</td>
                                    <td>Yes</td>
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
                            <button class="btn btn-sm text-white mt-1" onclick="document.getElementById('add_modal').showModal()"><i class="bx bx-plus-circle"></i></button>
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
                                    <th>
                                        <label>
                                            <input type="checkbox" class="checkbox" />
                                        </label>
                                    </th>
                                    <th>No</th>
                                    <th>Email</th>
                                    <th>Default</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-black">
        
                                    <tr>
                                        <th>
                                            <label>
                                                <input type="checkbox" class="checkbox" />
                                            </label>
                                        </th>
                                        <th>
                                            <span class="text-sm">1</span>
                                        </th>
                                        <td></td>
                                        <td>Yes</td>
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
                
                <!-- address -->
                <input type="radio" name="my_tabs_1" role="tab" class="tab" aria-label="Address" />
                <div role="tabpanel" class="tab-content p-5">

                    <span class="flex items-center justify-between mb-5">
                        <!-- ADD ADDRESS -->
                        <div class="flex gap-2 items-center justify-center">
                            <h1 class="text-2xl font-bold">Address</h1>
                            <button class="btn btn-sm text-white mt-1" onclick="document.getElementById('add_modal').showModal()"><i class="bx bx-plus-circle"></i></button>
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
                                    <th>
                                        <label>
                                            <input type="checkbox" class="checkbox" />
                                        </label>
                                    </th>
                                    <th>No</th>
                                    <th>Address</th>
                                    <th>Default</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-black">
        
                                    <tr>
                                        <th>
                                            <label>
                                                <input type="checkbox" class="checkbox" />
                                            </label>
                                        </th>
                                        <th>
                                            <span class="text-sm">1</span>
                                        </th>
                                        <td></td>
                                        <td>Yes</td>
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



<?php
    include '../Layout/Admin/_bottom.php';
?>