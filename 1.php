$this->load->library('form_validation');
$this->load->helper(array('form', 'url'));
$this->form_validation->set_rules('nama', 'nama', 'trim|required|max_length[128]');
$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|max_length[128]');
$this->form_validation->set_rules('jk', 'JK', 'trim|required');
$this->form_validation->set_rules('mobile', 'Mobile Number', 'required|min_length[10]');
$this->form_validation->set_rules('angkatan', 'Angkatan', 'trim|required|numeric');
$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'trim|required');

if ($this->form_validation->run() == false) {
$this->alumni();
} else {
$config =
[
'upload_path' => '../assets/img',
'allowed_types' => 'gif|jpg|png',
'encrypt_name' => true,
];
$this->load->library('upload', $config);

if (!$this->upload->do_upload('img')) {
$error = array('error' => $this->upload->display_errors());
$this->tambah_alumni($error);
} else {
$img = $this->upload->initialize('file_name');
$data = array(
'nama' => $this->input->post('nama'),
'nisn' => $this->input->post('nisn'),
'email' => $this->input->post('email'),
'mobile' => $this->input->post('mobile'),
'jenis_kelamin' => $this->input->post('jk'),
'angkatan_alumni' => $this->input->post('angkatan'),
'pekerjaan' => $this->input->post('pekerjaan'),
'img' => $img
);

$this->load->model('user_model');
$this->user_model->addNewAlumni($data, 'tbl_alumni');
redirect('alumni');
}
}

// REAL

$this->load->library('form_validation');
$this->load->helper(array('form', 'url'));
$this->form_validation->set_rules('nama', 'nama', 'trim|required|max_length[128]');
$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|max_length[128]');
$this->form_validation->set_rules('jk', 'JK', 'trim|required');
$this->form_validation->set_rules('mobile', 'Mobile Number', 'required|min_length[10]');
$this->form_validation->set_rules('angkatan', 'Angkatan', 'trim|required|numeric');
$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'trim|required');
if ($this->input->post('submit')) {
//Check whether user upload picture
if (!empty($_FILES['img']['name'])) {
$config['upload_path'] = 'assets/img/';
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


//Prepare array of user data
$data = array(
'nama' => $this->input->post('nama'),
'nisn' => $this->input->post('nisn'),
'email' => $this->input->post('email'),
'mobile' => $this->input->post('mobile'),
'jenis_kelamin' => $this->input->post('jk'),
'angkatan_alumni' => $this->input->post('angkatan'),
't_msk' => $this->input->post('tmsk'),
't_tmt' => $this->input->post('tklr'),
'pekerjaan' => $this->input->post('pekerjaan'),
'img' => $img
);

//Pass user data to model
$insertUserData = $this->user_model->insert($data);

//Storing insertion status message.
if ($insertUserData) {
$this->session->set_flashdata('success_msg', 'Sukses Menambahkan Data !!');
} else {
$this->session->set_flashdata('error_msg', ' Error, Kesalahan Menambahkan Data!!');
}
}

//Form for adding user data
$this->alumni();
}