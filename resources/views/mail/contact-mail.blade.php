@component('mail::message', ['data' => $data])
# Introduction

une nouvelle application a été envoyer!!

## Email Envoyer via la platforme 

### Condidateur:

{{ $data['name']}}

### Email:

{{ $data['email']}}

### Mobile:

{{ $data['phone']}}

### Nom de Projet/ Startup:

{{ $data['sujet']}}
        
### description du projet:

{{ $data['message']}}
       

 
@component('mail::button', ['url' => ''])
Print
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
