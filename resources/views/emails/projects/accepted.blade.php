<p>Hi {{ $client->name }},</p>
<p>You have just accepted the project with the title of {{ $project->title }}.</p>
<p>You can view the details of this project by logging on at <strong>{!! url('/') !!}</strong>.</p>
<p>The project PDF has also been attached to this email for you.</p>
<p>If you have any questions or problems be sure to email me, you can do so by replying to this email.</p>
<p>Thanks!<br/>
    {{ DB::table('users')->find(1)->name }}
</p>