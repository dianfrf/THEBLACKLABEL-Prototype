<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class TBLController extends CI_Controller { 
        public function __construct()
        {
            parent::__construct();
            $this->load->model('M_TBL');
        }
        
        public function index()
        {
            $data['content'] = 'front/v_home';
            $data['active'] = 'Home';
            $data['cover'] = $this->M_TBL->getlatestalbum();
            $data['satum'] = $this->M_TBL->getlatestvideo();
            $data['PageTitle'] = 'The Black Label';
            $this->load->view('front/v_layout', $data);            
        }

        public function about()
        {
            $data['content'] = 'front/v_about';
            $data['active'] = 'About';
            $data['PageTitle'] = 'About | The Black Label';
            $this->load->view('front/v_layout', $data);   
        }

        public function artists()
        {
            $data['content'] = 'front/v_artists';
            $data['active'] = 'Artists';
            $data['artists'] = $this->M_TBL->getartists();
            $data['PageTitle'] = 'Artists | The Black Label';
            $this->load->view('front/v_layout', $data);   
        }

        public function artistdetail($id)
        {
            $data['detail'] = $this->M_TBL->getartistbyid($id);
            $detail = $data['detail'];
            if($detail == null){
                redirect('406');
            } else{
                $data['content'] = 'front/v_artistdetail';
                $data['active'] = 'Artists';
                $data['last'] = $this->M_TBL->getlastartistid();
                $data['hitung'] = $this->M_TBL->countawards($id);
                $data['tampil_trofi'] = $this->M_TBL->getawards($id);
                $data['hitfilm'] = $this->M_TBL->countfilms($id);
                $data['tampil_film'] = $this->M_TBL->getfilms($id);
                $data['count'] = $this->M_TBL->countartistalbums($id);
                $data['PageTitle'] = "$detail->name | The Black Label";
                $this->load->view('front/v_layout', $data);    
            }
        }

        public function loadalbum()
        {
            $output = '';
            $tampil_album = $this->M_TBL->getartistalbums($this->input->post('limit'),$this->input->post('start'),$this->input->post('id'));
            foreach($tampil_album as $album) {
                $output .= '
                <div class="col-md-3 col-6 colalbum">
                    <a href="'.base_url().'Album_Detail/'.$album->id_artist.'/'.$album->album_order.'">
                        <img src="'.base_url().'Asset/img/album/'.$album->cover.'" class="lazyload">
                        <div class="overlay">
                            <div class="teks"><b class="albumname">'.$album->album_description.'</b><br>'.$album->album_name.'</div>
                        </div>
                    </a>
                </div>
                ';
            }
            echo $output;
        }

        public function albumdetail($idal,$ord)
        {
            $data['detail'] = $this->M_TBL->getalbumbyid($idal,$ord);
            $detail = $data['detail'];
            if($detail == null){
                redirect('406');
            } else{
                $data['content'] = 'front/v_albumdetail';
                $data['active'] = 'Artists';
                $data['last'] = $this->M_TBL->getlastalbumid($idal);
                $data['tampil_lagu'] = $this->M_TBL->getalbumtrack($detail->id_album);
                $data['count'] = $this->M_TBL->countalbumvideo($detail->id_album);
                $data['tampil_video'] = $this->M_TBL->getalbumvideo($detail->id_album);
                $data['PageTitle'] = "$detail->album_name | $detail->name | The Black Label";
                $this->load->view('front/v_layout', $data);  
            }  
        }

        public function multimedia($num)
        {
            $data['content'] = 'front/v_multimedia';
            $data['active'] = 'Multimedia';
            $data['satum'] = $this->M_TBL->getlatestvideo();
            $data['page'] = $num ? (int)$num : 1;
            $mulai = ($data['page']>1) ? ($data['page'] * 8) - 8 : 0;
            $total = $this->M_TBL->countvideo();
            $data['pages'] = ceil($total/8);
            if($num != $data['pages']){
                redirect('406');
            } else{
                $data['tampil_multimedia'] = $this->M_TBL->getvideo($mulai);
                $data['PageTitle'] = 'Multimedia | The Black Label';
                $this->load->view('front/v_layout', $data);
            }
        }

        public function notacceptable()
        {
            $this->load->view('front/v_error406'); 
        }
    }
?>