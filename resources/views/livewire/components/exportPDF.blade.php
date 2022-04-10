<table style='width:100%;border:1px solid black'>
    <thead>
        <tr style='border:1px solid black'>
            <th>Id</th>
            <th>Category Name</th>
            <th>description</th>
        </tr>
    </thead>
    <tbody>
        @if (count($categories))
            @foreach ($categories as $category)
                <tr style='border:1px solid black'>
                    <td style='text-align: center;border:1px solid black;border-collapse:collapse;'>
                        {{ $category->id }}</td>
                    <td style='text-align: center;border:1px solid black;border-collapse:collapse;'>
                        {{ $category->category_name }}
                    </td>
                    <td style='text-align: center;border:1px solid black;border-collapse:collapse;'>
                        {{ $category->description }}
                    </td>

                </tr>
            @endforeach
        @else
            <h4>Record Not Found</h4>
        @endif

    </tbody>
</table>
