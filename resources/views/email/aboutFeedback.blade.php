@component('mail::message')
    <h2 style="text-align: center;">Новое письмо от {{ $user_name }}</h2>

    Имя: {{ $user_name }}
    Email: {{ $user_email }}
    Телефон: {{ $user_phone }}

@endcomponent