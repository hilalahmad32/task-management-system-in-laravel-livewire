<table style='width:100%;border:1px solid black'>
    <thead>
        <tr style='border:1px solid black'>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>phone</th>
        </tr>
    </thead>
    <tbody>
        @if (count($users))
            @foreach ($users as $user)
                <tr style='border:1px solid black'>
                    <td style='border:1px solid black;text-align:center'>{{ $user->id }}</td>
                    <td style='border:1px solid black;text-align:center'>{{ $user->fname }} {{ $user->lname }}
                    </td>
                    <td style='border:1px solid black;text-align:center'>{{ $user->email }}</td>
                    <td style='border:1px solid black;text-align:center'>{{ $user->phone }}</td>
                </tr>
            @endforeach
        @else
            <h4>Record Not Found</h4>
        @endif

    </tbody>
</table>
