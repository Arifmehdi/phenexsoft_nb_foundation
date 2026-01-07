<table id="example1" class="table table-sm table-bordered table-striped">
    <thead>
    <tr>
        <th width="20">SL</th>
        <th wisth="100">Action</th>
        <th>Name</th>
        <th>Email</th>
        <th>Member Type</th>
        <th>Temp Password</th>
    </tr>
    </thead>
    <tbody class="">
        <?php $i = (($users->currentPage() - 1) * $users->perPage() + 1); ?>

        @foreach($users as $user)
        <tr style="height: {{ $users->count() < 3 ? '100px' : '' }};">
            <td>{{$i++}}</td>
            <td>


                <div class="dropdown show">
                    <a class="btn btn-primary btn-xs dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                        <a class="dropdown-item" href="{{route('admin.edit-user',$user->id)}}"><i class="fas fa-edit"></i> Edit</a>
                        <a class="dropdown-item" href="{{route('admin.show-user',$user->id)}}"><i class="fa fa-eye"></i> Show</a>
                        {{-- <a class="dropdown-item" href="{{ route('patient.allvists',$user->id) }}"><i class="fas fa-users"></i> All Visits</a> --}}
                        <a class="dropdown-item" href="{{route('admin.delete-user',$user->id)}}"><i class="fa fa-trash"> Delete</i></a>

                    </div>
                </div>
            </td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                @if($user->membership_type == 1)
                    Membership
                @elseif($user->membership_type == 2)
                    Volunteer
                @else
                    User
                @endif
            </td>

            <td>{{ $user->password_temp }}</td>
        </tr>

    @endforeach

    </tbody>

</table>

{{ $users->render() }}



