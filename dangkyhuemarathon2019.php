
<!doctype html>
<html lang="vi" xmlns:fb="http://ogp.me/ns/fb#"> 
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Hue Marathon 2019">
  <title>HUE MARATHON</title>
  <!-- <link rel="icon" href="img/hue_fav_icon.png" type="image/gif" sizes="16x16"> -->
  <link rel="stylesheet" href="css/bootstrap-material-design.min.css">
  <link rel="stylesheet" type="text/css" href="css/fontawesome-v5-all.css">
  <link rel="stylesheet" type="text/css" href="css/hover.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome-animation.css">
  <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" type="text/css" href="css/slick.css">
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="css/direction-reveal.css">
  <link rel="stylesheet" type="text/css" href="css/style_2019.css">
</head>
<body>
<form id="commentForm" name="commentForm" method="POST" action="register_2019.php" class="mb-0">
  <div class="container-fluid">
    <div class="form-marathon">
      <div class="container">
        <div class="text-center title-form" id="tabRegister">thông tin đăng kí</div>
        <div class="row" style="border-radius: 5px;">
          <div class="col-md-5 bg-form"></div>
          <div class="col-md-7 form-info">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group custom-select-md">
                    <label><span class="text-danger">*</span> Cự ly :</label>
                    <div class="select-md">
                      <i class="fas fa-chevron-down"></i>
                      <select class="form-control" id="priceRule" name="priceRule" required></select>
                    </div>
                    <p id="validatePrice" class="text-danger validate-text-form" style="display: none;">Trường Cự Ly là bắt buộc</p>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="hidden" id="country" name="country" value="VietNam">
                    <label><span class="text-danger">*</span> Email :</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                    <p id="validateEmail" class="text-danger validate-text-form" style="display: none;">Trường Email là bắt buộc</p>
                    <p id="validateEmailRule" class="text-danger validate-text-form" style="display: none;">Email không đúng định dạng</p>
                    <!-- <p id="validateEmailExist" class="text-danger validate-text-form" style="display: none;">Email Đã Tồn Tại</p> -->
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label><span class="text-danger">*</span> Họ tên :</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" required>
                    <p id="validateName" class="text-danger validate-text-form" style="display: none;">Trường Họ Tên là bắt buộc</p>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label><span class="text-danger">*</span> Ngày sinh (Ngày/Tháng/Năm) :</label>
                    <input type="date" id="birthday" name="birthday" maxlength="10" class="form-control" required>
                    <p id="validateDate" class="text-danger validate-text-form" style="display: none;">Trường Ngày Sinh là bắt buộc</p>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group gender-form">
                    <label><span class="text-danger">*</span> Giới tính :</label>
                    <div class="gender-select">
                      <div id="genderForm">
                        <div class="radio"><label><input type="radio" name="gender" id="gender" value="1" checked>Nam</label></div>
                        <div class="radio"><label><input type="radio" name="gender" id="gender" value="0">Nữ</label></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                 <div class="form-group">
                  <label><span class="text-danger">*</span> Điện thoại :</label>
                  <input type="number" class="form-control" id="phone" name="phone" maxlength="10" required>
                  <p id="validatePhone" class="text-danger validate-text-form" style="display: none;">Trường Điện Thoại là bắt buộc</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label><span class="text-danger">*</span> Chứng minh thư :</label>
                  <input type="number" class="form-control" id="cmnd" name="cmnd" maxlength="10" required>
                  <p id="validateCmnd" class="text-danger validate-text-form" style="display: none;">Trường Chứng Minh Thư là bắt buộc</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group custom-select-md">
                  <label><span class="text-danger">*</span> Tỉnh thành phố :</label>
                  <div class="select-md">
                    <i class="fas fa-chevron-down"></i>
                    <select class="form-control" id="cityList" name="cityList" required>
                      <option>Thành Phố Huế</option>
                    </select>
                  </div>
                </div>
                <p id="validateCity" class="text-danger validate-text-form" style="display: none;">Trường Tỉnh - Thành Phố là bắt buộc</p>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label><span class="text-danger">*</span> Địa chỉ :</label>
                  <input type="text" class="form-control" id="address" name="address" required>
                  <p id="validateAddress" class="text-danger validate-text-form" style="display: none;">Trường Địa Chỉ là bắt buộc</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Mã ưu đãi (Nếu Có) :</label>
                  <div class="add-custom-form">
                    <div class="input-md">
                      <input type="text" class="form-control" id="saleRule" name="saleRule">
                    </div>
                    <div class="cr-form text-warning" data-toggle="tooltip" title="Xác nhận mã" id="saleAgree"></div>
                  </div>
                  <p id="validateSaleNull" class="text-danger validate-text-form" style="display: none;">Bạn Chưa Nhập Mã</p>
                  <p id="validateSale" class="text-danger validate-text-form" style="display: none;">Mã Tham Gia Không Chính Xác</p>
                </div>
              </div>
              
              <div class="col-sm-6">
                <div class="form-group custom-select-md">
                  <label>Cỡ áo :</label>
                  <div class="select-md">
                    <i class="fas fa-chevron-down"></i>
                    <select class="form-control" id="shirtRule" name="shirtRule"></select>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group custom-select-md">
                  <label>Nhóm (Nếu Có) :</label>
                  <div class="add-custom-form">
                    <input type="text" id="groupRule" name="groupRule" class="form-control">
                   </div>
                </div>
              </div>
            </div>
            <div class="checkbox">
              <label class="label-check-ok">
                <input type="checkbox" id="checkRules" name="checkRules"  required> Tôi đồng ý với <a href="#" target="_blank"><span class="text-warning"><u><i>Thông tin giải</i></u></span></a> và <a href="#" target="_blank"><span class="text-warning"><u><i>Điều kiện tham gia</i></u></span></a> của Hue Marathon 2019
              </label>
              <label class="label-check-ok-2">
                <input type="checkbox" id="checkRules2" name="checkRules2" required> Tôi xác nhận đồng ý kí vào Cam Kết Đảm Bảo Sức Khỏe <a href="#"><span class="text-warning"><u><i>(<a href="https://huemarathon.com/upload/bancamkettren16t.docx" class="text-warning">Trên 16 tuổi</a> / <a href="https://huemarathon.com/upload/bancamketduoi16t.docx"  class="text-warning">dưới 16 tuổi</a>)</i></u></span></a> & <a href="#"><span class="text-warning"><u><i><a href="https://huemarathon.com/upload/Camketgiamho.docx" class="text-warning">Bản xác nhận người giám hộ</a></i></u></span></a> (dành riêng cho vận động viên dưới 16 tuổi) khi đến nhận race kit vào ngày 27/04/2019
              </label>
              <p class="text-danger">
                <i class="fa fa-exclamation-circle" aria-hidden="true"></i> * Là Những Thông Tin Bắt Buộc
              </p>
              <p class="text-danger">
                <i class="fa fa-exclamation-circle" aria-hidden="true"></i> Vui lòng ký vào “BẢN CAM KẾT ĐỦ ĐIỀU KIỆN SỨC KHOẺ THAM GIA SỰ KIỆN HUE MARATHON 2019” vào ngày nhận RACE KIT 27/04/2019
              </p>
            </div>
          <div class="text-right mt-5">
            <button class="btn btn-warning" id="paymentAfterForm" name="paymentAfterForm">Đăng kí</button>
            <a href="index.php" class="btn text-danger">quay về</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  <div class="modal" id="validateRules">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header cs-modal-header">
          <h4 class="modal-title">Thông Báo</h4>
        </div>
        <div class="modal-body">
          <p class="text-danger text-center text-warning" style="margin-bottom: 0px;"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Bạn cần đồng ý với các điều khoản chính sách của Hue Marathon 2019</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn text-danger" data-dismiss="modal">Đóng</button>
        </div>
      </div>
    </div>
  </div>
</div>
</form>
<a id="back-to-top" href="#" class="back-to-top hvr-float" role="button" title="Click để lên đầu trang"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.2.1.min.js"></script> 
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/direction-aware.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="js/jquery.easeScroll.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap-material-design.js"></script>
<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
<script type="text/javascript" src="js/hm_2019.js"></script>
<script type="text/javascript" src="js/custom-2019.js"></script>
</body>
</html>