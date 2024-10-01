<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic HTML Table</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Students Table</h2>
<form action="{{ route('students.index') }}" method="GET">
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

    <input type="submit" value="Search">
</form>


<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Class</th>
            <th>Address</th>
            <th>Concession</th>
            <th>Status</th>
            <th>Fee</th>
            <th>Phone</th>
        </tr>
    </thead>
    <tbody>
    @foreach($data as $student)    
    <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->class}}</td>
            <td>{{$student->address}}</td>
            <td>{{$student->concession ? 'Yes': 'No'}}</td>
            <td>{{$student->status ? 'Active': 'Inactive'}}</td>
            <td>{{$student->fee}}</td>
            <td>{{$student->phone}}</td>
        </tr>
        @endforeach 
    </tbody>
</table>

</body>
</html>
