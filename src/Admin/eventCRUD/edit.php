<?php
include '../../../helper/connection.php';

$eventId = $_GET['id'];

$sql = "SELECT * FROM events WHERE event_id = ?";
$stmt = $connection->prepare($sql);
$stmt->bind_param("s", $eventId);
$stmt->execute();
$result = $stmt->get_result();

if ($data = $result->fetch_assoc()) {
    ?>
    <span class="grid gap-2 mt-5">
        <div class="flex flex-col">
            <label for="title" class="text-lg font-semibold text-black">Event Name</label>
            <input type="text" name="title" id="title" class="input input-bordered bg-white" placeholder="Enter Information Title" value="<?php echo htmlspecialchars($data['name']); ?>" />
        </div>
        <div class="flex flex-col">
            <label for="location" class="text-lg font-semibold text-black">Month</label>
            <select class="select select-bordered w-full bg-white" name="event_date">
                <option disabled>Pilih Bulan</option>
                <option <?php if($data['event_date'] == 'Januari') echo 'selected'; ?>>Januari</option>
                <option <?php if($data['event_date'] == 'Febuari') echo 'selected'; ?>>Febuari</option>
                <option <?php if($data['event_date'] == 'Maret') echo 'selected'; ?>>Maret</option>
                <option <?php if($data['event_date'] == 'April') echo 'selected'; ?>>April</option>
                <option <?php if($data['event_date'] == 'Mei') echo 'selected'; ?>>Mei</option>
                <option <?php if($data['event_date'] == 'Juni') echo 'selected'; ?>>Juni</option>
                <option <?php if($data['event_date'] == 'Juli') echo 'selected'; ?>>Juli</option>
                <option <?php if($data['event_date'] == 'Agustus') echo 'selected'; ?>>Agustus</option>
                <option <?php if($data['event_date'] == 'September') echo 'selected'; ?>>September</option>
                <option <?php if($data['event_date'] == 'Oktober') echo 'selected'; ?>>Oktober</option>
                <option <?php if($data['event_date'] == 'November') echo 'selected'; ?>>November</option>
                <option <?php if($data['event_date'] == 'Desember') echo 'selected'; ?>>Desember</option>
            </select>
        </div>
    </span>
    <?php
} else {
    echo "<p>No Event found.</p>";
}
$stmt->close();
?>