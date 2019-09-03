<!DOCTYPE html>
<html>

<head>

  @component("layouts.head")
  @endcomponent

</head>
<body>
@component("layouts.header")
@endcomponent

  @yield('content')

  @component("layouts.footer")
  @endcomponent

</body>
@component("layouts.script")
@endcomponent
</html>