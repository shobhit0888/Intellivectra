
@if (isset($title))
<div class='navigationPane' style="position: absolute; top: 380px !important;" style="backround-color:black;">
    <ul
      class="nav flex-nowrap widthFitContent width200Percent mx-auto nav-pills align-items-center justify-content-center"
      id="pills-tab" role="tablist" style="margin-top:-4px;">
      <li class="nav-item">
        <span class="nav-link text-white py-1 px-4" style="font-weight:600; font-size:22px;">Professional IT Services</span>
      </li>


      <li class="nav-item" role="presentation">
        <a class="nav-link  text-white py-1 px-4 {{ $title == 'cloud' ? 'active' : ''}}"  href="{{ route('services.cloud') }}"
         type="buttn">Cloud
          Transformation</a>
      </li IT Services>
      <li class="nav-item" role="presentation">
        <a class="nav-link text-white py-1 px-4 {{ $title == 'lifecycle' ? 'active' : ''}}"  href="{{ route('services.lifecycle') }}" aria-selected="false">IT
          Lifecycle Management</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link text-white py-1 px-4 {{ $title == 'it-security' ? 'active' : ''}}" href="{{ route('services.security') }}" aria-selected="false">IT
          Security Audit Services</a>
      </li>

    </ul>
  </div>
@endif

