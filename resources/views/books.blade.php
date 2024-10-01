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

    <h1>Books Information</h1>

    <table>
        <thead>
            <tr>
                <th>Sl No</th>
                <th>Title</th>
                <th>Author</th>
                <th>Quantity</th>
                <th>Date_of_Issue</th>
                <th>Date_of_Return</th>
                <th>Remarks</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($booksdata as $books )
            <tr>
            <td>{{ $books->id }}</td>
            <td>{{ $books->title }}</td>
            <td>{{ $books->author}}</td>
            <td>{{ $books->quantity }}</td>
            <td>{{ $books->date_of_issue }}</td>
            <td>{{ $books->date_of_return }}</td>
            <td>{{ $books->remarks }}</td>
           
            </tr>
            @endforeach 
        </tbody>
    </table>

</body>
</html>
