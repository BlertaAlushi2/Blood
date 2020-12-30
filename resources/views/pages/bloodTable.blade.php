<table class="table table-hover js-dataTable-full">
    <thead class="">
    <th>
        No.
    </th>
    <th>
        NAME
    </th>
    <th>
        ACTION
    </th>
    </thead>
    <tbody>
    @if(isset($bloods))
        @foreach($bloods as $key=>$blood)
            <tr>
                <td>
                    {{ $key+1 }}
                </td>
                <td>
                    {{ $blood->name }}
                </td>
                <td>
                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm deleteCourse" data-url="{{route('deleteBloodGroup',$blood->id) }}">
                        <i class="material-icons">close</i>
                    </button>
                </td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>
