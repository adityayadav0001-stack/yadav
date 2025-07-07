<?php
// DB कनेक्शन
$conn = new mysqli("localhost", "root", "", "school_db");

if ($conn->connect_error) {
    die("कनेक्शन विफल: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_id = $_POST['student_id'];
    $amount = $_POST['amount'];
    $date = date('Y-m-d');

    $sql = "INSERT INTO fees (student_id, amount, date) VALUES ('$student_id', '$amount', '$date')";

    if ($conn->query($sql) === TRUE) {
        echo "फीस सफलतापूर्वक दर्ज की गई।";
    } else {
        echo "त्रुटि: " . $conn->error;
    }
}
?>

<form method="POST" action="">
    छात्र ID: <input type="text" name="student_id" required><br><br>
    राशि (₹): <input type="number" name="amount" required><br><br>
    <button type="submit">फीस जोड़ें</button>
</form>