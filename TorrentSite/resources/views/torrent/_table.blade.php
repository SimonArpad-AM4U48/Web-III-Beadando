<table class="table table-dark table-striped">
    <tr>
        <th>{{__(('Category'))}}</th>
        <th>{{__(('Title'))}}</th>
        <th>{{__(('Created at'))}}</th>
        <th>{{__(('Uploader'))}}</th>
    </tr>
    @foreach($torrents as $torrent)
        <tr>
            <td class="col-xl-1 col-lg-1 col-mg-3"><a class="link" href="{{route('category.show', $torrent->category)}}"><p>{{$torrent->category->title}}</p></a></td>
            <td><a class="link" href="{{route('torrent.details', $torrent)}}"><p>{{$torrent->title}}</p></a></td>
            <td class="col-xl-2 col-lg-2 col-mg-3"><p>{{$torrent->created_at}}</p></td>
            <td class="col-xl-3 col-lg-3 col-mg-4">
                <p>
                    <a class="link" href="{{route('profile.show', $torrent->user)}}">
                        <img class="rounded-circle me-2" width="50px" src="{{$torrent->user->avatar}}" alt="{{$torrent->user->name}}">
                        {{$torrent->user->name}}
                    </a>
                </p>
            </td>
        </tr>
    @endforeach
</table>
{{$torrents->links()}}
