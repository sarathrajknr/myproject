<!DOCTYPE html>
<html>
<head>
    <title>Create Student</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #b4f0f8, #82e0ff); /* Background gradient */
            height: 100vh; /* Full viewport height */
            margin: 0; /* Remove default margin */
            display: flex; /* Flexbox layout */
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
        }
        .form-container {
            width: 450px; /* Adjust the width for the two-column format */
            padding: 30px;
            background-color: #fff;
            border-radius: 12px; /* Smoother border */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); /* Enhanced shadow */
        }
        h2 {
            text-align: center;
            color: #007bff;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
            color: #007bff;
        }
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr; /* Two columns of equal width */
            gap: 15px; /* Space between grid items */
        }
        .form-grid div {
            display: flex;
            flex-direction: column; /* Ensures label is above the input */
        }
        input[type="text"], input[type="number"], select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .full-width {
            grid-column: span 2; /* Makes the field span both columns */
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Create Student</h2>
    <form action="{{ route('students.store') }}" method="post">
        @csrf
        <div class="form-grid">
            <div>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div>
                <label for="class">Class</label>
                <select id="class" name="class">
                    <option value="">Select Class</option>
                    @for($i = 1; $i <= 10; $i++)
                        <option value="{{ $i }}" {{ request('class') == $i ? 'selected' : '' }}>{{ $i }}</option>
                    @endfor
                </select>
            </div>

            <div>
                <label for="address">Address</label>
                <input type="text" id="address" name="address" required>
            </div>

            <div>
                <label for="concession">Concession</label>
                <select id="concession" name="concession" required>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div>
                <label for="status">Status</label>
                <select id="status" name="status" required>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>

            <div>
                <label for="fee">Fee</label>
                <input type="text" id="fee" name="fee" required>
            </div>

            <div class="full-width">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" required>
            </div>

            <div class="full-width">
                <input type="submit" value="Submit">
            </div>
        </div>
    </form>
</div>

</body>
</html>
