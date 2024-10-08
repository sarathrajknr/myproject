<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        /* Container for form and table */
        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Form styling */
        .form-modal {
            margin-bottom: 30px;
        }

        .form-modal h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        /* Horizontal form layout with three fields per row */
        .form-group-row {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            flex: 1;
            text-align: center;
        }

        .form-group label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }

        /* Alignment of last three fields to the right */
        .align-right {
            justify-content: flex-end;
        }

        .form-group-right {
            padding-right: 50px;
        }

        /* Submit Button Centered */
        .submit-btn-container {
            text-align: center;
            margin-top: 20px;
        }

        input[type="submit"] {
            padding: 10px 30px;
            background-color: #28a745;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        /* Table styling */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e9e9e9;
        }
    </style>
</head>
<body>

    <h1>Teachers Informations</h1>

    <div class="container">
        
        <form class="form-modal" action="{{ route('teachers.index') }}" method="GET">

            
            <div class="form-group-row">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Search name" value="{{ request('name') }}">
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" placeholder="Search subject" value="{{ request('subject') }}">
                </div>
                <div class="form-group">
                    <label for="hire_date">Hire Date</label>
                    <input type="date" id="hire_date" name="hire_date" value="{{ request('hire_date') }}">
                </div>
            </div>

            
            <div class="form-group-row">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Search email address" value="{{ request('email') }}">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address" placeholder="Search address" value="{{ request('address') }}">
                </div>
                <div class="form-group">
                    <label for="salary">Salary</label>
                    <input type="number" id="salary" name="salary" placeholder="Search salary amount" value="{{ request('salary') }}">
                </div>
            </div>

            
            <div class="form-group-row">
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" name="phone" placeholder="Enter phone number" value="{{ request('phone') }}">
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" id="dob" name="date_of_birth" value="{{ request('date_of_birth') }}">
                </div>
                <div class="form-group">
                    <label for="qualification">Qualification</label>
                    <input type="text" id="qualification" name="qualification" placeholder="Enter qualification" value="{{ request('qualification') }}">
                </div>
            </div>

            <!-- Submit Button Centered -->
            <div class="submit-btn-container">
                <input type="submit" value="Search">
            </div>
        </form>

        <!-- Teachers Table -->

        @if($table->isEmpty())
    <p style="color: red; font-size: 16px;">No records to display</p>
        @else
    <!-- Table to display teachers' data -->
        <table>
            <thead>
                <tr>
                    <th>Sl No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Subject</th>
                    <th>Address</th>
                    <th>Date of Birth</th>
                    <th>Hire date</th>
                    <th>Salary</th>
                    <th>Qualification</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($table as $teacher)
                <tr>
                    <td>{{ $teacher->id }}</td>
                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->email }}</td>
                    <td>{{ $teacher->phone }}</td>
                    <td>{{ $teacher->subject }}</td>
                    <td>{{ $teacher->address }}</td>
                    <td>{{ $teacher->date_of_birth }}</td>
                    <td>{{ $teacher->hire_date }}</td>
                    <td>{{ $teacher->salary }}</td>
                    <td>{{ $teacher->qualification }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>

</body>
</html>
