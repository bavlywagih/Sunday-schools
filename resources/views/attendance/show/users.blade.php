<div class="tab-pane fade" id="v-pills-users" role="tabpanel" aria-labelledby="v-pills-users-tab" tabindex="0">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">الاسم</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users->whereNotNull('grade_id') as $user)
                <tr>
                    <td>{{ $user->username }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
