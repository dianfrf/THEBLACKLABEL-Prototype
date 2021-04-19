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
            $data['notice'] = $this->M_TBL->getlatestnotice();
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

        public function notice($num)
        {
            $data['content'] = 'front/v_notice';
            $data['active'] = 'Notice';
            $data['lastntc'] = $this->M_TBL->getlastnotice();
            $data['page'] = $num ? (int)$num : 1;
            $mulai = ($data['page']>1) ? ($data['page'] * 6) - 6 : 0;
            $total = $this->M_TBL->countnotice();
            $data['pages'] = ceil($total/6);
            $data['notice'] = $this->M_TBL->getnotices($mulai);
            $data['PageTitle'] = 'Notice | The Black Label';
            $this->load->view('front/v_layout', $data);   
        }

        public function noticedetail($id)
        {
            $data['detail'] = $this->M_TBL->getnoticebyid($id);
            $detail = $data['detail'];
            if($detail == null){
                redirect('406');
            } else{
                $data['content'] = 'front/v_noticedetail';
                $data['active'] = 'Notice';
                $data['first'] = $this->M_TBL->getfirstnotice();
                $data['last'] = $this->M_TBL->getlastnotice();
                $data['next'] = $this->M_TBL->gotonextnotice($id);
                $data['prev'] = $this->M_TBL->gotoprevnotice($id);
                $data['PageTitle'] = 'Notice | The Black Label';
                $this->load->view('front/v_layout', $data);      
            }
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
                $data['first'] = $this->M_TBL->getfirstartistid();
                $data['last'] = $this->M_TBL->getlastartistid();
                $data['next'] = $this->M_TBL->gotonextartist($id);
                $data['prev'] = $this->M_TBL->gotoprevartist($id);
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
                <div class="col-lg-3 col-md-6 col-6 colalbum">
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
                $data['active'] = 'Releases';
                $data['last'] = $this->M_TBL->getlastalbumid($idal);
                $data['tampil_lagu'] = $this->M_TBL->getalbumtrack($detail->id_album);
                $data['count'] = $this->M_TBL->countalbumvideo($detail->id_album);
                $data['tampil_video'] = $this->M_TBL->getalbumvideo($detail->id_album);
                $data['PageTitle'] = "$detail->album_name | $detail->name | The Black Label";
                $this->load->view('front/v_layout', $data);  
            }  
        }

        public function releases()
        {
            $data['content'] = 'front/v_releases';
            $data['active'] = 'Releases';
            $data['PageTitle'] = 'Releases | The Black Label';
            $this->load->view('front/v_layout', $data);  
        }

        public function loadreleases()
        {
            $output = '';
            $tampil_release = $this->M_TBL->getalbums($this->input->post('limit'),$this->input->post('start'));
            foreach($tampil_release as $a) {
                $cetak = substr($a->album_name,0,16);
                if($a->album_name == $cetak){$albname = $cetak;}
                else{$albname = "$cetak...";};
                $output .= '
                <div class="col-lg-3 col-md-6 col-6 colalbum">
                    <a href="'.base_url().'Album_Detail/'.$a->id_artist.'/'.$a->album_order.'" style="text-decoration:none">
                        <img src="'.base_url().'Asset/img/album/'.$a->cover.'" class="lazyload">
                        <div class="overlay">
                            <div class="artname">'.$a->name.'</div>
                            <div class="teks"><b class="albumname">'.$a->album_description.'</b><br>'.$a->album_name.'</div>
                            <div class="albdesc">'. date("Y.m.d", strtotime($a->release_date)).'</div>
                        </div>
                        <p class="overlaymb">
                            <b>'.$albname.'</b><br>
                            '.$a->album_description.'<br>'
                            .$a->name.' | '. date("Y.m.d", strtotime($a->release_date)).'
                        </p>
                    </a>
                </div>
                ';
            }
            echo $output;
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
            $data['tampil_multimedia'] = $this->M_TBL->getvideo($mulai);
            $data['PageTitle'] = 'Multimedia | The Black Label';
            $this->load->view('front/v_layout', $data);
        }

        public function notacceptable()
        {
            $this->load->view('front/v_error406'); 
        }
    }
?>