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
        input[type="text"], input[type="number"], input[type="email"], input[type="tel"], input[type="date"], select {
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
    <h2>Create Teacher</h2>
    <form action="{{ route('teachers.store') }}" method="post">
        @csrf
        <div class="form-grid">
            <div>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter Name" required>
            </div>

            <div>
                <label for="name">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter Email" required>
            </div>

            <div>
                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter Phone" required>
            </div>


            <div>
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" placeholder="Enter Subject" required>
            </div>

            <div>
                <label for="address">Address</label>
                <input type="text" id="address" name="address" placeholder="Enter Address" required>
            </div>

            <div>
                    <label for="dob">Date of Birth</label>
                    <input type="date" id="dob" name="date_of_birth" placeholder="Enter Date of Birth" required>
                </div>

                <div>
                    <label for="hire_date">Hire Date</label>
                    <input type="date" id="hire_date" name="hire_date" placeholder="Enter Hire Date" required>
                </div>

            <div>
                <label for="salary">Salary</label>
                <input type="number" id="salary" name="salary" placeholder="Enter Salary" required>
            </div>

            <div>
                    <label for="qualification">Qualification</label>
                    <input type="text" id="qualification" name="qualification" placeholder="Enter qualification" required>
                </div>

            
            <div class="full-width">
                <input type="submit" value="Submit">
            </div>
        </div>
    </form>
</div>

</body>
</html>
