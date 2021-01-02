
<table class="table table-hover js-dataTable-full">
    <thead class="">
    <th>
        NAME
    </th>
    <th>
        BLOOD GROUP
    </th>
    <th>
        REQUEST DATE
    </th>
    <th>
         CONFIRMED
    </th>
    @if(Auth::user()->role===1)
    <th>
        ACTION
    </th>
    @endif
    </thead>
    <tbody>
    @if($requests)
        @foreach($requests as $request)
            <tr>
                <td>
                    {{ $request->user->name}}
                </td>
                <td>
                    {{ $request->blood->name }}
                </td>
                <td>
                    {{ $request->request_date }}
                </td>
                <td>
                    {{ $request->confirmed === 1 ? "True" :"False" }}
                </td>
                @if(Auth::user()->role===1)
                <td>
                    <button type="button" rel="tooltip" title="Edit" class="btn btn-info btn-link btn-sm">
                        <a href="{{ route('editRequest',$request->id) }}" class="text-info">
                            <i class="material-icons">edit</i>
                        </a>
                    </button>
                    @if(!$request->confirm_request)
                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm deleteCourse" data-url="{{route('deleteRequest',$request->id) }}">
                        <i class="material-icons">close</i>
                    </button>
                    @if($request->confirmed)
                    <button type="button" rel="tooltip" title="Edit" class="btn btn-info btn-link btn-sm">
                        <a href="{{ route('confirmRequest',$request->id) }}" onclick="return confirm('Are you sure?');" class="text-info">
                            <i class="material-icons">check</i>
                        </a>
                    </button>
                        @endif
                        @endif
                </td>
                @endif
            </tr>
        @endforeach
    @endif
    </tbody>
</table>
