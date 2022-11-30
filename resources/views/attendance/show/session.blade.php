<div class="tab-pane fade" id="v-pills-session" role="tabpanel" aria-labelledby="v-pills-session-tab" tabindex="0">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">اسم الدرس</th>
                <th scope="col">الحضور</th>
                <th scope="col">الغياب</th>
            </tr>
        </thead>
        <tbody>
            @php $attendedUsersIds = [] @endphp
            @foreach ($sessions as $session)
                <tr>
                    <td>{{ $session->title }}</td>
                    <td>
                        @foreach ($session->attentances as $attentance)
                            {{ $attentance->user->username }} <br>
                            @php array_push($attendedUsersIds, $attentance->user->id) @endphp
                        @endforeach
                    </td>
                    <td>
                        @foreach ($session->grade->users->whereNotIn('id', $attendedUsersIds)->whereNotNull('grade_id') as $user)
                            {{ $user->username }} <br>
                        @endforeach
                    </td>
                    @php $attendedUsersIds = [] @endphp
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
