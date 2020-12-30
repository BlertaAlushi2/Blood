
<table class="table table-hover js-dataTable-full">
    <thead class="">
    <th>
        NAME
    </th>
    <th>
        AGE
    </th>
    <th>
        GENDER
    </th>
    <th>
        WEIGHT
    </th>
    <th>
        BLOOD GROUP
    </th>
    <th>
        FREQUENCY
    </th>
    <th>
        CITY
    </th>
    <th>
        COUNTRY
    </th>
    <th>
        STATUS
    </th>
    <th>
        ROLE
    </th>
    <th>
        ACTION
    </th>
    </thead>
    <tbody>
    @if($users)
        @foreach($users as $user)
            <tr>
                <td>
                    {{ $user->name }}
                </td>
                <td>
                    {{ $user->age}}
                </td>
                <td>
                    {{ $user->gender }}
                </td>
                <td>
                    {{ $user->weigh }}
                </td>
                <td>
                    {{ $user->blood_group }}
                </td>
                <td>
                    {{ $user->frequency }}
                </td>
                <td>
                    {{ $user->city}}
                </td>
                <td>
                    {{ $user->country }}
                </td>
                <td>
                    {{ $user->status }}
                </td>
                <td>
                    {{ $user->role }}
                </td>
                <td>
                    <button type="button" rel="tooltip" title="Edit" class="btn btn-info btn-link btn-sm">
                        <a href="{{ route('editUser',$user->id) }}" class="text-info">
                            <i class="material-icons">edit</i>
                        </a>
                    </button>
                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm deleteCourse" data-url="{{route('deleteUser',$user->id) }}">
                        <i class="material-icons">close</i>
                    </button>
                </td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>
