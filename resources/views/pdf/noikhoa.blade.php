<!DOCTYPE html>
<html>
  <head>
    <title>Hồ sơ bệnh án</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    
  </head>
  <style type="text/css">
    @font-face {
      font-family: "Times New Roman" !important;
      src: url("/storage/fonts/times.ttf");
      font-style: normal;
    }
    @font-face {
      font-family: "Times New Roman" !important;
      src: url("/storage/fonts/timesbd.ttf");
      font-weight: bold;
    }
    @font-face {
      font-family: "Times New Roman" !important;
      src: url("/storage/fonts/timesi.ttf");
      font-style: italic;
    }
    @font-face {
      font-family: "Times New Roman" !important;
      src: url("/storage/fonts/timesbi.ttf");
      font-style: italic;
      font-weight: bold;
    }
    * {
      font-family: "Times New Roman" !important;
    }
    .font-bold {
      font-weight: bold;
    }
    .font-italic {
      font-style: italic;
    }
    span.uppercase {
      text-transform: uppercase;
    }
    .page_break {
      page-break-before: always;
    }
    .center {
    text-align: center;
    }
    table {
    border-collapse: collapse;
    }
  </style>

  <body style="font-family: Times New Roman; font-size: 12px">
    <!-- header -->
    <div class="header">
      <table width="100%">
        <tr>
          <td width="30%">Sở Y tế tỉnh Phú Thọ</td>
          <td width="40%" rowspan="3" style="text-align: center; font-size: 25px">
            <b>HỒ SƠN BỆNH ÁN</b>
          </td>
          {{-- <td width="30%">Mã HSBA: BA0000001</td> --}}
        </tr>
        <tr>
          <td width="30%">TTYT Huyện Cẩm Khê</td>
          <td width="30%">Mã BN: BN0000001</td>
        </tr>

        <tr>
          <td width="30%">Khoa: Cấp cứu &nbsp; Giường: 00</td>
          <td width="30%"></td>
        </tr>
      </table>
    </div>
    <!-- Thông tin bệnh nhân -->
    <div>
      <br />
      <table width="100%">
        <tr>
          <td width="40%"><b>I. HÀNH CHÍNH</b></td>
          <td width="10%"></td>
          <td width="40%"></td>
          <td width="10%" class="center">Tuổi</td>
        </tr>
        <tr>
          <td colspan="2">1. Họ và tên <i>(In hoa)</i>: <span class="uppercase">Khoa Nguyen</span></td>
          <td>2. Sinh ngày: 00/00/1999</td>
          <td class="center">[23]</td>
        </tr>
        <tr>
          <td>3. Giới tính: nam</td>
          <td></td>
          <td>4. Nghề nghiệp: sinh viên</td>
          <td class="center">[00]</td>
        </tr>
        <tr>
          <td>5. Dân tộc: kinh</td>
          <td class="center">[00]</td>
          <td>6. Ngoại kiều: không</td>
          <td class="center">[00]</td>
        </tr>
      </table>
      <table width="100%">
        <tr>
          <td colspan="4">7. Địa chỉ : ABC</td>
        </tr>
        <tr>
          <td width="40%">Huyện (Q, Tx) A</td>
          <td width="10%" class="center">[00]</td>
          <td width="40%">Tỉnh, thành phố B</td>
          <td width="10%" class="center">[00]</td>
        </tr>
        <tr>
          <td>8. Nơi làm việc : HUST</td>
          <td></td>
          <td>9. Đối tượng : BHYT</td>
          <td></td>
        </tr>
        <tr>
          <td>10. BHYT giá trị đến: 00/00/2030</td>
          <td></td>
          <td>Số thẻ BHYT: 0123456789</td>
          <td></td>
        </tr>
        <tr>
          <td colspan="4">
            11. Họ tên, địa chỉ người nhà khi cần báo tin: OK - Đ/C: D
          </td>
        </tr>
        <tr>
          <td colspan="4">Số điện thoại người nhà: 0123456789</td>
        </tr>
      </table>
    </div>
    <!-- Quản lý người bệnh -->
    <div>
      <b> II. QUẢN LÝ NGƯỜI BỆNH </b>
      <br />
      <table width="100%" style="border: 1px solid black">
        <tr>
          <td style="border-right: 1px solid black" width="50%">12. Vào viện: 00/00/2022</td>
          <td>14. Nơi giới thiệu: 00</td>
        </tr>
        <tr>
          <td style="border-right: 1px solid black; border-bottom: 1px solid black">13. Trực tiếp vào: Khoa điều trị</td>
          <td style="border-bottom: 1px solid black">- Vào viện do bệnh này lần thứ: N</td>
        </tr>

        <tr>
          <td width="50%" style="border-right: 1px solid black;">15. Vào Khoa: Khoa điều trị</td>
          <td>
            17. Chuyển viện: 00
            <br />
            - Chuyển đến: 00
          </td>
        </tr>
        <tr>
          <td style="border-right: 1px solid black;">16. Chuyển khoa lần 1: 00</td>
          <td>18. Ra viện:</td>
        </tr>
        <tr>
          <td style="border-right: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chuyển khoa lần 2: 00</td>
          <td>19. Tổng số ngày điều trị: 99</td>
        </tr>
        <tr>
          <td style="border-right: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chuyển khoa lần 3: 00</td>
          <td></td>
        </tr>
      </table>
    </div>
    <!-- Chẩn đoán -->
    <div>
      <table width="100%" style="border-bottom: 1px solid black">
        <tr>
          <td width="40%"><b> III. CHẨN ĐOÁN </b></td>
          <td width="10%" class="center">MÃ</td>
          <td width="40%"></td>
          <td width="10%" class="center">MÃ</td>
        </tr>
        <tr>
          <td style="border-top: 1px solid black; border-left: 1px solid black;">
            20. Nơi chuyển đến: <br />
            OPA
          </td>
          <td style="border-top: 1px solid black; border-right: 1px solid black;" class="center"><br />[00]</td>
          <td style="border-top: 1px solid black; " rowspan="2" style="vertical-align: text-top">
            23. Ra viện: <br />
            + Bệnh chính: buồn
          </td>
          <td style="border-right: 1px solid black; border-top: 1px solid black;" rowspan="2" class="center"><br />[00]</td>
        </tr>
        <tr>
          <td style="border-left: 1px solid black;">
            21. KKB, cấp cứu: <br />
            buồn
          </td>
          <td style="border-right: 1px solid black;" class="center"><br />[00]</td>
        </tr>
        <tr>
          <td style="border-left: 1px solid black;">
            22. Khi vào khoa điều trị: <br />
            sốt rét
          </td>
          <td style="border-right: 1px solid black;" class="center"><br />[00]</td>
          <td >+ Bệnh kèm theo: buồn<br /></td>
          <td style="border-right: 1px solid black;" class="center"><br />[00]</td>
        </tr>
        <tr style="border-right: 1px solid black; border-left: 1px solid black;">
          <td style="border-left: 1px solid black;" colspan="2">+ Thủ thuật: [00]&nbsp;&nbsp; + Phẫu thuật: [00]</td>
          <td style="border-left: 1px solid black; border-right: 1px solid black;" style="border-right: 1px solid black;" colspan="2">+ Tai biến: [00] &nbsp;&nbsp; + Biến chứng: [00]</td>
        </tr>
      </table>
    </div>
    <!-- Tình trạng ra viện -->
    <div>
      <b> IV. TÌNH TRẠNG RA VIỆN </b>
      <table width="100%" style="border: 1px solid black">
        <tr>
          <td style="border-right: 1px solid black;" width="30%" style="vertical-align: text-top">
            24. Kết quả điều trị: <br />
            khỏi
          </td>
          <td >
            26. Tình hình tử vong:
             {{-- {{ \Carbon\Carbon::parse($summary->death_time)->format('H \g\i\ờ m \p\h, \n\g\à\y d \t\h\á\n\g m \n\ă\m Y') }} --}}
            <br />
            00 <br />
            00
          </td>
        </tr>
        <tr>
          <td style="border-right: 1px solid black;"></td>
          <td>
            27. Nguyên nhân chính tử vong: <br />
            00
          </td>
        </tr>
        <tr>
          <td style="border-right: 1px solid black;">
            25. Giải phẫu bệnh <i>(khi có sinh thiết)</i>: <br />
            00
          </td>
          <td>28. Khám nghiệm tử thi: [00]</td>
        </tr>
        <tr>
          <td style="border-right: 1px solid black;"></td>
          <td>29. Chẩn đoán giải phẫu tử thi: 00</td>
        </tr>
      </table>
    </div>
    <!-- ký tên -->
    <table width="100%" style="text-align: center">
      <tr>
        <td width="50%"></td>
        <td><i>Ngày ....... tháng ........ năm.......</i></td>
      </tr>
      <tr>
        <td>
          <b>Giám đốc bệnh viện</b>
        </td>
        <td>
          <b>Trưởng Khoa</b>
        </td>
      </tr>
      <tr>
        <td>
          <br />
        </td>
      </tr>
      <tr>
        <td>
          <br />
        </td>
      </tr>
      <tr>
        <td>Họ và tên :</td>
        <td>Họ và tên :</td>
      </tr>
    </table>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />

    <!--A-Bệnh án-->
    <div width="100%" class="page_break">
      <b>A-BỆNH ÁN</b>
      <table width="100%">
        <!--I.Lý do vào viện-->
        <tr>
          <td width="60%"><b>I. Lý do vào viện:</b> ốm</td>
          <td>Vào ngày thứ 2 của bệnh</td>
        </tr>
        <tr>
          <td colspan="2">
            <b>II. Hỏi bệnh</b>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <b>1. Quá trình bệnh lý:</b>
            <i>(khởi phát, diễn biến, chẩn đoán, điều trị của tuyến dưới v.v...).</i>
          </td>
        </tr>
        <tr>
          <td colspan="2">{!! nl2br(e(00)) !!}</td>
        </tr>
        <tr>
          <td colspan="2">
            <b>2. Tiền sử bệnh:</b>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            + Bản thân: <i>(phát triển thể lực từ nhỏ đến lớn, những bệnh đã mắc, phương pháp ĐTr, tiêm phòng, ăn uống, sinh hoạt vv...)</i>
          </td>
        </tr>
        <tr>
          <td colspan="2">{!! nl2br(e(00)) !!}</td>
        </tr>
        <tr>
          <td colspan="2">Đặc điểm liên quan bệnh:</td>
        </tr>
        <tr>
          <td colspan="2">
            <table width="100%"  style="text-align: center; border:1px solid black;">
              <tr >
                <td style="border-bottom:1px solid black; border-right:1px solid black;" width="5%"><b>TT</b></td>
                <td style="border:1px solid black;" width="10%"></td>
                <td style="border:1px solid black;" width="10%">Ký hiệu</td>
                <td style="border:1px solid black;" width="20%">
                  Thời gian <br />
                  (tính theo tháng)
                </td>
                <td style="border:1px solid black;" width="5%"><b>TT</b></td>
                <td style="border:1px solid black;" width="10%"></td>
                <td style="border:1px solid black;" width="10%">Ký hiệu</td>
                <td style="border:1px solid black;" width="20%">
                  Thời gian <br />
                  (tính theo tháng)
                </td>
              </tr>
              <tr>
                <td style="border:1px solid black;" style="border:1px solid black;">01</td>
                <td style="border:1px solid black;">Dị ứng</td>
                <td style="border:1px solid black;">00</td>
                <td style="border:1px solid black;"><i>(dị nguyên)</i> 01</td>
                <td style="border:1px solid black;">04</td>
                <td style="border:1px solid black;">Thuốc lá</td>
                <td style="border:1px solid black;">00</td>
                <td style="border:1px solid black;">01</td>
              </tr>
              <tr>
                <td style="border-bottom:1px solid black; border-right:1px solid black;">02</td>
                <td style="border:1px solid black;">Ma túy</td>
                <td style="border:1px solid black;">00</td>
                <td style="border:1px solid black;">01</td>
                <td style="border:1px solid black;">05</td>
                <td style="border:1px solid black;">Thuốc lào</td>
                <td style="border:1px solid black;">00</td>
                <td style="border:1px solid black;">01</td>
              </tr>
              <tr>
                <td style="border-bottom:1px solid black; border-right:1px solid black;">03</td>
                <td style="border:1px solid black;">Rượu bia</td>
                <td style="border:1px solid black;">00</td>
                <td style="border:1px solid black;">01</td>
                <td style="border:1px solid black;">06</td>
                <td style="border:1px solid black;">Khác</td>
                <td style="border:1px solid black;">00</td>
                <td style="border:1px solid black;">01</td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td colspan="2">+ Gia đình: <i>(Những người trong gia đình: bệnh đã mắc, đời sống, tinh thần, vật chất v.v...).</i></td>
        </tr>
        <tr>
          <td colspan="2">{!! nl2br(e(00)) !!}</td>
        </tr>
        <tr>
          <td colspan="2">
            <b>III. Khám bệnh</b>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <b>1. Toàn thân: </b> <i>: (ý thức, da niêm mạc, hệ thống hạch, tuyến giáp, vị trí, kích thước, số lượng, di động v.v...)</i>
          </td>
        </tr>
        <tr>
          <td width="50%">{!! nl2br(e(00)) !!}</td>
          <td>
            <table width="100%">
              <tr>
                <td>Mạch</td>
                <td>99</td>
                <td style="text-align: right">lần/ph</td>
              </tr>
              <tr>
                <td>Nhiệt độ</td>
                <td>99</td>
                <td style="text-align: right">°C</td>
              </tr>
              <tr>
                <td>Huyết áp</td>
                <td>99 / 99</td>
                <td style="text-align: right">mmHg</td>
              </tr>
              <tr>
                <td>Nhịp thở</td>
                <td>99</td>
                <td style="text-align: right">lần/phút</td>
              </tr>
              <tr>
                <td>Cân nặng</td>
                <td>99</td>
                <td style="text-align: right">kg</td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <b>2. Các cơ quan</b>
          </td>
        </tr>
        <tr>
          <td colspan="2">+ Tuần hoàn: {!! nl2br(e('ok')) !!}</td>
        </tr>
        <tr>
          <td colspan="2">+ Hô hấp: {!! nl2br(e('ok')) !!}</td>
        </tr>
        <tr>
          <td colspan="2">+ Tiêu hóa: {!! nl2br(e('ok')) !!}</td>
        </tr>
        <tr>
          <td colspan="2">+ Thận- Tiết niệu- Sinh dục: {!! nl2br(e('ok')) !!}</td>
        </tr>
        <tr>
          <td colspan="2">+ Thần Kinh: {!! nl2br(e('ok')) !!}</td>
        </tr>
        <tr>
          <td colspan="2">+ Cơ- Xương- Khớp: {!! nl2br(e('ok')) !!}</td>
        </tr>
        <tr>
          <td colspan="2">+ Tai- Mũi- Họng: {!! nl2br(e('ok')) !!}</td>
        </tr>
        <tr>
          <td colspan="2">+ Mắt: {!! nl2br(e('ok')) !!}</td>
        </tr>
        <tr>
          <td colspan="2">+ Nội tiết, dinh dưỡng và các bệnh lý khác: {!! nl2br(e('ok')) !!}</td>
        </tr>
        <tr>
          <td colspan="2">
            <b>3. Các xét nghiệm cận lâm sàng cần làm:</b>
          </td>
        </tr>
        <tr>
          <td colspan="2">99</td>
        </tr>
        <tr>
          <td colspan="2">99</td>
        </tr>
        <tr>
          <td colspan="2">
            <b>4. Tóm tắt bệnh án: </b>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            Người bệnh Tên <br />
            Nhập viện vì lý do, vào ngày thứ 2 của bệnh <br />
            Qua thăm hỏi và khám bệnh phát hiện các triệu chứng và hội chứng sau: <br />
            + Triệu chứng: {!! nl2br(e('ok')) !!}<br />
            + Hội chứng: {!! nl2br(e('ok')) !!}
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <b>IV. Chẩn đoán khi vào khoa điều trị</b>
          </td>
        </tr>
        <tr>
          <td colspan="2">+ Bệnh chính: <br /> ốm</td>
        </tr>
        <tr>
          <td colspan="2">+ Bệnh kèm theo: <i>(nếu có)</i>: <br /> không</td>
        </tr>
        <tr>
          <td colspan="2">+ Phân biệt: không</td>
        </tr>
        <tr>
          <td colspan="2">
            <b>V. Tiên lượng:</b> <br />
            {!! nl2br(e('khỏi sau 1 tháng')) !!}
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <b>VI. Hướng điều trị:</b> <br />
            {!! nl2br(e('uống thuốc')) !!}
          </td>
        </tr>
        <tr>
          <td width="50%"></td>
          <td>
            <table width="100%" style="text-align: center">
              <tr>
                <td colspan="2"><i>Ngày......tháng......năm</i></td>
              </tr>
              <tr>
                <td colspan="2"><b>Bác sỹ làm bệnh án</b></td>
              </tr>
              <tr>
                <td colspan="2"><br /><br /><br /><br /><br /></td>
              </tr>
              <tr>
                <td colspan="2"><i>Họ và tên</i> <b> Bác sỹ </b></td>
              </tr>
            </table>
          </td>
        </tr>
        <tr width="100%">
          <td colspan="2">
            <table width="100%" class="page_break">
              <tr width="100%" class="page_break">
                <td colspan="2">
                  <b>B. TỔNG KẾT BỆNH ÁN </b>
                </td>
              </tr>
              <tr width="100%">
                <td colspan="4">
                  <b>1. Quá trình bệnh lý và diễn biến lâm sàng: </b> <br />
                  {!! nl2br(e('ok')) !!} {!! nl2br(e('ok')) !!}
                </td>
              </tr>
              <tr>
                <td colspan="4">
                  <b>2. Tóm tắt kết quả xét nghiệm cận lâm sàng có giá trị chẩn đoán:</b> <br />
                  {!! nl2br(e('ok')) !!} <br>
                  {!! nl2br(e('ok')) !!}
                </td>
              </tr>
              <tr>
                <td colspan="4">
                  <b>3. Phương pháp điều trị: </b> <br />
                  {!! nl2br(e('ok')) !!}
                </td>
              </tr>
              <tr>
                <td colspan="4">
                  <b>4. Tình trạng người bệnh ra viện:</b> <br />
                  {!! nl2br(e('ok')) !!}
                </td>
              </tr>
              <tr>
                <td colspan="4">
                  <b>5. Hướng điều trị và các chế độ tiếp theo:</b> <br />
                  {!! nl2br(e('ok')) !!}
                </td>
              </tr>
              <tr>
                <td style="border:1px solid black; text-align: center;" colspan="2" style=""><b>Hồ sơ, phim ảnh</b></td>
                <td style="border:1px solid black; text-align: center;" width="30%" rowspan="4" >
                  <b> Người giao hồ sơ</b> <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  Họ tên
                </td>
                <td style="border:1px solid black; text-align: center;" width="30%" rowspan="8" >
                  Ngày.....tháng.....năm..... <br />
                  <b>Bác sỹ điều trị</b>
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />Họ tên <b>OK</b>
                </td>
              </tr>
              <tr>
                <td style="border:1px solid black; text-align: center">
                  <b>Loại</b>
                </td>
                <td style="border:1px solid black; text-align: center">
                  <b>Số tờ</b>
                </td>
              </tr>
              <tr>
                <td style="border:1px solid black;">&nbsp;- X-quang</td>
                <td style="border:1px solid black;" class="center">99</td>
              </tr>
              <tr>
                <td style="border:1px solid black;">&nbsp;- CT Scanner</td>
                <td style="border:1px solid black;" class="center">99</td>
              </tr>
              <tr>
                <td style="border:1px solid black;">&nbsp;- Siêu âm</td>
                <td style="border:1px solid black;" class="center">99</td>
                <td style="border:1px solid black; text-align: center;" width="30%" rowspan="4">
                  <b> Người nhận hồ sơ</b> <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  Họ tên
                </td>
              </tr>
              <tr>
                <td style="border:1px solid black;">&nbsp;- Xét nghiệm</td>
                <td style="border:1px solid black;" class="center">99</td>
              </tr>
              <tr>
                <td style="border:1px solid black;">&nbsp;- Khác............</td>
                <td style="border:1px solid black;" class="center">99</td>
              </tr>
              <tr>
                <td style="border:1px solid black;">&nbsp;- Toàn bộ hồ sơ</td>
                <td style="border:1px solid black;" class="center">99</td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </div>
  </body>
</html>
