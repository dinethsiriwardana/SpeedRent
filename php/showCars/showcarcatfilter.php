<?php

$sql = "SELECT car_brand
        FROM car_table
        GROUP BY car_brand";

$result = $conn->query($sql);


if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        echo '  <div class="form-check" style="margin-bottom: 5px;margin-top: 20px;">
                                <input class="form-check-input" type="checkbox" id="formCheck-1" name="brand[]" value="' . $row['car_brand'] . '">
                                <label class="form-check-label" for="formCheck-1">' . $row['car_brand'] . '</label>
                            </div>';
    }
}
