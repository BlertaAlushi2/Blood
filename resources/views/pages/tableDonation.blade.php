
<table class="table table-hover js-dataTable-full">
    <thead class="">
    <th>
        NAME
    </th>
    <th>
        CAMP
    </th>
    <th>
        BLOOD GROUP
    </th>
    <th>
        DATE
    </th>
    <th>
        ACTION
    </th>
    </thead>
    <tbody>
    @if($donations)
        @foreach($donations as $donation)
            <tr>
                <td>
                    {{ $donation->user->name}}
                </td>
                <td>
                   <a href="{{route('editCamp',$donation->camp->id)}}">{{ $donation->camp->title}}</a>
                </td>
                <td>
                    {{ $donation->blood->name }}
                </td>
                <td>
                    {{ $donation->donation_date }}
                </td>
                <td>
                    <button type="button" rel="tooltip" title="Edit" class="btn btn-info btn-link btn-sm">
                        <a href="{{ route('editDonation',$donation->id) }}" class="text-info">
                            <i class="material-icons">edit</i>
                        </a>
                    </button>
                    @if(!$donation->confirm_donation)
                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm deleteCourse" data-url="{{route('deleteDonation',$donation->id) }}">
                        <i class="material-icons">close</i>
                    </button>
                    <button type="button" rel="tooltip" title="Confirm Donation" class="btn btn-info btn-link btn-sm">
                        <a href="{{ route('confirmDonation',$donation->id) }}" onclick="return confirm('Are you sure?');" class="text-info">
                            <i class="material-icons">check</i>
                        </a>
                    </button>
                        @endif
                </td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>
