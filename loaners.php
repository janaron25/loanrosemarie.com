<?php
// Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loan_system";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Update status and penalties
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['status']) && isset($_POST['id'])) {
        $status = $_POST['status'];
        $id = $_POST['id'];
        // Update status in the database
        $update_status_sql = "UPDATE loans SET status='$status' WHERE id=$id";
        $conn->query($update_status_sql);
    }
    
    if (isset($_POST['due_penalties']) && isset($_POST['id'])) {
        $due_penalties = $_POST['due_penalties'];
        $id = $_POST['id'];
        // Update due penalties and total
        $update_penalty_sql = "UPDATE loans SET due_penalties='$due_penalties', total=total + $due_penalties WHERE id=$id";
        $conn->query($update_penalty_sql);
    }
}

// Fetch loan records from the database, ordered by first name
$sql = "SELECT * FROM loans ORDER BY name ASC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loaners List</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABQJ6z4zj6vD5dIzjI9Kb4i8OHW5r+18XM+dG2z1Jfow" crossorigin="anonymous">
    <style>
        body {
            background-color: #1e2a38;
            font-family: 'Roboto', sans-serif;
            color: #f4f7fb;
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container {
            background-color: #2c3e50;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 1200px;
        }
        h2 {
            color: #ecf0f1;
            text-align: center;
            font-size: 32px;
            margin-bottom: 30px;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .table th,
        .table td {
            padding: 15px;
            text-align: center;
            border: 1px solid #34495e;
        }
        .table th {
            background-color: #34495e;
            color: #ecf0f1;
            font-weight: bold;
            font-size: 16px;
        }
        .table td {
            background-color: #2c3e50;
            color: #ecf0f1;
            font-size: 14px;
        }
        .table tr:hover {
            background-color: #1abc9c;
            color: #fff;
        }
        .btn {
            background-color: #2980b9;
            color: white;
            padding: 12px 24px;
            border-radius: 5px;
            font-size: 18px;
            transition: background-color 0.3s;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
        }
        .btn:hover {
            background-color: #3498db;
        }
        .btn-paid {
            background-color: #27ae60;
        }
        .btn-paid:hover {
            background-color: #2ecc71;
        }
        .btn-pending {
            background-color: #e74c3c;
        }
        .btn-pending:hover {
            background-color: #c0392b;
        }
        .card {
            margin-top: 20px;
            background-color: #e74c3c;
            border: none;
        }
        .card-body {
            text-align: center;
            padding: 20px;
        }
        .card-title {
            font-size: 24px;
            font-weight: bold;
        }
        .form-control {
            margin-top: 10px;
        }
        .form-select {
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <div class="container">
        <?php if ($result->num_rows > 0): ?>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Cellphone Number</th>
                        <th>Gcash Number</th>
                        <th>Address</th>
                        <th>Loan Amount</th>
                        <th>Installment</th>
                        <th>Interest</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Loan Date</th>
                        <th>Due Date</th>
                        <th>Due Penalties</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <?php
                            // Format the loan_date and due_date to "Month Day, Year"
                            $loan_date = date("F j, Y", strtotime($row['loan_date']));
                            $due_date = date("F j, Y", strtotime($row['due_date']));
                        ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['cellphone_number']; ?></td>
                            <td><?php echo $row['gcash_number']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo number_format($row['loan_amount'], 2); ?></td>
                            <td><?php echo $row['installment']; ?> Days</td>
                            <td><?php echo number_format($row['interest'], 2); ?></td>
                            <td><?php echo number_format($row['total'], 2); ?></td>
                             <!-- Update Status -->
                            <td>
                                <form method="POST" action="">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <select name="status" class="form-select">
                                        <option value="pending" <?php echo $row['status'] == 'pending' ? 'selected' : ''; ?>>Pending</option>
                                        <option value="paid" <?php echo $row['status'] == 'paid' ? 'selected' : ''; ?>>Paid</option>
                                    </select>
                                    <button type="submit" class="btn <?php echo ($row['status'] == 'pending') ? 'btn-pending' : 'btn-paid'; ?> mt-2">Update Status</button>
                                </form>
                            </td>
                            <td><?php echo $loan_date; ?></td>
                            <td><?php echo $due_date; ?></td>
                             <!-- Update Due Penalties -->
                            <td>
                                <form method="POST" action="">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <input type="number" name="due_penalties" class="form-control" placeholder="Add Penalty" value="<?php echo $row['due_penalties']; ?>" step="0.01">
                                    <button type="submit" class="btn btn-warning mt-2">Update Penalty</button>
                                </form>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <div class="card">
                <div class="card-body text-white">
                    <h5 class="card-title">No loan records found.</h5>
                    <p class="card-text">It seems like there are no loan records available at the moment.</p>
                </div>
            </div>
        <?php endif; ?>

        <div class="text-center">
            <a href="index.php" class="btn">Back to Home</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
