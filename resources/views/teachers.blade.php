<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic HTML Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
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

    <h1>Teachers Information</h1>

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
            @foreach ($table as $teacher )
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

</body>
</html>
