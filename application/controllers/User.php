<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class User extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('text');
        $this->load->library('session');
        $this->load->model('user_model');
        $this->load->helper('form', 'url');
        $this->load->library('form_validation');
        $this->isLoggedIn();
    }

    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
        $this->global['pageTitle'] = 'CodeInsect : Dashboard';
        $data['alumni'] = $this->user_model->countAlumni();
        $data['diskusi'] = $this->user_model->countBeritaAlumni();
        $data['berita'] = $this->user_model->countBeritaSekolah();
        $this->loadViews("dashboard", $this->global, $data, NULL);
    }



    /**
     * This function is used to load the user list
     */
    function userListing()
    {
        if ($this->isAdmin() == TRUE) {
            $this->loadThis();
        } else {
            $this->load->model('user_model');

            $searchText = $this->input->post('searchText');
            $data['searchText'] = $searchText;

            $this->load->library('pagination');

            $count = $this->user_model->userListingCount($searchText);

            $returns = $this->paginationCompress("userListing/", $count, 5);

            $data['userRecords'] = $this->user_model->userListing($searchText, $returns["page"], $returns["segment"]);

            $this->global['pageTitle'] = 'CodeInsect : User Listing';

            $this->loadViews("users", $this->global, $data, NULL);
        }
    }

    /**
     * This function is used to load the add new form
     */
    function addNew()
    {
        if ($this->isAdmin() == TRUE) {
            $this->loadThis();
        } else {
            $this->load->model('user_model');
            $data['roles'] = $this->user_model->getUserRoles();

            $this->global['pageTitle'] = 'CodeInsect : Add New User';

            $this->loadViews("addNew", $this->global, $data, NULL);
        }
    }


    /**
     * This function is used to check whether email already exist or not
     */
    function checkEmailExists()
    {
        $userId = $this->input->post("userId");
        $email = $this->input->post("email");

        if (empty($userId)) {
            $result = $this->user_model->checkEmailExists($email);
        } else {
            $result = $this->user_model->checkEmailExists($email, $userId);
        }

        if (empty($result)) {
            echo ("true");
        } else {
            echo ("false");
        }
    }
    function checkEmailAlumni()
    {
        $id_alumni = $this->input->post("id_alumni");
        $email = $this->input->post("email");
        $mobile = $this->input->post("mobile");

        if (empty($id_alumni)) {
            $result = $this->user_model->checkEmailAlumni($email, $mobile);
        } else {
            $result = $this->user_model->checkEmailAlumni($email, $mobile, $id_alumni);
        }

        if (empty($result)) {
            echo ("true");
        } else {
            echo ("false");
        }
    }

    /**
     * This function is used to add new user to the system
     */
    function addNewUser()
    {
        if ($this->isAdmin() == TRUE) {
            $this->loadThis();
        } else {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('fname', 'Full Name', 'trim|required|max_length[128]');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|max_length[128]');
            $this->form_validation->set_rules('password', 'Password', 'required|max_length[20]');
            $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches[password]|max_length[20]');
            $this->form_validation->set_rules('role', 'Role', 'trim|required|numeric');
            $this->form_validation->set_rules('mobile', 'Mobile Number', 'required|min_length[10]');

            if ($this->form_validation->run() == FALSE) {
                $this->addNew();
            } else {
                $name = ucwords(strtolower($this->input->post('fname')));
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $roleId = $this->input->post('role');
                $mobile = $this->input->post('mobile');

                $userInfo = array(
                    'email' => $email, 'password' => getHashedPassword($password), 'roleId' => $roleId, 'name' => $name,
                    'mobile' => $mobile, 'createdBy' => $this->vendorId, 'createdDtm' => date('Y-M-d H:i:s')
                );

                $this->load->model('user_model');
                $result = $this->user_model->addNewUser($userInfo);

                if ($result > 0) {
                    $this->session->set_flashdata('success', 'New User created successfully');
                } else {
                    $this->session->set_flashdata('error', 'User creation failed');
                }

                redirect('addNew');
            }
        }
    }


    /**
     * This function is used load user edit information
     * @param number $userId : Optional : This is user id
     */
    function editOld($userId = NULL)
    {
        if ($this->isAdmin() == TRUE || $userId == 1) {
            $this->loadThis();
        } else {
            if ($userId == null) {
                redirect('userListing');
            }

            $data['roles'] = $this->user_model->getUserRoles();
            $data['userInfo'] = $this->user_model->getUserInfo($userId);

            $this->global['pageTitle'] = 'CodeInsect : Edit User';

            $this->loadViews("editOld", $this->global, $data, NULL);
        }
    }


    /**
     * This function is used to edit the user information
     */
    function editUser()
    {
        if ($this->isAdmin() == TRUE) {
            $this->loadThis();
        } else {
            $this->load->library('form_validation');

            $userId = $this->input->post('userId');

            $this->form_validation->set_rules('fname', 'Full Name', 'trim|required|max_length[128]');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|max_length[128]');
            $this->form_validation->set_rules('password', 'Password', 'matches[cpassword]|max_length[20]');
            $this->form_validation->set_rules('cpassword', 'Confirm Password', 'matches[password]|max_length[20]');
            $this->form_validation->set_rules('role', 'Role', 'trim|required|numeric');
            $this->form_validation->set_rules('mobile', 'Mobile Number', 'required|min_length[10]');

            if ($this->form_validation->run() == FALSE) {
                $this->editOld($userId);
            } else {
                $name = ucwords(strtolower($this->input->post('fname')));
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $roleId = $this->input->post('role');
                $mobile = $this->input->post('mobile');

                $userInfo = array();

                if (empty($password)) {
                    $userInfo = array(
                        'email' => $email, 'roleId' => $roleId, 'name' => $name,
                        'mobile' => $mobile, 'updatedBy' => $this->vendorId, 'updatedDtm' => date('Y-m-d H:i:s')
                    );
                } else {
                    $userInfo = array(
                        'email' => $email, 'password' => getHashedPassword($password), 'roleId' => $roleId,
                        'name' => ucwords($name), 'mobile' => $mobile, 'updatedBy' => $this->vendorId,
                        'updatedDtm' => date('Y-m-d H:i:s')
                    );
                }

                $result = $this->user_model->editUser($userInfo, $userId);

                if ($result == true) {
                    $this->session->set_flashdata('success', 'User updated successfully');
                } else {
                    $this->session->set_flashdata('error', 'User updation failed');
                }

                redirect('userListing');
            }
        }
    }


    /**
     * This function is used to delete the user using userId
     * @return boolean $result : TRUE / FALSE
     */
    function deleteUser()
    {
        if ($this->isAdmin() == TRUE) {
            echo (json_encode(array('status' => 'access')));
        } else {
            $userId = $this->input->post('userId');
            $userInfo = array('isDeleted' => 1, 'updatedBy' => $this->vendorId, 'updatedDtm' => date('Y-m-d H:i:s'));

            $result = $this->user_model->deleteUser($userId, $userInfo);

            if ($result > 0) {
                echo (json_encode(array('status' => TRUE)));
            } else {
                echo (json_encode(array('status' => FALSE)));
            }
        }
    }

    /**
     * This function is used to load the change password screen
     */
    function loadChangePass()
    {
        $this->global['pageTitle'] = 'CodeInsect : Change Password';

        $this->loadViews("changePassword", $this->global, NULL, NULL);
    }


    /**
     * This function is used to change the password of the user
     */
    function changePassword()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('oldPassword', 'Old password', 'required|max_length[20]');
        $this->form_validation->set_rules('newPassword', 'New password', 'required|max_length[20]');
        $this->form_validation->set_rules('cNewPassword', 'Confirm new password', 'required|matches[newPassword]|max_length[20]');

        if ($this->form_validation->run() == FALSE) {
            $this->loadChangePass();
        } else {
            $oldPassword = $this->input->post('oldPassword');
            $newPassword = $this->input->post('newPassword');

            $resultPas = $this->user_model->matchOldPassword($this->vendorId, $oldPassword);

            if (empty($resultPas)) {
                $this->session->set_flashdata('nomatch', 'Your old password not correct');
                redirect('loadChangePass');
            } else {
                $usersData = array(
                    'password' => getHashedPassword($newPassword), 'updatedBy' => $this->vendorId,
                    'updatedDtm' => date('Y-m-d H:i:s')
                );

                $result = $this->user_model->changePassword($this->vendorId, $usersData);

                if ($result > 0) {
                    $this->session->set_flashdata('success', 'Password updation successful');
                } else {
                    $this->session->set_flashdata('error', 'Password updation failed');
                }

                redirect('loadChangePass');
            }
        }
    }

    function pageNotFound()
    {
        $this->global['pageTitle'] = 'CodeInsect : 404 - Page Not Found';

        $this->loadViews("404", $this->global, NULL, NULL);
    }
    // END DATA USER

    /**
     * Data Alumni
     */
    public function alumni()
    {

        $this->global['pageTitle'] = 'CodeInsect : Data Alumni';
        $data['x'] = $this->user_model->get_alumni()->result();
        $this->loadViews("alumni/alumni", $this->global, $data, NULL);
    }
    public function tambah_alumni()
    {

        $this->load->model('user_model');
        $data['roles'] = $this->user_model->getUserRoles();
        $data['x'] = $this->user_model->get_alumni()->result();
        $this->global['pageTitle'] = 'CodeInsect : Add New Alumni';

        $this->loadViews("alumni/tambah_alumni", $this->global, $data, NULL);
    }

    public function detailAlum($id)
    {
        $this->load->model('user_model');
        $detail = $this->user_model->detailAlumni($id);
        $data['detail'] = $detail;
        $this->global['pageTitle'] = 'CodeInsect : Detail User ';
        $this->loadViews("alumni/detail_alumni", $this->global, $data, NULL);
    }


    public function newAlumni()
    {
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|min_length[3]|max_length[15]|is_unique[tbl_alumni.username]',
            array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => '%s ini telah digunakan.'
            )
        );
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Konfirmasi Password ', 'required|trim|min_length[3]|matches[password]');
        $this->form_validation->set_rules('status', 'Status', 'trim|required');

        if ($this->form_validation->run() == false) {

            $this->tambah_alumni();
        } else {
            if ($this->input->post('submit')) {
                //Check whether user upload picture



                //Prepare array of user data
                $data = array(
                    'nisn' => $this->input->post('nisn'),
                    'username' => $this->input->post('username'),
                    'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                    'status' => $this->input->post('status'),
                    'img' => 'default.jpg'
                );

                //Pass user data to model
                $insertUserData = $this->user_model->insert($data);

                //Storing insertion status message.
                if ($insertUserData) {
                    $this->session->set_flashdata('success_msg', 'Sukses Menambahkan Alumni !!');
                } else {
                    $this->session->set_flashdata('error_msg', ' Error, Kesalahan Menambahkan Data!!');
                }
            }

            //Form for adding user data
            redirect('alumni');
        }
    }


    function deleteAlumni($id)
    {
        $this->user_model->deletejointable($id);
        $this->session->set_flashdata('success_msg', 'Sukses Mengahpus Berita !!');
        redirect('alumni');
    }

    function prosesupdate()
    {

        $this->form_validation->set_rules(
            'password',
            'Password Baru',
            'required|trim|min_length[3]|matches[password2]'
        );
        $this->form_validation->set_rules(
            'password2',
            'Konfirmasi Password Baru',
            'required|trim|min_length[3]|matches[password]'
        );

        if ($this->form_validation->run() == FALSE) {   //validation fails
            $this->session->set_flashdata('error_msg', 'Error !! Ubah Password');
            redirect('alumni');
        } else {
            $id = $this->input->post('id_alumni');
            $newpassword = $this->input->post('password');
            $password_hash = password_hash($newpassword, PASSWORD_DEFAULT);
            $this->db->set('password', $password_hash);
            $this->db->where('id_alumni', $id);
            $this->db->update('tbl_alumni');
            $this->session->set_flashdata('success_msg', 'Sukses Update Status Data !!');
            redirect('alumni');
        }
    }
    function updateStatusAlumni()
    {
        $id = $this->input->post('id_alumni');
        $data = array(
            'status' => $this->input->post('status'),
            'modified' => date("Y-M-d H:i:s"),
        );
        $this->user_model->updatestatusalumni($id, $data);
        $this->session->set_flashdata('success_msg', 'Sukses Update Status Data !!');

        redirect('alumni');
    }

    // END DATA ALUMNI

    // LIST BERITA ALUMNI DAHSBORD ADMIN DAN USER
    public function BeritaAlumni()
    {
        $this->global['pageTitle'] = 'CodeInsect : List Berita Alumni';
        $data['berita'] = $this->user_model->detailberitaAlumni()->result();
        $this->loadViews("alumni/berita_alumni",  $this->global, $data, NULL);
    }

    function updateStatusBerita()
    {
        $id = $this->input->post('id');
        $data = array(
            'status' => $this->input->post('status'),
            'modified' => date("Y-M-d H:i:s"),
        );
        $this->user_model->updateStatusBerita($id, $data);
        $this->session->set_flashdata('success_msg', 'Sukses Update Status Berita !!');

        redirect('BeritaAlumni');
    }

    function DetailDataBeritaAlumni($id)
    {
        $this->global['pageTitle'] = 'CodeInsect : Detail Berita Alumni';
        $data['detail'] = $this->user_model->detail_BeritaAlumni($id);
        $this->loadViews("alumni/detail_berita_alumni",  $this->global, $data, NULL);
    }

    // KATEGORI BERITA ALUMNI
    function KategoriBeritaAlumni()
    {
        $this->global['pageTitle'] = 'CodeInsect : List Kategori Alumni';
        $data['kategori'] = $this->user_model->detailKategori()->result();
        $this->loadViews("alumni/kategoriAlumni",  $this->global, $data, NULL);
    }
    function deleteKategoriAlumni($id)
    {
        $query = $this->user_model->deleteKategoriAlumni($id);
        $this->session->set_flashdata('success_msg', 'Sukses Mengahpus Berita !!');
        //Form for delete user data
        redirect('KategoriBeritaAlumni');
    }
    function TambahKategori()
    {
        $kategori = $this->input->post('nama_kategori');
        $data = array(
            'nama_kategori' => $kategori,
        );
        $this->user_model->TambahKategori($data, 'tbl_kategori');
        $this->session->set_flashdata('success_msg', 'Sukses Tambah Kategori Berita !!');
        redirect('KategoriBeritaAlumni');
    }
    // END KATEGORI BERITA ALUMNI

    //  BERITA SEKOLAH
    function beritasekolah()
    {

        $this->global['pageTitle'] = 'CodeInsect : Data Berita Sekolah';
        $data['berita'] = $this->user_model->getBeritaSekolah()->result();
        $this->loadViews("alumni/berita_sekolah", $this->global, $data, NULL);
    }
    function TambahBeritaSekolah()
    {
        $data['kategori'] = $this->user_model->get_data_kategori();
        $this->global['pageTitle'] = 'CodeInsect : Tambah Berita Sekolah';
        $this->loadViews("alumni/tambah_berita", $this->global, $data, NULL);
    }
    function saveBeritaSekolah()
    {
        $this->form_validation->set_rules('judul', 'Judul Berita', 'trim|required|max_length[128]');
        $this->form_validation->set_rules('kategori', 'Kateori Berita', 'required|trim');
        $this->form_validation->set_rules('isi', 'Isi Berita', 'trim|required');
        $this->form_validation->set_rules('status', 'Status Berita', 'required');
        if ($this->form_validation->run() == false) {
            $this->TambahBeritaSekolah();
        } else {
            if ($this->input->post('submit')) {
                //Check whether user upload picture
                if (!empty($_FILES['img']['name'])) {
                    $config['upload_path'] = 'assets/img-berita/';
                    $config['allowed_types'] = 'jpg|jpeg|png';
                    $config['file_name'] = $_FILES['img']['name'];
                    //Load upload library and initialize configuration
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);

                    if ($this->upload->do_upload('img')) {
                        $uploadData = $this->upload->data();
                        $img = $uploadData['file_name'];
                    } else {
                        $img = '';
                    }
                } else {
                    $img = '';
                }

                $data = array(
                    'userId' => $this->input->post('userId'),
                    'name' => $this->input->post('name'),
                    'judul' => $this->input->post('judul'),
                    'kategori' => $this->input->post('kategori'),
                    'isi' => $this->input->post('isi'),
                    'status' => $this->input->post('status'),
                    'img' => $img,
                    'created' => date("Y-M-d H:i:s"),
                );

                $insertUserData = $this->user_model->insertBerita('tbl_berita', $data);
                //Storing insertion status message.
                if ($insertUserData) {
                    $this->session->set_flashdata('error_msg', ' Error, Kesalahan Menambahkan Data!!');
                } else {
                    $this->session->set_flashdata('success_msg', 'Sukses Menambahkan Berita Sekolah !!');
                }
            }
            //Form for adding user data
            $this->beritasekolah();
        }
    }

    function EditBeritaSekolah($id)
    {
        $this->form_validation->set_rules('judul', 'Judul Berita', 'trim|required|max_length[128]');
        $this->form_validation->set_rules('kategori', 'Kateori Berita', 'required|trim');
        $this->form_validation->set_rules('isi', 'Isi Berita', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->global['pageTitle'] = 'CodeInsect : Edit Berita Sekolah';
            $data['kategori'] = $this->user_model->get_data_kategori();
            $data['detail'] = $this->user_model->detailberitasekolah($id);
            $this->loadViews("alumni/v_editBerita", $this->global, $data, NULL);
        } else {
            $this->load->library('upload');
            $path = 'assets/img-berita/';
            $config['upload_path'] = 'assets/img-berita/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size']     = '2048';
            $config['file_name'] = $_FILES['img']['name'];

            $this->upload->initialize($config);
            $id = $this->input->post('id');
            $gambar_lama = $this->input->post('new_img');
            if ($_FILES['img']['name']) {
                $field_name = "img";
                if ($this->upload->do_upload($field_name)) {
                    $img = $this->upload->data();
                    //compres ukuran gambar
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = 'assets/img/' . $img['file_name'];
                    $config['create_thumb'] = FALSE;
                    $config['maintain_ratio'] = FALSE;
                    $config['quality'] = '50%';
                    $config['width'] = 500;
                    $config['height'] = 700;
                    $config['new_image'] = 'assets/img/' . $img['file_name'];
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();

                    $data = array(
                        'userId' => $this->input->post('userId'),
                        'name' => $this->input->post('name'),
                        'judul' => $this->input->post('judul'),
                        'kategori' => $this->input->post('kategori'),
                        'isi' => $this->input->post('isi'),
                        'img' => $img['file_name'],
                        'modified' => date("Y-M-d H:i:s"),
                    );
                    @unlink($path, $gambar_lama);
                    $this->db->where('id', $id);
                    $this->db->update('tbl_berita', $data);
                    $this->session->set_flashdata('success_msg', 'Sukses Update Berita !!');
                    //Form for update berita
                    redirect('beritasekolah');
                }
            }
        }
    }

    function deleteBeritaSekolah($id)
    {
        $query = $this->user_model->deleteBeritaSekolah($id);
        $this->session->set_flashdata('success_msg', 'Sukses Mengahpus Berita !!');
        //Form for delete user data
        redirect('beritasekolah');
    }

    function StatusBeritaSekolah()
    {
        $id = $this->input->post('id');
        $data = array(
            'status' => $this->input->post('status'),
            'modified' => date("Y-M-d H:i:s"),
        );
        $this->user_model->StatusBeritaSekolah($id, $data);
        $this->session->set_flashdata('success_msg', 'Sukses Update Status Berita !!');
        redirect('beritasekolah');
    }
    //  END BERITA SEKOLAH


    // KATEGORI BERITA ALUMNI
    function KategoriBeritaSekolah()
    {
        $this->global['pageTitle'] = 'CodeInsect : List Kategori Alumni';
        $data['kategori'] = $this->user_model->detailKategoriSekolah()->result();
        $this->loadViews("alumni/kategorisekolah",  $this->global, $data, NULL);
    }
    function deleteKategoriSekolah($id)
    {
        $query = $this->user_model->deleteKategoriSekolah($id);
        $this->session->set_flashdata('success_msg', 'Sukses Mengahpus Berita !!');
        //Form for delete user data
        redirect('KategoriBeritaSekolah');
    }
    function TambahKategoriSekolah()
    {
        $kategori = $this->input->post('nama_kategori');
        $data = array(
            'nama_kategori' => $kategori,
        );
        $this->user_model->TambahKategoriSekolah($data, 'kategori');
        $this->session->set_flashdata('success_msg', 'Sukses Tambah Kategori Berita !!');
        redirect('KategoriBeritaSekolah');
    }
    // END KATEGORI BERITA ALUMNI
}