<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title></title>
        <style>
          body {
            font-family: Helvetica;
            font-size: 16px;
            line-height: 24px;
            color: #393939;
            background-color: #f5f5f5;
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
          }
          a {
            color: #69afb7;
          }
          #emailContainer {
            margin: 20px 0;

          }
          #bodyTable{
              width:100% !important;
          }
          #emailBody {
            max-width: 800px;
            background: #FFF;
            border:1px solid #ccc;
            padding: 20px;
            margin: 30px auto;
            border-radius: 10px;
          }
          #emailFooter {
            margin: 30px auto 50px auto;
            max-width: 800px;
          }
          @media only screen and (max-width: 600px){

              .logo{
                  height:auto !important;
                  max-width:133px !important;
                  width:100% !important;
              }
          }
          h1 {
              font-size: 40px;
              line-height: 40px;
              font-weight: 200;
              color: #000;
          }
          h2 {
              font-size: 26px;
              line-height: 33px;
              color: #393939;
              color: #1B8C63;
          }
          .button {
              position: relative;
              display: inline-block;
              background: transparent;
              box-shadow: rgb(0 0 0 / 20%) 0px 0px 1px;
              border-radius: 25px;
              transition-property: border, background, color, box-shadow;
              transition-duration: 0.15s;
              padding: 3px 18px 4px 18px;
              padding: 6px 18px 6px 18px;
              cursor: pointer;
              border: 1px solid #eaeaea;
              color: #393939;
              text-decoration: none;
              transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
              border-color: #1b8c63;
              background: rgba(27, 140, 99, 0.8);
              color: #FFF;
              font-weight: 600;
          }
          /* MONTHLY MAIL CSS */
          .features {
              width:100%;
          }
          .dashboard-number-big {
              font-size: 45px;
              line-height: 50px;
              letter-spacing: 2px;
              display: block;
              margin: 10px 0;
              font-weight: 800;
          }
          .dashboard-number .smaller {
              font-size: 20px;
              line-height: 20px;
              letter-spacing: 0;
              font-weight: 200;
          }
          .tiny {
              font-size: 11px;
          }
          .number-container {
          }
          tr.number-container-summary td {
              padding-bottom: 10px;
              margin-bottom: 10px;
              border-bottom:1px solid #ccc;
          }
          .icon {
              height: 0;
              display: inline-block;
              overflow: hidden;
              cursor: pointer;
              font-size: 0;
              width: 18px;
              padding-top: 18px;
              background-size: 18px 18px;
              position: relative;
              vertical-align: middle;
          }

          .icon.icon-pedestrian {
              background: url(https://telraam.net/images/icons/mobility/pedestrian-orange.svg);
              width: 36px;
              padding-top: 36px;
              background-size: 36px 36px;
              margin-right: 10px;
          }
          .icon.icon-bike {
              background: url(https://telraam.net/images/icons/mobility/bike-green.svg);
              width: 36px;
              padding-top: 36px;
              background-size: 36px 36px;
              margin-right: 10px;
          }
          .icon.icon-car {
              background: url(https://telraam.net/images/icons/mobility/car-blue.svg);
              width: 36px;
              padding-top: 36px;
              background-size: 36px 36px;
              margin-right: 10px;
          }
          .icon.icon-lorry {
              background: url(https://telraam.net/images/icons/mobility/lorry-indigo.svg);
              width: 36px;
              padding-top: 36px;
              background-size: 36px 36px;
              margin-right: 10px;
          }
          .icon.icon-pedestrian,
          .icon.icon-bike,
          .icon.icon-car,
          .icon.icon-lorry {
              float:left;
              position: relative;
              top: -3px;
          }
          .icon.icon-pedestrian.small,
          .icon.icon-bike.small,
          .icon.icon-car.small,
          .icon.icon-lorry.small {
              width: 16px;
              padding-top: 16px;
              background-size: 16px 16px;
              margin-right: 4px;
              margin-top: 4px;
              float: none;
          }
          .text-center {
            text-align: center;
          }
          table.top-numbers {
              border-collapse: collapse;
          }
          table.top-numbers th,
          table.top-numbers td {
              font-size: 12px;
              border: 1px solid #efefef;
          }
          table.top-numbers th {
              background-color: #fafafa;
          }
        </style>
    </head>
    <body>
        <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable" align="center" style="width: 100%; margin: 10px; text-align: center;" >
          <tr>
              <td align="center" valign="top">
                  <table border="0" cellpadding="0" cellspacing="0" width="100%" id="emailContainer" style="text-align: center;" >
                      <tr>
                          <td align="center" valign="top">
                              <table border="0" id="emailHeader">
                                  <tr>
                                      <td align="center" valign="top">
                                          <a href="https://telraam.net"><img src="{{asset('/images/common/telraam-logo.png')}}" class="logo" width="133" alt="" border="0" /></a>
                                      </td>
                                  </tr>
                              </table>
                          </td>
                      </tr>

                      @yield('content')

                      <tr>
                          <td align="center" valign="top">
                              <table border="0" cellpadding="20" cellspacing="0" width="100%" id="emailFooter">
                                  <tr>
                                      <td  valign="top" style="font-size:15px; line-height: 13px; text-align:center;">
                                          <a style="color:#1B8C63;" href="https://telraam.net">https://telraam.net</a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td style="font-size:12px; line-height: 13px; text-align:center;">
                                          Telraam / Rear Window BV<br>
                                          Diestsesteenweg 71<br>
                                          3100 Leuven, Belgium
                                      </td>
                                  </tr>
                              </table>
                          </td>
                      </tr>
                  </table>
              </td>
          </tr>
      </table>
    </body>
</html>
