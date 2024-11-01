<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php


    $first_Name = "";
    $last_Name = "";
    $business_Email = "";
    $phone = "";
    $company_Name = "";
    $company_Size = "";
    $message = "";
    $form_Checkbox = "";



    if (
        isset($_POST["first-name"]) == true && isset($_POST["last-name"]) == true && isset($_POST["business-email"]) == true
        && isset($_POST["phone"]) == true && isset($_POST["company-name"]) == true && isset($_POST["company-size"]) == true
        && isset($_POST["message"]) == true && isset($_POST["form-checkbox"]) == true
    ) {
        $first_Name = $_POST["first-name"];
        $last_Name = $_POST["last-name"];
        $business_Email = $_POST["business-email"];
        $phone = $_POST["phone"];
        $company_Name = $_POST["company-name"];
        $company_Size = $_POST["company-size"];
        $message = $_POST["message"];
        $form_Checkbox = $_POST["form-checkbox"];

        echo "<b>First Name:</b> " . $first_Name;
        echo "<br />";
        echo "<b>Last Name:</b> " . $last_Name;
        echo "<br />";
        echo "<b>Business Email:</b> " . $business_Email;
        echo "<br />";
        echo "<b>Phone:</b> " . $phone;
        echo "<br />";
        echo "<b>Company Name:</b> " . $company_Name;
        echo "<br />";
        echo "<b>Company Size:</b> " . $company_Size;
        echo "<br />";
        echo "<b>Message:</b> " . $message;
        echo "<br />";
        echo "<b>Form check box:</b> " . $form_Checkbox;
    } else {
        echo "<b>Chưa nhận được thông tin dữ liệu từ Form</b>";
    }
    ?>
</body>

</html>