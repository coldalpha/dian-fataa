<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index($nama)
	{
		$nama = str_replace('_', ' ', $nama);
		$data['nama'] = $nama;
		$this->load->view('index', $data);
	}

	public function get_data()
	{
		// Logika untuk mengambil data dari API
		$this->load->database();
		$this->db->select('nama, kata_ucapan');
		$query = $this->db->get('ucapan');
		$data['data'] = $query->result();

		// Menampilkan data di view
		if (empty($data['data'])) {
			$data['data'] = "Data Kosong";
			$this->output
				->set_content_type('application/json')
				->set_output(json_encode($data));
		} else {
			$this->output
				->set_content_type('application/json')
				->set_output(json_encode($data));
		}
	}
	public function post_data()
	{
		// Logika untuk menerima data melalui POST
		$this->load->database(); // Memuat library database

		// Mengambil data yang dikirim melalui POST
		$nama = htmlspecialchars($_POST['nama']);
		$kata_ucapan = strip_tags($_POST['kata_ucapan']);


		// Validasi data jika diperlukan

		// Simpan data ke database
		$data = array(
			'nama' => $nama,
			'kata_ucapan' => $kata_ucapan
		);

		$this->db->insert('ucapan', $data);

		// Periksa apakah data berhasil disimpan
		if ($this->db->affected_rows() > 0) {
			echo "Ucapan berhasil disimpan!";
		} else {
			echo "Gagal menyimpan ucapan. Silakan coba lagi.";
		}
	}
}
