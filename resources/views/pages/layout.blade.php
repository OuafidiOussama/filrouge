<x-header :title='$title'/>
    <x-nav :LoggedUser='$LoggedUser' :LoggedAdm='$LoggedAdm' :nbr='$nbr'/>
    @yield('content')

<x-footer/>