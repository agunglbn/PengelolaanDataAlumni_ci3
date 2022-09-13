<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Login (LoginController)
 * Login class to control to authenticate user credentials and starts user's session.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Front extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('front_model');
        $this->load->library('pagination');
        $this->load->helper('text');
    }

    public function index()
    {
        $data['nama_web'] = "SMPN 25 Pekanbaru";
        $data['berita'] = $this->front_model->beritasekolah();
        $this->load->view('front/head');
        $this->load->view('front/mid', $data);
        $this->load->view('front/foot');
    }


    // FRONT NEWS
    public function beritaAlumni()
    {


        $config['base_url'] = base_url('front/beritaAlumni');
        $config['total_rows'] = count($this->front_model->countAllBeritaAlumni());
        $config['per_page'] = 3;


        $limit  = $config['per_page'];
        $start  = $this->uri->segment(3);


        // custom paging configuration
        $config['num_links'] = 2;
        $config['use_page_numbers'] = TRUE;
        $config['reuse_query_string'] = TRUE;

        $config['full_tag_open'] = '<nav aria-label="Page navigation">
        <ul class="pagination justify-content-start">';
        $config['full_tag_close'] = ' </ul>
        </nav>';

        $config['first_link'] = 'First Page';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last Page';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['berita'] = $this->front_model->getAllBeritaAlumni($limit, $start);
        $data['sekolah'] = $this->front_model->beritaAlumniSide();
        $this->load->view('news/header');
        $this->load->view('news/v_news', $data);
        $this->load->view('news/footer');
    }

    function DetailBeritaAlumni($id)
    {
        $data['detail'] = $this->front_model->DetailBeritaAlumni($id);
        $data['sekolah'] = $this->front_model->beritaAlumniSide();
        $this->load->view('news/header');
        $this->load->view('news/detail_diskusi', $data);
        $this->load->view('news/footer');
    }


    // Berita Sekolah

    function BeritaSekolah()
    {
        $config['base_url'] = base_url('front/BeritaSekolah');
        $config['total_rows'] = count($this->front_model->countAllBeritaSekolah());
        $config['per_page'] = 3;


        $limit  = $config['per_page'];
        $start  = $this->uri->segment(3);


        // custom paging configuration
        $config['num_links'] = 2;
        $config['use_page_numbers'] = TRUE;
        $config['reuse_query_string'] = TRUE;

        $config['full_tag_open'] = '<nav aria-label="Page navigation">
        <ul class="pagination justify-content-start">';
        $config['full_tag_close'] = ' </ul>
        </nav>';

        $config['first_link'] = 'First Page';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last Page';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['berita'] = $this->front_model->getAllBeritaSekolah($limit, $start);
        $data['alumni'] = $this->front_model->beritasekolahSide();
        $this->load->view('news/header');
        $this->load->view('news/v_berita_sekolah', $data);
        $this->load->view('news/footer');
    }
    function DetailBeritaSekolah($id)
    {
        $data['detail'] = $this->front_model->DetailBeritaSekolah($id);
        $data['alumni'] = $this->front_model->beritasekolahSide();
        $this->load->view('news/header');
        $this->load->view('news/detail_berita', $data);
        $this->load->view('news/footer');
    }
}