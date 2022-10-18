<link rel="stylesheet" href="resources\plugins\select2\dist\css\select2.min.css">
<link rel="stylesheet" href="resources/library/css/CalendarPicker.style.css">
<div class="booking-page">
    <div class="uk-container uk-container-center">
        <div class="booking-container">
            <div class="heading-1 uk-text-center"><span>Đặt lịch giữ chỗ</span></div>
            <form class="main-booking" action="">
                <div class="booking-box">
                    <h3 class="title"><span>1. Nhập thông tin cá nhân</span></h3>
                    <div class="form-field">
                        <label for="">Họ tên (<span>*</span>)</label>
                        <input type="text" name="fullname" value="" class="form-control " placeholder="" autocomplete="off">
                    </div>
                    <div class="form-field">
                        <label for="">Số điện thoại (<span>*</span>)</label>
                        <input type="text" name="phone" value="" class="form-control " placeholder="" autocomplete="off">
                    </div>
                </div>
                <div class="booking-box">
                    <h3 class="title"><span>2. Chọn dịch vụ</span></h3>
                    <select class="booking-services-select" name="services">
                        <option value="cut">CẮT GỘI MASSAGE</option>
                        <option value="skincare">COMBO CHĂM SÓC DA - THƯ GIÃN (DÙNG KÈM)</option>
                        <option value="curling">UỐN HÀN QUỐC 8 CẤP ĐỘ</option>
                    </select>
                </div>
                <div class="booking-box">
                    <h3 class="title"><span>3. Chọn ngày, giờ</span></h3>
                    <div id="showcase-wrapper">
                        <div id="myCalendarWrapper"></div>
                    </div>
                    <div class="time">
                        <?php
                        $owlInit = [
                        'items' => 5,
                        'nav' => true,
                        'margin' => 8,
                        'responsive' => array(
                        0 => array(
                        'items' => 1,
                        ),
                        480 => array(
                        'items' => 2,
                        ),
                        768 => array(
                        'items' => 4,
                        ),
                        960 => array(
                        'items' => 5,
                        ),
                        ),
                        ];
                        ?>
                        <div class="owl-slide">
                            <div class="owl-carousel" data-owl="<?php echo base64_encode(json_encode($owlInit)); ?>">
                                <div class="time-item ">
                                    <div class="box-time-item">8h00</div>
                                    <div class="box-time-item">8h20</div>
                                    <div class="box-time-item">8h40</div>
                                </div>
                                <div class="time-item ">
                                    <div class="box-time-item">9h00</div>
                                    <div class="box-time-item">9h20</div>
                                    <div class="box-time-item">9h40</div>
                                </div>
                                <div class="time-item ">
                                    <div class="box-time-item">10h00</div>
                                    <div class="box-time-item">10h20</div>
                                    <div class="box-time-item">10h40</div>
                                </div>
                                <div class="time-item ">
                                    <div class="box-time-item">11h00</div>
                                    <div class="box-time-item">11h20</div>
                                    <div class="box-time-item">11h40</div>
                                </div>
                                <div class="time-item ">
                                    <div class="box-time-item">12h00</div>
                                    <div class="box-time-item">12h20</div>
                                    <div class="box-time-item">12h40</div>
                                </div>
                                <div class="time-item ">
                                    <div class="box-time-item">13h00</div>
                                    <div class="box-time-item">13h20</div>
                                    <div class="box-time-item">13h40</div>
                                </div>
                                <div class="time-item ">
                                    <div class="box-time-item">14h00</div>
                                    <div class="box-time-item">14h20</div>
                                    <div class="box-time-item">14h40</div>
                                </div>
                                <div class="time-item ">
                                    <div class="box-time-item">15h00</div>
                                    <div class="box-time-item">15h20</div>
                                    <div class="box-time-item">15h40</div>
                                </div>
                                <div class="time-item ">
                                    <div class="box-time-item">16h00</div>
                                    <div class="box-time-item">16h20</div>
                                    <div class="box-time-item">16h40</div>
                                </div>
                                <div class="time-item ">
                                    <div class="box-time-item">17h00</div>
                                    <div class="box-time-item">17h20</div>
                                    <div class="box-time-item">17h40</div>
                                </div>
                                <div class="time-item ">
                                    <div class="box-time-item">18h00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <button class="btn-done">Hoàn tất</button>
                <div class="description uk-text-center">Cắt xong trả tiền, hủy lịch không sao</div>
            </form>
        </div>
    </div>
</div>

<script src="resources/library/js/CalendarPicker.js"></script>
<script src="resources\plugins\select2\dist\js\select2.min.js""></script>


<script>
    const nextYear = new Date().getFullYear() + 1;
    const myCalender = new CalendarPicker('#myCalendarWrapper', {
        // If max < min or min > max then the only available day will be today.
        min: new Date(),
        max: new Date(nextYear, 10) // NOTE: new Date(nextYear, 10) is "Sun Nov 01 <nextYear>"
    });

    // const currentDateElement = document.getElementById('current-date');
    // currentDateElement.textContent = myCalender.value;

    // const currentDayElement = document.getElementById('current-day');
    // currentDayElement.textContent = myCalender.value.getDay();

    // const currentToDateString = document.getElementById('current-datestring');
    // currentToDateString.textContent = myCalender.value.toDateString();


    // myCalender.onValueChange((currentValue) => {
    //     currentDateElement.textContent = currentValue;
    //     currentDayElement.textContent = currentValue.getDay();
    //     currentToDateString.textContent = currentValue.toDateString();

    //     console.log(`The current value of the calendar is: ${currentValue}`);
    // })

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