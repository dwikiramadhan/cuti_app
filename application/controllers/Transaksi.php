<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('transaksi_model');
        $this->load->library('form_validation');
        $this->load->model('upload_model');
        $this->load->model('registrasi_model');
        $this->load->model('data_model');
        $this->load->library('excel');
        $this->load->model('login_model');
        if ($this->login_model->isNotLogin()) redirect(('login'));
    }

    public function index()
    {
        $this->template->load('templates/contents', 'transaksi');
    }

    public function double()
    {
        $data['record'] = $this->transaksi_model->get_va_double();
        $this->template->load('templates/contents', 'transaksi/double', $data);
    }

    public function solved()
    {
        $data['record'] = $this->transaksi_model->get_va_solved();
        $this->template->load('templates/contents', 'transaksi/solved', $data);
    }

    public function issue_transaksi_double()
    {
        date_default_timezone_set('Asia/Jakarta');
        $date = date("Y-m-d H:i:s");
        $id_transaksi = $this->input->post('id_transaksi');
        $transaksi = $this->transaksi_model->get_transaksi_by_id($id_transaksi);

        $data['id_transaksi']             = $id_transaksi;
        $data['tgl_transaksi']            = $transaksi[0]->tgl_transaksi;
        $data['va']                        = $transaksi[0]->va;
        $data['nama']                    = $transaksi[0]->nama;
        $data['jam_kirim']                = $transaksi[0]->jam_kirim;
        $data['jenis_sim']                = $transaksi[0]->jenis_sim;
        $data['pelimpahan']                = $transaksi[0]->pelimpahan;
        $data['cms_bni']                = $transaksi[0]->cms_bni;
        $data['status_pengiriman']        = $transaksi[0]->status_pengiriman;
        $data['pengiriman']                = $transaksi[0]->pengiriman;
        $data['biaya_pengiriman']        = $transaksi[0]->biaya_pengiriman;
        $data['biaya_paket']            = $transaksi[0]->biaya_paket;
        $data['status']                    = $transaksi[0]->status;
        $data['keterangan']                = $this->input->post('keterangan');
        $data['created_at']             = $date;

        $sql = $this->transaksi_model->save_issue_double($data);
        // $this->transaksi_model->update_transaksi_status($id_transaksi);
        $this->transaksi_model->delete_double($id_transaksi);

        // Cek apakah query insert nya sukses atau gagal
        if ($sql) { // Jika sukses
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Issue Berhasil di simpan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
            redirect('transaksi/double');
        }
    }

    public function delete_today()
    {
        $this->transaksi_model->delete_today();
        $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
                	Data berhasil di hapus :) <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                	<span aria-hidden="true">&times;</span>
                	</button>
                	</div>');
        redirect('transaksi');
    }

    public function transaksinotmatchcms()
    {
        $data['record'] = $this->data_model->compare_transaksi_cms_fail();
        $this->template->load('templates/contents', 'transaksi/cms_not_match', $data);
    }

    public function transaksinotmatchcmsagain()
    {
        $data['record'] = $this->data_model->compare_transaksi_cms();
        // $obj = array();
        // $data_json = file_get_contents('cms_transaksi_not_matched.json');
        // $obj['record'] = json_decode($data_json);
        $this->template->load('templates/contents', 'transaksi/transaksi_cms_not_match', $data);
    }

    public function get_data_transaksi()
    {
        $list = $this->transaksi_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->tgl_transaksi;
            $row[] = $field->va;
            $row[] = $field->nama;
            $row[] = $field->jam_kirim;
            $row[] = $field->jenis_sim;
            $row[] = $field->pelimpahan;
            $row[] = $field->cms_bni;
            $row[] = $field->status_pengiriman;
            $row[] = $field->pengiriman;
            $row[] = $field->biaya_pengiriman;
            $row[] = $field->biaya_paket;

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->transaksi_model->count_all(),
            "recordsFiltered" => $this->transaksi_model->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }

    public function upload()
    {
        if ($_FILES["transaksi_file"]["name"] == "") {
?>
            <script type='text/javascript'>
                alert('upss..');
                window.location.href = '<?php echo base_url('transaksi') ?>';
            </script>
<?php
        } else {
            if (isset($_FILES["transaksi_file"]["name"])) {
                date_default_timezone_set('Asia/Jakarta');
                $path = $_FILES["transaksi_file"]["tmp_name"];
                $object = PHPExcel_IOFactory::load($path);
                foreach ($object->getWorksheetIterator() as $worksheet) {
                    $highestRow = $worksheet->getHighestRow();
                    $highestColumn = $worksheet->getHighestColumn();
                    for ($row = 9; $row < $highestRow; $row++) {
                        $date = date("Y-m-d H:i:s");
                        $tgl_transaksi = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                        $tgl_transaksi_convert = PHPExcel_Shared_Date::ExcelToPHPObject($tgl_transaksi)->format('Y-m-d H:i:s');
                        // echo "<pre>", var_dump($InvDate), "</pre>";
                        $va = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                        $nama = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
                        $jam_kirim = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                        $jam_kirim_convert = PHPExcel_Shared_Date::ExcelToPHPObject($jam_kirim)->format('Y-m-d H:i:s');
                        $jenis_sim = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
                        $pelimpahan = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
                        $cms_bni = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
                        $status_pengiriman = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
                        $pengiriman = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
                        $biaya_pengiriman = $worksheet->getCellByColumnAndRow(11, $row)->getValue();
                        $biaya_paket = $worksheet->getCellByColumnAndRow(12, $row)->getValue();
                        // $cek_va = $this->data_model->get_transaksi_by_va(trim($va));
                        // if (!$cek_va) {
                        $data[] = array(
                            'tgl_transaksi'             => $tgl_transaksi_convert,
                            'va'                          => trim($va),
                            'nama'                      => $nama,
                            'jam_kirim'                  => $jam_kirim_convert,
                            'jenis_sim'                  => $jenis_sim,
                            'pelimpahan'                  => $pelimpahan,
                            'cms_bni'                      => $cms_bni,
                            'status_pengiriman'          => $status_pengiriman,
                            'pengiriman'                  => $pengiriman,
                            'biaya_pengiriman'          => $biaya_pengiriman,
                            'biaya_paket'                  => $biaya_paket,
                            'status'                => 1,
                            'created_at'                => $date
                        );
                        // }
                    }
                }
                // echo "<pre>", var_dump($data_final), "</pre>";


                $this->upload_model->insert_transaksi($data);

                $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
                	Selamat data berhasil di upload :) <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                	<span aria-hidden="true">&times;</span>
                	</button>
                	</div>');
                redirect('transaksi');
            }
        }
    }
}
