
<table class="table table-hover js-dataTable-full">
    <thead class="">
    <th>
        TITLE
    </th>
    <th>
        CITY
    </th>
    <th>
        STATE
    </th>
    <th>
        ACTION
    </th>
    </thead>
    <tbody>
    @if($camps)
        @foreach($camps as $camp)
            <tr>
                <td>
                    {{ $camp->title }}
                </td>
                <td>
                    {{ $camp->city}}
                </td>
                <td>
                    {{ $camp->state }}
                </td>
                <td>
                    <button type="button" rel="tooltip" title="Edit" class="btn btn-info btn-link btn-sm">
                        <a href="{{ route('editCamp',$camp->id) }}" class="text-info">
                            <i class="material-icons">edit</i>
                        </a>
                    </button>
                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm deleteCourse" data-url="{{route('deleteCamp',$camp->id) }}">
                        <i class="material-icons">close</i>
                    </button>
                </td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>
