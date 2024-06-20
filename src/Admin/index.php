<?php
require_once '../../helper/connection.php';
?>

<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="../main.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
            <!-- Navbar -->
            <div class="navbar bg-base-100 shadow-md mx-10 rounded-box max-w-[96vw] fixed top-5 border">
                <div class="flex-none lg:hidden">
                    <label for="my-drawer" class="btn btn-square btn-ghost drawer-button">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    </label>
                </div>
                <div class="flex-1">
                    <a class="btn btn-ghost text-xl font-bold">Admin Dashboard</a>
                </div>
                <div class="flex-none">
                    <div class="dropdown dropdown-end">
                        <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                            <div class="w-10 rounded-full">
                                <img src="https://i.pinimg.com/564x/a0/a8/46/a0a846db2c036d3a8fcf739bb5707e43.jpg" />
                            </div>
                        </label>
                        <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                            <li><a href="#">Profile</a></li>
                            <li><a onclick="document.getElementById('logout_modal').showModal()">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end Navbar -->

            <!-- Sidebar -->
            <div class="grid fixed left-10 top-28 rounded-box text-black font-bold border shadow-lg">
                    <ul class="menu p-4 overflow-y-auto w-60 grid gap-2">
                        <li class="menu-title">
                            <span>Admin Menu</span>
                        </li>
                        <li>
                            <a href="#" class="btn text-black">
                                <i class='bx bx-home'></i>
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="#" class="btn text-black">Users</a>
                        </li>
                        <li>
                            <a href="#" class="btn text-black">Products</a>
                        </li>
                        <li>
                            <a href="#" class="btn text-black">
                                <i class='bx bx-user'></i>
                                Profile
                            </a>
                        </li>
                    </ul>
            </div>

            <!-- Page content here -->
            <!-- <div class="p-4"> -->
                <!-- <h1 class="text-2xl font-bold mb-4">Welcome to Admin Dashboard</h1> -->
                <!-- Add your main content here -->


            <!-- </div> -->


    <!-- Logout Confirmation Modal -->
    <dialog id="logout_modal" class="modal">
        <div class="modal-box">
            <h3 class="font-bold text-lg">Confirm Logout</h3>
            <p class="py-4">Anda yakin untuk keluar?</p>
            <div class="modal-action">
                <form method="dialog">
                    <button class="btn btn-outline mr-2">Cancel</button>
                    <a href="logout.php" class="btn btn-error">Logout</a>
                </form>
            </div>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>

    <!-- javascript -->
    <!-- <script>
        const drawerToggle = document.getElementById('my-drawer');
        const drawerSide = document.querySelector('.drawer-side');

        function toggleDrawer() {
            drawerSide.classList.toggle('collapsed', !drawerToggle.checked);
        }

        drawerToggle.addEventListener('change', toggleDrawer);

        // Initial state
        toggleDrawer();
    </script> -->
</body>
</html>