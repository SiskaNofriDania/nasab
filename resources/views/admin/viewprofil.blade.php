@extends("admin.dashboard.base")
@section("content")

        <!-- Navbar -->
        <!-- End Navbar -->
        <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
      body {
        background-color: #e8e8e8;
      }
      .kartu {
        width: 700px;
        margin: 0 auto;
        margin-top: 100px;
        margin-left:330px;
            box-shadow: 0 0.25rem 0.75rem rgba(0,0,0,.03);
    transition: all .3s;
      }
      .foto {
        padding: 15px;
        margin-left: 75px;
        margin-top:25px;
        width:88% ;
        height:88%;

      }
      tbody {
    font-size: 20px;
    font-weight: 300;
    font:bold;
}
.biodata {
    margin-top: 10px;
    margin-left: 85px;
    padding:1px;
    align:center;
    font-color:black;
}
    </style>
  </head>
  <body>
<div class="container">
  <div class="card kartu">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3" align="center">View Profil</h6>
            </div>
        </div>
    <div class="row">
      <div class="col-md-4 text-center">
      <div class="foto text-center text-uppercase text-xxs font-weight-bolder opacity-7">
        <img src="{{ asset('assets') }}/img/poto.png" alt="">
      </div>
      </div>
      <div class="col-md-8 kertas-biodata">
        <div class="biodata">
        <table width="100%" border="0" style="margin_top:2px">
    <tbody><tr>
        <td valign="top">
        <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
          <tbody>
            <tr>
              <td width="25%" valign="top" class="textt" style="color:black">Username</td>
                <td width="2%">:</td>
                <td style="color:black">Admin</td>
            </tr>
          <tr>
              <td class="textt" style="color:black">Password</td>
                <td>:</td>
                <td style="color:black">********</td>
            </tr>
          <tr>
              <td class="textt" style="color:black">Kontak</td>
                <td>:</td>
                <td style="color:black">08123456</td>
            </tr>

        </tbody></table>
        </td>
    </tr>
    </tbody></table>
  </div>
      </div>
    </div>
  </div>
</div>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
@endsection
