<!DOCTYPE html>
<html>

<head>
    <title>{{ $title }}</title>
</head>

<body>
    <h1>{{ $title }}</h1>
    <p>This PDF document is generated using domPDF in Laravel.</p>
    <table>
        <tr>
            <th>Nane</th>
            <th>Email</th>
            <th>Price</th>
        </tr>
        @foreach ($Orders as $item)
            <tr>
                <td>
                    <p>{{ $item->name }}</p>
                </td>
                <td>
                    <p>{{ $item->email }}</p>
                </td>
                <td>
                    <p>{{ $item->total }} RS</p>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
