<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Maintenance Payment Module</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    height: 100vh;
}

.container {
    background-color: #ffffff;
    width: 100%;
    max-width: 900px;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

header {
    text-align: center;
    margin-bottom: 20px;
}

header h1 {
    font-size: 24px;
    color: #333;
}

header p {
    font-size: 14px;
    color: #777;
}

.payment-table {
    width: 100%;
    border-collapse: collapse;
}

.payment-table th,
.payment-table td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.payment-table th {
    background-color: #4CAF50;
    color: white;
}

.payment-table td {
    background-color: #f9f9f9;
}

.payment-table td .status-pending {
    color: orange;
    font-weight: bold;
}

.payment-table td .status-completed {
    color: green;
    font-weight: bold;
}

.payment-table td button {
    padding: 5px 10px;
    font-size: 14px;
    margin-right: 5px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.payment-table td button.btn-complete {
    background-color: #4CAF50;
    color: white;
}

.payment-table td button.btn-reject {
    background-color: #f44336;
    color: white;
}

.payment-table td button.disabled {
    background-color: #ddd;
    cursor: not-allowed;
}

.payment-table td button:hover:not(.disabled) {
    opacity: 0.8;
}

    </style>

</head>
<body>
    <div class="container">
        <header>
            <h1>Admin - Maintenance Payment Module</h1>
            <p>Manage maintenance payments made by users.</p>
        </header>

        <table class="payment-table">
            <thead>
                <tr>
                    <th>Payment ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Amount</th>
                    <th>Payment Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#12345</td>
                    <td>John Doe</td>
                    <td>john.doe@example.com</td>
                    <td>$120.00</td>
                    <td><span class="status-pending">Pending</span></td>
                    <td>
                        <button class="btn-complete">Mark as Completed</button>
                        <button class="btn-reject">Reject</button>
                    </td>
                </tr>
                <tr>
                    <td>#12346</td>
                    <td>Jane Smith</td>
                    <td>jane.smith@example.com</td>
                    <td>$90.00</td>
                    <td><span class="status-completed">Completed</span></td>
                    <td>
                        <button class="btn-complete disabled" disabled>Completed</button>
                        <button class="btn-reject">Reject</button>
                    </td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
</body>
</html>
