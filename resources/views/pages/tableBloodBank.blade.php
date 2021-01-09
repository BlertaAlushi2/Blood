<table class="table table-hover js-dataTable-full">
    <thead class="">
    <th>
        No.
    </th>
    <th>
        NAME
    </th>

    <th>
        QUANTITY
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
                    {{ $blood->blood->name }}
                </td>
                <td>
                    {{ $blood->quantity }} l
                </td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>
