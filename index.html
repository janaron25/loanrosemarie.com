<?php
// Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loan_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $cellphone_number = $_POST['cellphone_number'];
    $gcash_number = $_POST['gcash_number'];
    $address = $_POST['address'];
    $loan_amount = $_POST['loan_amount'];
    $installment = $_POST['installment'];
    $interest = $_POST['interest'];
    $loan_date = $_POST['loan_date']; // Get the loan date
    $due_date = date('Y-m-d', strtotime($loan_date . " + $installment days")); // Calculate due date based on loan date and installment period
    $total = $loan_amount + $interest; // Total is the loan amount + manually entered interest
    $status = 'pending'; // Default status is always pending

    $sql = "INSERT INTO loans (name, cellphone_number, gcash_number, address, loan_amount, installment, interest, total, loan_date, due_date, status)
    VALUES ('$name', '$cellphone_number', '$gcash_number', '$address', '$loan_amount', '$installment', '$interest', '$total', '$loan_date', '$due_date', '$status')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success' role='alert'>New loan record created successfully!</div>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Loan Entry</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABQJ6z4zj6vD5dIzjI9Kb4i8OHW5r+18XM+dG2z1Jfow" crossorigin="anonymous">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Custom styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #2A2D3C;
            color: white;
        }

        .container {
            background-color: #1F2233;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            max-width: 900px;
            margin: 50px auto;
        }

        h2 {
            text-align: center;
            color: #4CAF50;
            font-size: 32px;
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
            color: #fff;
        }

        .form-control {
            border-radius: 8px;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
            padding: 10px 15px;
            font-size: 16px;
        }

        .form-control:focus {
            border-color: #4CAF50;
            box-shadow: 0 0 8px rgba(76, 175, 80, 0.5);
        }

        .form-select {
            border-radius: 8px;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
            padding: 10px 15px;
            font-size: 16px;
        }

        .btn-primary {
            background-color: #4CAF50;
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            font-size: 16px;
            transition: all 0.3s;
        }

        .btn-primary:hover {
            background-color: #45a049;
        }

        .btn-primary:focus {
            outline: none;
        }

        .form-section {
            margin-bottom: 20px;
        }

        .form-section:last-child {
            margin-bottom: 0;
        }

        .header-banner {
            background-color: #4CAF50;
            color: white;
            padding: 30px 0;
            text-align: center;
            border-radius: 10px 10px 0 0;
            margin-bottom: 30px;
        }

        .header-banner h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .header-banner p {
            font-size: 18px;
        }

        .icon {
            margin-right: 10px;
        }

        .alert {
            margin-top: 20px;
            font-size: 16px;
        }

        /* Custom spacing for input fields */
        .form-control, .form-select {
            width: 100%;
        }

        .error-message {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="header-banner">
        <button class="btn btn-outline-success" type="button" onclick="window.location.href='loaners.php'">
            <i class="fas fa-users"></i> See All Loaners
        </button>
    </div>

    <div class="container">
        <form method="POST" id="loanForm">
            <div class="form-section">
                <label for="name" class="form-label">Customer Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-section">
                <label for="cellphone_number" class="form-label">Cellphone Number</label>
                <input type="text" class="form-control" id="cellphone_number" name="cellphone_number" required>
            </div>
            <div class="form-section">
                <label for="gcash_number" class="form-label">Gcash Number</label>
                <input type="text" class="form-control" id="gcash_number" name="gcash_number" required>
            </div>
            <div class="form-section">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>
            <div class="form-section">
                <label for="loan_amount" class="form-label">Loan Amount</label>
                <input type="number" class="form-control" id="loan_amount" name="loan_amount" required>
            </div>
            <div class="form-section">
                <label for="installment" class="form-label">Installment (7 or 15 Days)</label>
                <select class="form-select" id="installment" name="installment" required>
                    <option value="7">7 Days</option>
                    <option value="15">15 Days</option>
                </select>
            </div>
            <div class="form-section">
                <label for="interest" class="form-label">Interest (fixed amount)</label>
                <input type="number" class="form-control" id="interest" name="interest" required>
            </div>
            <div class="form-section">
                <label for="loan_date" class="form-label">Loan Date</label>
                <input type="date" class="form-control" id="loan_date" name="loan_date" required>
            </div>
            <div class="form-section">
                <label for="total" class="form-label">Total</label>
                <input type="text" class="form-control" id="total" name="total" readonly>
            </div>
            <div class="form-section">
                <label for="due_date" class="form-label">Due Date</label>
                <input type="text" class="form-control" id="due_date" name="due_date" readonly>
            </div>

            <button type="submit" class="btn btn-primary"><i class="fas fa-save icon"></i> Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Calculate total
        document.getElementById('loan_amount').addEventListener('input', calculateTotal);
        document.getElementById('interest').addEventListener('input', calculateTotal);

        function calculateTotal() {
            var loanAmount = parseFloat(document.getElementById('loan_amount').value) || 0;
            var interest = parseFloat(document.getElementById('interest').value) || 0;
            var total = loanAmount + interest;
            document.getElementById('total').value = total.toFixed(2); // Set the total with two decimal places
        }

        // Calculate Due Date
        document.getElementById('loan_date').addEventListener('change', function() {
            var loanDate = document.getElementById('loan_date').value;
            var installment = document.getElementById('installment').value;
            var dueDate = new Date(loanDate);
            dueDate.setDate(dueDate.getDate() + parseInt(installment));
            document.getElementById('due_date').value = dueDate.toISOString().split('T')[0]; // Set the due date
        });
    </script>
</body>
</html>
