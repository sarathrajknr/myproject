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
