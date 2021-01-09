<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class AdminController extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('M_Admin');
        }

        public function index()
        {
            $data['content'] = 'admin/v_dashboard';
            $data['active'] = 'Dashboard';
            $data['PageTitle'] = 'Dashboard';
            $this->load->view('admin/v_layout', $data);  
        }

//CRUD ARTISTS
        //Read Artists
        public function artists_data()
        {
            $data['content'] = 'admin/v_artistsdata';
            $data['active'] = 'Artists';
            $data['artists'] = $this->M_Admin->get_artistsdata();
            $data['count'] = $this->M_Admin->count_artistsdata();
            $data['PageTitle'] = 'Artists Data';
            $this->load->view('admin/v_layout', $data);  
        }

//CRUD ALBUMS
        //Read Albums
        public function albums_data()
        {
            $data['content'] = 'admin/v_albumsdata';
            $data['active'] = 'Albums';
            $data['albums'] = $this->M_Admin->get_albumsdata();
            $data['count'] = $this->M_Admin->count_albumsdata();
            $data['PageTitle'] = 'Albums Data';
            $this->load->view('admin/v_layout', $data);  
        }

//CRUD SONGS
        //Read Songs
        public function songs_data()
        {
            $data['content'] = 'admin/v_songsdata';
            $data['active'] = 'Songs';
            $data['songs'] = $this->M_Admin->get_songsdata();
            $data['count'] = $this->M_Admin->count_songsdata();
            $data['PageTitle'] = 'Songs Data';
            $this->load->view('admin/v_layout', $data);  
        }

//CRUD VIDEOS
        //Read Videos
        public function videos_data()
        {
            $data['content'] = 'admin/v_videosdata';
            $data['active'] = 'Videos';
            $data['videos'] = $this->M_Admin->get_videosdata();
            $data['count'] = $this->M_Admin->count_videosdata();
            $data['PageTitle'] = 'Videos Data';
            $this->load->view('admin/v_layout', $data);  
        }

//CRUD AWARDS
        //Read Awards
        public function awards_data()
        {
            $data['content'] = 'admin/v_awardsdata';
            $data['active'] = 'Awards';
            $data['awards'] = $this->M_Admin->get_awardsdata();
            $data['count'] = $this->M_Admin->count_awardsdata();
            $data['PageTitle'] = 'Awards Data';
            $this->load->view('admin/v_layout', $data);
        }

//CRUD FILMS
        //Read Films
        public function films_data()
        {
            $data['content'] = 'admin/v_filmsdata';
            $data['active'] = 'Films';
            $data['films'] = $this->M_Admin->get_filmsdata();
            $data['count'] = $this->M_Admin->count_filmsdata();
            $data['PageTitle'] = 'Filmography Data';
            $this->load->view('admin/v_layout', $data);
        }
    } 
?>