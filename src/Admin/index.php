<?php
    require_once '../../helper/connection.php';
    require_once '../Layout/Admin/_top.php';
?>

    <!-- Page content here -->
    <div class="grid items-center ps-[20rem] pt-[7rem]">
        <span class="flex flex-col justify-center gap-5">

            <div class="flex gap-5">
                
                <div class="card bg-white text-black w-96 shadow-xl">
                    <div class="card-body">
                        <h2 class="card-title font-bold">Information</h2>
                            <?php 
                                $sql = "SELECT information_id, COUNT(information_id) AS total FROM informations GROUP BY information_id";
                                $result = $connection->query($sql);
                                $rowCount = $result->num_rows;

                                if ($result->num_rows > 0) {
                                    echo "<p class=\"text-center my-5 font-semibold text-lg\">On here have " . $rowCount . " Informations </p>";

                                    echo "<div class=\"card-actions flex items-center justify-center\">
                                            <a class=\"btn text-white\" href=\"./information.php\">Show Detail!</a>
                                        </div>";
                                } else {
                                    echo "<p class=\"text-center my-5\">Not have information</p>";
                                }
                            ?>
                        </div>
                    </div>

                <div class="card bg-white text-black w-96 shadow-xl">
                    <div class="card-body">
                        <h2 class="card-title font-bold">EKSKUL</h2>
                            <?php 
                                $sql = "SELECT eskul_id, COUNT(eskul_id) AS total FROM eskuls GROUP BY eskul_id";
                                $result = $connection->query($sql);
                                $rowCount = $result->num_rows;

                                if ($result->num_rows > 0) {
                                    echo "<p class=\"text-center my-5 font-semibold text-lg\">On here have " . $rowCount . " EKSKUL </p>";

                                    echo "<div class=\"card-actions flex items-center justify-center\">
                                            <a class=\"btn text-white\" href=\"./eskul.php\">Show Detail!</a>
                                        </div>";
                                } else {
                                    echo "<p class=\"text-center my-5\">Not have information</p>";
                                }
                            ?>
                        </div>
                    </div>
                    
                <div class="card bg-white text-black w-96 shadow-xl">
                    <div class="card-body">
                        <h2 class="card-title font-bold">Fasilitas</h2>
                        <?php 
                                $sql = "SELECT facility_id, COUNT(facility_id) AS totalFacility FROM facilities GROUP BY facility_id";
                                $result = $connection->query($sql);
                                
                                $rowCount = $result->num_rows;

                                if ($result->num_rows > 0) {
                                    echo "<p class=\"text-center my-5 font-semibold text-lg\">On here have " . $rowCount. " Fasliitas </p>";

                                    echo "<div class=\"card-actions flex items-center justify-center\">
                                            <a class=\"btn text-white\" href=\"./fasilitas.php\">Show Detail!</a>
                                        </div>";
                                } else {
                                    echo "<p class=\"text-center mt-5 mb-16\">Not have Faslitas</p>";
                                }
                        ?>
                    </div>
                </div>

            </div>

            <div class="flex gap-5">
                
                <div class="card bg-white text-black w-96 shadow-xl">
                    <div class="card-body">
                        <h2 class="card-title font-bold">Event</h2>
                        <?php 
                                $sql = "SELECT event_id, COUNT(event_id) AS total FROM events GROUP BY event_id";
                                $result = $connection->query($sql);
                                $rowCount = $result->num_rows;


                                if ($result->num_rows > 0) {
                                    echo "<p class=\"text-center my-5 font-semibold text-lg\">On here have " . $rowCount . " Fasliitas </p>";

                                    echo "<div class=\"card-actions flex items-center justify-center\">
                                            <a class=\"btn text-white\" href=\"./event.php\">Show Detail!</a>
                                        </div>";
                                } else {
                                    echo "<p class=\"text-center my-5\">Not have Event</p>";
                                }
                        ?>
                        </div>
                    </div>
                    
                <div class="card bg-white text-black w-96 shadow-xl">
                    <div class="card-body">
                        <h2 class="card-title font-bold">Contact</h2>
                        <?php 
                                $sql = "SELECT event_id, COUNT(event_id) AS total FROM events GROUP BY event_id";
                                $result = $connection->query($sql);
                                $row = $result->fetch_assoc();

                                if ($result->num_rows > 0) {
                                    echo "<p class=\"text-center my-5 font-semibold text-lg\">On here have " . $row["total"] . " Fasliitas </p>";

                                    echo "<div class=\"card-actions flex items-center justify-center\">
                                            <a class=\"btn text-white\" href=\"./contact.php\">Show Detail!</a>
                                        </div>";
                                } else {
                                    echo "<p class=\"text-center mt-5 mb-16\">Not have Event</p>";
                                }
                        ?>
                    </div>
                </div>

            </div>
        </span>
    </div>

<?php
    require_once '../Layout/Admin/_bottom.php';
?>


