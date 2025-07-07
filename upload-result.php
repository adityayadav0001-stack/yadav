<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $target_dir = "results/";
    $filename = basename($_FILES["result_pdf"]["name"]);
    $target_file = $target_dir . $filename;

    if (move_uploaded_file($_FILES["result_pdf"]["tmp_name"], $target_file)) {
        echo "रिज़ल्ट सफलतापूर्वक अपलोड हुआ: " . $filename;
    } else {
        echo "फ़ाइल अपलोड में त्रुटि हुई।";
    }
}
?>

<form method="POST" enctype="multipart/form-data" action="">
    छात्र ID या नाम: <input type="text" name="student" required><br><br>
    रिज़ल्ट PDF चुनें: <input type="file" name="result_pdf" accept="application/pdf" required><br><br>
    <button type="submit">अपलोड करें</button>
</form>