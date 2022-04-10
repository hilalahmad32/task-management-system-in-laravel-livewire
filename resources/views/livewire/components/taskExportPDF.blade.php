<table style='width:100%;border:1px solid black'>
    <thead>
        <tr style='border:1px solid black'>
            <th>Id</th>
            <th>Title</th>
            <th>Status</th>
            <th>Asign User</th>
        </tr>
    </thead>
    <tbody>
        @if (count($tasks))
            @foreach ($tasks as $task)
                <tr style='border:1px solid black'>
                    <td style='border:1px solid black;text-align:center;'>{{ $task->id }}</td>
                    <td style='border:1px solid black;text-align:center;'> {{ $task->title }} </td>
                    <td style='border:1px solid black;text-align:center;'>
                        {{ $task->status == 0 ? 'Not Started' : '' }}
                        {{ $task->status == 1 ? 'Started' : '' }}
                        {{ $task->status == 2 ? 'Pending' : '' }}
                        {{ $task->status == 3 ? 'Complete' : '' }}
                    </td>
                    <td style='border:1px solid black;text-align:center;'>{{ $task->users->fname }}
                        {{ $task->users->lname }}</td>

                </tr>
            @endforeach
        @else
            <h4>Record Not Found</h4>
        @endif

    </tbody>
</table>
