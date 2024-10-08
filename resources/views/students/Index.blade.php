<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic HTML Table</title>
    <style>
        /* Center the table */
        .table-container {
            display: flex;
            justify-content: center;
        }

        table {
            width: 70%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #e7f1ff; /* Light blue background for the table */
        }

        th, td {
            border: 1px solid #000;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #1d70f7; /* Dark blue header */
            color: white;
        }

        td {
            background-color: #f2f7ff; /* Very light blue for table rows */
        }

        /* Style the buttons */
        .btn {
            margin-right: 5px;
        }
    </style>
</head>
<body>

<h2 class="text-center">Students Table</h2>

<form action="{{ route('students.index') }}" method="GET" class="text-center">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{ request('name') }}">

    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" value="{{ request('phone') }}">

    <label for="class">Class:</label>
    <select id="class" name="class">
        <option value="">Select Class</option>
        @for($i = 1; $i <= 10; $i++)
            <option value="{{ $i }}" {{ request('class') == $i ? 'selected' : '' }}>{{ $i }}</option>
        @endfor
    </select>

    <label for="fee">Fee:</label>
    <input type="text" id="fee" name="fee" value="{{ request('fee') }}">

    <label for="concession">Concession:</label>
    <select id="concession" name="concession">
        <option value="">Select Concession</option>
        <option value="Yes" {{ request('concession') == 'Yes' ? 'selected' : '' }}>Yes</option>
        <option value="No" {{ request('concession') == 'No' ? 'selected' : '' }}>No</option>
    </select>

    <label for="status">Status:</label>
    <select id="status" name="status">
        <option value="">Select Status</option>
        <option value="Yes" {{ request('status') == 'Yes' ? 'selected' : '' }}>Active</option>
        <option value="No" {{ request('status') == 'No' ? 'selected' : '' }}>Inactive</option>
    </select>
    <br><br>

    <input type="submit" value="Search" class="btn btn-primary">
</form>

<!-- Table Container -->
<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>SL No</th> <!-- Serial number column -->
                <th>Name</th>
                <th>Class</th>
                <th>Address</th>
                <th>Concession</th>
                <th>Status</th>
                <th>Fee</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($data as $index => $student)    
        <tr>
            <td>{{ $index + 1 }}</td> <!-- Serial number -->
            <td>{{ $student->name }}</td>
            <td>{{ $student->class }}</td>
            <td>{{ $student->address }}</td>
            <td>{{ $student->concession ? 'Yes' : 'No' }}</td>
            <td>{{ $student->status ? 'Active' : 'Inactive' }}</td>
            <td>{{ $student->fee }}</td>
            <td>{{ $student->phone }}</td>
            <td>
                <!-- Edit button -->
                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">Edit</a>

                <!-- Delete button -->
                <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
                </form>
            </td>     
        </tr>
        @endforeach 
        </tbody>
    </table>
</div>

</body>
</html>
