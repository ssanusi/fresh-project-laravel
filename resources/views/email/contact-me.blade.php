@component('mail::message')
    # A Heading

    This is the heading of the email send to you from the application

    - A list
    - A shirt
    - A shoes
    @component('mail::button', ['url' => 'http://www.laracast.com'])
        visit laracast
    @endcomponent
@endcomponent
