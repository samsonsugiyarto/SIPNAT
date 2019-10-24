<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_pimpinan_model extends CI_Model
{

    public function ubahpimpinan($user)
    {

        $nidn = $this->input->post('nidn');
        $name = $this->input->post('name');
        $jk = $this->input->post('jk');
        $email = $this->input->post('email');
        $hp = $this->input->post('hp');

        // cek jika ada gambar yang akan diupload
        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '2048';
            $config['upload_path'] = './assets/img/profile/pimpinan';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {

                $old_image = $user['image'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/profile/pimpinan/' . $old_image);
                }
                $new_image =  $this->upload->data('file_name');
                $this->db->set('image', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $data = [
            'name' => $name,
            'jk' => $jk,
            'email' => $email,
            'hp' => $hp,

        ];

        $this->db->set($data);
        $this->db->where('nidn', $nidn);
        $this->db->update('pimpinan');
    }
}
