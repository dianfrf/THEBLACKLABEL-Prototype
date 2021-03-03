<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class AdminController extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('M_Admin');
        }

        public function index()
        {
            $this->load->view('admin/auth/v_adminlogin');
        }

        public function admin_login()
        {
            $this->form_validation->set_rules('username', 'Username', 'trim|required', array('required' => 'Username must be fill in.'));
            $this->form_validation->set_rules('password', 'Password', 'trim|required', array('required' => 'Password must be fill in.'));
            if ($this->form_validation->run() == TRUE) {
                $username    = $this->input->post('username');
                $password    = md5($this->input->post('password'));
                if ($this->M_Admin->do_admin_login($username,$password)->num_rows() > 0) {
                    $data = $this->M_Admin->do_admin_login($username,$password)->row();
                    $dataadmin = array(
                        'login' => TRUE,
                        'username' => $data->username,
                        'admin_name' => $data->admin_name,
                        'id_admin' => $data->id_admin
                    );
                    $this->session->set_userdata($dataadmin);
                    redirect('Dashboard','refresh');
                }
                else {
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger">Login failed. Please check again your username and password.</div>');
                    redirect('TBL_Admin');
                }
            }
            else {
                $this->session->set_flashdata('msg', '<div class="alert alert-warning">'.validation_errors().'</div>');
                redirect('TBL_Admin');
            }
        }

        public function admin_logout()
        {
            $this->session->sess_destroy();
            redirect('TBL_Admin', 'refresh');
        }

        public function dashboard()
        {
            $data['content'] = 'admin/v_dashboard';
            $data['active'] = 'Dashboard';
            $data['totartists'] = $this->M_Admin->count_artistsdata();
            $data['totalbums'] = $this->M_Admin->count_albumsdata();
            $data['totsongs'] = $this->M_Admin->count_songsdata();
            $data['totvideos'] = $this->M_Admin->count_videosdata();
            $data['totawards'] = $this->M_Admin->count_awardsdata();
            $data['totfilms'] = $this->M_Admin->count_filmsdata();
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
        //Create Artist
        public function artist_add()
        {
            $this->form_validation->set_rules('name', 'Artist Name', 'trim|required', array('required' => 'Artist Name must be fill in.'));
            $this->form_validation->set_rules('description', 'Description', 'trim|required', array('required' => 'Description must be fill in.'));
            if ($this->form_validation->run() == TRUE) {
                $config['upload_path'] = './Asset/img/artists/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_height'] = '500';
                $config['max_width'] = '500';
                $config['max_size'] = '1024';

                $this->load->library('upload' , $config);
                if (! $this->upload->do_upload('picture')) {
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger">'.$this->upload->display_errors().'</div>');
                } else {
                    $name           = $this->input->post('name');
                    $description    = $this->input->post('description');
                    $instagram      = $this->input->post('instagram');
                    $facebook       = $this->input->post('facebook');
                    $twitter        = $this->input->post('twitter');
                    $soundcloud     = $this->input->post('soundcloud');
                    $commercial     = $this->input->post('commercial');
                    if ($this->M_Admin->do_artist_add($this->upload->data('file_name'),$name,$description,$instagram,$facebook,$twitter,$soundcloud,$commercial)) {
                        $this->session->set_flashdata('msg', '<div class="alert alert-success">Success to add artist data</div>');
                    } else {
                        $this->session->set_flashdata('msg', '<div class="alert alert-danger">Failed to add artist data</div>');
                    }
                }
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-warning">'.validation_errors().'</div>');
            }
            redirect('Artists_Data');
        }
        //Delete Artist
        public function artist_delete($id='')
        {
            $getartid = $this->M_Admin->do_get_artist_id($id);
            $file = "./Asset/img/artists/$getartid->picture";
            $delfile = unlink($file);
            if($delfile == TRUE) {
                $delete = $this->M_Admin->do_artist_delete($id);
                if ($delete == TRUE) {
                    $this->session->set_flashdata('msg', '<div class="alert alert-success">Success to delete artist data</div>');
                }
                else {
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger">Failed to delete artist data</div>');
                }
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger">Theres something wrong when deleting the image</div>');
            }
            redirect('Artists_Data');
        }
        //Edit Artist
        public function get_artist_id($id)
        {
            $data = $this->M_Admin->do_get_artist_id($id);
            echo (json_encode($data));
        }
        public function artist_edit()
        {
            $this->form_validation->set_rules('name', 'Artist Name', 'trim|required', array('required' => 'Artist Name must be fill in.'));
            $this->form_validation->set_rules('description', 'Description', 'trim|required', array('required' => 'Description must be fill in.'));
            if ($this->form_validation->run() == TRUE) {
                $id_artist      = $this->input->post('id_artist');
                $name           = $this->input->post('name');
                $description    = $this->input->post('description');
                $instagram      = $this->input->post('instagram');
                $facebook       = $this->input->post('facebook');
                $twitter        = $this->input->post('twitter');
                $soundcloud     = $this->input->post('soundcloud');
                $commercial     = $this->input->post('commercial');

                if ($this->M_Admin->do_artist_edit($id_artist,$name,$description,$instagram,$facebook,$twitter,$soundcloud,$commercial)) {
                    $config['upload_path'] = './Asset/img/artists/';
                    $config['allowed_types'] = 'gif|jpg|png|jpeg';
                    $config['max_height'] = '500';
                    $config['max_width'] = '500';
                    $config['max_size'] = '1024';

                    $this->load->library('upload' , $config);
                    if (! $this->upload->do_upload('picture')) {
                        $this->session->set_flashdata('msg', '<div class="alert alert-success">Success to edit artist data. But '.$this->upload->display_errors().'</div>');
                    } else {
                        $getartid = $this->M_Admin->do_get_artist_id($id_artist);
                        $file = "./Asset/img/artists/$getartid->picture";
                        if(unlink($file)) {
                            if ($this->M_Admin->do_picture_edit($this->upload->data('file_name'),$id_artist)) {
                                $this->session->set_flashdata('msg', '<div class="alert alert-success">Success to edit artist data</div>');
                            } else {
                                $this->session->set_flashdata('msg', '<div class="alert alert-danger">Failed to edit artist data</div>');
                            }
                        } else {
                            $this->session->set_flashdata('msg', '<div class="alert alert-danger">Theres something wrong when deleting the image</div>');
                        }
                    }
                } else {
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger">Failed to edit artist data</div>');
                }
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-warning">'.validation_errors().'</div>');
            }
            redirect('Artists_Data');
        }

//CRUD ALBUMS
        //Read Albums
        public function albums_data()
        {
            $data['content'] = 'admin/v_albumsdata';
            $data['active'] = 'Albums';
            $data['albums'] = $this->M_Admin->get_albumsdata();
            $data['count'] = $this->M_Admin->count_albumsdata();
            $data['artists'] = $this->M_Admin->get_artistsdata();
            $data['PageTitle'] = 'Albums Data';
            $this->load->view('admin/v_layout', $data);  
        }
        //Create Album
        public function album_add()
        {
            $this->form_validation->set_rules('id_artist', 'Artist Name', 'trim|required|numeric', array('required' => 'Artist Name must be fill in.'));
            $this->form_validation->set_rules('album_name', 'Album Name', 'trim|required', array('required' => 'Album Name must be fill in.'));
            $this->form_validation->set_rules('release_date', 'Release Date', 'trim|required', array('required' => 'Release Date must be fill in.'));
            $this->form_validation->set_rules('album_order', 'Album Order', 'trim|required|numeric', array('required' => 'Album Order must be fill in.'));
            $this->form_validation->set_rules('album_description', 'Album Description', 'trim|required', array('required' => 'Album Description must be fill in.'));
            if ($this->form_validation->run() == TRUE) {
                $config['upload_path'] = './Asset/img/album/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_height'] = '500';
                $config['max_width'] = '500';
                $config['max_size'] = '1024';

                $this->load->library('upload' , $config);
                if (! $this->upload->do_upload('cover')) {
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger">'.$this->upload->display_errors().'</div>');
                } else {
                    $id_artist          = $this->input->post('id_artist');
                    $album_name         = $this->input->post('album_name');
                    $album_desc         = $this->input->post('album_description');
                    $album_ord          = $this->input->post('album_order');
                    $release_date       = $this->input->post('release_date');
                    $itunes             = $this->input->post('itunes');
                    $spotify            = $this->input->post('spotify');
                    $melon              = $this->input->post('melon');
                    $genie              = $this->input->post('genie');
                    $bugs               = $this->input->post('bugs');
                    $flo                = $this->input->post('flo');
                    $vibe               = $this->input->post('vibe');
                    if ($this->M_Admin->do_album_add($this->upload->data('file_name'),$id_artist,$album_name,$album_desc,$album_ord,$release_date,$itunes,$spotify,$melon,$genie,$bugs,$flo,$vibe)) {
                        $this->session->set_flashdata('msg', '<div class="alert alert-success">Success to add album data</div>');
                    } else {
                        $this->session->set_flashdata('msg', '<div class="alert alert-danger">Failed to add album data</div>');
                    }
                }
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-warning">'.validation_errors().'</div>');
            }
            redirect('Albums_Data');
        }
        //Delete Album
        public function album_delete($id='')
        {
            $getalbid = $this->M_Admin->do_get_album_id($id);
            $file = "./Asset/img/album/$getalbid->cover";
            $delfile = unlink($file);
            if($delfile == TRUE) {
                $delete = $this->M_Admin->do_album_delete($id);
                if ($delete == TRUE) {
                    $this->session->set_flashdata('msg', '<div class="alert alert-success">Success to delete album data</div>');
                }
                else {
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger">Failed to delete album data</div>');
                }
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger">Theres something wrong when deleting the image</div>');
            }
            redirect('Albums_Data');
        }
        //Edit Album
        public function get_album_id($id)
        {
            $data = $this->M_Admin->do_get_album_id($id);
            echo (json_encode($data));
        }
        public function album_edit()
        {
            $this->form_validation->set_rules('id_artist', 'Artist Name', 'trim|required|numeric', array('required' => 'Artist Name must be fill in.'));
            $this->form_validation->set_rules('album_name', 'Album Name', 'trim|required', array('required' => 'Album Name must be fill in.'));
            $this->form_validation->set_rules('release_date', 'Release Date', 'trim|required', array('required' => 'Release Date must be fill in.'));
            $this->form_validation->set_rules('album_order', 'Album Order', 'trim|required|numeric', array('required' => 'Album Order must be fill in.'));
            $this->form_validation->set_rules('album_description', 'Album Description', 'trim|required', array('required' => 'Album Description must be fill in.'));
            if ($this->form_validation->run() == TRUE) {
                $id_artist          = $this->input->post('id_artist');
                $album_name         = $this->input->post('album_name');
                $album_desc         = $this->input->post('album_description');
                $album_ord          = $this->input->post('album_order');
                $release_date       = $this->input->post('release_date');
                $itunes             = $this->input->post('itunes');
                $spotify            = $this->input->post('spotify');
                $melon              = $this->input->post('melon');
                $genie              = $this->input->post('genie');
                $bugs               = $this->input->post('bugs');
                $flo                = $this->input->post('flo');
                $vibe               = $this->input->post('vibe');
                $id_album           = $this->input->post('id_album');

                if ($this->M_Admin->do_album_edit($id_artist,$album_name,$album_desc,$album_ord,$release_date,$itunes,$spotify,$melon,$genie,$bugs,$flo,$vibe,$id_album)) {
                    $config['upload_path'] = './Asset/img/album/';
                    $config['allowed_types'] = 'gif|jpg|png|jpeg';
                    $config['max_height'] = '500';
                    $config['max_width'] = '500';
                    $config['max_size'] = '1024';

                    $this->load->library('upload' , $config);
                    if (! $this->upload->do_upload('cover')) {
                        $this->session->set_flashdata('msg', '<div class="alert alert-success">Success to edit album data. But '.$this->upload->display_errors().'</div>');
                    } else {
                        $getalbid = $this->M_Admin->do_get_album_id($id_album);
                        $file = "./Asset/img/album/$getalbid->cover";
                        if(unlink($file)) {
                            if ($this->M_Admin->do_cover_edit($this->upload->data('file_name'),$id_album)) {
                                $this->session->set_flashdata('msg', '<div class="alert alert-success">Success to edit album data</div>');
                            } else {
                                $this->session->set_flashdata('msg', '<div class="alert alert-danger">Failed to edit album data</div>');
                            }
                        } else {
                            $this->session->set_flashdata('msg', '<div class="alert alert-danger">Theres something wrong when deleting the image</div>');
                        }
                    }
                } else {
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger">Failed to edit album data</div>');
                }
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-warning">'.validation_errors().'</div>');
            }
            redirect('Albums_Data');
        }

//CRUD SONGS
        //Read Songs
        public function songs_data()
        {
            $data['content'] = 'admin/v_songsdata';
            $data['active'] = 'Songs';
            $data['songs'] = $this->M_Admin->get_songsdata();
            $data['count'] = $this->M_Admin->count_songsdata();
            $data['albums'] = $this->M_Admin->get_albumsdata();
            $data['PageTitle'] = 'Songs Data';
            $this->load->view('admin/v_layout', $data);  
        }
        //Create Song
        public function song_add()
        {
            $this->form_validation->set_rules('id_album', 'Album Name', 'trim|required|numeric', array('required' => 'Album Name must be fill in.'));
            $this->form_validation->set_rules('title', 'Title', 'trim|required', array('required' => 'Title must be fill in.'));
            $this->form_validation->set_rules('duration', 'Duration', 'trim|required', array('required' => 'Duration must be fill in.'));
            $this->form_validation->set_rules('tracknumber', 'Track Number', 'trim|required|numeric', array('required' => 'Track Number must be fill in.'));
            $this->form_validation->set_rules('is_title', 'Title Track', 'trim|required|numeric', array('required' => 'Title Track must be fill in.'));
            $this->form_validation->set_rules('lyricsby', 'Songwriter', 'trim|required', array('required' => 'Songwriter must be fill in.'));
            $this->form_validation->set_rules('composedby', 'Composer', 'trim|required', array('required' => 'Composer Name must be fill in.'));
            $this->form_validation->set_rules('arrangedby', 'Arranger', 'trim|required', array('required' => 'Arranger must be fill in.'));
            if ($this->form_validation->run() == TRUE) {
                $id_album       = $this->input->post('id_album');
                $title          = $this->input->post('title');
                $duration       = $this->input->post('duration');
                $tracknumber    = $this->input->post('tracknumber');
                $is_title       = $this->input->post('is_title');
                $lyricsby       = $this->input->post('lyricsby');
                $composedby     = $this->input->post('composedby');
                $arrangedby     = $this->input->post('arrangedby');
                if ($this->input->post('add')) {
                    if ($this->M_Admin->do_song_add($id_album,$title,$duration,$tracknumber,$is_title,$lyricsby,$composedby,$arrangedby) == TRUE) {
                        $this->session->set_flashdata('msg', '<div class="alert alert-success">Success to add song data</div>');
                    } else {
                        $this->session->set_flashdata('msg', '<div class="alert alert-danger">Failed to add song data</div>');
                    }
                } else {
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger">Theres something wrong with the connection</div>');
                }
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-warning">'.validation_errors().'</div>');
            }
            redirect('Songs_Data');
        }
        //Delete Song
        public function song_delete($id='')
        {
            $delete = $this->M_Admin->do_song_delete($id);
            if ($delete == TRUE) {
                $this->session->set_flashdata('msg', '<div class="alert alert-success">Success to delete award data</div>');
            }
            else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger">Failed to delete award data</div>');
            }
            redirect('Songs_Data');
        }
        //Edit Song
        public function get_song_id($id)
        {
            $data = $this->M_Admin->do_get_song_id($id);
            echo (json_encode($data));
        }
        public function song_edit()
        {
            $this->form_validation->set_rules('id_album', 'Album Name', 'trim|required|numeric', array('required' => 'Album Name must be fill in.'));
            $this->form_validation->set_rules('title', 'Title', 'trim|required', array('required' => 'Title must be fill in.'));
            $this->form_validation->set_rules('duration', 'Duration', 'trim|required', array('required' => 'Duration must be fill in.'));
            $this->form_validation->set_rules('tracknumber', 'Track Number', 'trim|required|numeric', array('required' => 'Track Number must be fill in.'));
            $this->form_validation->set_rules('is_title', 'Title Track', 'trim|required|numeric', array('required' => 'Title Track must be fill in.'));
            $this->form_validation->set_rules('lyricsby', 'Songwriter', 'trim|required', array('required' => 'Songwriter must be fill in.'));
            $this->form_validation->set_rules('composedby', 'Composer', 'trim|required', array('required' => 'Composer Name must be fill in.'));
            $this->form_validation->set_rules('arrangedby', 'Arranger', 'trim|required', array('required' => 'Arranger must be fill in.'));
            if ($this->form_validation->run() == TRUE) {
                $id_album       = $this->input->post('id_album');
                $title          = $this->input->post('title');
                $duration       = $this->input->post('duration');
                $tracknumber    = $this->input->post('tracknumber');
                $is_title       = $this->input->post('is_title');
                $lyricsby       = $this->input->post('lyricsby');
                $composedby     = $this->input->post('composedby');
                $arrangedby     = $this->input->post('arrangedby');
                $id_song        = $this->input->post('id_song');
                if ($this->input->post('edit')) {
                    if ($this->M_Admin->do_song_edit($id_album,$title,$duration,$tracknumber,$is_title,$lyricsby,$composedby,$arrangedby,$id_song) == TRUE) {
                        $this->session->set_flashdata('msg', '<div class="alert alert-success">Success to edit song data</div>');
                    } else {
                        $this->session->set_flashdata('msg', '<div class="alert alert-danger">Failed to edit song data</div>');
                    }
                } else {
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger">Theres something wrong with the connection</div>');
                }
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-warning">'.validation_errors().'</div>');
            }
            redirect('Songs_Data');
        }

//CRUD VIDEOS
        //Read Videos
        public function videos_data()
        {
            $data['content'] = 'admin/v_videosdata';
            $data['active'] = 'Videos';
            $data['videos'] = $this->M_Admin->get_videosdata();
            $data['count'] = $this->M_Admin->count_videosdata();
            $data['albums'] = $this->M_Admin->get_albumsdata();
            $data['PageTitle'] = 'Videos Data';
            $this->load->view('admin/v_layout', $data);  
        }
        //Create Video
        public function video_add()
        {
            $this->form_validation->set_rules('id_album', 'Album Name', 'trim|required|numeric', array('required' => 'Album Name must be fill in.'));
            $this->form_validation->set_rules('video_name', 'Video Title', 'trim|required', array('required' => 'Video Title must be fill in.'));
            $this->form_validation->set_rules('video_release_date', 'Release Date', 'trim|required', array('required' => 'Release Date must be fill in.'));
            $this->form_validation->set_rules('link', 'Video Link', 'trim|required', array('required' => 'Video Link must be fill in.'));
            if ($this->form_validation->run() == TRUE) {
                $config['upload_path'] = './Asset/img/thumbnail/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_height'] = '720';
                $config['max_width'] = '1280';
                $config['max_size'] = '1024';

                $this->load->library('upload' , $config);
                if (! $this->upload->do_upload('thumbnail')) {
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger">'.$this->upload->display_errors().'</div>');
                } else {
                    $id_album           = $this->input->post('id_album');
                    $video_name         = $this->input->post('video_name');
                    $video_release_date = $this->input->post('video_release_date');
                    $link               = $this->input->post('link');
                    if ($this->M_Admin->do_video_add($this->upload->data('file_name'),$id_album,$video_name,$video_release_date,$link)) {
                        $this->session->set_flashdata('msg', '<div class="alert alert-success">Success to add video data</div>');
                    } else {
                        $this->session->set_flashdata('msg', '<div class="alert alert-danger">Failed to add video data</div>');
                    }
                }
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-warning">'.validation_errors().'</div>');
            }
            redirect('Videos_Data');
        }
        //Delete Video
        public function video_delete($id='')
        {
            $getvidid = $this->M_Admin->do_get_video_id($id);
            $file = "./Asset/img/thumbnail/$getvidid->thumbnail";
            $delfile = unlink($file);
            if($delfile == TRUE) {
                $delete = $this->M_Admin->do_video_delete($id);
                if ($delete == TRUE) {
                    $this->session->set_flashdata('msg', '<div class="alert alert-success">Success to delete video data</div>');
                }
                else {
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger">Failed to delete video data</div>');
                }
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger">Theres something wrong when deleting the image</div>');
            }
            redirect('Videos_Data');
        }
        //Edit Video
        public function get_video_id($id)
        {
            $data = $this->M_Admin->do_get_video_id($id);
            echo (json_encode($data));
        }
        public function video_edit()
        {
            $this->form_validation->set_rules('id_album', 'Album Name', 'trim|required|numeric', array('required' => 'Album Name must be fill in.'));
            $this->form_validation->set_rules('video_name', 'Video Title', 'trim|required', array('required' => 'Video Title must be fill in.'));
            $this->form_validation->set_rules('video_release_date', 'Release Date', 'trim|required', array('required' => 'Release Date must be fill in.'));
            $this->form_validation->set_rules('link', 'Video Link', 'trim|required', array('required' => 'Video Link must be fill in.'));
            if ($this->form_validation->run() == TRUE) {
                $id_album           = $this->input->post('id_album');
                $video_name         = $this->input->post('video_name');
                $video_release_date = $this->input->post('video_release_date');
                $link               = $this->input->post('link');
                $id_video           = $this->input->post('id_video');

                if ($this->M_Admin->do_video_edit($id_album,$video_name,$video_release_date,$link,$id_video)) {
                    $config['upload_path'] = './Asset/img/thumbnail/';
                    $config['allowed_types'] = 'gif|jpg|png|jpeg';
                    $config['max_height'] = '720';
                    $config['max_width'] = '1280';
                    $config['max_size'] = '1024';

                    $this->load->library('upload' , $config);
                    if (! $this->upload->do_upload('thumbnail')) {
                        $this->session->set_flashdata('msg', '<div class="alert alert-success">Success to edit video data. But '.$this->upload->display_errors().'</div>');
                    } else {
                        $getvidid = $this->M_Admin->do_get_video_id($id_video);
                        $file = "./Asset/img/thumbnail/$getvidid->thumbnail";
                        if(unlink($file)) {
                            if ($this->M_Admin->do_thumbnail_edit($this->upload->data('file_name'),$id_video)) {
                                $this->session->set_flashdata('msg', '<div class="alert alert-success">Success to edit video data</div>');
                            } else {
                                $this->session->set_flashdata('msg', '<div class="alert alert-danger">Failed to edit video data</div>');
                            }
                        } else {
                            $this->session->set_flashdata('msg', '<div class="alert alert-danger">Theres something wrong when deleting the image</div>');
                        }
                    }
                } else {
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger">Failed to edit video data</div>');
                }
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-warning">'.validation_errors().'</div>');
            }
            redirect('Videos_Data');
        }

//CRUD FILMS
        //Read Films
        public function films_data()
        {
            $data['content'] = 'admin/v_filmsdata';
            $data['active'] = 'Films';
            $data['films'] = $this->M_Admin->get_filmsdata();
            $data['count'] = $this->M_Admin->count_filmsdata();
            $data['artists'] = $this->M_Admin->get_artistsdata();
            $data['PageTitle'] = 'Filmography Data';
            $this->load->view('admin/v_layout', $data);
        }
        //Create Film
        public function film_add()
        {
            $this->form_validation->set_rules('id_artist', 'Artist Name', 'trim|required|numeric', array('required' => 'Artist Name must be fill in.'));
            $this->form_validation->set_rules('film_title', 'Film Title', 'trim|required', array('required' => 'Film must be fill in.'));
            $this->form_validation->set_rules('year', 'Year', 'trim|required|numeric', array('required' => 'Year must be fill in.'));
            if ($this->form_validation->run() == TRUE) {
                $id_artist      = $this->input->post('id_artist');
                $film_title     = $this->input->post('film_title');
                $year           = $this->input->post('year');
                if ($this->input->post('add')) {
                    if ($this->M_Admin->do_film_add($id_artist,$film_title,$year) == TRUE) {
                        $this->session->set_flashdata('msg', '<div class="alert alert-success">Success to add film data</div>');
                    } else {
                        $this->session->set_flashdata('msg', '<div class="alert alert-danger">Failed to add film data</div>');
                    }
                } else {
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger">Theres something wrong with the connection</div>');
                }
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-warning">'.validation_errors().'</div>');
            }
            redirect('Films_Data');
        }
        //Delete Film
        public function film_delete($id='')
        {
            $delete = $this->M_Admin->do_film_delete($id);
            if ($delete == TRUE) {
                $this->session->set_flashdata('msg', '<div class="alert alert-success">Success to delete film data</div>');
            }
            else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger">Failed to delete film data</div>');
            }
            redirect('Films_Data');
        }
        //Edit Film
        public function get_film_id($id)
        {
            $data = $this->M_Admin->do_get_film_id($id);
            echo (json_encode($data));
        }
        public function film_edit()
        {
            $this->form_validation->set_rules('id_artist', 'Artist Name', 'trim|required|numeric', array('required' => 'Artist Name must be fill in.'));
            $this->form_validation->set_rules('film_title', 'Film Title', 'trim|required', array('required' => 'Film must be fill in.'));
            $this->form_validation->set_rules('year', 'Year', 'trim|required|numeric', array('required' => 'Year must be fill in.'));
            if ($this->form_validation->run() == TRUE) {
                $id_artist      = $this->input->post('id_artist');
                $film_title     = $this->input->post('film_title');
                $year           = $this->input->post('year');
                $id_film        = $this->input->post('id_filmography');
                if ($this->input->post('edit')) {
                    if ($this->M_Admin->do_film_edit($id_artist,$film_title,$year,$id_film) == TRUE) {
                        $this->session->set_flashdata('msg', '<div class="alert alert-success">Success to edit film data</div>');
                    } else {
                        $this->session->set_flashdata('msg', '<div class="alert alert-danger">Failed to edit film data</div>');
                    }
                } else {
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger">Theres something wrong with the connection</div>');
                }
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-warning">'.validation_errors().'</div>');
            }
            redirect('Films_Data');
        }

//CRUD AWARDS
        //Read Awards
        public function awards_data()
        {
            $data['content'] = 'admin/v_awardsdata';
            $data['active'] = 'Awards';
            $data['awards'] = $this->M_Admin->get_awardsdata();
            $data['count'] = $this->M_Admin->count_awardsdata();
            $data['artists'] = $this->M_Admin->get_artistsdata();
            $data['PageTitle'] = 'Awards Data';
            $this->load->view('admin/v_layout', $data);
        }
        //Create Award
        public function award_add()
        {
            $this->form_validation->set_rules('id_artist', 'Artist Name', 'trim|required|numeric', array('required' => 'Artist Name must be fill in.'));
            $this->form_validation->set_rules('nomination', 'Nomination', 'trim|required', array('required' => 'Nomination must be fill in.'));
            $this->form_validation->set_rules('year', 'Year', 'trim|required|numeric', array('required' => 'Year must be fill in.'));
            if ($this->form_validation->run() == TRUE) {
                $id_artist      = $this->input->post('id_artist');
                $nomination     = $this->input->post('nomination');
                $year           = $this->input->post('year');
                if ($this->input->post('add')) {
                    if ($this->M_Admin->do_award_add($id_artist,$nomination,$year) == TRUE) {
                        $this->session->set_flashdata('msg', '<div class="alert alert-success">Success to add award data</div>');
                    } else {
                        $this->session->set_flashdata('msg', '<div class="alert alert-danger">Failed to add award data</div>');
                    }
                } else {
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger">Theres something wrong with the connection</div>');
                }
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-warning">'.validation_errors().'</div>');
            }
            redirect('Awards_Data');
        }
        //Delete Award
        public function award_delete($id='')
        {
            $delete = $this->M_Admin->do_award_delete($id);
            if ($delete == TRUE) {
                $this->session->set_flashdata('msg', '<div class="alert alert-success">Success to delete award data</div>');
            }
            else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger">Failed to delete award data</div>');
            }
            redirect('Awards_Data');
        }
        //Edit Award
        public function get_award_id($id)
        {
            $data = $this->M_Admin->do_get_award_id($id);
            echo (json_encode($data));
        }
        public function award_edit()
        {
            $this->form_validation->set_rules('id_artist', 'Artist Name', 'trim|required|numeric', array('required' => 'Artist Name must be fill in.'));
            $this->form_validation->set_rules('nomination', 'Nomination', 'trim|required', array('required' => 'Nomination must be fill in.'));
            $this->form_validation->set_rules('year', 'Year', 'trim|required|numeric', array('required' => 'Year must be fill in.'));
            if ($this->form_validation->run() == TRUE) {
                $id_artist      = $this->input->post('id_artist');
                $nomination     = $this->input->post('nomination');
                $year           = $this->input->post('year');
                $id_award       = $this->input->post('id_award');
                if ($this->input->post('edit')) {
                    if ($this->M_Admin->do_award_edit($id_artist,$nomination,$year,$id_award) == TRUE) {
                        $this->session->set_flashdata('msg', '<div class="alert alert-success">Success to edit award data</div>');
                    } else {
                        $this->session->set_flashdata('msg', '<div class="alert alert-danger">Failed to edit award data</div>');
                    }
                } else {
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger">Theres something wrong with the connection</div>');
                }
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-warning">'.validation_errors().'</div>');
            }
            redirect('Awards_Data');
        }
    }
?>