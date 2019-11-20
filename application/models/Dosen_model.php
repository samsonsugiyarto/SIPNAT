<?php

class Dosen_model extends CI_Model
{
    public function getAllDosen()
    {
        return $this->db->get('dosen')->result_array();
    }

    public function getDosenById($nik)
    {
        return $this->db->get_where('dosen', ['nik' => $nik])->row_array();
    }

    public function upload()
    {
        // cek jika ada gambar yang akan diupload
        $upload_image = $_FILES['imagedosen']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '2048';
            $config['upload_path'] = './assets/img/profile/dosen';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('imagedosen')) {
                return $this->upload->data('file_name');
            }
        }
        return "default.jpg";
    }

    public function tambahDataDosen()
    {
        $nik = $this->input->post('nik', true);
        $data = [
            'nik' => $nik,
            'name' => $this->input->post('namalengkap', true),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'jk' => $this->input->post('jk', true),
            'mengajar' => $this->input->post('mengajar', true),
            'email' => $this->input->post('email', true),
            'hp' => $this->input->post('hp', true),
            'is_active' => $this->input->post('aktif', true),
            'image' => $this->upload(),
            'role_id' => 4

        ];

        $this->db->insert('dosen', $data);
    }


    public function ubahDataDosen($dosen, $nik)
    {

        // cek jika ada gambar yang akan diupload
        $upload_image = $_FILES['imagedosen']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '2048';
            $config['upload_path'] = './assets/img/profile/dosen';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('imagedosen')) {

                $old_image = $dosen['image'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/profile/dosen/' . $old_image);
                }
                $new_image =  $this->upload->data('file_name');
                $this->db->set('image', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $name = $this->input->post('namalengkap', true);
        $jk = $this->input->post('jk', true);
        $mengajar = $this->input->post('mengajar', true);
        $email = $this->input->post('email', true);
        $hp = $this->input->post('hp', true);
        $password = password_hash($this->input->post('passworddosen1'), PASSWORD_DEFAULT);
        $is_active =  $this->input->post('aktifdosen', true);

        $data = [
            'name' => $name,
            'jk' => $jk,
            'mengajar' => $mengajar,
            'email' => $email,
            'hp' => $hp,
            'is_active' => $is_active
        ];
        $this->db->set($data);
        if ($this->input->post('passworddosen1') != null) {
            $this->db->set('password', $password);
        }
        $this->db->where('nik', $nik);
        $this->db->update('dosen');
    }

    public function hapusDataDosen($nik, $dosen)
    {
        $old_image = $dosen['image'];
        if ($old_image != 'default.jpg') {
            unlink(FCPATH . 'assets/img/profile/dosen/' . $old_image);
        }

        //$this->db->where('id', $id);
        $this->db->delete('dosen', ['nik' => $nik]);
    }
}
