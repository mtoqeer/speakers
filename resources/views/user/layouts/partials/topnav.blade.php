<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      

      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"><i class="nav-icon fa fa-sign-out"></i> {{ __('Logout') }}</a>
      </li>

      <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link" href="{{route('websingle', ['id' => auth()->user()->id, 'name' => str_slug(auth()->user()->name, '-')])}}"><i class="nav-icon fa fa-eye"></i> View Profile</a>
      </li>
     
      <li class="nav-item d-none d-sm-inline-block">
        <span class="nav-link">Wisdom Speakers Bureau - {{$current->toDayDateTimeString()}} | Your Profile is <span style="color:green;">{{ (auth()->user()->status == 'unapproved') ? "Pending" : "Approved" }} {{ (auth()->user()->featured == 'Yes') ? "& Featured" : " " }}</span></span>
      </li>

    </ul>
  </nav>

  {{-- Logout Button --}}
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  @csrf
</form>