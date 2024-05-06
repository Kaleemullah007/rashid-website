<div class="card-body">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Reply To </th>
                <th scope="col">Reply To Email </th>
                <th scope="col">Message</th>
                <th scope="col">Replied Message</th>
                <th scope="col">Date</th>
            </tr>
        </thead>
        <tbody>
            @if ($replies->count() > 0)
                @php
                    $counter = 1;
                @endphp
                @foreach ($replies as $reply)
                    <tr>
                        <th scope="row">{{ $counter++ }}</th>
                        <td>{{ $reply->receiver->name }}</td>
                        <td>{{ $reply->receiver->email }}</td>
                        <td>{{ $reply->receiver->message }}</td>
                        <td>{{ $reply->message }}</td>
                        <td>{{ $reply->created_at->diffForHumans() }}</td>

                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5" class="text-center">No record</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
