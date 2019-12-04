<?php
?>

<table>
    @foreach($users as $user)
        <tr>
            <td>
                {{ $user->name }}
            </td>
            <td>
                {{ $user->email }}
            </td>
            <td>
                <a href="{{ action("AdminController@ShowAction", ['id' => $user->id]) }}">editovat</a>
            </td>
        </tr>
    @endforeach
</table>
