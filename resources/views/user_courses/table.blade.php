<div class="table-responsive">
    <table class="table" id="userCourses-table">
        <thead>
            <tr>
                <th>@lang('models/userCourses.fields.id')</th>
        <th>@lang('models/userCourses.fields.user_id')</th>
        <th>@lang('models/userCourses.fields.course_id')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($userCourses as $userCourse)
            <tr>
                       <td>{{ $userCourse->id }}</td>
            <td>{{ $userCourse->user_id }}</td>
            <td>{{ $userCourse->course_id }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['userCourses.destroy', $userCourse->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('userCourses.show', [$userCourse->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('userCourses.edit', [$userCourse->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
