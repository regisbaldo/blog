<!DOCTYPE html>
<html>

<head>

  @component("layouts.painel.head")
  @endcomponent

</head>
<body id="page-top">
    
    @component("layouts.painel.nav-top")
    @endcomponent
    
    <div id="wrapper">

        
        @component("layouts.painel.nav-left")
        @endcomponent
        
        <div id="content-wrapper">

                @yield('content')
        
                @component("layouts.painel.footer")
                @endcomponent      

        </div>
          

    </div>

</body>
@component("layouts.painel.scripts")
@endcomponent
</html>