<?php
include '../../../helper/connection.php';

$eventId = $_GET['id'];

$sql = "SELECT * FROM eskuls WHERE eskul_id = ?";
$stmt = $connection->prepare($sql);
$stmt->bind_param("s", $eventId);
$stmt->execute();
$result = $stmt->get_result();

if ($data = $result->fetch_assoc()) {
    ?>
    <span class="grid gap-2 mt-5">
        
        <div class="flex flex-col">
            <label for="title" class="text-lg font-semibold text-black">Title</label>
            <input type="text" name="title" id="title" class="input input-bordered bg-white" placeholder="Enter Information Title" value="<?php echo htmlspecialchars($data['title']); ?>" />
        </div>
        <input type="file" name="img" class="file-input file-input-bordered file-input-sm w-full border bg-white" required/>
    </span>
    <?php
} else {
    echo "<p>No Event found.</p>";
}
$stmt->close();
?>