<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;
use chriskacerguis\RestServer\Format;

class Api_Berita extends RestController
{

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('ModelApi', 'Api');
        $this->load->library('form_validation');
        $this->methods['index_get']['limit'] = 2;
    }
    function index_get()
    {

        $list_berita = $this->Api->getBerita();

        if ($list_berita) {
            $jumlah_berita = count($list_berita);
            $this->response(
                array(
                    'status' => true,
                    'Jumlah Berita' => $jumlah_berita,
                    'list_berita' => $list_berita,
                    'message' => 'Success!!!'
                ),
                RestController::HTTP_OK,
            );
        } else {
            $this->response(
                array(
                    'status' => false,
                    'pesan' => 'Data Berita tidak ditemukan !!',
                ),
                404
            );
        }
    }
    //  Nampilkan Data Sesuai ID Inginkan
    public function get_by_id_get()
    {
        $id = $this->get('id');

        if ($id) {
            $data_berita = $this->Api->get_berita_id($id);

            if ($data_berita) {
                $this->response(
                    array(
                        'status' => true,
                        'Data Berita' => $data_berita,
                    ),
                    RestController::HTTP_OK,

                );
            } else {
                $this->response(
                    array(
                        'status' => false,
                        'pesan' => 'Data Berita tidak ditemukan !!',
                    ),
                    RestController::HTTP_BAD_REQUEST,

                );
            }
        } else {
            $this->response(
                array(
                    'status' => false,
                    'pesan' => 'Silahkan Isi Parameter dahulu !!',
                ),
                RestController::HTTP_BAD_REQUEST,

            );
        }
    }

    // Insert Data

    public function tambah_berita_post()
    {
        $this->form_validation->set_rules('txtjudul', 'Judul Berita', 'trim|required|max_length[128]');
        $this->form_validation->set_rules('txtkategori', 'Kateori Berita', 'required|trim');
        $this->form_validation->set_rules('txtisi', 'Isi Berita', 'trim|required');
        $this->form_validation->set_rules('txtstatus', 'Status Berita', 'required');
        $name = $this->input->post('txtname');
        $judul_berita = $this->post('txtjudul');
        $isi_berita = $this->post('txtisi');
        $status = $this->post('txtstatus');
        $kategori = $this->post('txtkategori');
        $created = date('Y-M-d H:i:s');
        if ($this->form_validation->run() == false) {
            $this->response(
                array(
                    'status' => true,
                    'pesan' => 'Data Berita tidak dapat ditambahkan, Silahkan Perhatikan Fieldnya !!',
                ),
                RestController::HTTP_BAD_REQUEST,
            );
        } else {
            $file = $_FILES['img'];
            // var_dump($img);
            // exit;
            $path = time() . $_FILES['img']['name'];
            // if (!is_dir($path)) {
            //     mkdir($path, 0777, true);
            // }
            $img = "";

            if (!empty($file['name'])) {
                $config['upload_path'] = 'assets/img-berita/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['file_name'] = $path;
                //Load upload library and initialize configuration
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('img')) {
                    $uploadData = $this->upload->data();
                    $img =  $uploadData['file_name'];
                } else {
                    $img = '';
                }
            } else {
                $img = '';
            }

            $data = array(
                'name' => $name,
                'judul' => $judul_berita,
                'kategori' => $kategori,
                'isi' => $isi_berita,
                'status' => $status,
                'created' => $created,
                'img' => $img,
            );
            $this->Api->insert_berita($data);
            $this->response(
                array(
                    'status' => true,
                    'pesan' => 'Data Berita telah ditambahkan !!',
                ),
                RestController::HTTP_OK,
            );
        }
    }




    public function update_berita_put()
    {
        $id = $this->put('id');
        $name = $this->put('txtname');
        $judul_berita = $this->put('txtjudul');
        $isi_berita = $this->put('txtisi');
        $status = $this->put('txtstatus');
        $kategori = $this->put('txtkategori');
        $modified = date('Y-M-d H:i:s');
        $data = array(
            'name' => $name,
            'judul' => $judul_berita,
            'kategori' => $kategori,
            'isi' => $isi_berita,
            'status' => $status,
            'modified' => $modified,
        );

        $this->Api->update_berita($id, $data);
        $this->response(
            array(
                'status' => true,
                'pesan' => 'Data Berita Berhasil Diubah !!',
            ),
            RestController::HTTP_OK,
        );
    }

    function delete_berita_delete()
    {
        $id = $this->delete('id');

        if ($id === null) {
            $this->response(
                array(
                    'status' => false,
                    'pesan' => 'Silahkan Masukkan Id Terlebih Dahulu !!',
                ),
                RestController::HTTP_BAD_REQUEST,
            );
        } else {
            $delete = $this->Api->delete_berita($id);
        }
        if ($delete > 0) {
            $this->Api->delete_berita($id);
            $this->response(
                array(
                    'status' => true,
                    'pesan' => 'Data Berita Berhasil Dihapus !!',
                ),
                RestController::HTTP_OK,
            );
        }
    }
}