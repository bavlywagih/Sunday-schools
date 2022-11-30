<div class="tab-pane fade show active" id="v-pills-grades" role="tabpanel" aria-labelledby="v-pills-grades-tab" tabindex="0">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">الفصل</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($grades as $grade)
                <tr>
                    <td>{{ $grade->title }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


                                                                                        {{-- @foreach($grade->sessions as $session)
                                                            {{ $session->title }} <br>
                                                        @endforeach --}}
