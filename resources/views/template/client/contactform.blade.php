<x-mail::message>
# {{ config('app.name') }}

## New contact form entry received.

*******

### Message details

**Name:** {{ $data['name'] }}

**Telephone:** {{ $data['phone'] }}

**Email:** {{ $data['email'] }}

**Subject:** {{ $data['subject'] }}

**Message:** {{ $data['message'] }}


{{--
<x-mail::button :url="''">
Button Text
</x-mail::button> --}}

</x-mail::message>
