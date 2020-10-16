<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model("M_kurs");
        $this->load->model("M_kurs_erate");
        $this->load->model("M_usd_jual");
        $this->load->model("M_user");
    }

    public function index()
    {
        $this->load->view('login');
    }

    // MENU KURS ___________

    public function kurs()
    {
        if ($_SESSION['user'] == null) {
            redirect(base_url());
        } else {
            $data['kurs'] = $this->M_kurs->show_data();
            $data['title'] = 'kurs';
            $this->load->view('header', $data);
            $this->load->view('V_kurs', $data);
            $this->load->view('footer');
        }
    }

    public function insertkurs()
    {
        if ($_SESSION['user'] == null) {
            redirect(base_url());
        } else {
            $data['title'] = 'kurs';
            $this->load->view('header', $data);
            $this->load->view('insertkurs');
            $this->load->view('footer');
        }
    }
    public function insertkurs2()
    {

        $data = $this->input->post();

        $simpan_data = $this->M_kurs->save($data);
        if ($simpan_data == "success") {
            redirect(base_url('admin/kurs'));
        } else {
            redirect(base_url('admin/insertkurs'));
        }
    }


    public function editkurs($id)
    {
        if ($_SESSION['user'] == null) {
            redirect(base_url());
        } else {
            $data['kurs'] = $this->M_kurs->getDetail($id);
            $data['title'] = 'kurs';
            $this->load->view('header', $data);
            $this->load->view('editkurs', $data);
            $this->load->view('footer');
        }
    }
    public function editkurs2()
    {
        $data = $this->input->post();


        $simpan_data = $this->M_kurs->update($data);
        if ($simpan_data == "success") {
            redirect(base_url('admin/kurs'));
        } else {
            redirect(base_url('admin/insertkurs'));
        }
    }

    public function deletekurs($id)
    {
        if ($_SESSION['user'] == null) {
            redirect(base_url());
        } else {
            $this->M_kurs->delete($id);
            redirect(base_url('admin/kurs'));
        }
    }

    // MENU KURS ERATE___________

    public function kurs_erate()
    {
        if ($_SESSION['user'] == null) {
            redirect(base_url());
        } else {
            $data['kurs_erate'] = $this->M_kurs_erate->show_data();
            $data['title'] = 'erate';
            $this->load->view('header', $data);
            $this->load->view('V_kurs_erate', $data);
            $this->load->view('footer');
        }
    }

    public function insertkurs_erate()
    {
        if ($_SESSION['user'] == null) {
            redirect(base_url());
        } else {
            $data['title'] = 'erate';
            $this->load->view('header', $data);
            $this->load->view('insertkurs_erate');
            $this->load->view('footer');
        }
    }
    public function insertkurs_erate2()
    {

        $data = $this->input->post();

        $simpan_data = $this->M_kurs_erate->save($data);
        if ($simpan_data == "success") {
            redirect(base_url('admin/kurs_erate'));
        } else {
            redirect(base_url('admin/insertkurs_erate'));
        }
    }


    public function editkurs_erate($id)
    {
        if ($_SESSION['user'] == null) {
            redirect(base_url());
        } else {
            $data['kurs_erate'] = $this->M_kurs_erate->getDetail($id);
            $data['title'] = 'erate';
            $this->load->view('header', $data);
            $this->load->view('editkurs_erate', $data);
            $this->load->view('footer');
        }
    }
    public function editkurs_erate2()
    {
        $data = $this->input->post();


        $simpan_data = $this->M_kurs_erate->update($data);
        if ($simpan_data == "success") {
            redirect(base_url('admin/kurs_erate'));
        } else {
            redirect(base_url('admin/insertkurs_erate'));
        }
    }

    public function deletekurs_erate($id)
    {
        if ($_SESSION['user'] == null) {
            redirect(base_url());
        } else {
            $this->M_kurs_erate->delete($id);
            redirect(base_url('admin/kurs_erate'));
        }
    }

    // MENU USD JUAL ___________

    public function usd_jual()
    {
        if ($_SESSION['user'] == null) {
            redirect(base_url());
        } else {
            $data['usd_jual'] = $this->M_usd_jual->show_data();
            $data['title'] = 'usd';
            $this->load->view('header', $data);
            $this->load->view('V_usd_jual', $data);
            $this->load->view('footer');
        }
    }

    public function insertusd_jual()
    {
        if ($_SESSION['user'] == null) {
            redirect(base_url());
        } else {
            $data['title'] = 'usd';
            $this->load->view('header', $data);
            $this->load->view('insertusd_jual');
            $this->load->view('footer');
        }
    }
    public function insertusd_jual2()
    {

        $data = $this->input->post();

        $simpan_data = $this->M_usd_jual->save($data);
        if ($simpan_data == "success") {
            redirect(base_url('admin/usd_jual'));
        } else {
            redirect(base_url('admin/insertusd_jual'));
        }
    }


    public function editusd_jual($id)
    {
        if ($_SESSION['user'] == null) {
            redirect(base_url());
        } else {
            $data['usd_jual'] = $this->M_usd_jual->getDetail($id);
            $data['title'] = 'usd';
            $this->load->view('header', $data);
            $this->load->view('editusd_jual', $data);
            $this->load->view('footer');
        }
    }
    public function editusd_jual2()
    {
        $data = $this->input->post();


        $simpan_data = $this->M_usd_jual->update($data);
        if ($simpan_data == "success") {
            redirect(base_url('admin/usd_jual'));
        } else {
            redirect(base_url('admin/insertusd_jual'));
        }
    }

    public function deleteusd_jual($id)
    {
        if ($_SESSION['user'] == null) {
            redirect(base_url());
        } else {
            $this->M_usd_jual->delete($id);
            redirect(base_url('admin/usd_jual'));
        }
    }

    public function aksi_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $isLogin = $this->M_user->login_authen($username, $password);

        $i = $this->M_user->authen_user($username);

        if ($isLogin == true) {
            $newdata = array(
                'user'    => $i[0]['username'],
                'level'    => $i[0]['status']
            );
            $this->session->set_userdata($newdata);
            if ($i[0]['status'] == 'admin') {
                echo "<script>alert('login admin berhasil')</script>";
                redirect(base_url('admin/kurs'));
            }
        } else {
            echo "<script>alert('login admin gagal')</script>";
            redirect(base_url('admin'));
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
