<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="shortcut icon" href="/ad_asset/img/favicon.html">

    <title>@yield('title')</title>

    @include('admin.include.css')
  </head>

  <body>
<style>
      .invalid-feedback{
        display: block;
        width: 100%;
        margin-top: .25rem;
        font-size: 80%;
        color: #dc3545;
      }
</style>
      <section id="container">
        @include('admin.include.header')
        @include('admin.include.sidebarmenu')
          <!--main content start-->
          <section id="main-content">
              <section class="wrapper">
                  @yield('content')
              </section>
          </section>
          <!--main content end-->

         {{-- @include('admin.include.footer') --}}
      </section>
    @include('admin.include.js')
    @yield('js')
  </body>
</html>
