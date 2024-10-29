<article class="container-team" id="Team">
    <h2 id="Team" style="text-align:left;">Team members</h2>
    <br>
    <div class="container-fluid">
        <div class="row">
            @foreach($team_members as $member)
                <div class="col text-center">
                    <div class="img-fluid">
                        <img src="{{ isset($member->photo) ? asset('images/' . $member->photo) : "" }}" height="150" alt="team member">
                        <p class="teamCenter">{{ $member->name }} - {{ $member->position }}</p>
                        <br>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</article>

