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


    <div>
        @livewire('property-binding')
    </div>

    @livewireScripts

</body>
</html>