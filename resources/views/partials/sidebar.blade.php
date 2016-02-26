<h4>Player Info</h4>

    First name: {{ Auth::User()->playerDetails->first_name }}<br />
    Surname: {{ Auth::User()->playerDetails->surname }}<br />
    Current Club: {{ Auth::User()->playerDetails->clubDetails->name }}<br />
    Energy: {{ Auth::User()->playerDetails->energy }}<br />
    Money: {{ Html::moneyFormat(Auth::User()->playerDetails->money)}}<br />

<h4>User Links</h4>
<ul class="nav nav-sidebar">
    <li class="list-group-item-sidebar list-group-item"><a href="/events">Events (0)</a></li>
    <li class="list-group-item-sidebar list-group-item"><a href="#">Messages (0)</a></li>
    <li class="list-group-item-sidebar list-group-item"><a href="#">Transfers (0)</a></li>
    <li class="list-group-item-sidebar list-group-item"><a href="#">Items (0)</a></li>
    <li class="list-group-item-sidebar list-group-item"><a href="#">Tutorial</a></li>
    <li class="list-group-item-sidebar list-group-item"><a href="/achievements">Achievements</a></li>
    <li class="list-group-item-sidebar list-group-item"><a href="/myClub">My Club</a></li>
</ul>

<h4>User Settings</h4>
<ul class="nav nav-sidebar">
    <li class="list-group-item-sidebar list-group-item"><a href="#">Change Password</a></li>
    <li class="list-group-item-sidebar list-group-item"><a href="#">Settings</a></li>
    <li class="list-group-item-sidebar list-group-item"><a href="#">Log Out</a></li>
</ul>