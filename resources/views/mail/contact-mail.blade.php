@component('mail::message', ['data' => $data])
# Introduction

The body of your message.
<table style="width:100%">
        <tr>
            <td>'.$firstname.'  '.$laststname.'</td>
        </tr>
        <tr><td><b>Email Envoyer via la platforme </td></tr>
        <tr><td><b>Condidateur:</b><br> {{ $data['name']}}</td></tr>
        <tr><td><b>Email:</b> <br> {{ $data['email']}}</td></td></tr>
        <tr><td><b>Mobile:</b> <br> {{ $data['phone']}}</td></td></tr>
        <tr><td><b>Nom de Projet/ Startup:</b> <br> {{ $data['sujet']}}</td></td></tr>
        <tr><td><b>description du projet:</b><br>  {{ $data['message']}}</td></td></tr>
       

    </table>
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
