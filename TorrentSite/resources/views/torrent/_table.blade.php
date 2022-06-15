<table class="table table-dark table-striped">
    <tr>
        <th>{{__(('Category'))}}</th>
        <th>{{__(('Title'))}}</th>
        <th>{{__(('Created at'))}}</th>
        <th>{{__(('Uploader'))}}</th>
    </tr>
    @foreach($torrents as $torrent)
        <tr>
            <td><p>{{$torrent->category->title}}</p></td>
            <td><a class="link" href="{{route('torrent.details', $torrent)}}"><p>{{$torrent->title}}</p></a></td>
            <td class="col-xl-2 col-lg-2 col-mg-3"><p>{{$torrent->created_at}}</p></td>
            <td class="col-xl-3 col-lg-3 col-mg-4"><p>{{$torrent->user->name}}</p>
            </td>
        </tr>
    @endforeach
</table>
{{$torrents->links()}}
