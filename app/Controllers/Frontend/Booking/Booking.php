<?php
namespace App\Controllers\Frontend\Booking;
use App\Controllers\FrontendController;

class Booking extends FrontendController{

	protected $data;

	public function __construct(){
        $this->data = [];
        $this->data['module'] = 'booking';
        $this->data['language'] = $this->currentLanguage();
        $this->auth = (isset($_COOKIE[AUTH.'member']) && $_COOKIE[AUTH.'member'] != '' ? json_decode($_COOKIE[AUTH.'member'],TRUE) : []);
	}

	public function index($id = 0, $page = 1){
        $session = session();
        if(isset($this->auth) && is_array($this->auth) && count($this->auth)){
            $this->data['user'] = $this->AutoloadModel->_get_where([
                'select' => 'fullname, id, address, phone, image, gender, birthday, email, cityid, districtid, wardid, description, facebook_link, instagram_link',
                'table' => 'member',
                'where' => [
                    'publish' => 1,
                    'deleted_at' => 0,
                    'id' => $this->auth['id']
                ]
            ]);
        }

        if($this->request->getMethod() == 'post'){
            $validate = $this->validation();
            if ($this->validate($validate['validate'], $validate['errorValidate'])){
                $store = [
                    'fullname' => $this->request->getPost('fullname'),
                    'phone' => $this->request->getPost('phone'),
                    'date' => date('Y-m-d', strtotime($this->request->getPost('date'))),
                    'time' => $this->request->getPost('time'),
                    'services' => $this->request->getPost('services'),
                    'bookingid' => $this->booking_id_generator(),
                    'deleted_at' => 0,
                    'created_at' => $this->currentTime
                ];
                $insert = $this->AutoloadModel->_insert([
                    'table' => 'booking',
                    'data' => $store
                ]);

                if($insert > 0){
                    $session->setFlashdata('message-success', ($this->data['language'] == 'vi' ? 'Đặt lịch thành công!' : 'Appointment successful!'));
                    header('location:'.BASE_URL.HTBOOK.HTSUFFIX);die();
                }else{
                    $session->setFlashdata('message-danger', ($this->data['language'] == 'vi' ? 'Có lỗi xảy ra xin vui lòng thử lại!' : 'An error occurred, please try again!'));
                    header('location:'.BASE_URL.HTBOOK.HTSUFFIX);die();
                }
            }else{
                $this->data['validate'] = $this->validator->listErrors();
            }
        }

        $this->data['template'] = 'frontend/booking/booking/index';
        $this->data['canonical'] = HTBOOK.HTSUFFIX;
        $this->data['general'] = $this->general;
        return view('frontend/homepage/layout/home', $this->data);
	}

    private function booking_id_generator(){
        $order = $this->AutoloadModel->_get_where([
            'select' => 'id',
            'table' => 'booking',
            'order_by' => 'id desc'
        ]);
        $lastId = 0;
        if(!isset($order) || is_array($order) == false || count($order) == 0){
            $lastId = 1;
        }else{
            $lastId = $order['id']+1;
        }
        $orderId = 'CT_'.str_pad($lastId, 6, '0', STR_PAD_LEFT);
        return $orderId;
    }

    private function validation(){
        $validate = [
            'fullname' => 'required',
            'phone' => 'required',
            'services' => 'required',
            'date' => 'required',
            'time' => 'required',
        ];
        $errorValidate = [
            'fullname' => [
                'required' => ($this->data['language'] == 'vi' ? 'Bạn phải nhập vào trường họ và tên' : "You must enter the first and last name field")
            ],
            'phone' => [
                'required' => ($this->data['language'] == 'vi' ? 'Bạn phải nhập vào trường số điện thoại' : "You must enter the phone number field"),
            ],
            'services' => [
                'required' => ($this->data['language'] == 'vi' ? 'Bạn phải chọn dịch vụ' : "You must choose the service"),
            ],
            'date' => [
                'required' => ($this->data['language'] == 'vi' ? 'Bạn phải chọn ngày đặt lịch' : "You must choose a date for your appointment"),
            ],
            'time' => [
                'required' => ($this->data['language'] == 'vi' ? 'Bạn phải chọn giờ đặt lịch' : "You must choose a time for your appointment"),
            ],
        ];
        return [
            'validate' => $validate,
            'errorValidate' => $errorValidate,
        ];
    }
}
