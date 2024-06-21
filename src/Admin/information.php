<?php
    include '../Layout/Admin/_top.php';
?>

<!-- Page content here -->
<div class="grid items-center ps-[20rem] pt-[7rem]">
    <span class="flex items-center justify-between mb-5">
        <!-- ADD INFORMATION -->
        <div class="flex gap-2 items-center justify-center">
            <h1 class="text-2xl font-bold">Information</h1>
            <button class="btn btn-sm text-white mt-1" onclick="document.getElementById('add_modal').showModal()"><i class="bx bx-plus-circle"></i></button>
        </div>
        <!-- END ADD INFORMATION -->

        <!-- SEARCH -->
        <label class="input input-bordered flex items-center gap-2 bg-white me-16 shadow-md text-black">
            <input type="text" class="grow" placeholder="Search" />
            <i class="bx bx-search"></i>
        </label>
        <!-- END SEARCH -->
    </span>
    <div class="overflow-x-scroll w-[95rem] border rounded-box shadow-md ">
        <table class="table">
            <!-- head -->
            <thead class="text-black text-lg">
                <tr>
                    <th>
                        <label>
                            <input type="checkbox" class="checkbox" />
                        </label>
                    </th>
                    <th>Information Title</th>
                    <th>Content</th>
                    <th class="w-40">Image</th>
                    <th class="text-center">Date</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody class="text-black">

            <?php
                include '../../helper/connection.php';

                $sql = "SELECT * FROM informations";
                $query = mysqli_query($connection, $sql);

                $no = 1;

                while($data = mysqli_fetch_array($query)){
            ?>
                    <!-- row 1 -->
                    <tr>
                        <th>
                            <label>
                                <input type="checkbox" class="checkbox" />
                            </label>
                        </th>
                        <td>
                                <div>
                                    <div class="font-bold"><?php echo $data['title'] ?></div>
                                    <div class="text-sm opacity-50">United States</div>
                                </div>
                            </div>
                        <td class="relative">
                            <p class="text-sm">
                                <?php echo $data["description"]?>
                            </p>
                        </td>
                        <td><img src="./uploads/<?php echo $data["image"] ?>"></td>
                        <td class="text-center"><?php echo $data["information_date"] ?></td>
                        <th>
                            <span class="flex items-center justify-center gap-1">
                                <button class="btn btn-sm bg-black text-white border-none text-lg" onclick="document.getElementById('update_modal').showModal()"><i class="bx bx-edit"></i></button>
                                <button class="btn btn-sm bg-red-500 text-white border-none text-lg"><i class="bx bx-trash"></i></button>
                            </span> 
                        </th>
                    </tr>
            <?php
                $no++;
                }

                echo "</tbody>";
                echo "</table>";
            ?>
    </div>

    <!-- MODAL ADD -->
    <dialog id="add_modal" class="modal">
            <form action="./contactCRUD/create.php" class="mb-10 border w-[40rem] shadow-md py-5 px-10 mt-4 rounded-box bg-gray-100 modal-box text-black" enctype="multipart/form-data" method="POST">
                    <h1 class="text-2xl font-bold text-black">Add information</h1>
        
                    <span class="grid gap-2 mt-5">
                            <input type="file" name="image" class="file-input file-input-bordered file-input-sm w-full border bg-white"/>
                            <div class="flex flex-col">
                                <label for="title" class="text-lg font-semibold text-black">Information Title</label>
                                <input type="text" name="title" id="title" class="input input-bordered bg-white" placeholder="Enter Information Title" />
                            </div>
                            <div class="flex flex-col">
                                <label for="content" class="text-lg font-semibold text-black">Content</label>
                                <textarea name="description" id="content" class="input input-bordered bg-white h-40 py-1" placeholder="Enter Content"></textarea>
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
    <!-- END MODAL ADD -->

    <!-- MODAL UPDATE -->
    <dialog id="update_modal" class="modal">
            <form action="" class="mb-10 border w-[40rem] shadow-md py-5 px-10 mt-4 rounded-box bg-gray-100 modal-box text-black" enctype="multipart/form-data">
                    <h1 class="text-2xl font-bold text-black">Update information</h1>
        
                    <span class="grid gap-2 mt-5">
                        <input type="file" class="file-input file-input-bordered file-input-sm w-full border bg-white" />
                            <div class="flex flex-col">
                                <label for="title" class="text-lg font-semibold text-black">Information Title</label>
                                <input type="text" name="title" id="title" class="input input-bordered bg-white" placeholder="Enter Information Title" />
                            </div>
                            <div class="flex flex-col">
                                <label for="content" class="text-lg font-semibold text-black">Content</label>
                                <textarea name="content" id="content" class="input input-bordered bg-white h-40 py-1" placeholder="Enter Content"></textarea>
                            </div>
                    </span>
                    <div class="flex justify-end mt-4">
                        <button class="btn text-white w-36">Save</button>
                    </div>
            </form>

            <form method="dialog" class="modal-backdrop">
                    <button>close</button>
            </form>
    </dialog>
    <!-- END MODAL UPDATE -->

</div>

<?php
    include '../Layout/Admin/_bottom.php';
?>
