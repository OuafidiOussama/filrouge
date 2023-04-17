<x-header :title='$title'/>
    <x-nav :LoggedUser='$LoggedUser' :LoggedAdm='$LoggedAdm'/>
    @yield('content')

<x-footer/>