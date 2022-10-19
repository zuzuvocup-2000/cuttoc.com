<?php 
    $service = explode('|', $general['booking_service']);
    $time = explode('|', $general['booking_time']);
?>

<link rel="stylesheet" href="resources\plugins\select2\dist\css\select2.min.css">
<link rel="stylesheet" href="resources/library/css/CalendarPicker.style.css">
<div class="booking-page">
    <div class="uk-container uk-container-center">
        <div class="booking-container">
            <div class="heading-1 uk-text-center"><span><?php echo $language == 'vi' ? 'Đặt lịch giữ chỗ' : 'Make a reservation' ?></span></div>
            <form class="main-booking" action="frontend/booking/booking/index" method="post">
                <?php echo  (!empty($validate) && isset($validate)) ? '<div class="alert alert-danger">'.$validate.'</div>'  : '' ?>
                <div class="booking-box">
                    <h3 class="title"><span>1. <?php echo $language == 'vi' ? 'Nhập thông tin cá nhân' : 'Enter personal information' ?></span></h3>
                    <div class="form-field">
                        <label for=""><?php echo $language == 'vi' ? 'Họ tên' : 'Fullname' ?> (<span>*</span>)</label>
                        <input type="text" name="fullname" value="<?php echo isset($user['fullname']) ? $user['fullname'] : '' ?>" class="form-control " placeholder="" autocomplete="off">
                    </div>
                    <div class="form-field">
                        <label for=""><?php echo $language == 'vi' ? 'Số điện thoại' : 'Phone' ?> (<span>*</span>)</label>
                        <input type="text" name="phone" value="<?php echo isset($_GET['phone']) ? $_GET['phone'] : (isset($user['phone']) ? $user['phone'] : '') ?>" class="form-control " placeholder="" autocomplete="off">
                    </div>
                </div>
                <div class="booking-box">
                    <h3 class="title"><span>2. <?php echo $language == 'vi' ? 'Chọn dịch vụ' : 'Choose a service' ?></span></h3>
                    <select class="booking-services-select" name="services">
                        <option value=""><?php echo $language == 'vi' ? 'Chọn dịch vụ' : 'Choose a service' ?></option>
                        <?php if(isset($service) && is_array($service) && count($service)){
                            foreach ($service as $key => $value) {
                        ?>
                        <option value="<?php echo $value ?>"><?php echo $value ?></option>
                        <?php }} ?>
                    </select>
                </div>
                <input type="hidden" name="time" class="hidden-time">
                <input type="hidden" name="date" class="hidden-date">
                <div class="booking-box">
                    <h3 class="title"><span>3. <?php echo $language == 'vi' ? 'Chọn ngày, giờ' : 'Choose date and time' ?></span></h3>
                    <div id="showcase-wrapper">
                        <div id="myCalendarWrapper"></div>
                    </div>
                    <div class="time">
                        <div class="time-item uk-grid uk-grid-small uk-grid-width-large-1-4 uk-grid-width-medium-1-3 uk-grid-width-small-1-2 uk-clearfix">
                        <?php if(isset($time) && is_array($time) && count($time)){
                            foreach ($time as $key => $value) {
                        ?>
                        <div class="box-item">
                            <div class="box-time-item" onclick="$('.hidden-time').val($(this).text())"><?php echo $value ?></div>
                        </div>
                        <?php }} ?>
                    </div>
                </div>
                
                <button class="btn-done" type="submit"><?php echo $language == 'vi' ? 'Hoàn tất' : 'Submit' ?></button>
                <div class="description uk-text-center"><?php echo $language == 'vi' ? 'Cắt xong trả tiền, hủy lịch không sao' : "After cutting the payment, it's okay to cancel the schedule" ?></div>
            </form>
        </div>
    </div>
</div>

<script src="resources/library/js/CalendarPicker.js"></script>
<script src="resources\plugins\select2\dist\js\select2.min.js"></script>


<script>
    const nextYear = new Date().getFullYear() + 1;
    const myCalender = new CalendarPicker('#myCalendarWrapper', {
        // If max < min or min > max then the only available day will be today.
        min: new Date(),
        max: new Date(nextYear, 10) // NOTE: new Date(nextYear, 10) is "Sun Nov 01 <nextYear>"
    });
    $('.hidden-date').val(myCalender.value.toDateString())
    myCalender.onValueChange((currentValue) => {
        $('.hidden-date').val(currentValue.toDateString());
    })

    $(document).ready(function() {
        $('.booking-services-select').select2();
    });

    $(document).ready(function(){
        $('.box-time-item').on('click', function(){
            let _this = $(this)
            var box_time_item = $('.box-time-item');
            box_time_item.removeClass('choose-time');
            _this.addClass('choose-time');
            return false;
        });
    });
</script>