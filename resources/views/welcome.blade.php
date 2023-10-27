<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Live Wire Practice</title>
    @livewireStyles
</head>
<body>
    
    @livewire('counter')

    <div>
        <livewire:counter/>
    </div>

    @livewire('profile')


    <div class="property-binding">
        @livewire('property-binding')
    </div>

    <div class="livewire-actions">
        @livewire('liveware-actions')
    </div>

    <div class="livewire-lifecycle-Hook">
        @livewire('liveware-life-cycle-hook')
    </div>

    <br>
    <div class="nestedcomponet">
        <h1><a href="{{ url('nested-component') }}">Nested Component</a></h1>
    </div>

    @livewireScripts

</body>
</html>