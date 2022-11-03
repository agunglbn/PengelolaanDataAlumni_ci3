<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Login (LoginController)
 * Login class to control to authenticate user credentials and starts user's session.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Alumni extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('text');
        $this->load->model('alumni_model');
        $this->load->library('session');
        $this->load->library('form_validation');
        if ($this->session->userdata('login') != true) {
            redirect(base_url("viewAlumniLogin"));
        }
    }

    public function index()
    {
        $data['title'] = 'Dahsbord';
        $data['user'] = $this->db->get_where('tbl_alumni', ['username' =>
        $this->session->userdata('username')])->row_array();
        $this->load->view('dashbordAlum/header', $data);
        $this->load->view('dashbordAlum/mid');
        $this->load->view('dashbordAlum/footer');
    }

    /**function Loggin_()
    {
        if ($this->session->userdata('login')) {
            $data['user'] = $this->db->get_where('tbl_alumni', ['username' =>
            $this->session->userdata('username')])->row_array();
            $this->load->view('dashbordAlum/header', $data);
        } else {
            redirect('viewAlumniLogin');
        }
    }*/

    public function profileAlumni()
    {
        $data['user'] = $this->db->get_where('tbl_alumni', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'Profile Alumni';
        $this->load->view('dashbordAlum/header', $data);
        $this->load->view('dashbordAlum/profile');
        $this->load->view('dashbordAlum/footer');
    }




    public function editProfile()
    {

        $data['user'] = $this->db->get_where('tbl_alumni', ['id_alumni' =>
        $this->session->userdata('id_alumni')])->row_array();
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        $this->form_validation->set_rules('nama', 'nama', 'trim|required|max_length[128]');
        $this->form_validation->set_rules('mobile', 'Mobile Number', 'required|min_length[10]|max_length[13]');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required|max_length[128]');
        $this->form_validation->set_rules('ni', 'Nama Instansi', 'trim|required');
        $this->form_validation->set_rules('tmsk', 'Tanggal masuk', 'trim|required|max_length[4]');
        $this->form_validation->set_rules('tklr', 'Tanggal Keluar', 'trim|required|max_length[4]');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'trim|required');
        /*   $this->form_validation->set_rules(
            'email',
            'email',
            'required|min_length[3]|max_length[15]|is_unique[tbl_alumni.email]',
            array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => '%s ini telah digunakan.'
            )
        );*/
        if ($this->form_validation->run() == false) {
            $this->profileAlumni();
        } else {
            $this->load->library('upload');
            $path = 'assets/img/';
            $config['upload_path'] = 'assets/img/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size']     = '3048';
            $config['file_name'] = $_FILES['img']['name'];

            $this->upload->initialize($config);
            $id = $this->input->post('id_alumni');
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

                    $user = ([

                        'username' => $this->input->post('username'),
                        'nama' => $this->input->post('nama'),
                        'mobile' => $this->input->post('mobile'),
                        'email' => $this->input->post('email'),
                        'nama_instansi' => $this->input->post('ni'),
                        't_msk' => $this->input->post('tmsk'),
                        't_tmt' => $this->input->post('tklr'),
                        'pekerjaan' => $this->input->post('pekerjaan'),
                        'jenis_kelamin' => $this->input->post('jk'),
                        'tgl_lahir' => $this->input->post('tgllahir'),
                        'alamat' => $this->input->post('alamat'),
                        'modified' => date("Y-m-d H:i:s"),
                        'img' => $img['file_name']

                    ]);
                    $user1 = ([
                        'username' => $this->input->post('username'),
                        'img' => $img['file_name'],
                    ]);


                    @unlink($path, $gambar_lama);
                    $data = array_merge($user);
                    $where = array('id_alumni' => $id);
                    $query = $this->alumni_model->updatejointable('tbl_alumni', $data, $where);
                    $query2 = $this->alumni_model->updatejointable('tbl_diskusi', $user1, $where);

                    if ($query && $query2 == true) {
                        $this->session->set_flashdata('success_msg', 'Sukses Update Profil !!');
                        redirect('profileAlumni');
                    } else {
                        $this->session->set_flashdata('error_msg', 'Error, Update Profil !!');
                        redirect('profileAlumni');
                    }
                }
            }
        }
        if ($_FILES['img'] != null) {
            $id = $this->input->post('id_alumni');
            $data = array(
                'username' => $this->input->post('username'),
                'nama' => $this->input->post('nama'),
                'mobile' => $this->input->post('mobile'),
                'email' => $this->input->post('email'),
                'nama_instansi' => $this->input->post('ni'),
                't_msk' => $this->input->post('tmsk'),
                't_tmt' => $this->input->post('tklr'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'jenis_kelamin' => $this->input->post('jk'),
                'tgl_lahir' => $this->input->post('tgllahir'),
                'alamat' => $this->input->post('alamat'),
                'modified' => date("Y-m-d H:i:s"),
            );

            $this->db->where('id_alumni', $id);
            $this->db->update('tbl_alumni', $data);
            $this->session->set_flashdata('success_msg', 'Sukses Update Profil !!');
            //Form for update berita
            redirect('profileAlumni');
        }
    }


    public function TambahBeritaAlumni()
    {
        $data['user'] = $this->db->get_where('tbl_alumni', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['kategori'] = $this->alumni_model->get_data_kategori();
        $data['title'] = 'Form Diskusi';
        $this->load->view('dashbordAlum/header', $data);
        $this->load->view('dashbordAlum/v_tambah_berita', $data);
        $this->load->view('dashbordAlum/footer');
    }

    public function tambahdiskusi()
    {
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        $this->form_validation->set_rules('judul', 'Judul Berita', 'trim|required|max_length[128]');
        $this->form_validation->set_rules('kategori', 'Kateori Berita', 'required|trim');
        $this->form_validation->set_rules('isi', 'Isi Berita', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->TambahBeritaAlumni();
        } else {
            $data = array(
                'id_alumni' => $this->input->post('id_alumni'),
                'username' => $this->input->post('username'),
                'judul' => $this->input->post('judul'),
                'kategori' => $this->input->post('kategori'),
                'isi' => $this->input->post('isi'),
                'img' => $this->input->post('img'),
            );
            $insertUserData = $this->alumni_model->insert_diskusi($data);

            //Storing insertion status message.
            if ($insertUserData) {
                $this->session->set_flashdata('success_msg', 'Sukses Menambahkan Berita !!');
            } else {
                $this->session->set_flashdata('error_msg', ' Error, Kesalahan Menambahkan Berita!!');
            }
            //Form for adding user data
            redirect('listBeritaAlumni');
        }
    }

    public function listBeritaAlumni()
    {
        $data['user'] = $this->db->get_where('tbl_alumni', ['id_alumni' =>
        $this->session->userdata('id_alumni')])->row_array();
        $data['title'] = 'List Berita ';
        $data['berita'] = $this->alumni_model->getberita();
        $this->load->view('dashbordAlum/header', $data);
        $this->load->view('dashbordAlum/berita_alumni', $data);
        $this->load->view('dashbordAlum/footer');
    }

    public function deleteBeritaAlumni($id)
    {
        $query = $this->alumni_model->deleteBeritaAlumni($id);
        $this->session->set_flashdata('success_msg', 'Sukses Mengahpus Berita !!');
        //Form for delete user data
        redirect('listBeritaAlumni');
    }


    public function editBerita($id)
    {
        $data['user'] = $this->db->get_where('tbl_alumni', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'Update Berita ';

        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        $this->form_validation->set_rules('judul', 'Judul Berita', 'trim|required|max_length[128]');
        $this->form_validation->set_rules('kategori', 'Kateori Berita', 'required|trim');
        $this->form_validation->set_rules('isi', 'Isi Berita', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['kategori'] = $this->alumni_model->get_data_kategori();
            $data['detail'] = $this->alumni_model->detailberitaAlumni($id);
            $this->load->view('dashbordAlum/header', $data);
            $this->load->view('dashbordAlum/v_editberita', $data);
            $this->load->view('dashbordAlum/footer');
        } else {
            $id = $this->input->post('id');
            $data = array(
                'id_alumni' => $this->input->post('id_alumni'),
                'username' => $this->input->post('username'),
                'judul' => $this->input->post('judul'),
                'kategori' => $this->input->post('kategori'),
                'isi' => $this->input->post('isi'),
                'img' => $this->input->post('img'),
            );

            $this->db->where('id', $id);
            $this->db->update('tbl_diskusi', $data);
            $this->session->set_flashdata('success_msg', 'Sukses Update Berita !!');
            //Form for update berita
            redirect('listBeritaAlumni');
        }
    }

    public function dataAlumni()
    {
        $data['user'] = $this->db->get_where('tbl_alumni', ['id_alumni' =>
        $this->session->userdata('id_alumni')])->row_array();
        $this->load->model('user_model');
        $data['x'] = $this->user_model->get_alumni()->result();
        $data['title'] = 'List Data Alumni ';
        $this->load->view('dashbordAlum/header', $data);
        $this->load->view('dashbordAlum/data_alumni', $data);
        $this->load->view('dashbordAlum/footer');
    }
    public function detailProfilAlumni($id)
    {
        $data['user'] = $this->db->get_where('tbl_alumni', ['id_alumni' =>
        $this->session->userdata('id_alumni')])->row_array();
        $data['title'] = 'Profile Data Alumni ';
        $this->load->model('user_model');
        $detail = $this->user_model->detailAlumni($id);
        $data['detail'] = $detail;
        $this->load->view('dashbordAlum/header', $data);
        $this->load->view('dashbordAlum/detail_alumni', $data);
        $this->load->view('dashbordAlum/footer');
    }

    //change password alumni
    function ChangePasswordAlumni()
    {
        $data['user'] = $this->db->get_where('tbl_alumni', ['id_alumni' =>
        $this->session->userdata('id_alumni')])->row_array();
        $data['title'] = 'Change Password Profile ';

        $this->form_validation->set_rules('oldpassword', 'Password Lama', 'required|trim');
        $this->form_validation->set_rules('newpassword', 'Password Baru', 'required|trim|min_length[3]|matches[newpassword2]');
        $this->form_validation->set_rules('newpassword2', 'Konfirmasi Password Baru', 'required|trim|min_length[3]|matches[newpassword]');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('dashbordAlum/header', $data);
            $this->load->view('dashbordAlum/change_password', $data);
            $this->load->view('dashbordAlum/footer');
        } else {
            $oldpassword = $this->input->post('oldpassword');
            $newpassword = $this->input->post('newpassword');
            if (!password_verify($oldpassword, $data['user']['password'])) {
                $this->session->set_flashdata('error_msg', ' Error, Password Tidak Sesuai !!');
                redirect('ChangePasswordAlumni');
            } else {
                if ($oldpassword == $newpassword) {
                    $this->session->set_flashdata('error_msg', ' Error, Gunakan Password Yang Baru !!');
                    redirect('ChangePasswordAlumni');
                } else {
                    // PASSWORD BENAR
                    $password_hash = password_hash($newpassword, PASSWORD_DEFAULT);
                    $this->db->set('password', $password_hash);
                    $this->db->where('username', $this->session->userdata('username'));
                    $this->db->update('tbl_alumni');
                    $this->session->set_flashdata('success_msg', 'Sukses Ubah Password !!');
                    redirect('ChangePasswordAlumni');
                }
            }
        }
    }
    //
}