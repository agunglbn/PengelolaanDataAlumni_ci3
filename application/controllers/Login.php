<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Login (LoginController)
 * Login class to control to authenticate user credentials and starts user's session.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Login extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('form_validation');
    }

    /**
     * Index Page for this controller.
     */
    public function index()
    {
        $this->isLoggedIn();
    }



    /**
     * This function used to check the user is logged in or not
     */
    function isLoggedIn()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');

        if (!isset($isLoggedIn) || $isLoggedIn != TRUE) {
            $this->load->view('login');
        } else {
            redirect('/dashboard');
        }
    }


    /**
     * This function used to logged in user
     */
    public function loginMe()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[128]|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|max_length[32]');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $result = $this->login_model->loginMe($email, $password);

            if (count($result) > 0) {
                foreach ($result as $res) {
                    $sessionArray = array(
                        'userId' => $res->userId,
                        'role' => $res->roleId,
                        'roleText' => $res->role,
                        'name' => $res->name,
                        'isLoggedIn' => TRUE
                    );

                    $this->session->set_userdata($sessionArray);
                    redirect('/dashboard');
                }
            } else {
                $this->session->set_flashdata('error', 'Email or password Wrong !!');

                redirect('/login');
            }
        }
    }

    /**
     * This function used to load forgot password view
     */
    public function forgotPassword()
    {
        $this->load->view('forgotPassword');
    }

    /**
     * This function used to generate reset password request link
     */
    function resetPasswordUser()
    {
        $status = '';

        $this->load->library('form_validation');

        $this->form_validation->set_rules('login_email', 'Email', 'trim|required|valid_email|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $this->forgotPassword();
        } else {
            $email = $this->input->post('login_email');

            if ($this->login_model->checkEmailExist($email)) {
                $encoded_email = urlencode($email);

                $this->load->helper('string');
                $data['email'] = $email;
                $data['activation_id'] = random_string('alnum', 15);
                $data['createdDtm'] = date('Y-m-d H:i:s');
                $data['agent'] = getBrowserAgent();
                $data['client_ip'] = $this->input->ip_address();

                $save = $this->login_model->resetPasswordUser($data);

                if ($save) {
                    $data1['reset_link'] = base_url() . "resetPasswordConfirmUser/" . $data['activation_id'] . "/" . $encoded_email;
                    $userInfo = $this->login_model->getCustomerInfoByEmail($email);

                    if (!empty($userInfo)) {
                        $data1["name"] = $userInfo[0]->name;
                        $data1["email"] = $userInfo[0]->email;
                        $data1["message"] = "Reset Your Password";
                    }

                    $sendStatus = resetPasswordEmail($data1);

                    if ($sendStatus) {
                        $status = "send";
                        setFlashData($status, "Reset password link sent successfully, please check mails.");
                    } else {
                        $status = "notsend";
                        setFlashData($status, "Email has been failed, try again.");
                    }
                } else {
                    $status = 'unable';
                    setFlashData($status, "It seems an error while sending your details, try again.");
                }
            } else {
                $status = 'invalid';
                setFlashData($status, "This email is not registered with us.");
            }
            redirect('/forgotPassword');
        }
    }

    // This function used to reset the password 
    function resetPasswordConfirmUser($activation_id, $email)
    {
        // Get email and activation code from URL values at index 3-4
        $email = urldecode($email);

        // Check activation id in database
        $is_correct = $this->login_model->checkActivationDetails($email, $activation_id);

        $data['email'] = $email;
        $data['activation_code'] = $activation_id;

        if ($is_correct == 1) {
            $this->load->view('newPassword', $data);
        } else {
            redirect('/login');
        }
    }

    // This function used to create new password
    function createPasswordUser()
    {
        $status = '';
        $message = '';
        $email = $this->input->post("email");
        $activation_id = $this->input->post("activation_code");

        $this->load->library('form_validation');

        $this->form_validation->set_rules('password', 'Password', 'required|max_length[20]');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches[password]|max_length[20]');

        if ($this->form_validation->run() == FALSE) {
            $this->resetPasswordConfirmUser($activation_id, urlencode($email));
        } else {
            $password = $this->input->post('password');
            $cpassword = $this->input->post('cpassword');

            // Check activation id in database
            $is_correct = $this->login_model->checkActivationDetails($email, $activation_id);

            if ($is_correct == 1) {
                $this->login_model->createPasswordUser($email, $password);

                $status = 'success';
                $message = 'Password changed successfully';
            } else {
                $status = 'error';
                $message = 'Password changed failed';
            }

            setFlashData($status, $message);

            redirect("/login");
        }
    }


    //REGISTER/LOGIN  ALUMNI 
    public function viewAlumniLogin()
    {
        if ($this->session->userdata('login')) {
            redirect('dashboardAlum');
        } else {
            $this->load->view('alumni/login_alumni');
        }
    }
    public function tampilRegister()
    {
        $this->load->view('alumni/regis_alumni');
    }
    function regisAlumni()
    {
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        $this->form_validation->set_rules(
            'nisn',
            'NISN',
            'trim|required|min_length[15]|max_length[15]',
            array(
                'required'      => '%s Tidak Boleh Kosong',
                'min_length' => '%s 15 Karakter'
            )
        );
        // $this->form_validation->set_rules('nama', 'nama', 'trim|required|max_length[128]');
        // $this->form_validation->set_rules(
        //     'email',
        //     'Email',
        //     'trim|required|valid_email|max_length[128]|is_unique[tbl_alumni.email]',
        //     array(
        //         'required'      => 'Form Tidak Boleh Kosong %s.',
        //         'is_unique'     => '%s ini telah digunakan.'
        //     )
        // );
        // $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'trim|required');
        // $this->form_validation->set_rules('mobile', 'Mobile Number', 'required|min_length[10]');
        // $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required|max_length[128]');
        // $this->form_validation->set_rules('ni', 'Nama Instansi', 'trim|required');
        // $this->form_validation->set_rules('tmsk', 'Tanggal masuk', 'trim|required|max_length[4]');
        // $this->form_validation->set_rules('tklr', 'Tanggal Keluar', 'trim|required|max_length[4]');
        // $this->form_validation->set_rules('pekerjaan', 'Status', 'trim|required');
        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|min_length[5]|max_length[15]|is_unique[tbl_alumni.username]',
            array(
                'required'      => '%s Tidak Boleh Kosong',
                'min_length'     => 'Minimal %s 3 Karakter.',
                'max_length' => 'Minimal %s 15 Karakter'
            )
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'trim|required|min_length[5]',
            array(
                'required'      => '%s Tidak Boleh Kosong',
                'min_length'     => 'Minimal %s 5 Karakter.'
            )
        );
        $this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');


        if ($this->form_validation->run() == false) {

            $this->tampilRegister();
        } else {
            $answer = $this->input->post('nama_pegawai');
            $pegawai = $this->db->get_where('pegawai', ['nama_pegawai' => $answer])->row_array();
            //Prepare array of user data
            if ($pegawai) {
                $data = array(
                    'nisn' => $this->input->post('nisn'),
                    'username' => $this->input->post('username'),
                    'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                    'img' => 'default.jpg'
                );

                //Pass user data to model
                $insertUserData = $this->login_model->regisAlumni($data);

                //Alert Ketika Proses
                if ($insertUserData) {
                    $this->session->set_flashdata('success_msg', 'Sukses Register Akun !!');
                } else {
                    $this->session->set_flashdata('error_msg', ' Error, Kesalahan Register Akun!!');
                }


                //Form Ketika di tambahkan
                $this->viewAlumniLogin();
            } else {

                $this->session->set_flashdata('error_msg', ' Error, Nama Pegawai Tidak Ditemukan !!');
                $this->tampilRegister();
            }
        }
    }

    //LOGIN ALUMNI

    public function loginAlumni()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->viewAlumniLogin();
        } else {
            $this->_login();
        }
    }



    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tbl_alumni', ['username' => $username])->row_array();

        // Jika usernya ada
        if ($user) {
            if ($user['status'] == 1) {
                // Cek Password 
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'id_alumni' => $user['id_alumni'],
                        'login' => true

                    ];
                    $this->session->set_userdata($data);
                    redirect('dashboardAlum');
                } else {
                    $this->session->set_flashdata('error_msg', 'Password Salah !!');
                    redirect('viewAlumniLogin');
                }
            } else {
                $this->session->set_flashdata('error_msg', 'Akun Tidak di Aktivisasi, Silahkan Hubungin Admin !!');
                redirect('viewAlumniLogin');
            }
        } else {
            $this->session->set_flashdata('error_msg', 'Username Tidak Terdaftar !!');
            redirect('viewAlumniLogin');
        }
    }

    // Logout
    public function logoutAlumni()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('success_msg', ' Sukses, Telah Logout  !!');
        redirect('viewAlumniLogin');
    }
}